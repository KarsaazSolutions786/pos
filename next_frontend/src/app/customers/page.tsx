"use client";

import { useState, useEffect, useMemo, use } from "react";
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
import CustomerForm from "@/components/CustomerForm";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useAuth } from "@/contexts/AuthContext";
import { deleteData } from "@/services/httpService";
import { useDispatch, useSelector } from "react-redux";
import { customerState, fetchCustomerList, removeCustomer } from "@/Redux/slices/customerSlice/customerSlice";
import { toast } from 'react-hot-toast';
import { selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import { fetchCustomerGroups, selectCustomerGroupsState } from "@/Redux/slices/customerGroupSlice/customerGroupSlice";
import { useTranslations } from "@/hooks/useTranslations";

// Define CustomerData interface based on API response
export interface CustomerData {
  ID: string;
  Code: string;
  BUnit: string;
  OldCode: string;
  Name: string;
  ContactName: string;
  GroupCode: string;
  Address: string;
  SaleTaxRegNo: string;
  NTNNo: string;
  CNIC: string;
  Phone: string;
  Fax: string;
  Cell: string;
  WebAddress: string;
  EMail: string;
  Remarks: string;
  SecurtyDeposit: string | null;
  SaleMenCode: string | null;
  Commission: string | null;
  UserName: string | null;
  CreateDate: string;
  CreateTime: string;
  UpdateUser: string | null;
  UpdateDate: string;
  UpdateTime: string;
  Block: string;
}

// Columns will be initialized with t() inside the component

export default function CustomerListPage() {
  const { t, isRTL } = useTranslations();
  const { user } = useAuth();

  const columns: TableColumn[] = [
    { key: "Code", label: t("table_col_code_cust"), sortable: true },
    { key: "BUnit", label: t("table_col_business_unit_cust"), sortable: true },
    { key: "OldCode", label: t("label_old_code"), sortable: true },
    { key: "Name", label: t("table_col_name_cust"), sortable: true },
    { key: "ContactName", label: t("table_col_contact_name_cust"), sortable: true },
    { key: "GroupCode", label: t("table_col_group_code_cust"), sortable: true },
    { key: "Phone", label: t("table_col_phone_cust"), sortable: true },
    { key: "Block", label: t("table_col_block_cust"), sortable: true },
  ];
  const router = useRouter();
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>("asc");
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<CustomerData | null>(null);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<CustomerData | null>(null);
  // const [isLoading, setIsLoading] = useState(true);
  const [totalRecords, setTotalRecords] = useState(0);
  const [deleteCustomerId, setDeleteCustomerId] = useState<string | null>(null);  
  const [isDeleting, setIsDeleting] = useState(false);
  const dispatch = useDispatch();
  const { customerslist, isLoading, error, total } = useSelector(customerState);
  const bunitOptions = useSelector(selectBunitID);
      const { customerGroupsList,  } = useSelector(selectCustomerGroupsState);
  

            const customerGroupsOption = useMemo(() => {
              return customerGroupsList.map((item)=>{
                return {
                  label:item.Name,
                  value:item.ID,
                }
              })
            }, [customerGroupsList]);
            console.log("🚀 ~ CustomerListPage ~ customerGroupsOption:", customerGroupsOption)
  
  
  
  const deleteCustomer = async (id) => {
    debugger
    try {
      setIsDeleting(true);
      await deleteData('pCustomer', id);
      dispatch(removeCustomer(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
      toast.success("Customer deleted successfully!");
      console.log("Customer deleted successfully");
    } catch (error) {
      console.error("Error deleting customer:", error);
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};


  useEffect(() => {
    // fetchCustomers();
            dispatch(fetchCustomerGroups(user?.apiKey));

    dispatch(fetchCustomerList(user?.apiKey))
  }, [page, pageSize]);

  // Filtering
  const filteredData = useMemo(() => {
    if (!search) return customerslist;
    return customerslist?.filter((row) => {
      const searchStr = search.toLowerCase();
      return (
        String(row.Code).toLowerCase().includes(searchStr) ||
        String(row.BUnit).toLowerCase().includes(searchStr) ||
        String(row.OldCode).toLowerCase().includes(searchStr) ||
        String(row.Name).toLowerCase().includes(searchStr) ||
        String(row.ContactName).toLowerCase().includes(searchStr) ||
        String(row.GroupCode).toLowerCase().includes(searchStr) ||
        String(row.Phone).toLowerCase().includes(searchStr) ||
        String(row.Block).toLowerCase().includes(searchStr)
      );
    });
  }, [search, customerslist]);

  // Sorting
  const sortedData = useMemo(() => {
    if (!sortBy) return filteredData;
    return [...filteredData].sort((a, b) => {
      const aValue = a[sortBy as keyof CustomerData] ?? "";
      const bValue = b[sortBy as keyof CustomerData] ?? "";

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

  // Render loading state
  // if (isLoading) {
  //   return (
  //     <ProtectedRoute>
  //       <div className="flex h-screen items-center justify-center">
  //         <div className="flex flex-col items-center">
  //           <div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500 mb-4"></div>
  //           <p className="text-gray-600">Loading customers...</p>
  //         </div>
  //       </div>
  //     </ProtectedRoute>
  //   );
  // }

  // Actions
  const handleView = (row: CustomerData) => {
    setSelectedRow(row);
    setViewModalOpen(true);
  };

  const handleEdit = (row: CustomerData) => {
    router.push(`/customers/edit/${row.ID}`);
  };

  const handleDelete = (row: CustomerData) => {
    setDeleteCustomerId(row.ID);
    setRowToDelete(row);
    setDeleteModalOpen(true);
  };

  const confirmDelete = () => {
      deleteCustomer(deleteCustomerId)
  };
  
  const lookupOptions ={
                  GroupCode: customerGroupsOption,
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
                {t("page_title_customer_list")}
              </h1>
              <button
                className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800 font-medium shadow"
                onClick={() => router.push("/customers/add")}
              >
                <PlusIcon className="w-5 h-5" /> {t("btn_add_new_customer_main")}
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
                 {isLoading ? (
                <div className="flex justify-center items-center h-full">
                  <div className="animate-spin rounded-full h-10 w-10 border-t-2 border-blue-500"></div>
                  <span className="ml-2">Loading...</span>
                </div>
              ) : error ? (
                <div
                  className="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                  role="alert"
                >
                  <strong className="font-bold">Error: </strong>
                  <span className="block sm:inline">{error}</span>
                </div>
              ) : (
<PaginatedTable
                  lookupOptions={lookupOptions}
                  columns={columns}
                  data={paginatedData}
                  page={page}
                  pageSize={pageSize}
                  total={filteredData.length}
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
                    const rowObj = row as CustomerData;
                    return (
                      <div className="flex gap-2">
                        <button
                          className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
                          onClick={() => handleEdit(rowObj)}
                          title="Edit"
                        >
                          <PencilSquareIcon className="w-6 h-6" />
                        </button>
                        <button
                          className="cursor-pointer text-green-600 px-3 py-1 rounded hover:text-green-800 transition flex items-center justify-center"
                          onClick={() => handleView(rowObj)}
                          title="View"
                        >
                          <EyeIcon className="w-6 h-6" />
                        </button>
                        <button
                          className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
                          onClick={() => handleDelete(rowObj)}
                          title="Delete"
                        >
                          <TrashIcon className="w-6 h-6" />
                        </button>
                      </div>
                    );
                  }}
                />
              )}
              {/* Render no records found state */}
              {/* {customerslist?.length === 0 && (
                <div className="flex justify-center items-center h-64 bg-white rounded-lg shadow-md">
                  <div className="text-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      className="h-16 w-16 text-gray-400 mx-auto mb-4"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                    <h2 className="text-xl font-semibold text-gray-600 mb-2">
                      No Customers Found
                    </h2>
                    <p className="text-gray-500">
                      {search
                        ? "No customers match your search criteria."
                        : "There are no customers to display."}
                    </p>
                    {search && (
                      <button
                        className="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                        onClick={() => setSearch("")}
                      >
                        Clear Search
                      </button>
                    )}
                  </div>
                </div>
              )} */}

              {/* Render PaginatedTable */}
              {/* {customerslist?.length > 0 && (
                
              )} */}

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
                    <h2 className="text-xl font-bold mb-4">{t("page_title_customer_list")}</h2>
                    <div className="border-b border-gray-200 mb-4"></div>
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                      {Object.entries(selectedRow).map(([key, value]) => (
                        <div key={key}>
                          <span className="font-semibold text-gray-700 capitalize">
                            {key.replace(/([A-Z])/g, " $1")}
                          </span>
                          :{" "}
                          <span className="text-gray-900">
                            {value ?? "N/A"}
                          </span>
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
