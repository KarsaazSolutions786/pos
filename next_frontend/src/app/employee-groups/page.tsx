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
import { EmployeeGroupData } from "@/components/EmployeeGroupForm";
import { useAuth } from "@/contexts/AuthContext";
import { useSelector } from "react-redux";
import { fetchEmployeeGroups, removeEmployeeGroup, selectEmployeeGroupsState } from "@/Redux/slices/employeeGroupSlice/employeeGroupSlice";
import { useDispatch } from "react-redux";
import { deleteData } from "@/services/httpService";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type
interface EmployeeGroupApiResponse {
  ID: string;
  BUnit: string | null;
  Name: string;
  Remarks: string;
  UserName: string | null;
  CreateDate: string | null;
  CreateTime: string | null;
  UpdateUser: string | null;
  UpdateDate: string | null;
  UpdateTime: string | null;
  Block: string;
}

// Columns will be initialized with t() inside the component

export default function EmployeeGroupListPage() {
  const { t, isRTL } = useTranslations();
  const router = useRouter();
  const { user } = useAuth();

  const columns: TableColumn[] = [
    { key: "ID", label: t("table_col_code"), sortable: true },
    { key: "name", label: t("table_col_name"), sortable: true },
    { key: "remarks", label: t("table_col_remarks_header"), sortable: true },
    { key: "block", label: t("table_col_block"), sortable: true },
  ];
  // const [employeeGroupsList, setemployeeGroupsList] = useState<EmployeeGroupData[]>([]);
  const [loading, setLoading] = useState(true);
  // const [error, setError] = useState<string | null>(null);
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>("asc");
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<EmployeeGroupData | null>(
    null
  );
   const [deleteEmployeeGroupsId, setDeleteEmployeeGroupsId] = useState<string | null>(null);  
  const [isDeleting, setIsDeleting] = useState(false);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<EmployeeGroupData | null>(
    null
  );
 const dispatch=useDispatch()
  const { employeeGroupsList, isLoading, error } = useSelector(selectEmployeeGroupsState);
  // Fetch employee groups from API

    const deleteEmployeeGroup = async (id) => {
    debugger
    try {
      setIsDeleting(true);
      await deleteData('psEmployeeGroup', id);
      dispatch(removeEmployeeGroup(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
      // toast.success("Customer deleted successfully!");
      console.log("Customer deleted successfully");
    } catch (error) {
      console.error("Error deleting customer:", error);
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};


  useEffect(() => {
    // const fetchEmployeeGroups = async () => {
    //   try {
    //     setLoading(true);
    //     // setError(null);

    //     const response = await fetch(
    //       `/api/v1.php?table=psEmployeeGroup&action=list`,
    //       {
    //         method: "GET",
    //         headers: {
    //           "X-Auth-Token": user?.apiKey || "123",
    //           "Content-Type": "application/json",
    //         },
    //       }
    //     );

    //     if (!response.ok) {
    //       throw new Error("Failed to fetch employee groups");
    //     }

    //     const result = await response.json();

    //     if (result.success && result.data) {
    //       const formattedData: EmployeeGroupData[] = result.data.map(
    //         (item: EmployeeGroupApiResponse) => ({
    //           ID: item.ID, // Explicitly include ID
    //           name: item.Name,
    //           remarks: item.Remarks || "",
    //           block: item.Block === "1" ? "yes" : "no",
    //           BUnit: item.BUnit,
    //           UserName: item.UserName,
    //         })
    //       );
    //       setemployeeGroupsList(formattedData);
    //     } else {
    //       throw new Error("No employee group data found");
    //     }
    //   } catch (error) {
    //     console.error("Error fetching employee groups:", error);
    //     setError(
    //       error instanceof Error ? error.message : "Unknown error occurred"
    //     );
    //     // Fallback to empty array if API fails
    //     setemployeeGroupsList([]);
    //   } finally {
    //     setLoading(false);
    //   }
    // };

    if (user) {
      // fetchEmployeeGroups();
      dispatch(fetchEmployeeGroups(user?.apiKey));
    }
  }, [user, page, pageSize]);

  // Filtering
  const filteredData = useMemo(() => {
    if (!search) return employeeGroupsList;
    return employeeGroupsList.filter((row) => {
      const rowObj = row as unknown as Record<string, unknown>;
      return (
        String(rowObj.name ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.remarks ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.block ?? "")
          .toLowerCase()
          .includes(search.toLowerCase())
      );
    });
  }, [search, employeeGroupsList]);

  // Sorting
  const sortedData = useMemo(() => {
    if (!sortBy) return filteredData;
    return [...filteredData].sort((a, b) => {
      const aValue = (a as unknown as Record<string, unknown>)[sortBy] ?? "";
      const bValue = (b as unknown as Record<string, unknown>)[sortBy] ?? "";
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
  const handleView = (row: EmployeeGroupData) => {
    setSelectedRow(row);
    setViewModalOpen(true);
  };
  const handleEdit = (row: EmployeeGroupData) => {
    router.push(`/employee-groups/edit/${row.ID}`);
  };
  const handleDelete = (row: EmployeeGroupData) => {
    setRowToDelete(row);
    setDeleteModalOpen(true);
  };
  const confirmDelete = () => {
  deleteEmployeeGroup(deleteEmployeeGroupsId)
  };

  const renderActions = (row: unknown) => {
    const rowData = row as EmployeeGroupData;
    return (
      <div className="flex gap-2">
        <button
          className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
          onClick={() => handleEdit(rowData)}
          title="Edit"
        >
          <PencilSquareIcon className="w-6 h-6" />
        </button>
        <button
          className="cursor-pointer text-green-600 px-3 py-1 rounded hover:text-green-800 transition flex items-center justify-center"
          onClick={() => {
            setSelectedRow(rowData);
            setViewModalOpen(true);
          }}
          title="View"
        >
          <EyeIcon className="w-6 h-6" />
        </button>
        <button
          className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
          onClick={() => {
            setRowToDelete(rowData);
            setDeleteModalOpen(true);
            setDeleteEmployeeGroupsId(rowData?.ID)
          }}
          title="Delete"
        >
          <TrashIcon className="w-6 h-6" />
        </button>
      </div>
    );
  };

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_employee_group_list")}
              </h1>
              <button
                className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800 font-medium shadow"
                onClick={() => router.push("/employee-groups/add")}
              >
                <PlusIcon className="w-5 h-5" /> {t("page_title_add_employee_group")}
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  {error}
                </div>
              )}

              {isLoading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <PaginatedTable
                  columns={columns}
                  data={paginatedData}
                  page={page}
                  pageSize={pageSize}
                  total={sortedData.length}
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
                  renderActions={renderActions}
                />
              )}

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
                    <h2 className="text-xl font-bold mb-4">
                      {t("page_title_employee_group_list")}
                    </h2>
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
                      <span className="font-semibold">{rowToDelete.name}</span>?
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
