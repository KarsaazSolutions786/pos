"use client";

import React, { useState, useEffect, useMemo, use } from "react";
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
import { useTranslations } from "@/hooks/useTranslations";
import Sidebar from "@/components/Sidebar";
import { useAuth } from "@/contexts/AuthContext";
import { deleteData, formatDate } from "@/services/httpService";
import { useDispatch, useSelector } from "react-redux";
import { customerState, fetchCustomerList, removeCustomer } from "@/Redux/slices/customerSlice/customerSlice";
import { toast } from 'react-hot-toast';
import axios from "axios";
import { fetchAccounts, selectAccountsState } from "@/Redux/slices/accountSlice/accountSlice";
import { fetchClosingMonths, selectClosingMonthState } from "@/Redux/slices/sClosingMonth/sClosingMonth";
import SearchableDropdown from "@/components/SearchableDropdown";
import { fetchPsAccountSubGroup, selectPsAccountSubGroup } from "@/Redux/slices/psAccountSubGroupSlice/psAccountSubGroupSlice";
import { ChevronDownIcon, ChevronRightIcon } from "lucide-react";

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

export default function BankDepositListPage() {
const { t, isRTL } = useTranslations();
const { user } = useAuth();

const columns: TableColumn[] = [
  { key: "TDate", label: t("table_col_date", "Date"), sortable: true },
  { key: "TStatus", label: t("transaction_status", "Transaction Status"), sortable: true },
  { key: "TType", label: t("transaction_type", "Transaction Type"), sortable: true },
  { key: "AccountCode", label: t("table_col_account_name", "AccountName"), sortable: true },
  { key: "BillNo", label: t("table_col_bill_no_header", "Bill No."), sortable: true },
  { key: "ChequeNo", label: t("table_col_cheque_no", "Cheque No."), sortable: true },
  { key: "Narration", label: t("table_col_narration", "Narration"), sortable: true },
  { key: "Amount", label: t("table_col_amount", "Amount"), sortable: true },
];
  const router = useRouter();
  const dispatch = useDispatch();
  const { accountsList } = useSelector(selectAccountsState);
  console.log("🚀 ~ BankDepositListPage ~ accountsList:", accountsList)
  const { closingMonthsList } = useSelector(selectClosingMonthState);

  const [voucherList, setVoucherList] = useState<CustomerData[]>([]);
  console.log("🚀 ~ BankDepositListPage ~ voucherList:", voucherList)
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
  const [customerOptions, setCustomerOptions] = useState<{ value: string; label: string; phone?: string; code?: string; address?: string; contactName?: string; saleMenCode?: string }[]>([]);
    const { accountSubGroups, error } = useSelector(selectPsAccountSubGroup);

  // Helper: parse month/year from a variety of date strings
  const parseMonthYear = (dateStr: string | undefined | null) => {
    if (!dateStr) return null;
    const s = String(dateStr).trim();

    // dd/mm/yyyy or dd-mm-yyyy
    const dmMatch = s.match(/^(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{2,4})$/);
    if (dmMatch) return { month: Number(dmMatch[2]), year: Number(dmMatch[3]) };

    // dd Mon yyyy (e.g. 03 Nov 2025 or 3 November 2025)
    const dmTextMatch = s.match(/^(\d{1,2})\s+([A-Za-z]{3,9})\s+(\d{4})$/);
    if (dmTextMatch) {
      const mon = dmTextMatch[2].toLowerCase().slice(0, 3);
      const monthNames: Record<string, number> = { jan:1,feb:2,mar:3,apr:4,may:5,jun:6,jul:7,aug:8,sep:9,oct:10,nov:11,dec:12 };
      const month = monthNames[mon];
      if (month) return { month, year: Number(dmTextMatch[3]) };
    }

    // Try Date parse (ISO etc.)
    const d = new Date(s);
    if (!isNaN(d.getTime())) return { month: d.getMonth() + 1, year: d.getFullYear() };

    return null;
  };



  // Fetch accounts first
  useEffect(() => {
    dispatch(fetchAccounts(user?.apiKey));
  }, [dispatch, user?.apiKey]);

   useEffect(() => {
        const fetchCustomers = async () => {
            debugger
            try {
                const response = await fetch(
                    "/api/v1.php?table=pCustomer&action=list",
                    {
                        method: "GET",
                        headers: {
                            "X-Auth-Token": user?.apiKey || "123",
                            "Content-Type": "application/json",
                        },
                    }
                );
                const result = await response.json();
                if (result.success && result.data) {
                    const formattedCustomers = result.data.map((customer: CustomerData) => ({
                        value: customer.ID,
                        label: customer.Name,
                        phone: customer.Phone || "",
                        code: customer.Code,
                        address: customer.Address,
                        contactName: customer.ContactName,
                        saleMenCode: customer.SaleMenCode || undefined,
                    }));
                    setCustomerOptions(formattedCustomers);
                }
            } catch (error) {
                console.error(error);
                setCustomerOptions([]);
            } finally {
            }
        };
        fetchCustomers();
    // ensure closing months are loaded so we can block deletes for closed months
    dispatch(fetchClosingMonths(user?.apiKey));
        dispatch(fetchPsAccountSubGroup(user?.apiKey));
    }, [user]);

  useEffect(() => {
  const allParentCodes = voucherList.map(item => item.Code);
  setExpandedRows(new Set(allParentCodes));
}, [voucherList]);


//  const partyName = accountSubGroups.reduce((acc, item) => {
//     if (item.value) {
//       acc[item.value] = item.label;
//     }
//     return acc;
//   }, {});

  const partyName = accountsList.reduce((acc, item) => {
    acc[item.Code] = item.Name;
    return acc;
  }, {});

  console.log("🚀 ~ BankDepositListPage ~ partyName:", partyName)
  // Fetch vouchers
  const fetchTSaleD = async () => {
    debugger
    setIsLoading(true);
    try {
       const payload = {
      api_key: user?.apiKey || "123",

      limit: 200,
      offset: 0,
    };

    const response = await axios.post(
      "/custom_apis/bank_deposit_list.php",
      payload,
      { headers: { "Content-Type": "application/json" } }
    );

      const rawData = response.data.data;

// Step 1: Filter Bank Deposit entries
const flatMergedDetails = rawData
  .filter((item: any) => item.master.TType === "Bank Deposit")
  .flatMap((entry: any) => {
    const master = entry.master;
    return entry.details.map((detail: any) => {
      const merged: any = { ...detail };
      Object.keys(master).forEach((key) => {
        if (!(key in detail)) merged[key] = master[key];
      });
      return merged;
    });
  });
      const mergedData = flatMergedDetails.map((item: any) => {
        // const matchingAccount = accountsList.find((acc) => acc.id == item.AccountCode);
              const matchingAccount = accountsList.find((acc) => acc.Code == item.AccountCode);

        const voucherRows = flatMergedDetails.filter((v: any) => v.Code === item.Code);
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

      setVoucherList(mergedData);
    } catch (error) {
      console.error("Error fetching vouchers:", error);
    } finally {
      setIsLoading(false);
    }
  };

  useEffect(() => {
    if (accountsList.length > 0) fetchTSaleD();
  }, [accountsList]);

  // Group data by parent Code
  const groupedData = useMemo(() => {
    const map: Record<string, CustomerData> = {};
    voucherList.forEach((item) => {
      if (!map[item.Code]) map[item.Code] = { ...item, children: [] };
      map[item.Code].children?.push(item);
    });
    return Object.values(map);
  }, [voucherList]);

  // Toggle row expansion
  const toggleRow = (code: string) => {
    setExpandedRows((prev) => {
      const newSet = new Set(prev);
      if (newSet.has(code)) newSet.delete(code);
      else newSet.add(code);
      return newSet;
    });
  };

  // Filtering
  // const filteredData = useMemo(() => {
  //   if (!search) return groupedData;
  //   return groupedData.filter((row) => {
  //     const searchStr = search.toLowerCase();
  //     return (
  //       String(row.Code).toLowerCase().includes(searchStr) ||
  //       String(row.AccountName).toLowerCase().includes(searchStr) ||
  //       String(row.BillNo).toLowerCase().includes(searchStr)
  //     );
  //   });
  // }, [search, groupedData]);

   const filteredData = useMemo(() => {
    if (!search) return groupedData ;
    const lower = search.toLowerCase();
    return groupedData.filter(
      (acc) =>
        partyName[acc.AccountCode]?.toLowerCase().includes(lower) ||
        // accountTypeList[acc.ParentAccountCode]?.toLowerCase().includes(lower) ||
        acc.Amount?.toString().includes(lower) ||
        acc.TDate?.toLowerCase().includes(lower) ||
        acc.BillNo?.toLowerCase().includes(lower) ||
        acc.ChequeNo?.toLowerCase().includes(lower) ||
        acc.Narration?.toLowerCase().includes(lower)
    );
  }, [groupedData, search, partyName, ]);


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

  const isVoucherClosed = (row: any): boolean => {
  if (!row?.TDate) return false;

  const date = new Date(row.TDate);
  const month = date.getMonth() + 1; // 1-12
  const year = date.getFullYear();

  return closingMonthsList.some(
    m => Number(m.VMonth) === month &&
         Number(m.VYear) === year &&
         m.CloseStatus.toLowerCase() === "closed".toLowerCase()
  );
};

  const handleDelete = (row: any) => {
    debugger

    // First check if the voucher is from a closed month
    const isClosed = isVoucherClosed(row);
    console.log("Checking if voucher is closed:", {
      date: row?.TDate,
      isClosed,
      closingMonths: closingMonthsList
    });

    if (isClosed) {
      alert("Cannot delete this voucher as it belongs to a closed month!");
      return;
    }

    // Proceed with deletion if month is not closed
    setRowToDelete(row);
    setDeleteModalOpen(true);
    setDeleteVoucherId({ drId: row.drId, crId: row.crId, voucherId: row.Code });
  };


  const handleDeleteVoucher = async ({ drId, crId, voucherId }: any) => {
    if (!drId || !crId || !voucherId) return;

    // Double-check month is not closed before deleting
    try {
      const row = voucherList.find((v) => v.Code === voucherId);
      if (!row) {
        console.error("Could not find voucher for deletion", { voucherId });
        return;
      }

      // Final check to prevent deletion of closed month entries
      if (isVoucherClosed(row)) {
        alert("Cannot delete this voucher as it belongs to a closed month!");
        setDeleteModalOpen(false);
        return;
      }

      setIsDeleting(true);
      console.log("Proceeding with deletion", { voucherId, drId, crId });

      await fetch(`/api/v1.php?table=GLTD&action=delete&editid1=${voucherId}&editid2=${drId}`, {
        method: "POST",
        headers: { "X-Auth-Token": user?.apiKey || "123" },
      });

      await fetch(`/api/v1.php?table=GLTD&action=delete&editid1=${voucherId}&editid2=${crId}`, {
        method: "POST",
        headers: { "X-Auth-Token": user?.apiKey || "123" },
      });

      alert("Voucher deleted successfully!");
      setDeleteModalOpen(false);
      fetchTSaleD();

      // Update pagination if needed
      const totalEntriesAfterDelete = sortedData.length - 1;
      const totalPages = Math.ceil(totalEntriesAfterDelete / pageSize);
      if (page > totalPages && totalPages > 0) {
        setPage(totalPages);
      }

    } catch (error) {
      console.error("Delete error:", error);
      alert("Failed to delete voucher");
    } finally {
      setIsDeleting(false);
    }
    try {
      setIsDeleting(true);
      console.log("Proceeding to call delete endpoints for", { voucherId, drId, crId });
      await fetch(`/api/v1.php?table=GLTD&action=delete&editid1=${voucherId}&editid2=${drId}`, {
        method: "POST",
        headers: { "X-Auth-Token": user?.apiKey || "123" },
      });
      await fetch(`/api/v1.php?table=GLTD&action=delete&editid1=${voucherId}&editid2=${crId}`, {
        method: "POST",
        headers: { "X-Auth-Token": user?.apiKey || "123" },
      });
      toast.success("Voucher deleted successfully!");
      setDeleteModalOpen(false);
      fetchTSaleD();
         const totalEntriesAfterDelete = sortedData.length - 1; // because we deleted 1
    const totalPages = Math.ceil(totalEntriesAfterDelete / pageSize);
    if (page > totalPages && totalPages > 0) {
      setPage(totalPages); // go to previous page if current is empty
    }

    } catch (error) {
      console.error(error);
      toast.error("Failed to delete voucher.");
    } finally {
      setIsDeleting(false);
    }
  };
  const confirmDelete = () => handleDeleteVoucher(deleteVoucherId);

  // Render loading state
  if (isLoading) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen items-center justify-center">
          <div className="flex flex-col items-center">
            <div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500 mb-4"></div>
            <p className="text-gray-600">{t("loading_bank_deposits", "Loading bank deposits...")}</p>
          </div>
        </div>
      </ProtectedRoute>
    );
  }


  const lookupOptions ={
                  GroupCode: [
                  { value: "1", label: "General Group" },
                  { value: "2", label: "Retail Customers" },
                  { value: "3", label: "Wholesale Customers" },
                  { value: "4", label: "Corporate Customers" },
                  { value: "5", label: "VIP Customers" },
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
                {t("bank_deposit_list", "Bank Deposit List")}
              </h1>
              <button
                className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800  shadow"
                onClick={() => router.push("/bank-deposit")}
              >
                <PlusIcon className="w-5 h-5" /> {t("add_new", "Add New")}
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {/* Render no records found state */}


              {/* Render PaginatedTable */}
       <div className="bg-white shadow-md rounded-lg overflow-x-auto">
  <div className="flex justify-between items-center px-4 py-2">
    <div>
      {t("show", "Show")}
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
      {t("entries", "entries")}
    </div>
    <input
      type="text"
      placeholder={t("search_placeholder", "Search...")}
      className="border border-gray-300 rounded px-3 py-1"
      value={search}
      onChange={(e) => {
        setSearch(e.target.value);
        setPage(1);
      }}
    />
  </div>

<table className="min-w-full divide-y divide-gray-200">
  <thead className="bg-gray-100 sticky top-0 z-10">
    <tr>
      {/* Empty column for expand/collapse */}
      <th className="px-4 py-3 w-8"></th>

      {columns.map((col) => (
        <th
          key={col.key}
          onClick={() => {
            const direction = sortBy === col.key && sortDirection === "asc" ? "desc" : "asc";
            setSortBy(col.key);
            setSortDirection(direction);
          }}
          className="px-4 py-3 text-left cursor-pointer select-none"
        >
          <div className="flex items-center">
            <span className="font-medium text-gray-700">{col.label}</span>
            {sortBy === col.key && (
              <span className="ml-1 text-gray-500">
                {sortDirection === "asc" ? "▲" : "▼"}
              </span>
            )}
          </div>
        </th>
      ))}

      <th className="px-4 py-3 text-left text-gray-500 text-sm w-20">{t("actions", "Actions")}</th>
    </tr>
  </thead>

  <tbody className="divide-y divide-gray-200">
    {paginatedData.map((parent, index) => (
      <React.Fragment key={parent.Code}>
        {/* Parent Row - Shows ALL data like original */}
        <tr
          className="bg-gray-50 hover:bg-gray-100 transition-colors duration-150"
          onClick={() => toggleRow(parent.Code)}
        >
          {/* Expand/Collapse Column */}
          <td className="px-4 py-4 w-8" colSpan={9}>
            <button
              className="flex items-center justify-center w-6 h-6 text-gray-400 hover:text-gray-600"
              onClick={(e) => {
                e.stopPropagation();
                toggleRow(parent.Code);
              }}
            >
              {expandedRows.has(parent.Code) ? (
                <ChevronDownIcon className="w-3 h-3" />
              ) : (
                <ChevronRightIcon className="w-3 h-3" />
              )}
            </button>
          </td>

          {/* Parent Data Columns - EXACT same as header */}
          {/* {columns.map((col) => (
            <td
              key={col.key}
              className="px-4 py-4 text-sm text-gray-900"
            >
              {col.key === "TDate" ? (
                <span className="text-gray-900">{formatDate(parent[col.key])}</span>
              ) : col.key === "TStatus" ? (
                <span
                  className={`inline-flex px-2.5 py-0.5 rounded-full text-xs font-medium ${
                    parent[col.key] === "Dr"
                      ? "bg-green-100 text-green-800"
                      : parent[col.key] === "Cr"
                      ? "bg-red-100 text-red-800"
                      : "bg-gray-100 text-gray-700"
                  }`}
                >
                  {parent[col.key] || "—"}
                </span>
              ) : col.key === "AccountCode" ? (
                <span className="font-medium text-gray-800">
                  {partyName[parent[col.key]] || parent[col.key] || "—"}
                </span>
              ) : (
                <span className="text-gray-900">{parent[col.key] || "—"}</span>
              )}
            </td>
          ))} */}

          {/* Actions Column */}
          <td className="px-4 py-4 w-20">
            <div className="flex items-center gap-1">
              <button
                title={t("btn_edit", "Edit")}
                onClick={(e) => {
                  e.stopPropagation();
                  setEditVoucherId(parent.Code);
                }}
                className="p-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 rounded transition-all duration-150"
              >
                <PencilSquareIcon className="w-4 h-4" />
              </button>
              {
                (() => {
                  const closed = isVoucherClosed(parent);
                  return (
                    <button
                      title={closed ? t("tooltip_month_closed", "This voucher's month is closed - deletion blocked") : t("btn_delete", "Delete")}
                      onClick={(e) => {
                        e.stopPropagation();
                        if (closed) return;
                        handleDelete(parent);
                      }}
                      disabled={closed}
                      className={`p-1.5 rounded transition-all duration-150 ${closed ? 'text-red-400 cursor-not-allowed opacity-60 bg-transparent' : 'text-red-600 hover:text-red-800 hover:bg-red-50'}`}
                    >
                      <TrashIcon className="w-4 h-4" />
                    </button>
                  );
                })()
              }
            </div>
          </td>
        </tr>

        {/* Child Rows - Only visible when expanded */}
        {expandedRows.has(parent.Code) && (
          <>
            {parent.children?.map((child, childIndex) => (
              <tr
                key={child.CodeD || `${parent.Code}-${childIndex}`}
                className="bg-white hover:bg-gray-50 transition-colors duration-150 cursor-pointer"
              >
                {/* Child indicator - same width as expand column */}
                <td className="px-4 py-4 w-8">
                  <div className="flex items-center justify-center">
                    <div className="w-2 h-2 bg-blue-400 rounded-full"></div>
                  </div>
                </td>

                {/* Child Data Columns - EXACT same as parent */}
                {columns.map((col) => (
                  <td
                    key={col.key}
                    className="px-4 py-4 text-sm text-gray-700"
                  >
                    {col.key === "TDate" ? (
                      <span className="text-gray-700">{child[col.key] ? formatDate(child[col.key]) : "—"}</span>
                    ) : col.key === "TStatus" ? (
                      <span
                        className={`inline-flex px-8 py-2 rounded-full text-xs font-medium ${
                          child[col.key] === "Dr"
                            ? "bg-green-100 text-green-800"
                            : child[col.key] === "Cr"
                            ? "bg-red-100 text-red-800"
                            : "bg-gray-100 text-gray-700"
                        }`}
                      >
                        {child[col.key] || "—"}
                      </span>
                    ) : col.key === "AccountCode" ? (
                      <span className="font-medium text-gray-800">
                        {partyName[child[col.key]] || child[col.key] || "—"}
                      </span>
                    ) : (
                      <span className="text-gray-700">{child[col.key] || "—"}</span>
                    )}
                  </td>
                ))}

                {/* Child Actions */}
                <td className="px-4 py-4 w-20">
                  {/* <div className="flex items-center gap-1">
                    <button
                      title="Edit Entry"
                      onClick={(e) => {
                        e.stopPropagation();
                        setEditVoucherId(child.CodeD);
                      }}
                      className="p-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 rounded transition-all duration-150"
                    >
                      <PencilSquareIcon className="w-4 h-4" />
                    </button>
                    <button
                      title="Delete Entry"
                      onClick={(e) => {
                        e.stopPropagation();
                        handleDelete(child);
                      }}
                      className="p-1.5 text-red-600 hover:text-red-800 hover:bg-red-50 rounded transition-all duration-150"
                    >
                      <TrashIcon className="w-4 h-4" />
                    </button>
                  </div> */}
                </td>
              </tr>
            ))}
          </>
        )}
      </React.Fragment>
    ))}
  </tbody>
</table>


  {/* Pagination Controls */}
           <div className="flex justify-between items-center px-4 py-3">
                <div>
                  {t("showing", "Showing")} {(page - 1) * pageSize + 1} {t("to", "to")}{" "}
                  {Math.min(page * pageSize, filteredData.length)} {t("of", "of")} {filteredData.length} {t("entries", "entries")}
                </div>
                <div className="space-x-2">
                  <button className="px-3 py-1 bg-gray-200 rounded disabled:opacity-50" onClick={() => setPage(page - 1)} disabled={page === 1}>{t("previous", "Previous")}</button>
                  <span className="px-3">{page}</span>
                  <button className="px-3 py-1 bg-gray-200 rounded disabled:opacity-50" onClick={() => setPage(page + 1)} disabled={page * pageSize >= filteredData.length}>{t("next", "Next")}</button>
                </div>
              </div>
            </div>


              {/* View Modal */}
              {viewModalOpen && selectedRow && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/30 bg-opacity-30">
                  <div className="bg-white  rounded-lg shadow-lg max-w-2xl w-full p-6 relative max-h-[80vh] overflow-y-auto">
                    <button
                      className="absolute  top-4 right-4 text-gray-400 hover:text-gray-700"
                      onClick={() => setViewModalOpen(false)}
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-xl font-bold mb-4">{t("customer_details", "Customer Details")}</h2>
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

<VoucherEditModal
  isOpen={!!editVoucherId}
  onClose={() => setEditVoucherId(null)}
  voucherId={editVoucherId}
  user={user}
  accountsList={accountsList}
  onSuccess={() => fetchTSaleD()}
/>

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
                    <h2 className="text-xl font-bold mb-4">{t("confirm_delete", "Confirm Delete")}</h2>
                    <div className="border-b border-gray-200 mb-4"></div>
                    <p className="mb-6">
                      {t("are_you_sure_delete", "Are you sure you want to delete")}{" "}
                      <span className="font-semibold">{rowToDelete.Name}</span>?
                    </p>
                    <div className="flex justify-end gap-2">
                      <button
                        className="px-4 py-2 rounded bg-gray-200 text-gray-800 hover:bg-gray-300"
                        onClick={() => setDeleteModalOpen(false)}
                      >
                        {t("cancel", "Cancel")}
                      </button>
                      <button
  className={`px-4 py-2 rounded text-white ${isDeleting ? 'bg-red-400 cursor-not-allowed' : 'bg-red-700 hover:bg-red-800'}`}
  onClick={confirmDelete}
  disabled={isDeleting}
>
  {isDeleting ? t("deleting", "Deleting...") : t("delete", "Delete")}
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


  function VoucherEditModal({ isOpen, onClose, voucherId, user, accountsList, onSuccess }) {
    debugger
  const { t } = useTranslations();
  const { closingMonthsList } = useSelector(selectClosingMonthState);
  const [formData, setFormData] = useState(null);
  console.log("🚀 ~ VoucherEditModal ~ formData:", formData)
  const [loading, setLoading] = useState(false);
  const  dispatch=useDispatch()
      const { customerslist, } = useSelector(customerState);
        const { accountSubGroups, error } = useSelector(selectPsAccountSubGroup);


      const partyName = customerslist.reduce((acc, item) => {
        if (item.ID && item.Name) {
          acc[item.ID] = item.Name;
        }
        return acc;
      }, {});


      useEffect(() => {
        if (user?.apiKey) {
      dispatch(fetchPsAccountSubGroup(user?.apiKey));
      console.log("Fetching products with API key:", user.apiKey);
    }
  }, [user]);


  const handleChange = (field, value) => {
    setFormData((prev) => ({ ...prev, [field]: value }));
  };


const debitOptions = useMemo(() => {
  // full list banao
  let options = accountsList.map(a => ({ value: a.Code, label: `${a.Name} (${a.AccSubCode})` }));

  // agar credit selected hai to usko remove karo lekin agar debit me already selected hai to usko rehne do
  if (formData?.creditAccount) {
    options = options.filter(
      a => String(a.value) === String(formData?.debitAccount) || String(a.value) !== String(formData?.creditAccount)
    );
  }

  return options;
}, [accountsList, formData?.creditAccount, formData?.debitAccount]);

const creditOptions = useMemo(() => {
  if (!formData?.debitAccount) return [];

  let options = accountsList.map(a => ({ value: a.Code, label: `${a.Name} (${a.AccSubCode})` }));

  if (formData?.debitAccount) {
    options = options.filter(
      a => String(a.value) === String(formData?.creditAccount) || String(a.value) !== String(formData?.debitAccount)
    );
  }

  return options;
}, [accountsList, formData?.debitAccount, formData?.creditAccount]);




  useEffect(() => {
    if (!isOpen || !voucherId) return;

    const fetchVoucher = async () => {
      debugger
    try {
      const res = await fetch(
        `/api/v1.php?table=GLTD&action=list&editid1=${voucherId}`,
        {
          headers: { "X-Auth-Token": user?.apiKey || "123" },
        }
      );
      const json = await res.json();
    if (json.success && json.data?.length) {
  // Sirf current voucher ke records lo
  const rows = json.data.filter(v => v.Code === String(voucherId));

  const dr = rows.find(v => v.TStatus === "Dr");
  const cr = rows.find(v => v.TStatus === "Cr");

  setFormData({
    VirtualCode:rows[0]?.VirtualCode || voucherId,
    date: (dr?.TDate || cr?.TDate || "").slice(0, 10),
    billNumber: dr?.BillNo || cr?.BillNo || "",
    chequeNumber: dr?.ChequeNo || cr?.ChequeNo || "",
    Amount: dr?.Amount || cr?.Amount || "",
    debitAccount: dr?.AccountCode || "",
    creditAccount: cr?.AccountCode || "",
    debitNarration: dr?.Narration || "",
    creditNarration: cr?.Narration || "",
    drId: dr?.CodeD,
    crId: cr?.CodeD,
  });
}

    } catch (err) {
      console.error("Failed to fetch voucher", err);
    }
  };

  fetchVoucher();
}, [isOpen, voucherId]);

const handleUpdate = async () => {
  try {
    debugger;

    // ---------------------- CHECK CLOSED MONTH ----------------------
    const entryDate = new Date(formData.date);
    const entryMonth = entryDate.getMonth() + 1;
    const entryYear = entryDate.getFullYear();

    const isClosed = closingMonthsList.some(
      (m) =>
        Number(m.VMonth) === entryMonth &&
        Number(m.VYear) === entryYear &&
        m.CloseStatus.toLowerCase() === "closed"
    );

    if (isClosed) {
      alert("Cannot update this voucher as it belongs to a closed month!");
      return;
    }

    setLoading(true);

    // ---------------------- BUILD JSON PAYLOAD ----------------------
    const payload = {
      api_key: user?.apiKey || "123",

      master: {
        VirtualCode: formData.VirtualCode, // backend expects this
        Amount: parseFloat(formData.Amount),
        BillNo: formData.billNumber || "",
        ChequeNo: formData.chequeNumber || "",
      },

      details: [
        {
          AccountCode: formData.debitAccount,
          Narration: formData.debitNarration || "Updated Debit Entry",
          TStatus: "Dr",
          Amount: parseFloat(formData.Amount),
        },
        {
          AccountCode: formData.creditAccount,
          Narration: formData.creditNarration || "Updated Credit Entry",
          TStatus: "Cr",
          Amount: parseFloat(formData.Amount),
        },
      ],
    };

    console.log("Bank Deposit Update Payload →", payload);

    // ---------------------- API CALL ----------------------
    const res = await fetch("/custom_apis/update_bank_deposit.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload),
    });

    const result = await res.json();
    console.log("Bank Deposit Update Response:", result);

    if (!res.ok || !result.success) {
      throw new Error(result.message || "Failed to update Bank Deposit");
    }

    alert("Bank Deposit updated successfully!");

    onSuccess?.();
    onClose();
  } catch (err: any) {
    console.error("Update error", err);
    alert("Failed to update Bank Deposit: " + (err.message || "Unknown error"));
  } finally {
    setLoading(false);
  }
};



if (!isOpen) return null;

// Ensure both values are strings before comparing



return (
  <div className="fixed inset-0 bg-black/50 flex justify-center items-center z-50">
  <div className="bg-white p-8 rounded-2xl shadow-xl w-full max-w-4xl">
    <h2 className="text-2xl font-bold text-center mb-2 text-indigo-800">
      {t("edit_bank_deposit", "Edit Bank Deposit")}
    </h2>
    <p className="text-sm text-center text-gray-500 mb-6">
      {t("secure_professional_accounting", "Secure & Professional Accounting Management")}
    </p>

    {formData ? (
      <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <h3 className="text-lg font-semibold text-green-600 mb-3 flex items-center gap-2">
            <span>📑</span> {t("basic_information", "Basic Information")}
          </h3>

          <div className="space-y-4">
          <div>
                        <label className="block text-sm  text-gray-700 font-bold">{t("date", "Date")}</label>
                        <div className="relative">
                          <input
                            type="date"
                            value={formData.date}
                            onChange={(e) => handleChange("date", e.target.value)}
                            className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                          />

                        </div>
                        {/* {showError("date")} */}
                      </div>

            <div>
                        <label className="block text-sm  text-gray-700 font-bold">{t("bill_number", "Bill Number")}</label>
                        <div className="relative">
                          <input
                            type="text"
                            placeholder={t("enter_bill_number", "Enter bill number")}
                            value={formData.billNumber}
                            onChange={(e) => handleChange("billNumber", e.target.value)}
                            className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                          />

                        </div>
                        {/* {showError("billNumber")} */}
                      </div>



           <div>
                        <label className="block text-sm  text-gray-700 font-bold">{t("cheque_number", "Cheque Number")}</label>
                        <div className="relative">
                          <input
                            type="text"
                            placeholder={t("enter_cheque_number", "Enter cheque number")}
                            value={formData.chequeNumber}
                            onChange={(e) => handleChange("chequeNumber", e.target.value)}
                            className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                          />

                        </div>
                      </div>


              <div>
                        <label className="block text-sm  text-gray-700 font-bold">{t("amount", "Amount")}</label>
                        <div className="relative">
                          <input
                            type="number"
                            placeholder="0.00"
                            value={formData.Amount}
                            onChange={(e) => handleChange("Amount", e.target.value)}
                            className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                          />

                        </div>
                        {/* {showError("Amount")} */}
                      </div>
          </div>
        </div>

        <div>
          <h3 className="text-lg font-semibold text-pink-600 mb-3 flex items-center gap-2">
            <span>💳</span> {t("account_details", "Account Details")}
          </h3>

          <div className="space-y-4">
            <SearchableDropdown
  label={t("debit_account", "Debit Account")}
  value={formData.debitAccount}
  options={debitOptions}
  onChange={(val) => handleChange("debitAccount", val)}
/>

<SearchableDropdown
  label={t("credit_account", "Credit Account")}
  value={formData.creditAccount}
  options={creditOptions}
  onChange={(val) => handleChange("creditAccount", val)}
/>



                      <div>
                        <label className="block text-sm  text-gray-700 font-bold">{t("debit_narration", "Debit Narration")}</label>
                        <textarea
                          placeholder={t("enter_debit_narration", "Enter debit narration details...")}
                          value={formData.debitNarration}
                          onChange={(e) => handleChange("debitNarration", e.target.value)}
                          className="mt-2 h-20 w-full rounded-md border border-gray-300 px-3 py-2 text-sm resize-none"
                        />


                      </div>


      <div>
                        <label className="block text-sm  text-gray-700 font-bold">{t("credit_narration", "Credit Narration")}</label>
                        <textarea
                          placeholder={t("enter_credit_narration", "Enter credit narration details...")}
                          value={formData.creditNarration}
                          onChange={(e) => handleChange("creditNarration", e.target.value)}
                          className="mt-2 h-20 w-full rounded-md border border-gray-300 px-3 py-2 text-sm resize-none"
                        />
                      </div>
          </div>
        </div>
      </div>
    ) : (
      <p>{t("loading", "Loading...")}</p>
    )}

    <div className="flex justify-center gap-4 mt-8">
      <button
        onClick={onClose}
        className="px-6 py-2 bg-gray-200 rounded shadow hover:bg-gray-300"
      >
        {t("btn_exit", "Exit")}
      </button>
      <button
        onClick={handleUpdate}
        disabled={loading}
        className="px-6 py-2 bg-purple-600 text-white rounded shadow hover:bg-purple-700"
      >
        {loading ? t("btn_updating", "Updating...") : t("btn_save_entry", "Save Entry")}
      </button>
    </div>
  </div>
</div>

  );
}
