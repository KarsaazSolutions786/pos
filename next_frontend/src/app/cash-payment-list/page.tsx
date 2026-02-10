"use client";

import React, { useState, useEffect, useMemo } from "react";
import { useRouter } from "next/navigation";
import { TableColumn } from "@/components/PaginatedTable";
import { PlusIcon, PencilSquareIcon, TrashIcon, XMarkIcon } from "@heroicons/react/24/solid";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useAuth } from "@/contexts/AuthContext";
import { formatDate } from "@/services/httpService";
import { useDispatch, useSelector } from "react-redux";
import { toast } from "react-hot-toast";
import axios from "axios";
import { fetchAccounts, selectAccountsState } from "@/Redux/slices/accountSlice/accountSlice";
import { fetchClosingMonths, selectClosingMonthState } from "@/Redux/slices/sClosingMonth/sClosingMonth";
import SearchableDropdown from "@/components/SearchableDropdown";
import { fetchPsAccountSubGroup, selectPsAccountSubGroup } from "@/Redux/slices/psAccountSubGroupSlice/psAccountSubGroupSlice";
import { ChevronDownIcon, ChevronRightIcon } from "lucide-react";
import { useTranslations } from "@/hooks/useTranslations";

const TTYPE_FILTER = "Cash Payment";
const LIST_API = "/custom_apis/cash_payment_list.php";
const UPDATE_API = "/custom_apis/update_cash_payment.php";
const CREATE_ROUTE = "/cash-payment";

export default function CashPaymentListPage() {
  const { t, isRTL } = useTranslations();

  const columns: TableColumn[] = [
    { key: "TDate", label: t("table_col_date", "Date"), sortable: true },
    { key: "TStatus", label: t("transaction_status", "Transaction Status"), sortable: true },
    { key: "TType", label: t("transaction_type", "Transaction Type"), sortable: true },
    { key: "AccountCode", label: t("table_col_account_name", "AccountName"), sortable: true },
    { key: "BillNo", label: t("table_col_bill_no_header", "Bill No."), sortable: true },
    { key: "ChequeNo", label: t("table_col_cheque_no_header", "Cheque No."), sortable: true },
    { key: "Narration", label: t("table_col_narration_header", "Narration"), sortable: true },
    { key: "Amount", label: t("table_col_amount_header", "Amount"), sortable: true },
  ];

  const PAGE_TITLE = t("cash_payment_list", "Cash Payment List");
  const EDIT_TITLE = t("edit_cash_payment", "Edit Cash Payment");
  const { user } = useAuth();
  const router = useRouter();
  const dispatch = useDispatch();
  const { accountsList } = useSelector(selectAccountsState);
  const { closingMonthsList } = useSelector(selectClosingMonthState);
  const { accountSubGroups } = useSelector(selectPsAccountSubGroup);

  const [voucherList, setVoucherList] = useState<any[]>([]);
  const [expandedRows, setExpandedRows] = useState<Set<string>>(new Set());
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<"asc" | "desc">("asc");
  const [isLoading, setIsLoading] = useState(true);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<any>(null);
  const [deleteVoucherId, setDeleteVoucherId] = useState<any>(null);
  const [isDeleting, setIsDeleting] = useState(false);
  const [editVoucherId, setEditVoucherId] = useState<string | null>(null);

  const partyName = accountsList.reduce((acc, item) => { acc[item.Code] = item.Name; return acc; }, {} as Record<string, string>);

  useEffect(() => { dispatch(fetchAccounts(user?.apiKey)); }, [dispatch, user?.apiKey]);
  useEffect(() => { dispatch(fetchClosingMonths(user?.apiKey)); dispatch(fetchPsAccountSubGroup(user?.apiKey)); }, [user]);
  useEffect(() => { const allParentCodes = voucherList.map(item => item.Code); setExpandedRows(new Set(allParentCodes)); }, [voucherList]);

  const parseMonthYear = (dateStr: string | undefined | null) => {
    if (!dateStr) return null;
    const s = String(dateStr).trim();
    const dmMatch = s.match(/^(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{2,4})$/);
    if (dmMatch) return { month: Number(dmMatch[2]), year: Number(dmMatch[3]) };
    const d = new Date(s);
    if (!isNaN(d.getTime())) return { month: d.getMonth() + 1, year: d.getFullYear() };
    return null;
  };

  const fetchData = async () => {
    setIsLoading(true);
    try {
      const payload = { api_key: user?.apiKey || "123", limit: 200, offset: 0 };
      const response = await axios.post(LIST_API, payload, { headers: { "Content-Type": "application/json" } });
      const rawData = response.data.data;
      const flatMergedDetails = rawData
        .filter((item: any) => item.master.TType === TTYPE_FILTER)
        .flatMap((entry: any) => {
          const master = entry.master;
          return entry.details.map((detail: any) => {
            const merged: any = { ...detail };
            Object.keys(master).forEach((key) => { if (!(key in detail)) merged[key] = master[key]; });
            return merged;
          });
        });
      const mergedData = flatMergedDetails.map((item: any) => {
        const matchingAccount = accountsList.find((acc) => acc.Code == item.AccountCode);
        const voucherRows = flatMergedDetails.filter((v: any) => v.Code === item.Code);
        const drRow = voucherRows.find((v: any) => v.TStatus === "Dr");
        const crRow = voucherRows.find((v: any) => v.TStatus === "Cr");
        return { ...item, AccountName: matchingAccount?.Name || item.AccountName, GroupCode: matchingAccount?.GroupCode || item.GroupCode, drId: drRow?.CodeD, crId: crRow?.CodeD };
      });
      setVoucherList(mergedData);
    } catch (error) { console.error("Error fetching:", error); } finally { setIsLoading(false); }
  };

  useEffect(() => { if (accountsList.length > 0) fetchData(); }, [accountsList]);

  const groupedData = useMemo(() => {
    const map: Record<string, any> = {};
    voucherList.forEach((item) => { if (!map[item.Code]) map[item.Code] = { ...item, children: [] }; map[item.Code].children?.push(item); });
    return Object.values(map);
  }, [voucherList]);

  const toggleRow = (code: string) => { setExpandedRows((prev) => { const newSet = new Set(prev); if (newSet.has(code)) newSet.delete(code); else newSet.add(code); return newSet; }); };

  const filteredData = useMemo(() => {
    if (!search) return groupedData;
    const lower = search.toLowerCase();
    return groupedData.filter((acc) =>
      partyName[acc.AccountCode]?.toLowerCase().includes(lower) || acc.Amount?.toString().includes(lower) || acc.TDate?.toLowerCase().includes(lower) || acc.BillNo?.toLowerCase().includes(lower) || acc.ChequeNo?.toLowerCase().includes(lower) || acc.Narration?.toLowerCase().includes(lower)
    );
  }, [groupedData, search, partyName]);

  const sortedData = useMemo(() => {
    if (!sortBy) return filteredData;
    return [...filteredData].sort((a, b) => { const aVal = a[sortBy] ?? ""; const bVal = b[sortBy] ?? ""; if (typeof aVal === "number" && typeof bVal === "number") return sortDirection === "asc" ? aVal - bVal : bVal - aVal; return sortDirection === "asc" ? String(aVal).localeCompare(String(bVal)) : String(bVal).localeCompare(String(aVal)); });
  }, [filteredData, sortBy, sortDirection]);

  const paginatedData = useMemo(() => { const start = (page - 1) * pageSize; return sortedData.slice(start, start + pageSize); }, [sortedData, page, pageSize]);

  const isVoucherClosed = (row: any): boolean => {
    if (!row?.TDate) return false;
    const date = new Date(row.TDate);
    return closingMonthsList.some(m => Number(m.VMonth) === date.getMonth() + 1 && Number(m.VYear) === date.getFullYear() && m.CloseStatus.toLowerCase() === "closed");
  };

  const handleDelete = (row: any) => {
    if (isVoucherClosed(row)) { alert(t("cannot_delete_closed_month", "Cannot delete this voucher as it belongs to a closed month!")); return; }
    setRowToDelete(row); setDeleteModalOpen(true); setDeleteVoucherId({ drId: row.drId, crId: row.crId, voucherId: row.Code });
  };

  const handleDeleteVoucher = async ({ drId, crId, voucherId }: any) => {
    if (!drId || !crId || !voucherId) return;
    try {
      const row = voucherList.find((v) => v.Code === voucherId);
      if (row && isVoucherClosed(row)) { alert(t("cannot_delete_closed_month", "Cannot delete this voucher as it belongs to a closed month!")); setDeleteModalOpen(false); return; }
      setIsDeleting(true);
      await fetch(`/api/v1.php?table=GLTD&action=delete&editid1=${voucherId}&editid2=${drId}`, { method: "POST", headers: { "X-Auth-Token": user?.apiKey || "123" } });
      await fetch(`/api/v1.php?table=GLTD&action=delete&editid1=${voucherId}&editid2=${crId}`, { method: "POST", headers: { "X-Auth-Token": user?.apiKey || "123" } });
      alert(t("voucher_deleted_success", "Voucher deleted successfully!")); setDeleteModalOpen(false); fetchData();
      const totalPages = Math.ceil((sortedData.length - 1) / pageSize);
      if (page > totalPages && totalPages > 0) setPage(totalPages);
    } catch (error) { console.error("Delete error:", error); alert("Failed to delete voucher"); } finally { setIsDeleting(false); }
  };

  if (isLoading) return (<ProtectedRoute><div className="flex h-screen items-center justify-center"><div className="flex flex-col items-center"><div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500 mb-4"></div><p className="text-gray-600">Loading...</p></div></div></ProtectedRoute>);

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">{PAGE_TITLE}</h1>
              <button className="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800 shadow" onClick={() => router.push(CREATE_ROUTE)}><PlusIcon className="w-5 h-5" /> {t("add_new", "Add New")}</button>
            </div>
          </header>
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <div className="bg-white shadow-md rounded-lg overflow-x-auto">
                <div className="flex justify-between items-center px-4 py-2">
                  <div>{t("show", "Show")} <select className="mx-2 border border-gray-300 rounded px-2 py-1" value={pageSize} onChange={(e) => { setPageSize(Number(e.target.value)); setPage(1); }}>{[5, 10, 20, 50].map((size) => (<option key={size} value={size}>{size}</option>))}</select> {t("entries", "entries")}</div>
                  <input type="text" placeholder={t("label_search", "Search...")} className="border border-gray-300 rounded px-3 py-1" value={search} onChange={(e) => { setSearch(e.target.value); setPage(1); }} />
                </div>
                <table className="min-w-full divide-y divide-gray-200">
                  <thead className="bg-gray-100 sticky top-0 z-10"><tr><th className="px-4 py-3 w-8"></th>{columns.map((col) => (<th key={col.key} onClick={() => { setSortBy(col.key); setSortDirection(sortBy === col.key && sortDirection === "asc" ? "desc" : "asc"); }} className="px-4 py-3 text-left cursor-pointer select-none"><div className="flex items-center"><span className="font-medium text-gray-700">{col.label}</span>{sortBy === col.key && <span className="ml-1 text-gray-500">{sortDirection === "asc" ? "▲" : "▼"}</span>}</div></th>))}<th className="px-4 py-3 text-left text-gray-500 text-sm w-20">{t("table_col_actions_header", "Actions")}</th></tr></thead>
                  <tbody className="divide-y divide-gray-200">
                    {paginatedData.map((parent) => (
                      <React.Fragment key={parent.Code}>
                        <tr className="bg-gray-50 hover:bg-gray-100 transition-colors duration-150" onClick={() => toggleRow(parent.Code)}>
                          <td className="px-4 py-4 w-8" colSpan={9}><button className="flex items-center justify-center w-6 h-6 text-gray-400 hover:text-gray-600" onClick={(e) => { e.stopPropagation(); toggleRow(parent.Code); }}>{expandedRows.has(parent.Code) ? <ChevronDownIcon className="w-3 h-3" /> : <ChevronRightIcon className="w-3 h-3" />}</button></td>
                          <td className="px-4 py-4 w-20"><div className="flex items-center gap-1"><button title="Edit" onClick={(e) => { e.stopPropagation(); setEditVoucherId(parent.Code); }} className="p-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 rounded"><PencilSquareIcon className="w-4 h-4" /></button>{(() => { const closed = isVoucherClosed(parent); return (<button title={closed ? "Month is closed" : "Delete"} onClick={(e) => { e.stopPropagation(); if (!closed) handleDelete(parent); }} disabled={closed} className={`p-1.5 rounded ${closed ? 'text-red-400 cursor-not-allowed opacity-60' : 'text-red-600 hover:text-red-800 hover:bg-red-50'}`}><TrashIcon className="w-4 h-4" /></button>); })()}</div></td>
                        </tr>
                        {expandedRows.has(parent.Code) && parent.children?.map((child: any, ci: number) => (
                          <tr key={child.CodeD || `${parent.Code}-${ci}`} className="bg-white hover:bg-gray-50">
                            <td className="px-4 py-4 w-8"><div className="flex items-center justify-center"><div className="w-2 h-2 bg-blue-400 rounded-full"></div></div></td>
                            {columns.map((col) => (<td key={col.key} className="px-4 py-4 text-sm text-gray-700">{col.key === "TDate" ? formatDate(child[col.key]) : col.key === "TStatus" ? (<span className={`inline-flex px-8 py-2 rounded-full text-xs font-medium ${child[col.key] === "Dr" ? "bg-green-100 text-green-800" : child[col.key] === "Cr" ? "bg-red-100 text-red-800" : "bg-gray-100 text-gray-700"}`}>{child[col.key] || "—"}</span>) : col.key === "AccountCode" ? (partyName[child[col.key]] || child[col.key] || "—") : (child[col.key] || "—")}</td>))}
                            <td className="px-4 py-4 w-20"></td>
                          </tr>
                        ))}
                      </React.Fragment>
                    ))}
                  </tbody>
                </table>
                <div className="flex justify-between items-center px-4 py-3">
                  <div>{t("showing", "Showing")} {(page - 1) * pageSize + 1} {t("to", "to")} {Math.min(page * pageSize, filteredData.length)} {t("of", "of")} {filteredData.length} {t("entries", "entries")}</div>
                  <div className="space-x-2"><button className="px-3 py-1 bg-gray-200 rounded disabled:opacity-50" onClick={() => setPage(page - 1)} disabled={page === 1}>{t("previous", "Previous")}</button><span className="px-3">{page}</span><button className="px-3 py-1 bg-gray-200 rounded disabled:opacity-50" onClick={() => setPage(page + 1)} disabled={page * pageSize >= filteredData.length}>{t("next", "Next")}</button></div>
                </div>
              </div>

              <VoucherEditModal isOpen={!!editVoucherId} onClose={() => setEditVoucherId(null)} voucherId={editVoucherId} user={user} accountsList={accountsList} onSuccess={() => fetchData()} updateApi={UPDATE_API} editTitle={EDIT_TITLE} />

              {deleteModalOpen && rowToDelete && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/30">
                  <div className="bg-white rounded-lg shadow-lg max-w-md w-full p-6 relative">
                    <button className="absolute top-4 right-4 text-gray-400 hover:text-gray-700" onClick={() => setDeleteModalOpen(false)}><XMarkIcon className="w-6 h-6" /></button>
                    <h2 className="text-xl font-bold mb-4">{t("confirm_delete", "Confirm Delete")}</h2>
                    <div className="border-b border-gray-200 mb-4"></div>
                    <p className="mb-6">{t("confirm_delete_voucher", "Are you sure you want to delete this voucher?")}</p>
                    <div className="flex justify-end gap-2">
                      <button className="px-4 py-2 rounded bg-gray-200 text-gray-800 hover:bg-gray-300" onClick={() => setDeleteModalOpen(false)}>{t("cancel", "Cancel")}</button>
                      <button className={`px-4 py-2 rounded text-white ${isDeleting ? 'bg-red-400 cursor-not-allowed' : 'bg-red-700 hover:bg-red-800'}`} onClick={() => handleDeleteVoucher(deleteVoucherId)} disabled={isDeleting}>{isDeleting ? t("deleting", "Deleting...") : t("delete", "Delete")}</button>
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

function VoucherEditModal({ isOpen, onClose, voucherId, user, accountsList, onSuccess, updateApi, editTitle }: any) {
  const { t } = useTranslations();
  const { closingMonthsList } = useSelector(selectClosingMonthState);
  const [formData, setFormData] = useState<any>(null);
  const [loading, setLoading] = useState(false);

  const handleChange = (field: string, value: any) => setFormData((prev: any) => ({ ...prev, [field]: value }));

  const debitOptions = useMemo(() => {
    let options = accountsList.map((a: any) => ({ value: a.Code, label: `${a.Name} (${a.AccSubCode})` }));
    if (formData?.creditAccount) options = options.filter((a: any) => String(a.value) === String(formData?.debitAccount) || String(a.value) !== String(formData?.creditAccount));
    return options;
  }, [accountsList, formData?.creditAccount, formData?.debitAccount]);

  const creditOptions = useMemo(() => {
    if (!formData?.debitAccount) return [];
    let options = accountsList.map((a: any) => ({ value: a.Code, label: `${a.Name} (${a.AccSubCode})` }));
    if (formData?.debitAccount) options = options.filter((a: any) => String(a.value) === String(formData?.creditAccount) || String(a.value) !== String(formData?.debitAccount));
    return options;
  }, [accountsList, formData?.debitAccount, formData?.creditAccount]);

  useEffect(() => {
    if (!isOpen || !voucherId) return;
    const fetchVoucher = async () => {
      try {
        const res = await fetch(`/api/v1.php?table=GLTD&action=list&editid1=${voucherId}`, { headers: { "X-Auth-Token": user?.apiKey || "123" } });
        const json = await res.json();
        if (json.success && json.data?.length) {
          const rows = json.data.filter((v: any) => v.Code === String(voucherId));
          const dr = rows.find((v: any) => v.TStatus === "Dr");
          const cr = rows.find((v: any) => v.TStatus === "Cr");
          setFormData({ VirtualCode: rows[0]?.VirtualCode || voucherId, date: (dr?.TDate || cr?.TDate || "").slice(0, 10), billNumber: dr?.BillNo || cr?.BillNo || "", chequeNumber: dr?.ChequeNo || cr?.ChequeNo || "", Amount: dr?.Amount || cr?.Amount || "", debitAccount: dr?.AccountCode || "", creditAccount: cr?.AccountCode || "", debitNarration: dr?.Narration || "", creditNarration: cr?.Narration || "", drId: dr?.CodeD, crId: cr?.CodeD });
        }
      } catch (err) { console.error("Failed to fetch voucher", err); }
    };
    fetchVoucher();
  }, [isOpen, voucherId]);

  const handleUpdate = async () => {
    try {
      const entryDate = new Date(formData.date);
      const isClosed = closingMonthsList.some((m: any) => Number(m.VMonth) === entryDate.getMonth() + 1 && Number(m.VYear) === entryDate.getFullYear() && m.CloseStatus.toLowerCase() === "closed");
      if (isClosed) { alert("Cannot update this voucher as it belongs to a closed month!"); return; }
      setLoading(true);
      const payload = { api_key: user?.apiKey || "123", master: { VirtualCode: formData.VirtualCode, Amount: parseFloat(formData.Amount), BillNo: formData.billNumber || "", ChequeNo: formData.chequeNumber || "" }, details: [{ AccountCode: formData.debitAccount, Narration: formData.debitNarration || "Updated Debit Entry", TStatus: "Dr", Amount: parseFloat(formData.Amount) }, { AccountCode: formData.creditAccount, Narration: formData.creditNarration || "Updated Credit Entry", TStatus: "Cr", Amount: parseFloat(formData.Amount) }] };
      const res = await fetch(updateApi, { method: "POST", headers: { "Content-Type": "application/json" }, body: JSON.stringify(payload) });
      const result = await res.json();
      if (!res.ok || !result.success) throw new Error(result.message || "Failed to update");
      alert("Voucher updated successfully!"); onSuccess?.(); onClose();
    } catch (err: any) { console.error("Update error", err); alert("Failed to update: " + (err.message || "Unknown error")); } finally { setLoading(false); }
  };

  if (!isOpen) return null;
  return (
    <div className="fixed inset-0 bg-black/50 flex justify-center items-center z-50">
      <div className="bg-white p-8 rounded-2xl shadow-xl w-full max-w-4xl">
        <h2 className="text-2xl font-bold text-center mb-2 text-indigo-800">{editTitle}</h2>
        <p className="text-sm text-center text-gray-500 mb-6">Secure & Professional Accounting Management</p>
        {formData ? (
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div><h3 className="text-lg font-semibold text-green-600 mb-3">Basic Information</h3><div className="space-y-4">
              <div><label className="block text-sm text-gray-700 font-bold">Date</label><input type="date" value={formData.date} onChange={(e) => handleChange("date", e.target.value)} className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm" /></div>
              <div><label className="block text-sm text-gray-700 font-bold">Bill Number</label><input type="text" placeholder="Enter bill number" value={formData.billNumber} onChange={(e) => handleChange("billNumber", e.target.value)} className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm" /></div>
              <div><label className="block text-sm text-gray-700 font-bold">Cheque Number</label><input type="text" placeholder="Enter cheque number" value={formData.chequeNumber} onChange={(e) => handleChange("chequeNumber", e.target.value)} className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm" /></div>
              <div><label className="block text-sm text-gray-700 font-bold">Amount</label><input type="number" placeholder="0.00" value={formData.Amount} onChange={(e) => handleChange("Amount", e.target.value)} className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm" /></div>
            </div></div>
            <div><h3 className="text-lg font-semibold text-pink-600 mb-3">Account Details</h3><div className="space-y-4">
              <SearchableDropdown label="Debit Account" value={formData.debitAccount} options={debitOptions} onChange={(val) => handleChange("debitAccount", val)} />
              <SearchableDropdown label="Credit Account" value={formData.creditAccount} options={creditOptions} onChange={(val) => handleChange("creditAccount", val)} />
              <div><label className="block text-sm text-gray-700 font-bold">Debit Narration</label><textarea placeholder="Enter debit narration..." value={formData.debitNarration} onChange={(e) => handleChange("debitNarration", e.target.value)} className="mt-2 h-20 w-full rounded-md border border-gray-300 px-3 py-2 text-sm resize-none" /></div>
              <div><label className="block text-sm text-gray-700 font-bold">Credit Narration</label><textarea placeholder="Enter credit narration..." value={formData.creditNarration} onChange={(e) => handleChange("creditNarration", e.target.value)} className="mt-2 h-20 w-full rounded-md border border-gray-300 px-3 py-2 text-sm resize-none" /></div>
            </div></div>
          </div>
        ) : <p>Loading...</p>}
        <div className="flex justify-center gap-4 mt-8">
          <button onClick={onClose} className="px-6 py-2 bg-gray-200 rounded shadow hover:bg-gray-300">Exit</button>
          <button onClick={handleUpdate} disabled={loading} className="px-6 py-2 bg-purple-600 text-white rounded shadow hover:bg-purple-700">{loading ? "Updating..." : "Save Entry"}</button>
        </div>
      </div>
    </div>
  );
}
