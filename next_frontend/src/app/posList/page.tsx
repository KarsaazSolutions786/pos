"use client";

import React, { useState, useEffect, useMemo, use, useCallback, useLayoutEffect } from "react";
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
import { deleteData, formatDate } from "@/services/httpService";
import { useDispatch, useSelector } from "react-redux";
import { customerState, fetchCustomerList, removeCustomer } from "@/Redux/slices/customerSlice/customerSlice";
import { toast } from 'react-hot-toast';
import axios from "axios";
import { fetchAccounts, selectAccountsState } from "@/Redux/slices/accountSlice/accountSlice";
import SearchableDropdown from "@/components/SearchableDropdown";
import { fetchProducts, productState } from "@/Redux/slices/productSlice/productSlice";
import SaleInvoice from "@/components/SaleInvoice";
import ProductGrid from "@/components/ProductGrid";
import { mockProducts } from "@/utils/mockData";
import UpdateSaleInvoice from "@/components/UpdateSaleInvoice";
import Modal from "@/components/Modal";
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

const columnDefs = [
  { key: "Tdatee", labelKey: "", sortable: true },
  { key: "Tdate", labelKey: "table_col_date_pos", sortable: true },
  { key: "VirtualCode", labelKey: "table_col_order_no_pos", sortable: true },
  { key: "PartyCode", labelKey: "table_col_party_name_pos", sortable: true },
  { key: "ProductCode", labelKey: "table_col_product_name_pos", sortable: true },
  { key: "Qty", labelKey: "table_col_quantity_pos", sortable: true },
  { key: "Rate", labelKey: "table_col_rate_pos", sortable: true },
  { key: "Amount", labelKey: "table_col_amount_pos", sortable: true },
];

export default function POSListPage() {
  const { t, isRTL } = useTranslations();
  const columns: TableColumn[] = columnDefs.map((col) => ({ key: col.key, label: col.labelKey ? t(col.labelKey) : "", sortable: col.sortable }));
  const { user } = useAuth();
  const router = useRouter();
  const dispatch = useDispatch();
  const { accountsList } = useSelector(selectAccountsState);
  console.log("🚀 ~ POSListPage ~ accountsList:", accountsList)

  const [posList, setPosList] = useState([]);
  console.log("🚀 ~ POSListPage ~ posList:", posList)
  const [expandedRows, setExpandedRows] = useState<Set<string>>(new Set());
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<"asc" | "desc">("asc");
  const [isLoading, setIsLoading] = useState(true);
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<CustomerData | null>(null);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<CustomerData | null>(null);
  const [deleteVoucherId, setDeleteVoucherId] = useState<any>(null);
  const [isDeleting, setIsDeleting] = useState(false);
  const [editVoucherId, setEditVoucherId] = useState<string | null>(null);
  const { productlist, } = useSelector(productState);
  const [quantityUnit, setQuantityUnit] = useState({})

  const [selectedProducts, setSelectedProducts] = useState([]);
const [saleToEditId, setSaleToEditId] = useState<number | null>(null);
const [showInvoice, setShowInvoice] = useState(false);
 const { customerslist, } = useSelector(customerState);
  



  const fetchQuantityUnit = async () => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: { table: "psunits", action: "list", },
        headers: { "X-Auth-Token": user?.apiKey || "123" },
      });
      const result = response.data.data;
      const formateData = result.reduce((acc, item) => {
        acc[item.ID] = item.Name;
        return acc;
      }, {});
      setQuantityUnit(formateData)
      console.log("🚀 ~ fetchQuantityUnit ~ result:", result)
    } catch (error) {
      console.error("Error fetching quantity unit:", error);
    }
  };

useEffect(() => {
  if (!user?.apiKey) return;

  // Sab kuch ek saath load karo
  const loadAllData = async () => {
    setIsLoading(true);
    try {
      await Promise.all([
        dispatch(fetchAccounts(user?.apiKey)),
        dispatch(fetchProducts(user?.apiKey)),
        dispatch(fetchCustomerList()),
        fetchQuantityUnit(),
      ]);
      
      // Sab load hone ke baad POS list load karo
      await fetchPendingOrderList();
    } catch (err) {
      console.error("Load error:", err);
      toast.error("Failed to load data");
    } finally {
      setIsLoading(false);
    }
  };

  loadAllData();
}, [user?.apiKey, dispatch]); // SIRF user pe depend

  useLayoutEffect(() => {
    const allParentCodes = posList.map(item => item.VirtualCode);
    setExpandedRows(new Set(allParentCodes));
  }, [isLoading]);

  const productName = useMemo(() => {
    return productlist.reduce((acc, item) => {
      acc[item.ID] = item.Name;
      return acc;
    }, {});
  }, [productlist]);



 async function fetchPendingOrderList() {
  setIsLoading(true);
  try {
    const response = await fetch("/custom_apis/sales_list.php", {
      method: "POST",
      headers: {
        "api_key": user?.apiKey || "123",
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ 
        status: 'OPEN', 
        api_key: user?.apiKey || "123" 
      }),
    });

    if (!response.ok) {
      throw new Error(`Server error: ${response.status}`);
    }

    const data = await response.json();
    
    if (data.success && data.data) {
      setPosList(data.data);
    } else {
      console.warn("No data or success false:", data);
      setPosList([]);
    }

  } catch (error) {
    console.error("Fetch error:", error);
    toast.error("Failed to load POS list");
    setPosList([]);
  } finally {
    setIsLoading(false);
  }
}
  const fetchTSaleD = async () => {
    setIsLoading(true);
    try {
      const response = await axios.get("/api/v1.php", {
        params: { table: "tsaled", action: "list" },
        headers: { "X-Auth-Token": user?.apiKey || "123" },
      });
      const result = response.data.data;

      const mergedData = result.map((item: any) => {
        const matchingAccount = accountsList.find((acc) => acc.id == item.AccountCode);

        const voucherRows = result.filter((v: any) => v.Code === item.Code);
        const drRow = voucherRows.find((v: any) => v.TStatus === "Dr");
        const crRow = voucherRows.find((v: any) => v.TStatus === "Cr");

        return {
          ...item,
          AccountName: matchingAccount?.Name || item.AccountName,
          GroupCode: matchingAccount?.GroupCode || item.GroupCode,
          drId: drRow?.CodeD,
          crId: crRow?.CodeD,
        };
      });

      setPosList(mergedData);
    } catch (error) {
      console.error("Error fetching vouchers:", error);
    } finally {
      setIsLoading(false);
    }
  };
    useEffect(() => {
      if (accountsList.length > 0) fetchTSaleD();
    }, [accountsList]);
    
  const groupByVirtualCode = (data) => {
    const groups = {};
    data.forEach((voucher) => {
      const vCode = voucher.VirtualCode;
      if (!groups[vCode]) {
        groups[vCode] = {
          parent: voucher,     
          children: voucher.tSaleD || [],
        };
      }
    });
    return Object.values(groups); // convert object to array
  };

  // Step 2: Usage
  const groupedData = useMemo(() => groupByVirtualCode(posList), [posList,accountsList]);
  console.log("🚀 ~ POSListPage ~ groupedData:", groupedData)


  useEffect(() => {
    if (accountsList.length > 0) fetchPendingOrderList();
  }, [accountsList]);

  const    [saleData, setSaleData] = useState<any>(null); // State to hold data for UpdateSaleInvoice


  // Toggle row expansion
  const toggleRow = (code: string) => {
    setExpandedRows((prev) => {
      const newSet = new Set(prev);
      if (newSet.has(code)) newSet.delete(code);
      else newSet.add(code);
      return newSet;
    });
  };

  const filteredData = useMemo(() => {
    if (!search) return groupedData;
    return groupedData.filter((row) => {
      const searchStr = search.toLowerCase();
      return (
        String(row.Code).toLowerCase().includes(searchStr) ||
        String(row.AccountName).toLowerCase().includes(searchStr) ||
        String(row.BillNo).toLowerCase().includes(searchStr)
      );
    });
  }, [search, groupedData]);

  // Sorting
  const sortedData = useMemo(() => {
    if (!sortBy) return filteredData;
    return [...filteredData].sort((a, b) => {
      const aVal = a[sortBy as keyof CustomerData] ?? "";
      const bVal = b[sortBy as keyof CustomerData] ?? "";
      if (typeof aVal === "number" && typeof bVal === "number") {
        return sortDirection === "asc" ? aVal - bVal : bVal - aVal;
      }
      return sortDirection === "asc"
        ? String(aVal).localeCompare(String(bVal))
        : String(bVal).localeCompare(String(aVal));
    });
  }, [filteredData, sortBy, sortDirection]);

  // Pagination
  const paginatedData = useMemo(() => {
    const start = (page - 1) * pageSize;
    return sortedData.slice(start, start + pageSize);
  }, [sortedData, page, pageSize]);

  // Actions
  const handleView = (row: CustomerData) => {
    setSelectedRow(row);
    setViewModalOpen(true);
  };

async function deleteSale(masterId: number) {
    debugger

  try {
    const res = await fetch('/custom_apis/delete_sales.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        api_key: user?.apiKey || '123',
        id: masterId
      })
    });

    // The PHP returns JSON; parse it
    const data = await res.json();

    if (!res.ok || !data?.success) {
      throw new Error(data?.error || 'Delete failed');
    }
 setDeleteModalOpen(false);
    // success UI
    // toast.success('Record deleted successfully');
    // refresh your list:
    await fetchPendingOrderList();
  } catch (err: any) {
    console.error('Delete error:', err);
 setDeleteModalOpen(false);

    // toast.error(err.message || 'Error deleting record');
  }
}




  const handleDelete = (row) => {
    debugger
    setRowToDelete(row);
    setDeleteModalOpen(true);
    setDeleteVoucherId(row?.parent?.ID);
  };

  const handleDeleteVoucher = async ({ drId, crId, voucherId }: any) => {

  };

  const confirmDelete = () => deleteSale(deleteVoucherId);

    const partyName = [{
      Code: '-1', Name: 'Walking Customer'
    },
  ...customerslist
  ]
    .reduce((acc, item) => {
    if (item.Code && item.Name) {
      acc[item.Code] = item.Name;
    }
    return acc;
  }, {});

  // Render loading state
  // if (isLoading) {
  //   return (
  //     <ProtectedRoute>
  //       <div className="flex h-screen items-center justify-center">
  //         <div className="flex flex-col items-center">
  //           <div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500 mb-4"></div>
  //           <p className="text-gray-600">Loading Post List...</p>
  //         </div>
  //       </div>
  //     </ProtectedRoute>
  //   );
  // }

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_pos_list")}
              </h1>
              <button
                className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800  shadow"
                onClick={() => router.push("/Journalvoucher")}
              >
                <PlusIcon className="w-5 h-5" /> {t("btn_add_new_pos")}
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            {/* {showInvoice && (
  // <SaleInvoice
  //     selectedProducts={[...selectedProducts]} // pass selected products as an array
  //   setSelectedProducts={setSelectedProducts}
  //   onCustomerAdd={() => console.log("Customer added!")}
  //   saleId={saleToEditId} // if null, it's a new sale
  //   onClose={() => setShowInvoice(false)} // close modal
  // />

  <UpdateSaleInvoice
      saleData={[...selectedProducts]}
      selectedProducts={selectedProducts}
      setSelectedProducts={setSelectedProducts}
    />
)} */}

{/* {showInvoice && saleData && (
  
)} */}

{

  <Modal isOpen={showInvoice} onClose={() => setShowInvoice(false)}>

<UpdateSaleInvoice
    saleData={saleData}
    onSaleUpdated={() => {
      setShowInvoice(false);
      fetchPendingOrderList(); // refresh list after update
    }}
  />
  </Modal>
}


            <div className="p-6">
              {/* Render no records found state */}
              {posList?.length === 0 && (
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
              )}

              {/* Render PaginatedTable */}
              <div className="bg-white shadow-md rounded-lg overflow-x-auto">
                <div className="flex justify-between items-center px-4 py-2">
                  <div>
                    {t("label_show_entries")}
                    <select
                      className="mx-2 border border-gray-300 rounded px-2 py-1"
                      value={pageSize}
                      onChange={(e) => {
                        setPageSize(Number(e.target.value));
                        setPage(1);
                      }}
                    >
                      {[5, 10, 20, 50].map((size) => (
                        <option key={size} value={size}>{size}</option>
                      ))}
                    </select>
                  </div>
                  <input
                    type="text"
                    placeholder={t("label_search") + "..."}
                    className="border border-gray-300 rounded px-3 py-1"
                    value={search}
                    onChange={(e) => {
                      setSearch(e.target.value);
                      setPage(1);
                    }}
                  />
                </div>

                <table className="min-w-full divide-y divide-gray-200">
                  <thead className="bg-gray-100">
                    <tr>
                      {columns.map((col) => (
                        <th
                          key={col.key}
                          onClick={() => {
                            const direction = sortBy === col.key && sortDirection === "asc" ? "desc" : "asc";
                            setSortBy(col.key);
                            setSortDirection(direction);
                          }}
                          className="text-left px-4 py-2 cursor-pointer"
                        >
                          {col.label}
                          {sortBy === col.key && <span className="ml-1">{sortDirection === "asc" ? "▲" : "▼"}</span>}
                        </th>
                      ))}
                      <th className="text-left px-4 py-2">{t("table_col_action_pos")}</th>
                    </tr>
                  </thead>
                  <tbody className="divide-y divide-gray-200">
                    {paginatedData.map((parent,index) => {
                      console.log("🚀 ~ parent: customerslist", parent, customerslist,partyName)
                      return (
                        <React.Fragment key={`parent-${parent.parent.Code}`}>
                          <tr
                            className="bg-gray-50 font-semibold cursor-pointer"

                          >
                            <td className="px-4 py-2"   >
                              <span onClick={() => toggleRow(parent.parent.VirtualCode)}>{expandedRows.has(parent.parent.VirtualCode) ? "▼" : "▶"}</span>
                            </td>
                            <td className="px-4 py-2">{formatDate(parent.parent.TDate)}</td>
                            <td className="px-4 py-2">{parent.parent.VirtualCode}</td>
                            <td colSpan={5} className="px-4 py-2">{ partyName[parent.parent.PartyCode] }</td>
                             <td className="px-4 py-2 flex gap-2">
                       <button
  onClick={() => {
    debugger
    setSaleToEditId(parent.parent.ID); // Use parent code
    setShowInvoice(true);

    // Set all child products for editing
    setSelectedProducts(parent.children);

    // Construct full saleData for invoice update
    setSaleData({
      ID: parent.parent.ID,
      customerId: parent.parent.PartyCode,
      paymentType: parent.parent.SaleType,
      invoiceDiscount: +parent.parent.DiscountAmount || 0,
      salesmanCommission: +parent.parent.Commission || 0,
      commissionType: "rate",
      products: parent.children,
      salesmanId: parent.parent.SaleMenCode || undefined,
    });
  }}
  className="text-blue-600"
>
  <PencilSquareIcon className="w-5 h-5" />
</button>
                               
                                  <button onClick={() => handleDelete(parent)} className="text-red-600">
                                    <TrashIcon className="w-5 h-5" />
                                  </button>
                                </td>
                          </tr>

                          {expandedRows.has(parent.parent.VirtualCode) &&
                            parent.children?.map((child,index) => {
                              console.log("🚀 ~ child:", child)
                              return (
                              <tr key={child.CodeD || `${child.ID}-${child.ProductCode}`} className="bg-white">
                                <td colSpan={4}></td>
                                <td className="px-4 py-2">{productName[child.ProductCode] || child.ProductCode}</td>
                                <td className="px-4 py-2">{Math.round(child.Qty) + ' ' + quantityUnit[child.UnitCode]}</td>
                                <td className="px-4 py-2">{Math.round(child.Rate)}</td>
                                <td className="px-4 py-2">{Math.round(child.Amount)}</td>
                                {/* <td className="px-4 py-2 flex gap-2">
                         <button
  onClick={() => {
    setSaleToEditId(child.Code); 
    setShowInvoice(true);
    setSelectedProducts([child]);

    // Construct saleData for UpdateSaleInvoice
    setSaleData({
      ID: child.Code, 
      customerId: parent.parent.PartyCode, // or the actual customer ID
      paymentType: "Cash", // or get from your data
      invoiceDiscount: 0,
      salesmanCommission: 0,
      commissionType: "rate",
      products: [child],
      salesmanId: child.SaleMenCode || undefined
    });
  }}
  className="text-blue-600"
>


                                    <PencilSquareIcon className="w-5 h-5" />
                                  </button>

                                  <button onClick={() => handleDelete(child)} className="text-red-600">
                                    <TrashIcon className="w-5 h-5" />
                                  </button>
                                </td> */}
                              </tr>
                            )
                            }
                              
                              )}
                        </React.Fragment>
                      )
                    }

                    )}
                  </tbody>


                </table>


                {/* Pagination Controls */}
                <div className="flex justify-between items-center px-4 py-3">
                  <div>
                    {t("pagination_info_text")} {(page - 1) * pageSize + 1} - {Math.min(page * pageSize, filteredData.length)} / {filteredData.length}
                  </div>
                  <div className="space-x-2">
                    <button className="px-3 py-1 bg-gray-200 rounded disabled:opacity-50" onClick={() => setPage(page - 1)} disabled={page === 1}>{t("pagination_previous")}</button>
                    <span className="px-3">{page}</span>
                    <button className="px-3 py-1 bg-gray-200 rounded disabled:opacity-50" onClick={() => setPage(page + 1)} disabled={page * pageSize >= filteredData.length}>{t("pagination_next")}</button>
                  </div>
                </div>
              </div>


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
                    <h2 className="text-xl font-bold mb-4">Customer Details</h2>
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





















