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
import { fetchProducts, productState, removeProduct } from "@/Redux/slices/productSlice/productSlice";
import { deleteData } from "@/services/httpService";
import { toast as reToast } from "react-hot-toast";
import { useTranslations } from "@/hooks/useTranslations";


export interface ProductData {
  ID: string;
  Code: string;
  BUnit: string | null;
  OldCode: string;
  BarCode: string;
  ProductGroupCode: string;
  UnitCode: string;
  Name: string;
  rate: string;
  product_image: string | null;
  Packing: string;
  PackingQty: string | null;
  Remarks: string;
  Block: string;
  [key: string]: string | number | boolean | null | undefined;
}

// Columns will be initialized with t() inside the component

export default function ProductListPage() {
  const { t, isRTL } = useTranslations();
  const { user } = useAuth();

  const columns: TableColumn[] = [
    { key: "Code", label: t("table_col_code_prod"), sortable: true },
    { key: "OldCode", label: t("label_old_code"), sortable: true },
    { key: "Name", label: t("table_col_name_prod"), sortable: true },
    { key: "ProductGroupCode", label: t("table_col_group_prod"), sortable: true },
    { key: "UnitCode", label: t("table_col_unit"), sortable: true },
    { key: "PackingQty", label: t("table_col_packing_qty"), sortable: true },
    { key: "Block", label: t("table_col_block_prod"), sortable: true },
  ];
  const router = useRouter();
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>("asc");
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<ProductData | null>(null);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<ProductData | null>(null);
  // const [isLoading, setIsLoading] = useState(true);
  const [totalRecords, setTotalRecords] = useState(0);
  const dispatch = useDispatch();
const { productlist, isLoading, error, total } = useSelector(productState);
  const [isDeleting, setIsDeleting] = useState(false);
  const [deleteProductId, setDeleteProductId] = useState<string | null>(null);  




  const deleteProduct = async (id) => {
    debugger
    try {
      setIsDeleting(true);
      await deleteData('pProductItems', id);
      dispatch(removeProduct(id));
      setDeleteModalOpen(false);
      setIsDeleting(false);
           reToast.success("Successfully deleted the customer!");
           reToast.success("Successfully deleted the product!");
      console.log("Product deleted successfully");
    } catch (error) {
      console.error("Error deleting Product:", error);
      reToast.success("Successfully deleted the customer!");
      setDeleteModalOpen(false);
      setIsDeleting(false);
    }
};
  // Fetch products from API
  useEffect(() => {
    // const fetchProducts = async () => {
    //   try {
    //     // setIsLoading(true);
    //     const response = await fetch(
    //       `/api/v1.php?table=pProductItems&action=list`,
    //       {
    //         method: "GET",
    //         headers: {
    //           "X-Auth-Token": user?.apiKey || "123",
    //           "Content-Type": "application/json",
    //         },
    //       }
    //     );

    //     const result = await response.json();
    //     if (result.success && result.data) {
    //       const formattedData: ProductData[] = result.data.map(
    //         (product: ProductData) => ({
    //           ...product,
    //           Block: product.Block === "0" ? "No" : "Yes",
    //         })
    //       );
    //       setTableData(formattedData);
    //       // Assuming total records can be set from API response or pagination info
    //       setTotalRecords(formattedData.length);
    //     } else {
    //       console.error("Failed to fetch products");
    //       setTableData([]);
    //     }
    //   } catch (error) {
    //     console.error("Error fetching products:", error);
    //     setTableData([]);
    //   } finally {
    //     setIsLoading(false);
    //   }
    // };

    if (user) {
    dispatch(fetchProducts(user?.apiKey));
    }
  }, [page, pageSize, user]);

  // Filtering
  const filteredData = useMemo(() => {
    if (!search) return productlist;
    return productlist.filter((row) => {
      return (
        String(row.Code ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.OldCode ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.BarCode ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.ProductGroupCode ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.UnitCode ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.Name ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.PackingQty ?? "")
          .toLowerCase()
          .includes(search.toLowerCase()) ||
        String(row.Block ?? "")
          .toLowerCase()
          .includes(search.toLowerCase())
      );
    });
  }, [search, productlist]);

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
  const handleView = (row: ProductData) => {
    setSelectedRow(row);
    setViewModalOpen(true);
  };
  const handleEdit = (row: ProductData) => {
    router.push(`/products/edit/${row.ID}`);
  };
  const handleDelete = (row: ProductData) => {
    setRowToDelete(row);
    setDeleteModalOpen(true);
  };
  const confirmDelete = () => {
    deleteProduct(deleteProductId)
  };
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
              <h1 className="text-2xl font-bold text-gray-900">{t("page_title_product_list")}</h1>
              <button
                className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800 font-medium shadow"
                onClick={() => router.push("/products/add")}
              >
                <PlusIcon className="w-5 h-5" /> {t("btn_add_new_product")}
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
                  const productRow = row as ProductData;
                  return (
                    <div className="flex gap-2">
                      <button
                        className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
                        onClick={() =>
                          router.push(`/products/edit/${productRow.ID}`)
                        }
                        title="Edit"
                      >
                        <PencilSquareIcon className="w-6 h-6" />
                      </button>
                      <button
                        className="cursor-pointer text-green-600 px-3 py-1 rounded hover:text-green-800 transition flex items-center justify-center"
                        onClick={() => {
                          setSelectedRow(productRow);
                          setViewModalOpen(true);
                        }}
                        title="View"
                      >
                        <EyeIcon className="w-6 h-6" />
                      </button>
                      <button
                        className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
                        onClick={() => {
                          setRowToDelete(productRow);
                          setDeleteModalOpen(true);
                          setDeleteProductId(productRow?.ID)
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
                    <h2 className="text-xl font-bold mb-4">{t("page_title_product_list")}</h2>
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
