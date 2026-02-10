"use client";

import React, { useState, useEffect, use } from "react";
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
import { fetchUserInfoList, removeUserInfo, userInfoState } from "@/Redux/slices/userInfoSlice/userInfoSlice";
import { useDispatch, useSelector } from "react-redux";
import { deleteData } from "@/services/httpService";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type
interface UserInfoApiResponse {
  Code: string;
  UserName: string | null;
  CellNo: string;
  Email: string | null;
  LoginUserName: string;
  Password: string;
  PasswordHint: string | null;
  GroupCode: string | null;
  Remarks: string | null;
  UserType: string | null;
  isAccountActive: string;
  NoOfAttempt: string;
  NoOfWorngAttempt: string;
  api_key: string;
}

export default function UserInfoPage() {
  const { t, isRTL } = useTranslations();
  const router = useRouter();
  const { user } = useAuth();
  // const [userInfoList, setuserInfoList] = useState<Record<string, unknown>[]>([]);
  // const [loading, setLoading] = useState(true);
  // const [error, setError] = useState<string | null>(null);
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
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
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>(null);
    const dispatch = useDispatch();
  const { userInfoList, loading, error } = useSelector(userInfoState);
  const [deleteUserInfoId, setDeleteUserInfoId] = useState<string | null>(null);  
  const [isDeleting, setIsDeleting] = useState(false);



    const deleteUserInfo = async (id) => {
    debugger
    try {
      setIsDeleting(true);
      await deleteData('umUserInfo', id);
      dispatch(removeUserInfo(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
      // toast.success("UserInfo deleted successfully!");
      console.log("UserInfo deleted successfully");
    } catch (error) {
      console.error("Error deleting UserInfo:", error);
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};

  // Fetch user info from API
  useEffect(() => {
    // const fetchUserInfo = async () => {
    //   try {
    //     setLoading(true);
    //     setError(null);

    //     const response = await fetch(
    //       `/api/v1.php?table=umUserInfo&action=list`,
    //       {
    //         method: "GET",
    //         headers: {
    //           "X-Auth-Token": user?.apiKey || "123",
    //           "Content-Type": "application/json",
    //         },
    //       }
    //     );

    //     if (!response.ok) {
    //       throw new Error("Failed to fetch user info");
    //     }

    //     const result = await response.json();

    //     if (result.success && result.data) {
    //       const formattedData: Record<string, unknown>[] = result.data.map(
    //         (item: UserInfoApiResponse) => ({
    //           id: item.Code,
    //           userName: item.UserName || "N/A",
    //           cellNo: item.CellNo || "N/A",
    //           email: item.Email || "N/A",
    //           loginUserName: item.LoginUserName,
    //           password: "********",
    //           passwordHint: item.PasswordHint || "N/A",
    //           groupCode: item.GroupCode || "N/A",
    //           remarks: item.Remarks || "N/A",
    //           userType: item.UserType || "N/A",
    //           isAccountActive: item.isAccountActive === "1" ? "yes" : "no",
    //           noOfAttempt: item.NoOfAttempt,
    //           noOfWrongAttempt: item.NoOfWorngAttempt,
    //         })
    //       );
    //       setuserInfoList(formattedData);
    //     } else {
    //       throw new Error("No user info data found");
    //     }
    //   } catch (error) {
    //     console.error("Error fetching user info:", error);
    //     setError(
    //       error instanceof Error ? error.message : "Unknown error occurred"
    //     );
    //     // Set empty array when API fails
    //     setuserInfoList([]);
    //   } finally {
    //     setLoading(false);
    //   }
    // };

    if (user) {
      dispatch(fetchUserInfoList(user?.apiKey))
    }
  }, [user, page, pageSize]);

  const columns: TableColumn[] = [
    { key: "id", label: "ID", sortable: true },
    { key: "userName", label: t("table_col_user_name"), sortable: true },
    { key: "email", label: t("table_col_email"), sortable: true },
    // { key: "groupCode", label: "Group", sortable: true },
    { key: "userType", label: t("table_col_user_type"), sortable: true },
    { key: "isAccountActive", label: "Block", sortable: true },
  ];

  // Filtered and paginated data for table
  const filteredData = userInfoList.filter((row) => {
    const rowObj = row as Record<string, unknown>;
    const searchStr = search.toLowerCase();
    return (
      String(rowObj.userName).toLowerCase().includes(searchStr) ||
      String(rowObj.email).toLowerCase().includes(searchStr) ||
      String(rowObj.groupCode).toLowerCase().includes(searchStr) ||
      String(rowObj.userType).toLowerCase().includes(searchStr) ||
      String(rowObj.isAccountActive).toLowerCase().includes(searchStr)
    );
  });
  // Sort filtered data
  const sortedData = [...filteredData];
  if (sortBy && sortDirection) {
    sortedData.sort((a, b) => {
      const aVal = (a as Record<string, unknown>)[sortBy];
      const bVal = (b as Record<string, unknown>)[sortBy];
      if (aVal === undefined || bVal === undefined) return 0;
      if (typeof aVal === "number" && typeof bVal === "number") {
        return sortDirection === "asc" ? aVal - bVal : bVal - aVal;
      }
      return sortDirection === "asc"
        ? String(aVal).localeCompare(String(bVal))
        : String(bVal).localeCompare(String(aVal));
    });
  }
  const paginatedData = sortedData.slice(
    (page - 1) * pageSize,
    page * pageSize
  );

    const lookupOptions ={
                  ProductGroupCode: [
                   { value: "0", label: "Water" },
    { value: "1", label: "Electronics" },
    { value: "2", label: "Clothing" },
    { value: "3", label: "Food & Beverages" },
    { value: "4", label: "Books" },
    { value: "5", label: "Sports" },
    { value: "6", label: "Home & Garden" },
    { value: "7", label: "Automotive" },
    { value: "8", label: "Health & Beauty" },
    { value: "9", label: "Toys & Games" },
    { value: "10", label: "Jewelry & Watches" },
    { value: "11", label: "Office Supplies" },
    { value: "12", label: "Pet Supplies" },
                  ],
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
                {t("page_title_user_info_list")}
              </h1>
              <button
                className="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium flex items-center gap-2"
                onClick={() => router.push("/user-info/add")}
              >
                {t("btn_add_plus")} <PlusIcon className="w-4 h-4" />
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>Error loading user info:</strong> {error}. Please try
                  refreshing the page or contact support.
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <PaginatedTable
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
                  renderActions={(row) => {
                    const rowObj = row as Record<string, unknown>;
                    console.log("🚀 ~ rowObj:", rowObj)
                    return (
                      <div className="flex gap-2">
                        <button
                          className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
                          onClick={() =>
                            router.push(`/user-info/edit/${rowObj.id}`)
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
                        {/* <button
                          className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
                          onClick={() => {
                            setRowToDelete(rowObj);
                            setDeleteModalOpen(true);
                            setDeleteUserInfoId(rowObj.id as string);
                          }}
                          title="Delete"
                        >
                          <TrashIcon className="w-6 h-6" />
                        </button> */}


        <button
          className={`cursor-pointer text-red-600 px-3 py-1 ${ rowObj.groupCode === "1" ? "hidden" : ""}  rounded hover:text-red-800 transition flex items-center justify-center`}
          onClick={() => {
            setRowToDelete(rowObj);
            setDeleteModalOpen(true);
            setDeleteUserInfoId(rowObj.id as string);
          }}
          title="Delete"
        >
          <TrashIcon className="w-6 h-6" />
        </button>
                      </div>
                    );
                  }}
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
                      User Info Details
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
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
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
                       deleteUserInfo(deleteUserInfoId);
                          setDeleteModalOpen(false);
                          setRowToDelete(null);
                        }}
                      >
                        Delete
                      </button> */}

                                         <button
  className={`px-4 py-2 rounded text-white ${isDeleting ? 'bg-red-400 cursor-not-allowed' : 'bg-red-700 hover:bg-red-800'}`}
onClick={() => {
                       deleteUserInfo(deleteUserInfoId);
                          setDeleteModalOpen(false);
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
