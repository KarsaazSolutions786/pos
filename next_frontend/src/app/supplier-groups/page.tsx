"use client";

import { useState, useMemo, useEffect } from "react";
import { useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import PaginatedTable, { SortDirection } from "@/components/PaginatedTable";
import {
  PlusIcon,
  PencilSquareIcon,
  EyeIcon,
  TrashIcon,
  XMarkIcon,
} from "@heroicons/react/24/outline";
import { SupplierGroupData } from "@/components/SupplierGroupForm";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
import { supplierState } from "@/Redux/slices/supplierSlice/supplierSlice";
import { fetchSupplierGroups, removeSupplierGroup, supplierGroupState } from "@/Redux/slices/supplierGroupSlice/supplierGroupSlice";
import { deleteData } from "@/services/httpService";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type
interface SupplierGroupApiResponse {
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

export default function SupplierGroupPage() {
  const { t, isRTL } = useTranslations();
  const router = useRouter();
  const { user } = useAuth();
  // const [supplierGroupList, setsupplierGroupList] = useState<SupplierGroupData[]>([]);
  // const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string>("name");
  const [sortDirection, setSortDirection] = useState<SortDirection>("asc");
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<SupplierGroupData | null>(
    null
  );
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<SupplierGroupData | null>(
    null
  );
  const dispatch = useDispatch();
  const { supplierGroupList, loading, total } = useSelector(supplierGroupState);
  const [deleteSupplierGroupId, setDeleteSupplierGroupId] = useState<string | null>(null);  
  const [isDeleting, setIsDeleting] = useState(false);

    const deleteSupplierGroup = async (id) => {
    debugger
    try {
      setIsDeleting(true);
      await deleteData('psSupplierGroup', id);
      dispatch(removeSupplierGroup(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
      // toast.success("SupplierGroup deleted successfully!");
      console.log("SupplierGroup deleted successfully");
    } catch (error) {
      console.error("Error deleting SupplierGroup:", error);
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};

  // Fetch supplier groups from API
  useEffect(() => {
    // const fetchSupplierGroups = async () => {
    //   try {
    //     setLoading(true);
    //     setError(null);

    //     const response = await fetch(
    //       `/api/v1.php?table=psSupplierGroup&action=list`,
    //       {
    //         method: "GET",
    //         headers: {
    //           "X-Auth-Token": user?.apiKey || "123",
    //           "Content-Type": "application/json",
    //         },
    //       }
    //     );

    //     if (!response.ok) {
    //       throw new Error("Failed to fetch supplier groups");
    //     }

    //     const result = await response.json();

    //     if (result.success && result.data) {
    //       const formattedData: SupplierGroupData[] = result.data.map(
    //         (item: SupplierGroupApiResponse) => ({
    //           ID: item.ID, // Explicitly include ID
    //           name: item.Name,
    //           remarks: item.Remarks || "",
    //           block: item.Block === "1" ? "yes" : "no",
    //           BUnit: item.BUnit,
    //           UserName: item.UserName,
    //         })
    //       );
    //       setsupplierGroupList(formattedData);
    //     } else {
    //       throw new Error("No supplier group data found");
    //     }
    //   } catch (error) {
    //     console.error("Error fetching supplier groups:", error);
    //     setError(
    //       error instanceof Error ? error.message : "Unknown error occurred"
    //     );
    //     // Fallback to empty array if API fails
    //     setsupplierGroupList([]);
    //   } finally {
    //     setLoading(false);
    //   }
    // };

    if (user) {
     dispatch(fetchSupplierGroups(user.apiKey))
    }
  }, [user, page, pageSize]);

  const columns = [
    { key: "ID", label: t("table_col_code"), sortable: true },
    { key: "name", label: t("table_col_name"), sortable: true },
    { key: "remarks", label: t("table_col_remarks_header"), sortable: true },
    { key: "block", label: t("table_col_block"), sortable: true },
  ];

  // Filter data based on search
  const filteredData = useMemo(() => {
    if (!search) return supplierGroupList;
    return supplierGroupList.filter((row) =>
      Object.values(row).some((value) =>
        String(value).toLowerCase().includes(search.toLowerCase())
      )
    );
  }, [supplierGroupList, search]);

  // Sorting
  const sortedData = useMemo(() => {
    if (!sortBy) return filteredData;
    return [...filteredData].sort((a, b) => {
      const aValue = (a as unknown as Record<string, unknown>)[sortBy] ?? "";
      const bValue = (b as unknown as Record<string, unknown>)[sortBy] ?? "";

      // Convert to string for consistent comparison
      const aString = String(aValue || "");
      const bString = String(bValue || "");

      // Numeric comparison if both are numeric
      if (!isNaN(Number(aString)) && !isNaN(Number(bString))) {
        return sortDirection === "asc"
          ? Number(aString) - Number(bString)
          : Number(bString) - Number(aString);
      }

      // String comparison
      return sortDirection === "asc"
        ? aString.localeCompare(bString)
        : bString.localeCompare(aString);
    });
  }, [filteredData, sortBy, sortDirection]);

  // Paginate data
  const supplierGroupListForPagination = useMemo(() => {
    const start = (page - 1) * pageSize;
    const end = start + pageSize;
    return sortedData.slice(start, end);
  }, [sortedData, page, pageSize]);

  const handleSortChange = (key: string, direction: SortDirection) => {
    setSortBy(key);
    setSortDirection(direction);
  };

  const handleView = (row: SupplierGroupData) => {
    setSelectedRow(row);
    setViewModalOpen(true);
  };

  const handleEdit = (row: SupplierGroupData) => {
    router.push(`/supplier-groups/edit/${row.ID}`);
  };

  const handleDelete = (row: SupplierGroupData) => {
    setRowToDelete(row);
    setDeleteModalOpen(true);
    setDeleteSupplierGroupId(row?.ID);
  };

  const confirmDelete = () => {
  deleteSupplierGroup(deleteSupplierGroupId)
  };

  const renderActions = (row: unknown) => {
    const supplierGroup = row as SupplierGroupData;
    return (
      <div className="flex space-x-2">
        <button
          onClick={() => handleEdit(supplierGroup)}
          className="text-blue-600 hover:text-blue-800 px-3 py-1 rounded transition flex items-center justify-center"
          title="Edit"
        >
          <PencilSquareIcon className="w-6 h-6" />
        </button>
        <button
          onClick={() => handleView(supplierGroup)}
          className="text-green-600 hover:text-green-800 px-3 py-1 rounded transition flex items-center justify-center"
          title="View"
        >
          <EyeIcon className="w-6 h-6" />
        </button>
        <button
          onClick={() => handleDelete(supplierGroup)}
          className="text-red-600 hover:text-red-800 px-3 py-1 rounded transition flex items-center justify-center"
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
              <div className="flex items-center">
                <h1 className="text-2xl font-bold text-gray-900">
                  {t("page_title_supplier_group_list")}
                </h1>
              </div>
              <button
                onClick={() => router.push("/supplier-groups/add")}
                className="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition"
              >
                <PlusIcon className="w-5 h-5 mr-2" />
                {t("page_title_add_supplier_group")}
              </button>
            </div>
          </header>

          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>Error loading supplier groups:</strong> {error}.
                  Please try refreshing the page or contact support.
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <PaginatedTable
                  columns={columns}
                  data={supplierGroupListForPagination}
                  page={page}
                  pageSize={pageSize}
                  total={filteredData.length}
                  onPageChange={setPage}
                  renderActions={renderActions}
                  onSearchChange={setSearch}
                  searchValue={search}
                  onPageSizeChange={(size) => {
                    setPageSize(size);
                    setPage(1);
                  }}
                  pageSizeOptions={[5, 10, 25, 50]}
                  sortBy={sortBy}
                  sortDirection={sortDirection}
                  onSortChange={handleSortChange}
                />
              )}
            </div>
          </main>
        </div>
      </div>

      {/* View Modal */}
      {viewModalOpen && selectedRow && (
        <div className="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center z-50">
          <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-[80vh] overflow-y-auto">
            <div className="flex justify-between items-center p-6 border-b border-gray-200">
              <h2 className="text-xl font-semibold text-gray-900">
                {t("page_title_supplier_group_list")}
              </h2>
              <button
                onClick={() => setViewModalOpen(false)}
                className="text-gray-400 hover:text-gray-600"
              >
                <XMarkIcon className="w-6 h-6" />
              </button>
            </div>
            <div className="p-6 space-y-4">
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-1">
                  {t("table_col_name")}
                </label>
                <p className="text-gray-900">{selectedRow.name}</p>
              </div>
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-1">
                  {t("table_col_block")}
                </label>
                <p className="text-gray-900">{selectedRow.block}</p>
              </div>
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-1">
                  {t("table_col_remarks_header")}
                </label>
                <p className="text-gray-900">{selectedRow.remarks}</p>
              </div>
            </div>
          </div>
        </div>
      )}

      {/* Delete Confirmation Modal */}
      {deleteModalOpen && rowToDelete && (
        <div className="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center z-50">
          <div className="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
            <div className="flex justify-between items-center p-6 border-b border-gray-200">
              <h2 className="text-xl font-semibold text-gray-900">
                Confirm Delete
              </h2>
              <button
                onClick={() => setDeleteModalOpen(false)}
                className="text-gray-400 hover:text-gray-600"
              >
                <XMarkIcon className="w-6 h-6" />
              </button>
            </div>
            <div className="p-6">
              <p className="mb-6">
                Are you sure you want to delete{" "}
                <span className="font-semibold">{rowToDelete.name}</span>?
              </p>
              <div className="flex justify-end space-x-3">
                <button
                  onClick={() => setDeleteModalOpen(false)}
                  className="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 transition"
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
        </div>
      )}
    </ProtectedRoute>
  );
}
