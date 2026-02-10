"use client";

import React, { useState, useEffect } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import PaginatedTable, {
  TableColumn,
  SortDirection,
} from "@/components/PaginatedTable";
import { useRouter } from "next/navigation";
import {
  PencilSquareIcon,
  EyeIcon,
  TrashIcon,
  XMarkIcon,
  PlusIcon,
} from "@heroicons/react/24/solid";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";
import { useDispatch, useSelector } from "react-redux";
import { fetchAccounts, removeAccount, selectAccountsState } from "@/Redux/slices/accountSlice/accountSlice";
import { deleteData } from "@/services/httpService";
import { fetchPsAccountSubGroup, selectPsAccountSubGroup } from "@/Redux/slices/psAccountSubGroupSlice/psAccountSubGroupSlice";
import axios from "axios";


  // Columns for the accounts table
  // Columns defined inside component to access t()
  const getColumns = (t: (key: string) => string): TableColumn[] => [
    { key: "Code", label: t("table_col_code"), sortable: true },
    { key: "Name", label: t("table_col_name"), sortable: true },
    { key: "GroupCode", label: t("table_col_main_group"), sortable: true },
    { key: "AccSubCode", label: t("table_col_sub_group"), sortable: true },
    { key: "Block", label: t("table_col_block"), sortable: true },
  ];

export default function AccountsPage() {
  const { t, isRTL } = useTranslations();
  const { user } = useAuth();
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const router = useRouter();
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<Record<
    string,
    unknown
  > | null>(null);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<Record<
    string,
    unknown
  > | null>(null);
  // const [accountsList, setaccountsList] = useState<Record<string, unknown>[]>([]);
  const [totalRecords, setTotalRecords] = useState(0);
  // const [isLoading, setIsLoading] = useState(true);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>(null);
  const [isDeleting, setIsDeleting] = useState(false);
  const [deleteAccountId, setDeleteAccountId] = useState<string | null>(null);  
  const { accountSubGroups, loading, error } = useSelector(selectPsAccountSubGroup);
  const [mainGroupOption,setMainGroupOption]=useState([])
  


  const dispatch = useDispatch();
  const { accountsList, isLoading,} = useSelector(selectAccountsState);
 


    const deleteAccount = async (id) => {
   
    try {
      setIsDeleting(true);
      await deleteData('pAccounts', id);
      dispatch(removeAccount(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
      // toast.success("Account deleted successfully!");
      console.log("Account deleted successfully");
    } catch (error) {
      console.error("Error deleting Account:", error);
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};


      const fetchMainGroupeCode_Coa_Code = async () => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "psChartofAccounts",
          action: "list",
        },
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data.data;
       const formattedData= result?.map(
                  (item) => ({
                    label: item.Name,
                  value:item.CoaCode
                  })
                );

      setMainGroupOption(formattedData)
    } catch (error) {
      console.error("Error fetching tSaleD:", error);
    }
  };
  // Fetch accounts from API
  useEffect(() => {
    fetchMainGroupeCode_Coa_Code()
   dispatch(fetchAccounts(user?.apiKey));
  }, [page, pageSize]);

        const lookupOptions ={
                  GroupCode: mainGroupOption,
                  AccSubCode: accountSubGroups
                }

           useEffect(() => {
    dispatch(fetchPsAccountSubGroup(user?.apiKey));
  }, [dispatch, user?.apiKey]);

const excludedTypes = ["Customers", "Employes", "Trading Products",'Bank'];

const filteredData = accountsList.filter((row) => 
  !excludedTypes.includes(row.AccType) &&
  (
    String(row.Code).toLowerCase().includes(search.toLowerCase()) ||
    String(row.Name).toLowerCase().includes(search.toLowerCase()) ||
    String(row.AccType).toLowerCase().includes(search.toLowerCase()) ||
    String(row.GroupCode).toLowerCase().includes(search.toLowerCase()) ||
    String(row.UserName).toLowerCase().includes(search.toLowerCase()) ||
    String(row.Block).toLowerCase().includes(search.toLowerCase())
  )
);


  // Sorting logic
  const sortedData = [...filteredData];
  if (sortBy && sortDirection) {
    sortedData.sort((a, b) => {
      const aVal = a[sortBy];
      const bVal = b[sortBy];
      if (aVal === undefined || bVal === undefined) return 0;

      return sortDirection === "asc"
        ? String(aVal).localeCompare(String(bVal))
        : String(bVal).localeCompare(String(aVal));
    });
  }

  // Pagination
  const paginatedData = sortedData.slice(
    (page - 1) * pageSize,
    page * pageSize
  );

  // Render loading state
  if (isLoading) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen items-center justify-center">
          <div className="flex flex-col items-center">
            <div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500 mb-4"></div>
            <p className="text-gray-600">Loading accounts...</p>
          </div>
        </div>
      </ProtectedRoute>
    );
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
                {t("page_title_accounts_info")}
              </h1>
              <button
                className="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium flex items-center gap-2"
                onClick={() => router.push("/accounts/add")}
              >
                {t("btn_add_account")} <PlusIcon className="w-4 h-4" />
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {/* Render no records found state */}
              {accountsList.length === 0 && (
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
                      {t("table_no_records")}
                    </h2>
                    <p className="text-gray-500">
                      {search
                        ? "No accounts match your search criteria."
                        : "There are no accounts to display."}
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
              )}

              {/* Render PaginatedTable */}
              {accountsList.length > 0 && (
                <PaginatedTable
                  columns={getColumns(t)}
                  data={paginatedData}
                  page={page}
                  pageSize={pageSize}
                  total={filteredData.length}
                  onPageChange={setPage}
                  onPageSizeChange={(size) => {
                    setPageSize(size);
                    setPage(1); // Reset to first page when changing page size
                  }}
                  renderActions={(row) => {
                    const rowObj = row as Record<string, unknown>;
                    return (
                      <div className="flex gap-2">
                        <button
                          className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
                          onClick={() =>
                            router.push(`/accounts/edit/${rowObj.id}`)
                          }
                          title="Edit"
                        >
                          <PencilSquareIcon className="w-6 h-6" />
                        </button>
                        <button
                          className="cursor-pointer text-green-600 px-3 py-1 rounded hover:text-green-800 transition flex items-center justify-center"
                          onClick={() => {
                            setSelectedRow(rowObj);
                            setViewModalOpen(true);
                          }}
                          title="View"
                        >
                          <EyeIcon className="w-6 h-6" />
                        </button>
                        <button
                          className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
                          onClick={() => {
                   
                            setRowToDelete(rowObj);
                            setDeleteModalOpen(true);
                            setDeleteAccountId(rowObj?.id)
                          }}
                          title="Delete"
                        >
                          <TrashIcon className="w-6 h-6" />
                        </button>
                      </div>
                    );
                  }}
                  lookupOptions={lookupOptions}
                  searchValue={search}
                  onSearchChange={setSearch}
                  sortBy={sortBy}
                  sortDirection={sortDirection}
                  onSortChange={(key, direction) => {
                    setSortBy(key);
                    setSortDirection(direction);
                  }}
                />
              )}

              {/* Modal for View */}
              {viewModalOpen && selectedRow && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
                  <div className="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full relative">
                    <button
                      className="cursor-pointer absolute top-3 right-3 text-gray-400 hover:text-gray-700"
                      onClick={() => setViewModalOpen(false)}
                      title="Close"
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-2xl font-bold text-center mb-8 tracking-tight">
                      {t("page_title_accounts_info")}
                    </h2>
                    <div className="grid grid-cols-2 gap-y-0 gap-x-6">
                      {Object.entries(selectedRow).map(
                        ([key, value], idx, arr) => (
                          <React.Fragment key={key}>
                            <div className="text-gray-500 font-medium capitalize flex items-center py-3 border-b border-gray-200">
                              {key}
                            </div>
                            <div className="text-right font-semibold text-gray-900 flex items-center justify-end py-3 border-b border-gray-200">
                              <span>{String(value)}</span>
                            </div>
                          </React.Fragment>
                        )
                      )}
                    </div>
                  </div>
                </div>
              )}
              {/* Modal for Delete Confirmation */}
              {deleteModalOpen && rowToDelete && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/30 bg-opacity-40">
                  <div className="bg-white rounded-lg shadow-lg p-8 max-w-sm w-full relative">
                    <button
                      className="cursor-pointer absolute top-2 right-2 text-gray-500 hover:text-gray-700"
                      onClick={() => setDeleteModalOpen(false)}
                      title="Close"
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-xl font-bold mb-4 text-red-600">
                      Confirm Delete
                    </h2>
                    <p className="mb-6">
                      Are you sure you want to delete this record?
                    </p>
                    <div className="flex justify-end gap-2">
                      <button
                        className="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300"
                        onClick={() => setDeleteModalOpen(false)}
                      >
                        Cancel
                      </button>
                      {/* <button
                        className="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
                        onClick={() => {
                          deleteAccount(deleteAccountId)
                          setDeleteModalOpen(false);
                          setRowToDelete(null);
                        }}
                      >
                        Delete
                      </button> */}


                                            <button
  className={`px-4 py-2 rounded text-white ${isDeleting ? 'bg-red-400 cursor-not-allowed' : 'bg-red-700 hover:bg-red-800'}`}
 onClick={() => {
                          deleteAccount(deleteAccountId)
                          // setDeleteModalOpen(false);
                          setRowToDelete(null);
                        }}
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
