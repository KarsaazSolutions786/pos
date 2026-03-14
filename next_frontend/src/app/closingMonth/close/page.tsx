"use client";

import React, { useState, useEffect, useMemo } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
import {
  fetchClosingMonths,
  selectClosingMonthState,
} from "@/Redux/slices/sClosingMonth/sClosingMonth";
import { useRouter } from "next/navigation";
import { useTranslations } from "@/hooks/useTranslations";
import { toast } from "react-hot-toast";
import {
  Eye,
  CheckCircle,
  AlertTriangle,
  TrendingUp,
  TrendingDown,
  Minus,
  Loader2,
  Calendar,
  Lock,
  ChevronLeft,
  RotateCcw,
  FileText,
  ArrowRight,
  ArrowLeft,
} from "lucide-react";
import {
  DryRunResult,
  ClosingResult,
  WIZARD_STEPS_CLOSE,
  getMonthLabel,
} from "../types";

export default function CloseWizardPage() {
  const { t } = useTranslations();
  const { user } = useAuth();
  const dispatch = useDispatch();
  const router = useRouter();

  const { closingMonthsList, isLoading } = useSelector(selectClosingMonthState);

  const [wizardStep, setWizardStep] = useState(1);
  const [selectedCodes, setSelectedCodes] = useState<Set<string>>(new Set());
  const [isDryRunning, setIsDryRunning] = useState(false);
  const [isClosing, setIsClosing] = useState(false);
  const [dryRunResults, setDryRunResults] = useState<DryRunResult[] | null>(null);
  const [closingResults, setClosingResults] = useState<ClosingResult[] | null>(null);
  const [closingError, setClosingError] = useState<string | null>(null);
  const [remarks, setRemarks] = useState("");
  const [isReverting, setIsReverting] = useState(false);

  useEffect(() => {
    dispatch(fetchClosingMonths(user?.apiKey));
  }, [dispatch, user?.apiKey]);

  // Open months sorted chronologically (ascending)
  const openMonths = useMemo(() => {
    return closingMonthsList
      .filter((m) => m.CloseStatus === "Open")
      .sort((a, b) => {
        const yearDiff = Number(a.VYear) - Number(b.VYear);
        if (yearDiff !== 0) return yearDiff;
        return Number(a.VMonth) - Number(b.VMonth);
      });
  }, [closingMonthsList]);

  // Sequential selection logic
  const selectableCloseCodes = useMemo(() => {
    const selectable = new Set<string>();
    for (const m of openMonths) {
      const code = String(m.Code);
      if (selectable.size === 0) {
        selectable.add(code);
      } else {
        const prevMonth = openMonths[Array.from(selectable).length - 1];
        if (prevMonth && selectedCodes.has(String(prevMonth.Code))) {
          selectable.add(code);
        } else {
          break;
        }
      }
    }
    return selectable;
  }, [openMonths, selectedCodes]);

  const toggleSelect = (code: string) => {
    setSelectedCodes((prev) => {
      const next = new Set(prev);
      if (next.has(code)) {
        const idx = openMonths.findIndex((m) => String(m.Code) === code);
        for (let i = idx; i < openMonths.length; i++) {
          next.delete(String(openMonths[i].Code));
        }
      } else {
        const idx = openMonths.findIndex((m) => String(m.Code) === code);
        for (let i = 0; i <= idx; i++) {
          next.add(String(openMonths[i].Code));
        }
      }
      return next;
    });
  };

  const toggleSelectAll = () => {
    if (selectedCodes.size === openMonths.length) {
      setSelectedCodes(new Set());
    } else {
      setSelectedCodes(new Set(openMonths.map((m) => String(m.Code))));
    }
  };

  const getSelectedCodesArray = (): number[] => {
    // Sort codes in chronological order (by year/month) — not by Code PK
    const selected = Array.from(selectedCodes).map(Number);
    return selected.sort((a, b) => {
      const mA = openMonths.find((m) => Number(m.Code) === a);
      const mB = openMonths.find((m) => Number(m.Code) === b);
      if (!mA || !mB) return a - b;
      const yearDiff = Number(mA.VYear) - Number(mB.VYear);
      if (yearDiff !== 0) return yearDiff;
      return Number(mA.VMonth) - Number(mB.VMonth);
    });
  };

  const selectedMonthsSummary = useMemo(() => {
    return getSelectedCodesArray().map((code) => {
      const m = closingMonthsList.find((item) => Number(item.Code) === code);
      if (!m) return `Code ${code}`;
      return `${getMonthLabel(Number(m.VMonth))} ${m.VYear}`;
    });
  }, [selectedCodes, closingMonthsList]);

  // Step 1→2: Dry Run
  const handleDryRun = async () => {
    const codes = getSelectedCodesArray();
    if (codes.length === 0) return;

    setIsDryRunning(true);
    setClosingError(null);
    setDryRunResults(null);

    try {
      const response = await fetch("/custom_apis/month_closing_dry_run.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          api_key: user?.apiKey,
          master: { BUnit: 1, Remarks: remarks },
          closing_years: codes,
        }),
      });

      const result = await response.json();

      if (result.success) {
        setDryRunResults(result.data);
        setWizardStep(2);
      } else {
        setClosingError(result.message || result.error || "Dry run failed");
      }
    } catch (err) {
      setClosingError(err instanceof Error ? err.message : "Network error");
    } finally {
      setIsDryRunning(false);
    }
  };

  // Step 3→4: Actual Close
  const handleCloseMonths = async () => {
    const codes = getSelectedCodesArray();
    if (codes.length === 0) return;

    setIsClosing(true);
    setClosingError(null);
    setClosingResults(null);

    try {
      const response = await fetch("/custom_apis/month_closing.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          api_key: user?.apiKey,
          master: { BUnit: 1, Remarks: remarks },
          closing_years: codes,
        }),
      });

      const result = await response.json();

      if (result.success) {
        setClosingResults(result.data);
        setWizardStep(4);
        dispatch(fetchClosingMonths(user?.apiKey));
        const postedCount = (result.data as ClosingResult[]).filter((item) => item.Posted).length;
        toast.success(`${postedCount} month(s) closed successfully`);
      } else {
        setClosingError(result.message || result.error || "Month closing failed");
      }
    } catch (err) {
      setClosingError(err instanceof Error ? err.message : "Network error");
    } finally {
      setIsClosing(false);
    }
  };

  // Revert the months that were just closed
  const handleRevertClosedMonths = async () => {
    if (!closingResults) return;
    const codesToRevert = closingResults
      .filter((item) => item.Posted)
      .map((item) => item.ClosingCode)
      .sort((a, b) => {
        const mA = closingResults.find((m) => m.ClosingCode === a);
        const mB = closingResults.find((m) => m.ClosingCode === b);
        if (!mA || !mB) return b - a;
        const yearDiff = mB.VYear - mA.VYear;
        if (yearDiff !== 0) return yearDiff;
        return mB.VMonth - mA.VMonth;
      });

    if (codesToRevert.length === 0) return;

    setIsReverting(true);
    setClosingError(null);

    try {
      const response = await fetch("/custom_apis/month_closing_revert.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          api_key: user?.apiKey,
          closing_years: codesToRevert,
        }),
      });

      const result = await response.json();

      if (result.success) {
        dispatch(fetchClosingMonths(user?.apiKey));
        const revertedCount = (result.data as any[]).filter((item: any) => item.Reverted).length;
        toast.success(`${revertedCount} month(s) reverted successfully`);
        setWizardStep(1);
        setSelectedCodes(new Set());
        setDryRunResults(null);
        setClosingResults(null);
        setRemarks("");
      } else {
        setClosingError(result.message || result.error || "Revert failed");
      }
    } catch (err) {
      setClosingError(err instanceof Error ? err.message : "Network error");
    } finally {
      setIsReverting(false);
    }
  };

  if (isLoading) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen items-center justify-center">
          <div className="flex flex-col items-center">
            <div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500 mb-4"></div>
            <p className="text-gray-600">{t("loading_closing_months", "Loading closing months...")}</p>
          </div>
        </div>
      </ProtectedRoute>
    );
  }

  // ─── Wizard Step Renderer ─────────────────────────────────
  const renderWizardContent = () => {
    switch (wizardStep) {
      // ── STEP 1: Select Months ──
      case 1: {
        const totalCount = openMonths.length;
        return (
          <div>
            <div className="mb-5">
              <h3 className="text-base font-semibold text-gray-800 mb-1">
                {t("wizard_step1_title", "Choose which months to close")}
              </h3>
              <p className="text-sm text-gray-500">
                {t("wizard_step1_desc", "Select one or more open months. They must be closed in sequential order — oldest first.")}
              </p>
            </div>

            {/* Sequential order info */}
            <div className="flex items-center gap-2 p-3 bg-blue-50 border-blue-200 border rounded-lg mb-4">
              <AlertTriangle className="w-4 h-4 text-blue-600 shrink-0" />
              <span className="text-sm text-blue-700">
                Months must be closed in sequential order. Selecting a month auto-selects all months before it.
              </span>
            </div>

            {/* Selection controls */}
            <div className="flex flex-wrap items-center gap-3 mb-4">
              <button
                onClick={toggleSelectAll}
                className="text-sm px-3 py-1.5 rounded-md border border-gray-300 hover:bg-gray-100 transition font-medium"
              >
                {selectedCodes.size === totalCount
                  ? t("btn_deselect_all", "Deselect All")
                  : t("btn_select_all_open", "Select All Open")}
              </button>
              <span className="text-sm text-gray-500">
                {selectedCodes.size} of {totalCount} {t("label_selected", "selected")}
              </span>
            </div>

            {/* Month chips */}
            {totalCount === 0 ? (
              <div className="text-center py-8">
                <Calendar className="w-12 h-12 mx-auto text-gray-300 mb-3" />
                <p className="text-gray-500 text-sm">
                  No open months available. Add a month first.
                </p>
              </div>
            ) : (
              <div className="flex flex-wrap gap-2 mb-6">
                {openMonths.map((m) => {
                  const code = String(m.Code);
                  const isSelected = selectedCodes.has(code);
                  const isSelectable = selectableCloseCodes.has(code);
                  return (
                    <button
                      key={code}
                      onClick={() => isSelectable && toggleSelect(code)}
                      disabled={!isSelectable}
                      title={!isSelectable ? "Select the earlier months first" : undefined}
                      className={`inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-medium border-2 transition-all duration-200 ${
                        isSelected
                          ? "border-blue-500 bg-blue-50 text-blue-700 shadow-md ring-2 ring-blue-200"
                          : isSelectable
                            ? "border-gray-200 bg-white text-gray-600 hover:border-gray-300 hover:bg-gray-50 cursor-pointer"
                            : "border-gray-100 bg-gray-50 text-gray-400 cursor-not-allowed opacity-60"
                      }`}
                    >
                      <span
                        className={`w-5 h-5 rounded border-2 flex items-center justify-center text-xs transition-all ${
                          isSelected
                            ? "border-blue-500 bg-blue-500 text-white"
                            : isSelectable
                              ? "border-gray-300 bg-white"
                              : "border-gray-200 bg-gray-100"
                        }`}
                      >
                        {isSelected && "✓"}
                      </span>
                      <span>{getMonthLabel(Number(m.VMonth))} {m.VYear}</span>
                      {!isSelectable && (
                        <Lock className="w-3 h-3 text-gray-400" />
                      )}
                    </button>
                  );
                })}
              </div>
            )}

            {/* Remarks */}
            {selectedCodes.size > 0 && (
              <div className="bg-gray-50 rounded-xl p-4 border border-gray-200">
                <label className="block text-sm font-medium text-gray-700 mb-1.5">
                  <FileText className="w-4 h-4 inline mr-1" />
                  {t("label_remarks", "Remarks")} <span className="text-gray-400 font-normal">({t("label_optional", "optional")})</span>
                </label>
                <input
                  type="text"
                  value={remarks}
                  onChange={(e) => setRemarks(e.target.value)}
                  placeholder={t("placeholder_closing_remarks", "e.g., Q1 2026 monthly closing")}
                  className="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white"
                />
              </div>
            )}

            {/* Error display */}
            {closingError && (
              <div className="flex items-start gap-3 p-4 bg-red-50 border border-red-200 rounded-lg mt-4">
                <AlertTriangle className="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                <div>
                  <p className="font-semibold text-red-700">{t("label_error", "Error")}</p>
                  <p className="text-sm text-red-600 mt-1">{closingError}</p>
                </div>
              </div>
            )}
          </div>
        );
      }

      // ── STEP 2: Preview (Dry Run Results) ──
      case 2:
        return (
          <div>
            <div className="mb-5">
              <h3 className="text-base font-semibold text-gray-800 mb-1">
                {t("wizard_step2_title", "Review the preview")}
              </h3>
              <div className="flex items-center gap-2 p-3 bg-amber-50 border border-amber-200 rounded-lg">
                <Eye className="w-4 h-4 text-amber-600 shrink-0" />
                <p className="text-sm text-amber-700">
                  {t("dry_run_note", "This is a preview only. No entries have been posted.")}
                </p>
              </div>
            </div>

            {dryRunResults && (
              <div className="space-y-6">
                {dryRunResults.map((item) => {
                  const net = item.ExpenseTotals.TotalAmount - item.SalesTotals.TotalAmount;
                  return (
                    <div key={item.ClosingCode} className="border border-gray-200 rounded-xl bg-white shadow-sm overflow-hidden">
                      {/* Month Header */}
                      <div className="flex items-center justify-between px-5 py-3 bg-gray-50 border-b border-gray-200">
                        <h3 className="text-base font-semibold text-gray-800">
                          {getMonthLabel(item.VMonth)} {item.VYear}
                        </h3>
                        <span className="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded">
                          Code: {item.ClosingCode}
                        </span>
                      </div>

                      <div className="p-5 space-y-5">
                        {/* Summary Cards */}
                        <div className="grid grid-cols-1 sm:grid-cols-3 gap-3">
                          <div className="bg-blue-50 rounded-lg p-3 text-center">
                            <p className="text-xs text-blue-600 font-medium mb-1">{t("label_sales_total", "Sales Total")}</p>
                            <p className="text-xl font-bold text-blue-700">{item.SalesTotals.TotalAmount.toLocaleString()}</p>
                            <p className="text-xs text-blue-400 mt-1">{item.SalesTotals.TotalTransactions} {t("label_transactions", "txns")}</p>
                          </div>
                          <div className="bg-red-50 rounded-lg p-3 text-center">
                            <p className="text-xs text-red-600 font-medium mb-1">{t("label_expense_total", "Expense Total")}</p>
                            <p className="text-xl font-bold text-red-700">{item.ExpenseTotals.TotalAmount.toLocaleString()}</p>
                            <p className="text-xs text-red-400 mt-1">{item.ExpenseTotals.TotalTransactions} {t("label_transactions", "txns")}</p>
                          </div>
                          <div className={`rounded-lg p-3 text-center ${net > 0 ? "bg-red-50" : net < 0 ? "bg-green-50" : "bg-gray-100"}`}>
                            <p className="text-xs text-gray-600 font-medium mb-1">{t("label_net_difference", "Net Difference")}</p>
                            <p className={`text-xl font-bold ${net > 0 ? "text-red-600" : net < 0 ? "text-green-600" : "text-gray-500"}`}>
                              {Math.abs(net).toLocaleString()}
                            </p>
                            <p className={`text-xs mt-1 font-semibold ${net > 0 ? "text-red-500" : net < 0 ? "text-green-500" : "text-gray-400"}`}>
                              {net > 0 ? "Potential Loss" : net < 0 ? "Potential Profit" : "Balanced"}
                            </p>
                          </div>
                        </div>

                        {/* Sales Entries — Flat Table */}
                        {item.SalesEntries && item.SalesEntries.length > 0 && (
                          <div>
                            <div className="flex items-center gap-2 mb-2">
                              <div className="w-2 h-2 rounded-full bg-blue-500"></div>
                              <h4 className="text-sm font-semibold text-blue-700">
                                {t("label_sales_entries", "Sales Entries")}
                                <span className="ml-2 text-xs font-normal text-blue-400">
                                  ({item.SalesEntries.length} {t("label_entries", "entries")})
                                </span>
                              </h4>
                            </div>
                            <div className="border border-blue-100 rounded-lg overflow-hidden">
                              <div className="overflow-x-auto">
                                <table className="min-w-full text-sm">
                                  <thead>
                                    <tr className="bg-blue-50 text-blue-600">
                                      <th className="text-left px-3 py-2 font-semibold text-xs">#</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_account", "Account")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_date", "Date")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_type", "Type")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_narration", "Narration")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_dr_cr", "Dr/Cr")}</th>
                                      <th className="text-right px-3 py-2 font-semibold text-xs">{t("col_amount", "Amount")}</th>
                                    </tr>
                                  </thead>
                                  <tbody className="divide-y divide-blue-50">
                                    {item.SalesEntries.map((entry, idx) => (
                                      <tr key={entry.CodeD} className="hover:bg-blue-50/30 transition-colors">
                                        <td className="px-3 py-2 text-gray-400 text-xs">{idx + 1}</td>
                                        <td className="px-3 py-2 text-xs">
                                          <span className="text-blue-400 mr-1">({entry.AccountCode})</span>
                                          <span className="font-medium text-blue-800">{entry.AccountName}</span>
                                        </td>
                                        <td className="px-3 py-2 text-gray-700 whitespace-nowrap text-xs">{new Date(entry.TDate).toLocaleDateString()}</td>
                                        <td className="px-3 py-2 text-gray-500 text-xs">{entry.TBook}</td>
                                        <td className="px-3 py-2 text-gray-500 text-xs max-w-[200px] truncate">{entry.Narration || "—"}</td>
                                        <td className="px-3 py-2">
                                          <span className={`inline-flex px-1.5 py-0.5 rounded text-xs font-semibold ${
                                            entry.TStatus === "Cr" ? "bg-green-100 text-green-700" : "bg-orange-100 text-orange-700"
                                          }`}>
                                            {entry.TStatus}
                                          </span>
                                        </td>
                                        <td className="px-3 py-2 text-right font-mono font-semibold text-gray-800 text-xs">{entry.Amount.toLocaleString()}</td>
                                      </tr>
                                    ))}
                                  </tbody>
                                  <tfoot>
                                    <tr className="bg-blue-100">
                                      <td colSpan={6} className="px-3 py-2 text-right text-xs font-semibold text-blue-800">{t("label_sales_grand_total", "Sales Grand Total")}</td>
                                      <td className="px-3 py-2 text-right font-mono font-bold text-blue-900 text-xs">{item.SalesTotals.TotalAmount.toLocaleString()}</td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                        )}

                        {/* Expense Entries — Flat Table */}
                        {item.ExpenseEntries && item.ExpenseEntries.length > 0 && (
                          <div>
                            <div className="flex items-center gap-2 mb-2">
                              <div className="w-2 h-2 rounded-full bg-red-500"></div>
                              <h4 className="text-sm font-semibold text-red-700">
                                {t("label_expense_entries", "Expense Entries")}
                                <span className="ml-2 text-xs font-normal text-red-400">
                                  ({item.ExpenseEntries.length} {t("label_entries", "entries")})
                                </span>
                              </h4>
                            </div>
                            <div className="border border-red-100 rounded-lg overflow-hidden">
                              <div className="overflow-x-auto">
                                <table className="min-w-full text-sm">
                                  <thead>
                                    <tr className="bg-red-50 text-red-600">
                                      <th className="text-left px-3 py-2 font-semibold text-xs">#</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_account", "Account")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_date", "Date")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_type", "Type")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_narration", "Narration")}</th>
                                      <th className="text-left px-3 py-2 font-semibold text-xs">{t("col_dr_cr", "Dr/Cr")}</th>
                                      <th className="text-right px-3 py-2 font-semibold text-xs">{t("col_amount", "Amount")}</th>
                                    </tr>
                                  </thead>
                                  <tbody className="divide-y divide-red-50">
                                    {item.ExpenseEntries.map((entry, idx) => (
                                      <tr key={entry.CodeD} className="hover:bg-red-50/30 transition-colors">
                                        <td className="px-3 py-2 text-gray-400 text-xs">{idx + 1}</td>
                                        <td className="px-3 py-2 text-xs">
                                          <span className="text-red-400 mr-1">({entry.AccountCode})</span>
                                          <span className="font-medium text-red-800">{entry.AccountName}</span>
                                        </td>
                                        <td className="px-3 py-2 text-gray-700 whitespace-nowrap text-xs">{new Date(entry.TDate).toLocaleDateString()}</td>
                                        <td className="px-3 py-2 text-gray-500 text-xs">{entry.TBook}</td>
                                        <td className="px-3 py-2 text-gray-500 text-xs max-w-[200px] truncate">{entry.Narration || "—"}</td>
                                        <td className="px-3 py-2">
                                          <span className={`inline-flex px-1.5 py-0.5 rounded text-xs font-semibold ${
                                            entry.TStatus === "Dr" ? "bg-orange-100 text-orange-700" : "bg-green-100 text-green-700"
                                          }`}>
                                            {entry.TStatus}
                                          </span>
                                        </td>
                                        <td className="px-3 py-2 text-right font-mono font-semibold text-gray-800 text-xs">{entry.Amount.toLocaleString()}</td>
                                      </tr>
                                    ))}
                                  </tbody>
                                  <tfoot>
                                    <tr className="bg-red-100">
                                      <td colSpan={6} className="px-3 py-2 text-right text-xs font-semibold text-red-800">{t("label_expense_grand_total", "Expense Grand Total")}</td>
                                      <td className="px-3 py-2 text-right font-mono font-bold text-red-900 text-xs">{item.ExpenseTotals.TotalAmount.toLocaleString()}</td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                          </div>
                        )}

                        {/* Profit / Loss Summary */}
                        {(() => {
                          const profitLoss = item.SalesTotals.TotalAmount - item.ExpenseTotals.TotalAmount;
                          const isProfit = profitLoss > 0;
                          const isLoss = profitLoss < 0;
                          return (
                            <div className={`rounded-xl border-2 p-4 ${isProfit ? "border-green-200 bg-green-50" : isLoss ? "border-red-200 bg-red-50" : "border-gray-200 bg-gray-50"}`}>
                              <div className="space-y-2">
                                <div className="flex justify-between items-center text-sm">
                                  <span className="text-blue-700 font-medium">{t("label_sales_grand_total", "Sales Grand Total")}</span>
                                  <span className="font-mono font-bold text-blue-800">{item.SalesTotals.TotalAmount.toLocaleString()}</span>
                                </div>
                                <div className="flex justify-between items-center text-sm">
                                  <span className="text-red-700 font-medium">{t("label_expense_grand_total", "Expense Grand Total")}</span>
                                  <span className="font-mono font-bold text-red-800">- {item.ExpenseTotals.TotalAmount.toLocaleString()}</span>
                                </div>
                                <div className="border-t-2 border-gray-300 pt-2 mt-2">
                                  <div className="flex justify-between items-center">
                                    <span className={`text-sm font-bold ${isProfit ? "text-green-700" : isLoss ? "text-red-700" : "text-gray-600"}`}>
                                      {isProfit ? "Profit" : isLoss ? "Loss" : "Balanced"}
                                    </span>
                                    <div className="flex items-center gap-2">
                                      {isProfit && <TrendingUp className="w-4 h-4 text-green-600" />}
                                      {isLoss && <TrendingDown className="w-4 h-4 text-red-600" />}
                                      {!isProfit && !isLoss && <Minus className="w-4 h-4 text-gray-500" />}
                                      <span className={`font-mono text-lg font-bold ${isProfit ? "text-green-700" : isLoss ? "text-red-700" : "text-gray-600"}`}>
                                        {Math.abs(profitLoss).toLocaleString()}
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          );
                        })()}
                      </div>
                    </div>
                  );
                })}
              </div>
            )}

            {closingError && (
              <div className="flex items-start gap-3 p-4 bg-red-50 border border-red-200 rounded-lg mt-4">
                <AlertTriangle className="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                <div>
                  <p className="font-semibold text-red-700">{t("label_error", "Error")}</p>
                  <p className="text-sm text-red-600 mt-1">{closingError}</p>
                </div>
              </div>
            )}
          </div>
        );

      // ── STEP 3: Confirm & Close ──
      case 3:
        return (
          <div>
            <div className="mb-5">
              <h3 className="text-base font-semibold text-gray-800 mb-1">
                {t("wizard_step3_title", "Confirm month closing")}
              </h3>
              <p className="text-sm text-gray-500">
                {t("wizard_step3_desc", "Review your selection below. This action will post GL entries and mark months as Closed.")}
              </p>
            </div>

            {/* Warning banner */}
            <div className="flex items-start gap-3 p-4 bg-amber-50 border border-amber-200 rounded-xl mb-5">
              <AlertTriangle className="w-5 h-5 text-amber-600 mt-0.5 shrink-0" />
              <div>
                <p className="font-semibold text-amber-800">{t("confirm_warning_title", "This action cannot be undone")}</p>
                <p className="text-sm text-amber-700 mt-1">
                  {t("confirm_warning_msg", "GL transaction entries (GLTH + GLTD) will be permanently posted to the General Ledger. The selected months will be marked as Closed.")}
                </p>
              </div>
            </div>

            {/* Summary card */}
            <div className="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
              <h4 className="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">
                {t("confirm_summary_title", "Closing Summary")}
              </h4>
              <div className="space-y-3">
                <div className="flex justify-between items-center py-2 border-b border-gray-100">
                  <span className="text-sm text-gray-500">{t("label_months_to_close", "Months to close")}</span>
                  <span className="text-sm font-semibold text-gray-800">{selectedMonthsSummary.length}</span>
                </div>
                <div className="flex justify-between items-start py-2 border-b border-gray-100">
                  <span className="text-sm text-gray-500">{t("label_selected_months", "Selected months")}</span>
                  <div className="flex flex-wrap gap-1.5 justify-end max-w-[60%]">
                    {selectedMonthsSummary.map((label, i) => (
                      <span key={i} className="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full font-medium">
                        {label}
                      </span>
                    ))}
                  </div>
                </div>
                {remarks && (
                  <div className="flex justify-between items-center py-2 border-b border-gray-100">
                    <span className="text-sm text-gray-500">{t("label_remarks", "Remarks")}</span>
                    <span className="text-sm text-gray-700 italic">&quot;{remarks}&quot;</span>
                  </div>
                )}
                <div className="flex justify-between items-center py-2">
                  <span className="text-sm text-gray-500">{t("label_target_account", "Target Account")}</span>
                  <span className="text-sm font-mono text-gray-700">AccountCode 13 (P&L)</span>
                </div>
              </div>
            </div>

            {closingError && (
              <div className="flex items-start gap-3 p-4 bg-red-50 border border-red-200 rounded-lg mt-4">
                <AlertTriangle className="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                <div>
                  <p className="font-semibold text-red-700">{t("label_error", "Error")}</p>
                  <p className="text-sm text-red-600 mt-1">{closingError}</p>
                </div>
              </div>
            )}
          </div>
        );

      // ── STEP 4: Results ──
      case 4:
        return (
          <div>
            <div className="mb-5">
              <div className="flex items-center gap-2 p-3 bg-green-50 border border-green-200 rounded-xl">
                <CheckCircle className="w-5 h-5 text-green-600 shrink-0" />
                <p className="text-sm font-medium text-green-700">
                  {t("closing_success_msg", "Month closing entries have been posted to the General Ledger.")}
                </p>
              </div>
            </div>

            {closingResults && (
              <div className="space-y-4">
                {closingResults.map((item) => (
                  <div
                    key={item.ClosingCode}
                    className={`border-2 rounded-xl p-5 ${
                      item.ProfitLoss.Status === "PROFIT"
                        ? "border-green-200 bg-green-50/50"
                        : item.ProfitLoss.Status === "LOSS"
                        ? "border-red-200 bg-red-50/50"
                        : "border-gray-200 bg-gray-50"
                    }`}
                  >
                    <div className="flex items-center justify-between mb-3">
                      <h3 className="text-base font-semibold text-gray-800">
                        {item.MonthName} {item.VYear}
                      </h3>
                      {item.Posted && (
                        <span className="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                          <CheckCircle className="w-3.5 h-3.5" />
                          {t("label_posted", "Posted")}
                        </span>
                      )}
                    </div>

                    <div className="grid grid-cols-3 gap-3 mb-4">
                      <div className="text-center bg-white/80 rounded-lg p-2">
                        <p className="text-xs text-gray-500">{t("label_sales_signed", "Sales (Signed)")}</p>
                        <p className="text-sm font-bold text-blue-700">{item.SalesSignedSum.toLocaleString()}</p>
                      </div>
                      <div className="text-center bg-white/80 rounded-lg p-2">
                        <p className="text-xs text-gray-500">{t("label_expense_signed", "Expense (Signed)")}</p>
                        <p className="text-sm font-bold text-red-700">{item.ExpenseSignedSum.toLocaleString()}</p>
                      </div>
                      <div className="text-center bg-white/80 rounded-lg p-2">
                        <p className="text-xs text-gray-500">{t("label_net", "Net")}</p>
                        <p className="text-sm font-bold text-gray-800">{item.Net.toLocaleString()}</p>
                      </div>
                    </div>

                    {/* Profit / Loss Badge */}
                    <div className="flex items-center justify-center">
                      {item.ProfitLoss.Status === "PROFIT" ? (
                        <div className="inline-flex items-center gap-2 px-5 py-2.5 bg-green-100 rounded-full">
                          <TrendingUp className="w-5 h-5 text-green-600" />
                          <span className="text-sm font-bold text-green-700">
                            {t("label_profit", "PROFIT")}: {item.ProfitLoss.Amount.toLocaleString()}
                          </span>
                          <span className="text-xs bg-green-200 text-green-700 px-1.5 py-0.5 rounded font-mono">{item.ProfitLoss.TStatus}</span>
                        </div>
                      ) : item.ProfitLoss.Status === "LOSS" ? (
                        <div className="inline-flex items-center gap-2 px-5 py-2.5 bg-red-100 rounded-full">
                          <TrendingDown className="w-5 h-5 text-red-600" />
                          <span className="text-sm font-bold text-red-700">
                            {t("label_loss", "LOSS")}: {item.ProfitLoss.Amount.toLocaleString()}
                          </span>
                          <span className="text-xs bg-red-200 text-red-700 px-1.5 py-0.5 rounded font-mono">{item.ProfitLoss.TStatus}</span>
                        </div>
                      ) : (
                        <div className="inline-flex items-center gap-2 px-5 py-2.5 bg-gray-100 rounded-full">
                          <Minus className="w-5 h-5 text-gray-500" />
                          <span className="text-sm font-bold text-gray-600">
                            {t("label_zero_net", "ZERO — No entry posted")}
                          </span>
                        </div>
                      )}
                    </div>

                    {item.GLTH_ID && (
                      <div className="flex items-center justify-center gap-4 mt-3 text-xs text-gray-400">
                        <span>GLTH ID: <span className="font-mono font-semibold text-gray-500">{item.GLTH_ID}</span></span>
                        <span>•</span>
                        <span>{item.VirtualCode}</span>
                      </div>
                    )}
                  </div>
                ))}
              </div>
            )}
          </div>
        );

      default:
        return null;
    }
  };

  // ─── Wizard Footer Buttons ────────────────────────────────
  const renderWizardFooter = () => {
    switch (wizardStep) {
      case 1:
        return (
          <>
            <button onClick={() => router.push("/closingMonth")} className="px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
              {t("btn_cancel", "Cancel")}
            </button>
            <button
              onClick={handleDryRun}
              disabled={selectedCodes.size === 0 || isDryRunning}
              className="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:bg-gray-300 disabled:cursor-not-allowed transition"
            >
              {isDryRunning ? <Loader2 className="w-4 h-4 animate-spin" /> : <ArrowRight className="w-4 h-4" />}
              {isDryRunning ? t("btn_previewing", "Previewing...") : t("btn_next_preview", "Next: Preview")}
            </button>
          </>
        );
      case 2:
        return (
          <>
            <button
              onClick={() => { setWizardStep(1); setClosingError(null); }}
              className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition"
            >
              <ChevronLeft className="w-4 h-4" />
              {t("btn_back", "Back")}
            </button>
            <button
              onClick={() => { setWizardStep(3); setClosingError(null); }}
              disabled={!dryRunResults}
              className="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:bg-gray-300 disabled:cursor-not-allowed transition"
            >
              {t("btn_next_confirm", "Next: Confirm")}
              <ArrowRight className="w-4 h-4" />
            </button>
          </>
        );
      case 3:
        return (
          <>
            <button
              onClick={() => { setWizardStep(2); setClosingError(null); }}
              disabled={isClosing}
              className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 disabled:opacity-50 transition"
            >
              <ChevronLeft className="w-4 h-4" />
              {t("btn_back", "Back")}
            </button>
            <button
              onClick={handleCloseMonths}
              disabled={isClosing}
              className="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-green-600 hover:bg-green-700 disabled:bg-green-400 disabled:cursor-not-allowed transition shadow-sm"
            >
              {isClosing ? <Loader2 className="w-4 h-4 animate-spin" /> : <Lock className="w-4 h-4" />}
              {isClosing ? t("btn_posting", "Posting GL Entries...") : t("btn_close_months_final", "Close Months")}
            </button>
          </>
        );
      case 4:
        return (
          <>
            <button
              onClick={() => { setWizardStep(1); setSelectedCodes(new Set()); setDryRunResults(null); setClosingResults(null); setClosingError(null); setRemarks(""); }}
              className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition"
            >
              <RotateCcw className="w-4 h-4" />
              {t("btn_close_more", "Close More Months")}
            </button>
            <button
              onClick={handleRevertClosedMonths}
              disabled={isReverting}
              className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 disabled:bg-amber-400 disabled:cursor-not-allowed transition shadow-sm"
            >
              {isReverting ? <Loader2 className="w-4 h-4 animate-spin" /> : <RotateCcw className="w-4 h-4" />}
              {isReverting ? "Reverting..." : "Revert"}
            </button>
            <button
              onClick={() => router.push("/closingMonth")}
              className="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition"
            >
              <CheckCircle className="w-4 h-4" />
              {t("btn_done", "Done")}
            </button>
          </>
        );
      default:
        return null;
    }
  };

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <div className="flex items-center gap-3">
                <button
                  onClick={() => router.push("/closingMonth")}
                  className="inline-flex items-center gap-1 text-sm text-gray-500 hover:text-gray-700 transition"
                >
                  <ArrowLeft className="w-4 h-4" />
                  Back
                </button>
                <div>
                  <h1 className="text-2xl font-bold text-gray-900">Close Months</h1>
                  <p className="text-sm text-gray-500 mt-1">Post profit/loss entries and close monthly periods</p>
                </div>
              </div>
            </div>
          </header>

          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <div className="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                {/* Stepper Header */}
                <div className="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
                  <div className="flex items-center justify-between">
                    {WIZARD_STEPS_CLOSE.map((step, index) => {
                      const StepIcon = step.icon;
                      const isActive = wizardStep === step.id;
                      const isCompleted = wizardStep > step.id;
                      return (
                        <React.Fragment key={step.id}>
                          <div className="flex items-center gap-2">
                            <div
                              className={`w-9 h-9 rounded-full flex items-center justify-center transition-all ${
                                isActive
                                  ? "bg-white text-blue-600 shadow-lg scale-110"
                                  : isCompleted
                                  ? "bg-blue-400 text-white"
                                  : "bg-blue-500/40 text-blue-200"
                              }`}
                            >
                              {isCompleted ? (
                                <CheckCircle className="w-5 h-5" />
                              ) : (
                                <StepIcon className="w-4 h-4" />
                              )}
                            </div>
                            <span
                              className={`text-sm font-medium hidden sm:block ${
                                isActive ? "text-white" : isCompleted
                                  ? "text-blue-200"
                                  : "text-blue-300/60"
                              }`}
                            >
                              {step.label}
                            </span>
                          </div>
                          {index < WIZARD_STEPS_CLOSE.length - 1 && (
                            <div className={`flex-1 h-0.5 mx-3 rounded ${isCompleted ? "bg-blue-400" : "bg-blue-500/30"}`} />
                          )}
                        </React.Fragment>
                      );
                    })}
                  </div>
                </div>

                {/* Wizard Body */}
                <div className="px-6 py-5">
                  {renderWizardContent()}
                </div>

                {/* Wizard Footer */}
                <div className="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50/50">
                  {renderWizardFooter()}
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
