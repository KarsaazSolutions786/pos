"use client";

import { useState, useMemo, useEffect } from "react";
import { useRouter } from "next/navigation";
import PaginatedTable, {
  TableColumn,
  SortDirection,
} from "@/components/PaginatedTable";
import {
  PlusIcon,
  PencilSquareIcon,
  EyeIcon,
  TrashIcon,
  XMarkIcon,
} from "@heroicons/react/24/solid";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
import { employeeState, fetchEmployees, removeEmployee } from "@/Redux/slices/employeeSlice/employeeSlice";
import { deleteData } from "@/services/httpService";
import toast from "react-hot-toast";
import { fetchBunitID, selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import { fetchEmployeeGroups, selectEmployeeGroupsState } from "@/Redux/slices/employeeGroupSlice/employeeGroupSlice";
import { useTranslations } from "@/hooks/useTranslations";

export interface EmployeeData {
  ID: string;
  Code: string;
  BUnit: string;
  OldCode: string;
  Name: string;
  FatherName: string;
  EmployeeGroup: string;
  Gender: string;
  Address: string;
  Phone: string;
  Cell: string;
  CNIC: string;
  NTNNo: string;
  Fax: string;
  EMail: string;
  PerHourRate: string | null;
  TotalSalary: string | null;
  OfficeTimeFrom: string | null;
  OfficeTimeTo: string | null;
  Remarks: string;
  Block: string;
  [key: string]: string | number | boolean | null | undefined;
}

// Columns will be initialized with t() inside the component

export default function EmployeeListPage() {
  const { t, isRTL } = useTranslations();
  const { user } = useAuth();

  const columns: TableColumn[] = [
    { key: "Code", label: t("table_col_code_emp"), sortable: true },
    { key: "BUnit", label: t("label_business_unit"), sortable: true },
    { key: "OldCode", label: t("label_old_code"), sortable: true },
    { key: "Name", label: t("table_col_name_emp"), sortable: true },
    { key: "FatherName", label: t("table_col_father_name_emp"), sortable: true },
    { key: "EmployeeGroup", label: t("table_col_group_emp"), sortable: true },
    { key: "Gender", label: t("table_col_gender_emp"), sortable: true },
    { key: "Phone", label: t("table_col_phone_emp"), sortable: true },
    { key: "Block", label: t("table_col_block_emp"), sortable: true },
  ];
  const router = useRouter();
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>("asc");
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<EmployeeData | null>(null);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<EmployeeData | null>(null);
  // const [isLoading, setIsLoading] = useState(true);
  const [totalRecords, setTotalRecords] = useState(0);
  const [isDeleting, setIsDeleting] = useState(false);
  const [deleteEmployeeId, setDeleteCustomerId] = useState<string | null>(null);  
const bunitOptions = useSelector(selectBunitID);
    const { employeeGroupsList, } = useSelector(selectEmployeeGroupsState);
  
          const employeeGroupsOption = useMemo(() => {
        return employeeGroupsList.map((item)=>{
          console.log("🚀 ~ EmployeeForm ~ item:", item)
          return {
            label:item?.name,
            value:item?.ID,
          }
        })
      }, [employeeGroupsList]);


  const dispatch = useDispatch();
const { employeelist, isLoading, error, total } = useSelector(employeeState);
console.log("🚀 ~ EmployeeListPage ~ employeelist:", employeelist)

  const deleteEmployee = async (id) => {
    debugger
    try {
      setIsDeleting(true);
      await deleteData('pEmployee', id);
      dispatch(removeEmployee(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
      toast.success("Employee deleted successfully!");
      console.log("Employee deleted successfully");
    } catch (error) {
      console.error("Error deleting customer:", error);
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};
  // Fetch employees from API
  useEffect(() => {

    if (user) {
      dispatch(fetchEmployees(user?.apiKey));
    }
  }, [page, pageSize, user]);


  
  // Filtering
  const filteredData = useMemo(() => {
    if (!search) return employeelist;
    return employeelist.filter((row) => {
      return (
        String(row.Code ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.BUnit ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.OldCode ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.Name ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.FatherName ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.EmployeeGroup ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.Gender ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.Phone ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.Block ?? "")
          .toLowerCase()
          .includes(search.toLowerCase())
      );
    });
  }, [search, employeelist]);

  // Sorting
  const sortedData = useMemo(() => {
    if (!sortBy) return filteredData;
    return [...filteredData].sort((a, b) => {
      const aValue = a[sortBy] ?? "";
      const bValue = b[sortBy] ?? "";
      if (typeof aValue === "number" && typeof bValue === "number") {
        return sortDirection === "asc" ? aValue - bValue : bValue - aValue;
      }
      return sortDirection === "asc"
        ? String(aValue).localeCompare(String(bValue))
        : String(bValue).localeCompare(String(aValue));
    });
  }, [filteredData, sortBy, sortDirection]);

  // Pagination
  const paginatedData = useMemo(() => {
    const start = (page - 1) * pageSize;
    return sortedData.slice(start, start + pageSize);
  }, [sortedData, page, pageSize]);

  // Actions
  const handleView = (row: EmployeeData) => {
    setSelectedRow(row);
    setViewModalOpen(true);
  };
  const handleEdit = (row: EmployeeData) => {
    router.push(`/employees/edit/${row.ID}`);
  };
  const handleDelete = (row: EmployeeData) => {
    setRowToDelete(row);
    setDeleteModalOpen(true);
  };
  const confirmDelete = () => {
  deleteEmployee(deleteEmployeeId)
  };
       useEffect(() => {
         if (user?.apiKey) {
           dispatch(fetchBunitID(user.apiKey));
             dispatch(fetchEmployeeGroups(user?.apiKey));
         }
       }, [dispatch, user]);
                

    const lookupOptions ={
                  EmployeeGroup: employeeGroupsOption,
                        BUnit:bunitOptions
                }
  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_employee_list")}
              </h1>
              <button
                className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800 font-medium shadow"
                onClick={() => router.push("/employees/add")}
              >
                <PlusIcon className="w-5 h-5" /> {t("btn_add_new_employee")}
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <PaginatedTable
                columns={columns}
                data={paginatedData}
                 lookupOptions={lookupOptions}
                page={page}
                pageSize={pageSize}
                total={totalRecords}
                onPageChange={setPage}
                onPageSizeChange={(size) => {
                  setPageSize(size);
                  setPage(1);
                }}
                pageSizeOptions={[5, 10, 20, 50]}
                searchValue={search}
                onSearchChange={(val) => {
                  setSearch(val);
                  setPage(1);
                }}
                sortBy={sortBy}
                sortDirection={sortDirection}
                onSortChange={(key, direction) => {
                  setSortBy(key);
                  setSortDirection(direction);
                }}
                renderActions={(row) => {
                  const employeeRow = row as EmployeeData;
                  return (
                    <div className="flex gap-2">
                      <button
                        className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
                        onClick={() =>
                          router.push(`/employees/edit/${employeeRow.ID}`)
                        }
                        title="Edit"
                      >
                        <PencilSquareIcon className="w-6 h-6" />
                      </button>
                      <button
                        className="cursor-pointer text-green-600 px-3 py-1 rounded hover:text-green-800 transition flex items-center justify-center"
                        onClick={() => {
                          setSelectedRow(employeeRow);
                          setViewModalOpen(true);
                        }}
                        title="View"
                      >
                        <EyeIcon className="w-6 h-6" />
                      </button>
                      <button
                        className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
                        onClick={() => {
                          setRowToDelete(employeeRow);
                          setDeleteModalOpen(true);
                          setDeleteCustomerId(employeeRow.ID);
                        }}
                        title="Delete"
                      >
                        <TrashIcon className="w-6 h-6" />
                      </button>
                    </div>
                  );
                }}
              />

              {/* View Modal */}
              {viewModalOpen && selectedRow && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/30 bg-opacity-30">
                  <div className="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative max-h-[80vh] overflow-y-auto">
                    <button
                      className="absolute top-4 right-4 text-gray-400 hover:text-gray-700"
                      onClick={() => setViewModalOpen(false)}
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-xl font-bold mb-4">{t("page_title_employee_list")}</h2>
                    <div className="border-b border-gray-200 mb-4"></div>
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                      {Object.entries(selectedRow).map(([key, value]) => (
                        <div key={key}>
                          <span className="font-semibold text-gray-700 capitalize">
                            {key.replace(/([A-Z])/g, " $1")}
                          </span>
                          : <span className="text-gray-900">{value}</span>
                        </div>
                      ))}
                    </div>
                  </div>
                </div>
              )}

              {/* Delete Confirmation Modal */}
              {deleteModalOpen && rowToDelete && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/30 bg-opacity-30">
                  <div className="bg-white rounded-lg shadow-lg max-w-md w-full p-6 relative">
                    <button
                      className="absolute top-4 right-4 text-gray-400 hover:text-gray-700"
                      onClick={() => setDeleteModalOpen(false)}
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-xl font-bold mb-4">Confirm Delete</h2>
                    <div className="border-b border-gray-200 mb-4"></div>
                    <p className="mb-6">
                      Are you sure you want to delete{" "}
                      <span className="font-semibold">{rowToDelete.Name}</span>?
                    </p>
                    <div className="flex justify-end gap-2">
                      <button
                        className="px-4 py-2 rounded bg-gray-200 text-gray-800 hover:bg-gray-300"
                        onClick={() => setDeleteModalOpen(false)}
                      >
                        Cancel
                      </button>
                      {/* <button
                        className="px-4 py-2 rounded bg-red-700 text-white hover:bg-red-800"
                        onClick={confirmDelete}
                      >
                        Delete
                      </button> */}

                                            <button
  className={`px-4 py-2 rounded text-white ${isDeleting ? 'bg-red-400 cursor-not-allowed' : 'bg-red-700 hover:bg-red-800'}`}
  onClick={confirmDelete}
  disabled={isDeleting}
>
  {isDeleting ? 'Deleting...' : 'Delete'}
</button>
                    </div>
                  </div>
                </div>
              )}
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
