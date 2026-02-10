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
import { SupplierData } from "@/components/SupplierForm";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
// import { fetchSuppliers, selectSupplierState } from "@/Redux/slices/supplierSlice/supplierSlice";
import { deleteData } from "@/services/httpService";
import { fetchSupplierList, removeSupplier, supplierState } from "@/Redux/slices/supplierSlice/supplierSlice";
import { fetchSupplierGroups, supplierGroupState } from "@/Redux/slices/supplierGroupSlice/supplierGroupSlice";
import { useTranslations } from "@/hooks/useTranslations";

// Generate mock data
// const mockSuppliers: SupplierData[] = Array.from({ length: 50 }, (_, i) => ({
//   code: `SUP-${100 + i}`,
//   oldCode: `SUP-${100 + i}`,
//   name: `Supplier ${i + 1}`,
//   contactName: `Contact ${i + 1}`,
//   groupCode: `GRP-0${(i % 3) + 1}`,
//   address: `Address ${i + 1}, City`,
//   saleTaxRegNo: `ST-${1000 + i}`,
//   ntnNo: `NTN-${2000 + i}`,
//   cnic: `12345-123456${i % 10}-1`,
//   phone: `021-12345${100 + i}`,
//   fax: `021-54321${100 + i}`,
//   cell: `0300-12345${100 + i}`,
//   webAddress: `https://supplier${i + 1}.com`,
//   email: `supplier${i + 1}@example.com`,
//   remarks: i % 2 === 0 ? "Preferred supplier" : "Regular supplier",
//   block: i % 3 === 0 ? "yes" : "no",
// }));

// Columns will be initialized with t() inside the component

export default function SupplierListPage() {
  const { t, isRTL } = useTranslations();
  const router = useRouter();

  const columns: TableColumn[] = [
    { key: "Code", label: t("table_col_code_supp"), sortable: true },
    { key: "OldCode", label: t("label_old_code"), sortable: true },
    { key: "Name", label: t("table_col_name_supp"), sortable: true },
    { key: "ContactName", label: t("table_col_contact_name_supp"), sortable: true },
    { key: "GroupCode", label: t("table_col_group_supp"), sortable: true },
    { key: "Phone", label: t("table_col_phone_supp"), sortable: true },
    { key: "Block", label: t("table_col_block_supp"), sortable: true },
  ];
  // const [supplierslist, setsupplierslist] = useState<SupplierData[]>([]);
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>("asc");
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<SupplierData | null>(null);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<SupplierData | null>(null);
  // const [isLoading, setIsLoading] = useState(true);
  // const [error, setError] = useState<string | null>(null);
  const { user } = useAuth();
  const [deleteSupplierId, setDeleteSupplierId] = useState<string | null>(null);  
  const [isDeleting, setIsDeleting] = useState(false);
  const dispatch = useDispatch();
  const { supplierslist, isLoading, error } = useSelector(supplierState); 
    const { supplierGroupList, loading, total } = useSelector(supplierGroupState);
  
            const supplierGroupsOption = useMemo(() => {
          return supplierGroupList.map((item)=>{
            return {
              label:item?.name,
              value:item?.ID,
            }
          })
        }, [supplierGroupList]);


    const deleteSupplier = async (id) => {
    debugger
    try {
      setIsDeleting(true);
      await deleteData('pSupplier', id);
      dispatch(removeSupplier(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
      // toast.success("Supplier deleted successfully!");
      console.log("Supplier deleted successfully");
    } catch (error) {
      console.error("Error deleting Supplier:", error);
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};
  // Fetch suppliers from API
  useEffect(() => {
       dispatch(fetchSupplierGroups(user?.apiKey))

    dispatch(fetchSupplierList(user?.apiKey));
    // fetchSuppliers();
  }, [page, pageSize]);

  // Filtering
  const filteredData = useMemo(() => {
    if (!search) return supplierslist;
    return supplierslist.filter((row) => {
      const rowObj = row as unknown as Record<string, unknown>;
      return (
        String(rowObj.Code ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.OldCode ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.Name ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.ContactName ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.GroupCode ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.Phone ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(rowObj.Block ?? "")
          .toLowerCase()
          .includes(search.toLowerCase())
      );
    });
  }, [search, supplierslist]);

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
  const handleView = (row: SupplierData) => {
    setSelectedRow(row);
    setViewModalOpen(true);
  };
  const handleEdit = (row: SupplierData) => {
    router.push(`/suppliers/edit/${row.ID}`);
  };
  const handleDelete = (row: SupplierData) => {
    setRowToDelete(row);
    setDeleteModalOpen(true);
  };
  const confirmDelete = () => {
    deleteSupplier(deleteSupplierId)
  };
  const lookupOptions ={
                  GroupCode: supplierGroupsOption,
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
                {t("page_title_supplier_list")}
              </h1>
              <button
                className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800 font-medium shadow"
                onClick={() => router.push("/suppliers/add")}
              >
                <PlusIcon className="w-5 h-5" /> {t("btn_add_new_supplier")}
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
                  columns={columns}
                  lookupOptions={lookupOptions}
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
                  renderActions={(row) => {
                    const rowObj = row as unknown as Record<string, unknown>;
                    return (
                      <div className="flex gap-2">
                        <button
                          className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
                          onClick={() =>
                            router.push(`/suppliers/edit/${rowObj.ID}`)
                          }
                          title="Edit"
                        >
                          <PencilSquareIcon className="w-6 h-6" />
                        </button>
                        <button
                          className="cursor-pointer text-green-600 px-3 py-1 rounded hover:text-green-800 transition flex items-center justify-center"
                          onClick={() => {
                            setSelectedRow(row as SupplierData);
                            setViewModalOpen(true);
                          }}
                          title="View"
                        >
                          <EyeIcon className="w-6 h-6" />
                        </button>
                        <button
                          className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
                          onClick={() => {
                            setRowToDelete(row as SupplierData);
                            setDeleteModalOpen(true);
                            setDeleteSupplierId(row?.ID)
                          }}
                          title="Delete"
                        >
                          <TrashIcon className="w-6 h-6" />
                        </button>
                      </div>
                    );
                  }}
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
                    <h2 className="text-xl font-bold mb-4">{t("page_title_supplier_list")}</h2>
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
