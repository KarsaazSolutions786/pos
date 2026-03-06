"use client";

import React, { useState, useEffect, useMemo } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import PaginatedTable, {
  TableColumn,
  SortDirection,
} from "@/components/PaginatedTable";
import {
  TrashIcon,
  XMarkIcon,
} from "@heroicons/react/24/solid";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
import {
  fetchClosingMonths,
  removeClosingMonth,
  selectClosingMonthState,
} from "@/Redux/slices/sClosingMonth/sClosingMonth";
import { deleteData } from "@/services/httpService";
import { useRouter } from "next/navigation";
import { months } from "@/components/ClosingMonthForm";
import { fetchGLTDList, gltdState } from "@/Redux/slices/GLTDSlice/GLTDSlice";
import { useTranslations } from "@/hooks/useTranslations";
import { toast } from "react-hot-toast";
import {
  Eye,
  Play,
  CheckCircle,
  AlertTriangle,
  TrendingUp,
  TrendingDown,
  Minus,
  Loader2,
  Plus,
  Calendar,
  Lock,
  ChevronRight,
  ChevronLeft,
  ChevronDown,
  ChevronUp,
  RotateCcw,
  FileText,
  ArrowRight,
} from "lucide-react";

// Types for month closing API responses
interface DryRunEntry {
  CodeD: number;
  GLTH_Code: number;
  TDate: string;
  AccountCode: number;
  AccountName: string;
  Amount: number;
  TStatus: string;
  TType: string;
  TBook: string;
  Narration: string;
}

interface DryRunResult {
  ClosingCode: number;
  VYear: number;
  VMonth: number;
  Range: { start: string; end_exclusive: string };
  SalesTotals: { TotalAmount: number; TotalTransactions: number };
  ExpenseTotals: { TotalAmount: number; TotalTransactions: number };
  SalesEntries: DryRunEntry[];
  ExpenseEntries: DryRunEntry[];
}

interface ClosingResult {
  ClosingCode: number;
  VYear: number;
  VMonth: number;
  MonthName: string;
  Range: { start: string; end_exclusive: string };
  SalesSignedSum: number;
  ExpenseSignedSum: number;
  Net: number;
  Posted: boolean;
  GLTH_ID?: number;
  VirtualCode?: string;
  ProfitLoss: { Status: string; Amount: number; TStatus?: string };
}

interface RevertResult {
  ClosingCode: number;
  VYear: number;
  VMonth: number;
  MonthName: string;
  Reverted: boolean;
  DeletedGLTDEntries: number;
  DeletedGLTHCodes: number[];
}

type WizardMode = "close" | "revert";

// Wizard step definitions
const WIZARD_STEPS_CLOSE = [
  { id: 1, label: "Select Months", icon: Calendar },
  { id: 2, label: "Preview", icon: Eye },
  { id: 3, label: "Confirm & Close", icon: Lock },
  { id: 4, label: "Results", icon: CheckCircle },
] as const;

const WIZARD_STEPS_REVERT = [
  { id: 1, label: "Select Months", icon: Calendar },
  { id: 2, label: "Confirm Revert", icon: AlertTriangle },
  { id: 3, label: "Results", icon: CheckCircle },
] as const;

const columnDefs = [
  { key: "Code", labelKey: "table_col_code_closing", sortable: true },
  { key: "VMonth", labelKey: "table_col_month", sortable: true },
  { key: "VYear", labelKey: "table_col_year", sortable: true },
  { key: "CloseStatus", labelKey: "table_col_status", sortable: true },
  { key: "UserName", labelKey: "table_col_created_by", sortable: true },
];

export default function ClosingMonthPage() {
  const { t } = useTranslations();
  const { user } = useAuth();
  const dispatch = useDispatch();
  const router = useRouter();
  const columns: TableColumn[] = columnDefs.map((col) => ({ key: col.key, label: t(col.labelKey), sortable: col.sortable }));

  const { closingMonthsList, isLoading } = useSelector(selectClosingMonthState);
  const lookupOptions = {
    VMonth: months,
  };

  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>(null);

  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<Record<string, unknown> | null>(null);
  const [isDeleting, setIsDeleting] = useState(false);

  const { gltdList } = useSelector(gltdState);

  // Wizard states
  const [wizardOpen, setWizardOpen] = useState(false);
  const [wizardStep, setWizardStep] = useState(1);
  const [wizardMode, setWizardMode] = useState<WizardMode>("close");
  const [selectedCodes, setSelectedCodes] = useState<Set<string>>(new Set());
  const [isDryRunning, setIsDryRunning] = useState(false);
  const [isClosing, setIsClosing] = useState(false);
  const [isReverting, setIsReverting] = useState(false);
  const [dryRunResults, setDryRunResults] = useState<DryRunResult[] | null>(null);
  const [closingResults, setClosingResults] = useState<ClosingResult[] | null>(null);
  const [revertResults, setRevertResults] = useState<RevertResult[] | null>(null);
  const [closingError, setClosingError] = useState<string | null>(null);
  const [remarks, setRemarks] = useState("");
  const [expandedAccounts, setExpandedAccounts] = useState<Set<string>>(new Set());

  useEffect(() => {
    dispatch(fetchClosingMonths(user?.apiKey));
    dispatch(fetchGLTDList());
  }, [dispatch, user?.apiKey]);

  const filteredData = useMemo(() => {
    return closingMonthsList.filter((row) => {
      const searchLower = search.toLowerCase();
      const monthObj = months.find((m) => m.value === Number(row.VMonth));
      const monthName = monthObj?.label || "";
      const monthShort = monthName.substring(0, 3);
      return (
        String(row.Code).toLowerCase().includes(searchLower) ||
        String(row.VMonth).toLowerCase().includes(searchLower) ||
        monthName.toLowerCase().includes(searchLower) ||
        monthShort.toLowerCase().includes(searchLower) ||
        String(row.VYear).toLowerCase().includes(searchLower) ||
        String(row.CloseStatus).toLowerCase().includes(searchLower)
      );
    });
  }, [closingMonthsList, search]);

  const sortedData = useMemo(() => {
    const data = [...filteredData];
    if (sortBy && sortDirection) {
      data.sort((a, b) => {
        const aVal = a[sortBy];
        const bVal = b[sortBy];
        if (aVal === undefined || bVal === undefined) return 0;
        return sortDirection === "asc"
          ? String(aVal).localeCompare(String(bVal))
          : String(bVal).localeCompare(String(aVal));
      });
    }
    return data;
  }, [filteredData, sortBy, sortDirection]);

  const paginatedData = sortedData.slice(
    (page - 1) * pageSize,
    page * pageSize
  );

  // Open months sorted chronologically for closing (ascending)
  const openMonths = useMemo(() => {
    return closingMonthsList
      .filter((m) => m.CloseStatus === "Open")
      .sort((a, b) => {
        const yearDiff = Number(a.VYear) - Number(b.VYear);
        if (yearDiff !== 0) return yearDiff;
        return Number(a.VMonth) - Number(b.VMonth);
      });
  }, [closingMonthsList]);

  // Closed months sorted reverse chronologically for revert (descending)
  const closedMonths = useMemo(() => {
    return closingMonthsList
      .filter((m) => m.CloseStatus === "Closed")
      .sort((a, b) => {
        const yearDiff = Number(b.VYear) - Number(a.VYear);
        if (yearDiff !== 0) return yearDiff;
        return Number(b.VMonth) - Number(a.VMonth);
      });
  }, [closingMonthsList]);

  // For closing: determine which months are selectable (sequential only)
  const selectableCloseCodes = useMemo(() => {
    const selectable = new Set<string>();
    for (const m of openMonths) {
      const code = String(m.Code);
      if (selectable.size === 0) {
        // First open month is always selectable
        selectable.add(code);
      } else {
        // Only selectable if the previous month in the list is already selected
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

  // For revert: determine which months are selectable (reverse sequential only)
  const selectableRevertCodes = useMemo(() => {
    const selectable = new Set<string>();
    for (const m of closedMonths) {
      const code = String(m.Code);
      if (selectable.size === 0) {
        // Most recently closed month is always selectable
        selectable.add(code);
      } else {
        // Only selectable if the previous (more recent) month in list is already selected
        const prevMonth = closedMonths[Array.from(selectable).length - 1];
        if (prevMonth && selectedCodes.has(String(prevMonth.Code))) {
          selectable.add(code);
        } else {
          break;
        }
      }
    }
    return selectable;
  }, [closedMonths, selectedCodes]);

  const toggleSelect = (code: string) => {
    setSelectedCodes((prev) => {
      const next = new Set(prev);
      if (next.has(code)) {
        // When deselecting, also deselect all codes that come after this one
        if (wizardMode === "close") {
          const idx = openMonths.findIndex((m) => String(m.Code) === code);
          for (let i = idx; i < openMonths.length; i++) {
            next.delete(String(openMonths[i].Code));
          }
        } else {
          const idx = closedMonths.findIndex((m) => String(m.Code) === code);
          for (let i = idx; i < closedMonths.length; i++) {
            next.delete(String(closedMonths[i].Code));
          }
        }
      } else {
        // When selecting, also auto-select all codes before this one
        if (wizardMode === "close") {
          const idx = openMonths.findIndex((m) => String(m.Code) === code);
          for (let i = 0; i <= idx; i++) {
            next.add(String(openMonths[i].Code));
          }
        } else {
          const idx = closedMonths.findIndex((m) => String(m.Code) === code);
          for (let i = 0; i <= idx; i++) {
            next.add(String(closedMonths[i].Code));
          }
        }
      }
      return next;
    });
  };

  const toggleSelectAll = () => {
    if (wizardMode === "close") {
      if (selectedCodes.size === openMonths.length) {
        setSelectedCodes(new Set());
      } else {
        setSelectedCodes(new Set(openMonths.map((m) => String(m.Code))));
      }
    } else {
      if (selectedCodes.size === closedMonths.length) {
        setSelectedCodes(new Set());
      } else {
        setSelectedCodes(new Set(closedMonths.map((m) => String(m.Code))));
      }
    }
  };

  const getSelectedCodesArray = (): number[] => {
    const codes = Array.from(selectedCodes).map(Number);
    if (wizardMode === "revert") {
      return codes.sort((a, b) => b - a); // descending for revert
    }
    return codes.sort((a, b) => a - b); // ascending for close
  };

  const getMonthLabel = (vMonth: number) => {
    return months.find((m) => m.value === vMonth)?.label || `Month ${vMonth}`;
  };

  // Group entries by AccountName, returning sorted groups with subtotals
  const groupEntriesByAccount = (entries: DryRunEntry[]) => {
    const grouped: Record<string, { accountCode: number; entries: DryRunEntry[]; subtotal: number }> = {};
    for (const entry of entries) {
      const key = entry.AccountName || `Account ${entry.AccountCode}`;
      if (!grouped[key]) {
        grouped[key] = { accountCode: entry.AccountCode, entries: [], subtotal: 0 };
      }
      grouped[key].entries.push(entry);
      grouped[key].subtotal += entry.Amount;
    }
    return Object.entries(grouped).sort((a, b) => b[1].subtotal - a[1].subtotal);
  };

  const toggleAccountExpand = (key: string) => {
    setExpandedAccounts((prev) => {
      const next = new Set(prev);
      if (next.has(key)) next.delete(key);
      else next.add(key);
      return next;
    });
  };

  const expandAllAccounts = (entries: DryRunEntry[], prefix: string) => {
    const groups = groupEntriesByAccount(entries);
    const allKeys = groups.map(([name]) => `${prefix}-${name}`);
    setExpandedAccounts((prev) => {
      const next = new Set(prev);
      const allExpanded = allKeys.every((k) => next.has(k));
      if (allExpanded) {
        allKeys.forEach((k) => next.delete(k));
      } else {
        allKeys.forEach((k) => next.add(k));
      }
      return next;
    });
  };

  // Wizard navigation
  const openWizard = (mode: WizardMode = "close") => {
    setWizardOpen(true);
    setWizardStep(1);
    setWizardMode(mode);
    setSelectedCodes(new Set());
    setDryRunResults(null);
    setClosingResults(null);
    setRevertResults(null);
    setClosingError(null);
    setRemarks("");
  };

  const closeWizard = () => {
    setWizardOpen(false);
    setWizardStep(1);
    setWizardMode("close");
    setSelectedCodes(new Set());
    setDryRunResults(null);
    setClosingResults(null);
    setRevertResults(null);
    setClosingError(null);
    setRemarks("");
  };

  // Step 2: Dry Run
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

  // Revert months
  const handleRevertMonths = async () => {
    const codes = getSelectedCodesArray();
    if (codes.length === 0) return;

    setIsReverting(true);
    setClosingError(null);
    setRevertResults(null);

    try {
      const response = await fetch("/custom_apis/month_closing_revert.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          api_key: user?.apiKey,
          closing_years: codes,
        }),
      });

      const result = await response.json();

      if (result.success) {
        setRevertResults(result.data);
        setWizardStep(3); // revert wizard step 3 = results
        dispatch(fetchClosingMonths(user?.apiKey));
        const revertedCount = (result.data as RevertResult[]).filter((item) => item.Reverted).length;
        toast.success(`${revertedCount} month(s) reverted successfully`);
      } else {
        setClosingError(result.message || result.error || "Revert failed");
      }
    } catch (err) {
      setClosingError(err instanceof Error ? err.message : "Network error");
    } finally {
      setIsReverting(false);
    }
  };

  const handleAddClosingMonth = async () => {
    try {
      let nextMonth, nextYear;

      if (!closingMonthsList || closingMonthsList.length === 0) {
        const now = new Date();
        nextMonth = now.getMonth() + 1;
        nextYear = now.getFullYear();
      } else {
        const lastMonth = closingMonthsList[closingMonthsList.length - 1];
        nextMonth = parseInt(String(lastMonth.VMonth));
        nextYear = parseInt(String(lastMonth.VYear));

        if (nextMonth === 12) {
          nextMonth = 1;
          nextYear += 1;
        } else {
          nextMonth += 1;
        }
      }

      const form = new FormData();
      form.append("VMonth", String(nextMonth).padStart(2, "0"));
      form.append("VYear", String(nextYear));
      form.append("CloseStatus", "Open");
      form.append("UserName", user?.username || "unknown");

      const response = await fetch(
        "/api/v1.php?table=sClosingMonth&action=insert",
        {
          method: "POST",
          headers: { "X-Auth-Token": user?.apiKey || "123" },
          body: form,
        }
      );

      const result = await response.json();

      if (result.success) {
        toast.success(`Closing Month ${nextMonth}/${nextYear} added successfully!`);
        dispatch(fetchClosingMonths(user?.apiKey));
      } else {
        throw new Error(result.message || "Failed to add closing month");
      }
    } catch (error) {
      console.error("Error adding closing month:", error);
      toast.error("Error while saving. Please try again.");
    }
  };

  const deleteClosingMonth = async (closingMonth: any) => {
    try {
      const { Code, VMonth, VYear } = closingMonth;

      const hasDataInGLTD = gltdList.some((item: any) => {
        if (!item.TDate) return false;
        const [day, month, year] = item.TDate.split("/");
        return parseInt(month) === parseInt(VMonth) && parseInt(year) === parseInt(VYear);
      });

      if (hasDataInGLTD) {
        toast.error("This closing month cannot be deleted because its records already exist in the accounts.");
        return;
      }

      setIsDeleting(true);
      await deleteData("sClosingMonth", Code);
      dispatch(removeClosingMonth(Code));
      setDeleteModalOpen(false);
      setIsDeleting(false);
    } catch (error) {
      console.error("Error deleting ClosingMonth:", error);
      setIsDeleting(false);
    }
  };

  // Selected months summary for display
  const selectedMonthsSummary = useMemo(() => {
    return getSelectedCodesArray().map((code) => {
      const m = closingMonthsList.find((item) => Number(item.Code) === code);
      if (!m) return `Code ${code}`;
      return `${getMonthLabel(Number(m.VMonth))} ${m.VYear}`;
    });
  }, [selectedCodes, closingMonthsList]);

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
        const isRevert = wizardMode === "revert";
        const monthsList = isRevert ? closedMonths : openMonths;
        const selectableCodes = isRevert ? selectableRevertCodes : selectableCloseCodes;
        const totalCount = monthsList.length;

        return (
          <div>
            <div className="mb-5">
              <h3 className="text-base font-semibold text-gray-800 mb-1">
                {isRevert
                  ? t("wizard_revert_step1_title", "Choose which months to revert")
                  : t("wizard_step1_title", "Choose which months to close")}
              </h3>
              <p className="text-sm text-gray-500">
                {isRevert
                  ? t("wizard_revert_step1_desc", "Select closed months to revert. They must be reverted in reverse chronological order — most recent first.")
                  : t("wizard_step1_desc", "Select one or more open months. They must be closed in sequential order — oldest first.")}
              </p>
            </div>

            {/* Sequential order info */}
            <div className={`flex items-center gap-2 p-3 ${isRevert ? "bg-amber-50 border-amber-200" : "bg-blue-50 border-blue-200"} border rounded-lg mb-4`}>
              <AlertTriangle className={`w-4 h-4 ${isRevert ? "text-amber-600" : "text-blue-600"} shrink-0`} />
              <span className={`text-sm ${isRevert ? "text-amber-700" : "text-blue-700"}`}>
                {isRevert
                  ? "Months must be reverted in reverse order. Selecting a month auto-selects all months after it."
                  : "Months must be closed in sequential order. Selecting a month auto-selects all months before it."}
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
                  : isRevert
                    ? t("btn_select_all_closed", "Select All Closed")
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
                  {isRevert
                    ? "No closed months available to revert."
                    : "No open months available. Add a month first."}
                </p>
              </div>
            ) : (
              <div className="flex flex-wrap gap-2 mb-6">
                {monthsList.map((m) => {
                  const code = String(m.Code);
                  const isSelected = selectedCodes.has(code);
                  const isSelectable = selectableCodes.has(code);
                  const accentSelected = isRevert
                    ? "border-amber-500 bg-amber-50 text-amber-700 shadow-md ring-2 ring-amber-200"
                    : "border-blue-500 bg-blue-50 text-blue-700 shadow-md ring-2 ring-blue-200";
                  const accentCheck = isRevert
                    ? "border-amber-500 bg-amber-500 text-white"
                    : "border-blue-500 bg-blue-500 text-white";
                  return (
                    <button
                      key={code}
                      onClick={() => isSelectable && toggleSelect(code)}
                      disabled={!isSelectable}
                      title={!isSelectable
                        ? isRevert
                          ? "Select the more recent months first"
                          : "Select the earlier months first"
                        : undefined}
                      className={`inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-medium border-2 transition-all duration-200 ${
                        isSelected
                          ? accentSelected
                          : isSelectable
                            ? "border-gray-200 bg-white text-gray-600 hover:border-gray-300 hover:bg-gray-50 cursor-pointer"
                            : "border-gray-100 bg-gray-50 text-gray-400 cursor-not-allowed opacity-60"
                      }`}
                    >
                      <span
                        className={`w-5 h-5 rounded border-2 flex items-center justify-center text-xs transition-all ${
                          isSelected
                            ? accentCheck
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

            {/* Remarks (close mode only) */}
            {!isRevert && selectedCodes.size > 0 && (
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

      // ── STEP 2: Preview (Close) or Confirm (Revert) ──
      case 2:
        if (wizardMode === "revert") {
          // REVERT MODE: Step 2 = Confirm Revert
          return (
            <div>
              <div className="mb-5">
                <h3 className="text-base font-semibold text-gray-800 mb-1">
                  Confirm month revert
                </h3>
                <p className="text-sm text-gray-500">
                  Review your selection below. This action will delete GL closing entries and reopen the selected months.
                </p>
              </div>

              {/* Warning banner */}
              <div className="flex items-start gap-3 p-4 bg-red-50 border border-red-200 rounded-xl mb-5">
                <AlertTriangle className="w-5 h-5 text-red-600 mt-0.5 shrink-0" />
                <div>
                  <p className="font-semibold text-red-800">This will delete GL closing entries</p>
                  <p className="text-sm text-red-700 mt-1">
                    All MONTH_CLOSE GLTH + GLTD entries for the selected months will be permanently deleted.
                    The months will be set back to &quot;Open&quot; status.
                  </p>
                </div>
              </div>

              {/* Summary card */}
              <div className="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
                <h4 className="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">
                  Revert Summary
                </h4>
                <div className="space-y-3">
                  <div className="flex justify-between items-center py-2 border-b border-gray-100">
                    <span className="text-sm text-gray-500">Months to revert</span>
                    <span className="text-sm font-semibold text-gray-800">{selectedMonthsSummary.length}</span>
                  </div>
                  <div className="flex justify-between items-start py-2 border-b border-gray-100">
                    <span className="text-sm text-gray-500">Selected months</span>
                    <div className="flex flex-wrap gap-1.5 justify-end max-w-[60%]">
                      {selectedMonthsSummary.map((label, i) => (
                        <span key={i} className="text-xs bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full font-medium">
                          {label}
                        </span>
                      ))}
                    </div>
                  </div>
                  <div className="flex justify-between items-center py-2">
                    <span className="text-sm text-gray-500">Revert order</span>
                    <span className="text-sm text-gray-700">
                      {selectedMonthsSummary.join(" → ")}
                    </span>
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
        }

        // CLOSE MODE: Step 2 = Preview (Dry Run Results)
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
                              {net > 0 ? "📉 Potential Loss" : net < 0 ? "📈 Potential Profit" : "Balanced"}
                            </p>
                          </div>
                        </div>

                        {/* Sales Entries — Grouped by Account */}
                        {item.SalesEntries && item.SalesEntries.length > 0 && (() => {
                          const salesGroups = groupEntriesByAccount(item.SalesEntries);
                          const salesPrefix = `sales-${item.ClosingCode}`;
                          return (
                            <div>
                              <div className="flex items-center justify-between mb-2">
                                <div className="flex items-center gap-2">
                                  <div className="w-2 h-2 rounded-full bg-blue-500"></div>
                                  <h4 className="text-sm font-semibold text-blue-700">
                                    {t("label_sales_entries", "Sales Entries")}
                                    <span className="ml-2 text-xs font-normal text-blue-400">
                                      ({item.SalesEntries.length} {t("label_entries", "entries")} · {salesGroups.length} {t("label_accounts", "accounts")})
                                    </span>
                                  </h4>
                                </div>
                                <button
                                  onClick={() => expandAllAccounts(item.SalesEntries, salesPrefix)}
                                  className="text-xs text-blue-500 hover:text-blue-700 font-medium transition-colors"
                                >
                                  {salesGroups.every(([name]) => expandedAccounts.has(`${salesPrefix}-${name}`)) ? "Collapse All" : "Expand All"}
                                </button>
                              </div>
                              <div className="space-y-2">
                                {salesGroups.map(([accountName, group]) => {
                                  const groupKey = `${salesPrefix}-${accountName}`;
                                  const isExpanded = expandedAccounts.has(groupKey);
                                  return (
                                    <div key={groupKey} className="border border-blue-100 rounded-lg overflow-hidden">
                                      {/* Account Header — clickable */}
                                      <button
                                        onClick={() => toggleAccountExpand(groupKey)}
                                        className="w-full flex items-center justify-between px-4 py-2.5 bg-blue-50/70 hover:bg-blue-100/70 transition-colors text-left"
                                      >
                                        <div className="flex items-center gap-2">
                                          {isExpanded ? (
                                            <ChevronUp className="w-4 h-4 text-blue-400" />
                                          ) : (
                                            <ChevronDown className="w-4 h-4 text-blue-400" />
                                          )}
                                          <span className="text-sm font-semibold text-blue-800">{accountName}</span>
                                          <span className="text-xs text-blue-400">({group.accountCode})</span>
                                          <span className="bg-blue-100 text-blue-600 text-xs font-medium px-1.5 py-0.5 rounded">
                                            {group.entries.length} {group.entries.length === 1 ? "entry" : "entries"}
                                          </span>
                                        </div>
                                        <span className="font-mono font-bold text-blue-700 text-sm">
                                          {group.subtotal.toLocaleString()}
                                        </span>
                                      </button>
                                      {/* Expanded entries */}
                                      {isExpanded && (
                                        <div className="overflow-x-auto">
                                          <table className="min-w-full text-sm">
                                            <thead>
                                              <tr className="bg-blue-50/40 text-blue-600">
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">#</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_date", "Date")}</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_type", "Type")}</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_narration", "Narration")}</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_dr_cr", "Dr/Cr")}</th>
                                                <th className="text-right px-3 py-1.5 font-semibold text-xs">{t("col_amount", "Amount")}</th>
                                              </tr>
                                            </thead>
                                            <tbody className="divide-y divide-blue-50">
                                              {group.entries.map((entry, idx) => (
                                                <tr key={entry.CodeD} className="hover:bg-blue-50/30 transition-colors">
                                                  <td className="px-3 py-1.5 text-gray-400 text-xs">{idx + 1}</td>
                                                  <td className="px-3 py-1.5 text-gray-700 whitespace-nowrap text-xs">{new Date(entry.TDate).toLocaleDateString()}</td>
                                                  <td className="px-3 py-1.5 text-gray-500 text-xs">{entry.TBook}</td>
                                                  <td className="px-3 py-1.5 text-gray-500 text-xs max-w-[200px] truncate">{entry.Narration || "—"}</td>
                                                  <td className="px-3 py-1.5">
                                                    <span className={`inline-flex px-1.5 py-0.5 rounded text-xs font-semibold ${
                                                      entry.TStatus === "Cr" ? "bg-green-100 text-green-700" : "bg-orange-100 text-orange-700"
                                                    }`}>
                                                      {entry.TStatus}
                                                    </span>
                                                  </td>
                                                  <td className="px-3 py-1.5 text-right font-mono font-semibold text-gray-800 text-xs">{entry.Amount.toLocaleString()}</td>
                                                </tr>
                                              ))}
                                            </tbody>
                                            <tfoot>
                                              <tr className="bg-blue-50/50">
                                                <td colSpan={5} className="px-3 py-1.5 text-right text-xs font-semibold text-blue-600">{t("label_subtotal", "Subtotal")}</td>
                                                <td className="px-3 py-1.5 text-right font-mono font-bold text-blue-700 text-xs">{group.subtotal.toLocaleString()}</td>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                      )}
                                    </div>
                                  );
                                })}
                              </div>
                              {/* Grand Total */}
                              <div className="flex justify-between items-center mt-2 px-4 py-2 bg-blue-100 rounded-lg">
                                <span className="text-sm font-semibold text-blue-800">{t("label_sales_grand_total", "Sales Grand Total")}</span>
                                <span className="font-mono font-bold text-blue-900">{item.SalesTotals.TotalAmount.toLocaleString()}</span>
                              </div>
                            </div>
                          );
                        })()}

                        {/* Expense Entries — Grouped by Account */}
                        {item.ExpenseEntries && item.ExpenseEntries.length > 0 && (() => {
                          const expenseGroups = groupEntriesByAccount(item.ExpenseEntries);
                          const expensePrefix = `expense-${item.ClosingCode}`;
                          return (
                            <div>
                              <div className="flex items-center justify-between mb-2">
                                <div className="flex items-center gap-2">
                                  <div className="w-2 h-2 rounded-full bg-red-500"></div>
                                  <h4 className="text-sm font-semibold text-red-700">
                                    {t("label_expense_entries", "Expense Entries")}
                                    <span className="ml-2 text-xs font-normal text-red-400">
                                      ({item.ExpenseEntries.length} {t("label_entries", "entries")} · {expenseGroups.length} {t("label_accounts", "accounts")})
                                    </span>
                                  </h4>
                                </div>
                                <button
                                  onClick={() => expandAllAccounts(item.ExpenseEntries, expensePrefix)}
                                  className="text-xs text-red-500 hover:text-red-700 font-medium transition-colors"
                                >
                                  {expenseGroups.every(([name]) => expandedAccounts.has(`${expensePrefix}-${name}`)) ? "Collapse All" : "Expand All"}
                                </button>
                              </div>
                              <div className="space-y-2">
                                {expenseGroups.map(([accountName, group]) => {
                                  const groupKey = `${expensePrefix}-${accountName}`;
                                  const isExpanded = expandedAccounts.has(groupKey);
                                  return (
                                    <div key={groupKey} className="border border-red-100 rounded-lg overflow-hidden">
                                      {/* Account Header — clickable */}
                                      <button
                                        onClick={() => toggleAccountExpand(groupKey)}
                                        className="w-full flex items-center justify-between px-4 py-2.5 bg-red-50/70 hover:bg-red-100/70 transition-colors text-left"
                                      >
                                        <div className="flex items-center gap-2">
                                          {isExpanded ? (
                                            <ChevronUp className="w-4 h-4 text-red-400" />
                                          ) : (
                                            <ChevronDown className="w-4 h-4 text-red-400" />
                                          )}
                                          <span className="text-sm font-semibold text-red-800">{accountName}</span>
                                          <span className="text-xs text-red-400">({group.accountCode})</span>
                                          <span className="bg-red-100 text-red-600 text-xs font-medium px-1.5 py-0.5 rounded">
                                            {group.entries.length} {group.entries.length === 1 ? "entry" : "entries"}
                                          </span>
                                        </div>
                                        <span className="font-mono font-bold text-red-700 text-sm">
                                          {group.subtotal.toLocaleString()}
                                        </span>
                                      </button>
                                      {/* Expanded entries */}
                                      {isExpanded && (
                                        <div className="overflow-x-auto">
                                          <table className="min-w-full text-sm">
                                            <thead>
                                              <tr className="bg-red-50/40 text-red-600">
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">#</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_date", "Date")}</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_type", "Type")}</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_narration", "Narration")}</th>
                                                <th className="text-left px-3 py-1.5 font-semibold text-xs">{t("col_dr_cr", "Dr/Cr")}</th>
                                                <th className="text-right px-3 py-1.5 font-semibold text-xs">{t("col_amount", "Amount")}</th>
                                              </tr>
                                            </thead>
                                            <tbody className="divide-y divide-red-50">
                                              {group.entries.map((entry, idx) => (
                                                <tr key={entry.CodeD} className="hover:bg-red-50/30 transition-colors">
                                                  <td className="px-3 py-1.5 text-gray-400 text-xs">{idx + 1}</td>
                                                  <td className="px-3 py-1.5 text-gray-700 whitespace-nowrap text-xs">{new Date(entry.TDate).toLocaleDateString()}</td>
                                                  <td className="px-3 py-1.5 text-gray-500 text-xs">{entry.TBook}</td>
                                                  <td className="px-3 py-1.5 text-gray-500 text-xs max-w-[200px] truncate">{entry.Narration || "—"}</td>
                                                  <td className="px-3 py-1.5">
                                                    <span className={`inline-flex px-1.5 py-0.5 rounded text-xs font-semibold ${
                                                      entry.TStatus === "Dr" ? "bg-orange-100 text-orange-700" : "bg-green-100 text-green-700"
                                                    }`}>
                                                      {entry.TStatus}
                                                    </span>
                                                  </td>
                                                  <td className="px-3 py-1.5 text-right font-mono font-semibold text-gray-800 text-xs">{entry.Amount.toLocaleString()}</td>
                                                </tr>
                                              ))}
                                            </tbody>
                                            <tfoot>
                                              <tr className="bg-red-50/50">
                                                <td colSpan={5} className="px-3 py-1.5 text-right text-xs font-semibold text-red-600">{t("label_subtotal", "Subtotal")}</td>
                                                <td className="px-3 py-1.5 text-right font-mono font-bold text-red-700 text-xs">{group.subtotal.toLocaleString()}</td>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                      )}
                                    </div>
                                  );
                                })}
                              </div>
                              {/* Grand Total */}
                              <div className="flex justify-between items-center mt-2 px-4 py-2 bg-red-100 rounded-lg">
                                <span className="text-sm font-semibold text-red-800">{t("label_expense_grand_total", "Expense Grand Total")}</span>
                                <span className="font-mono font-bold text-red-900">{item.ExpenseTotals.TotalAmount.toLocaleString()}</span>
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

      // ── STEP 3: Confirm & Close (close mode) or Results (revert mode) ──
      case 3:
        if (wizardMode === "revert") {
          // REVERT MODE: Step 3 = Results
          return (
            <div>
              <div className="mb-5">
                <div className="flex items-center gap-2 p-3 bg-green-50 border border-green-200 rounded-xl">
                  <CheckCircle className="w-5 h-5 text-green-600 shrink-0" />
                  <p className="text-sm font-medium text-green-700">
                    Month closing entries have been reverted. Selected months are now Open again.
                  </p>
                </div>
              </div>

              {revertResults && (
                <div className="space-y-4">
                  {revertResults.map((item) => (
                    <div
                      key={item.ClosingCode}
                      className={`border-2 rounded-xl p-5 ${
                        item.Reverted
                          ? "border-green-200 bg-green-50/50"
                          : "border-red-200 bg-red-50/50"
                      }`}
                    >
                      <div className="flex items-center justify-between mb-3">
                        <h3 className="text-base font-semibold text-gray-800">
                          {item.MonthName} {item.VYear}
                        </h3>
                        <span className={`inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold ${
                          item.Reverted
                            ? "bg-green-100 text-green-700"
                            : "bg-red-100 text-red-700"
                        }`}>
                          {item.Reverted ? (
                            <><CheckCircle className="w-3.5 h-3.5" /> Reverted</>
                          ) : (
                            <><AlertTriangle className="w-3.5 h-3.5" /> Failed</>
                          )}
                        </span>
                      </div>

                      <div className="grid grid-cols-2 gap-3">
                        <div className="text-center bg-white/80 rounded-lg p-2">
                          <p className="text-xs text-gray-500">GLTD Entries Deleted</p>
                          <p className="text-sm font-bold text-amber-700">{item.DeletedGLTDEntries}</p>
                        </div>
                        <div className="text-center bg-white/80 rounded-lg p-2">
                          <p className="text-xs text-gray-500">GLTH Records Deleted</p>
                          <p className="text-sm font-bold text-amber-700">{item.DeletedGLTHCodes?.length || 0}</p>
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              )}
            </div>
          );
        }

        // CLOSE MODE: Step 3 = Confirm & Close
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
    if (wizardMode === "revert") {
      // REVERT WIZARD FOOTER
      switch (wizardStep) {
        case 1:
          return (
            <>
              <button onClick={closeWizard} className="px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
                {t("btn_cancel", "Cancel")}
              </button>
              <button
                onClick={() => { setWizardStep(2); setClosingError(null); }}
                disabled={selectedCodes.size === 0}
                className="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 disabled:bg-gray-300 disabled:cursor-not-allowed transition"
              >
                <ArrowRight className="w-4 h-4" />
                Next: Confirm Revert
              </button>
            </>
          );
        case 2:
          return (
            <>
              <button
                onClick={() => { setWizardStep(1); setClosingError(null); }}
                disabled={isReverting}
                className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 disabled:opacity-50 transition"
              >
                <ChevronLeft className="w-4 h-4" />
                {t("btn_back", "Back")}
              </button>
              <button
                onClick={handleRevertMonths}
                disabled={isReverting}
                className="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-red-600 hover:bg-red-700 disabled:bg-red-400 disabled:cursor-not-allowed transition shadow-sm"
              >
                {isReverting ? <Loader2 className="w-4 h-4 animate-spin" /> : <RotateCcw className="w-4 h-4" />}
                {isReverting ? "Reverting..." : "Revert Selected Months"}
              </button>
            </>
          );
        case 3:
          return (
            <>
              <button
                onClick={() => { closeWizard(); openWizard("revert"); }}
                className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition"
              >
                <RotateCcw className="w-4 h-4" />
                Revert More Months
              </button>
              <button
                onClick={closeWizard}
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
    }

    // CLOSE WIZARD FOOTER
    switch (wizardStep) {
      case 1:
        return (
          <>
            <button onClick={closeWizard} className="px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
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
              onClick={() => { closeWizard(); openWizard(); }}
              className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition"
            >
              <RotateCcw className="w-4 h-4" />
              {t("btn_close_more", "Close More Months")}
            </button>
            <button
              onClick={closeWizard}
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
              <div>
                <h1 className="text-2xl font-bold text-gray-900">
                  {t("page_title_closing_month_list", "Closing Months")}
                </h1>
                <p className="text-sm text-gray-500 mt-1">
                  {t("closing_month_subtitle", "Manage monthly closing periods and post profit/loss entries")}
                </p>
              </div>
              <div className="flex items-center gap-3">
                {closedMonths.length > 0 && !wizardOpen && (
                  <button
                    onClick={() => openWizard("revert")}
                    className="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 transition shadow-sm"
                  >
                    <RotateCcw className="w-4 h-4" />
                    Revert Closing
                  </button>
                )}
                {openMonths.length > 0 && !wizardOpen && (
                  <button
                    onClick={() => openWizard("close")}
                    className="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-green-600 hover:bg-green-700 transition shadow-sm"
                  >
                    <Play className="w-4 h-4" />
                    {t("btn_start_closing", "Start Closing")}
                  </button>
                )}
                <button
                  onClick={handleAddClosingMonth}
                  disabled={isLoading}
                  className="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:bg-gray-300 disabled:cursor-not-allowed transition shadow-sm"
                >
                  <Plus className="w-4 h-4" />
                  {t("btn_add_closing_month_action", "Add Month")}
                </button>
              </div>
            </div>
          </header>

          <main className="flex-1 overflow-y-auto">
            <div className="p-6">

              {/* ─── WIZARD PANEL ─── */}
              {wizardOpen && (
                <div className="bg-white rounded-2xl shadow-xl mb-6 border border-gray-200 overflow-hidden">
                  {/* Stepper Header */}
                  <div className={`bg-gradient-to-r ${wizardMode === "revert" ? "from-amber-600 to-amber-700" : "from-blue-600 to-blue-700"} px-6 py-4`}>
                    <div className="flex items-center justify-between">
                      {(wizardMode === "close" ? WIZARD_STEPS_CLOSE : WIZARD_STEPS_REVERT).map((step, index) => {
                        const steps = wizardMode === "close" ? WIZARD_STEPS_CLOSE : WIZARD_STEPS_REVERT;
                        const StepIcon = step.icon;
                        const isActive = wizardStep === step.id;
                        const isCompleted = wizardStep > step.id;
                        return (
                          <React.Fragment key={step.id}>
                            <div className="flex items-center gap-2">
                              <div
                                className={`w-9 h-9 rounded-full flex items-center justify-center transition-all ${
                                  isActive
                                    ? `bg-white ${wizardMode === "revert" ? "text-amber-600" : "text-blue-600"} shadow-lg scale-110`
                                    : isCompleted
                                    ? `${wizardMode === "revert" ? "bg-amber-400" : "bg-blue-400"} text-white`
                                    : `${wizardMode === "revert" ? "bg-amber-500/40 text-amber-200" : "bg-blue-500/40 text-blue-200"}`
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
                                    ? `${wizardMode === "revert" ? "text-amber-200" : "text-blue-200"}`
                                    : `${wizardMode === "revert" ? "text-amber-300/60" : "text-blue-300/60"}`
                                }`}
                              >
                                {step.label}
                              </span>
                            </div>
                            {index < steps.length - 1 && (
                              <div className={`flex-1 h-0.5 mx-3 rounded ${isCompleted
                                ? `${wizardMode === "revert" ? "bg-amber-400" : "bg-blue-400"}`
                                : `${wizardMode === "revert" ? "bg-amber-500/30" : "bg-blue-500/30"}`}`} />
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
              )}

              {/* All months closed info */}
              {closingMonthsList.length > 0 && openMonths.length === 0 && !wizardOpen && (
                <div className="flex items-center gap-3 p-4 bg-green-50 border border-green-200 rounded-xl mb-6">
                  <CheckCircle className="w-5 h-5 text-green-600 shrink-0" />
                  <div>
                    <p className="font-semibold text-green-700">{t("all_months_closed_title", "All Months Closed")}</p>
                    <p className="text-sm text-green-600 mt-0.5">
                      {t("all_months_closed_msg", "All closing months have been finalized. Click 'Add Month' to create the next period.")}
                    </p>
                  </div>
                </div>
              )}

              {closingMonthsList.length === 0 && (
                <div className="flex justify-center items-center h-64 bg-white rounded-lg shadow-md">
                  <div className="text-center">
                    <h2 className="text-xl font-semibold text-gray-600 mb-2">
                      {t("table_no_records")}
                    </h2>
                    <p className="text-gray-500">
                      {search
                        ? t("no_matching_closing_months", "No closing months match your search criteria.")
                        : t("no_closing_months", "There are no closing months to display.")}
                    </p>
                  </div>
                </div>
              )}

              {/* Table */}
              {closingMonthsList.length > 0 && (
                <PaginatedTable
                  columns={columns}
                  data={paginatedData}
                  page={page}
                  lookupOptions={lookupOptions}
                  pageSize={pageSize}
                  total={filteredData.length}
                  onPageChange={setPage}
                  onPageSizeChange={(size) => {
                    setPageSize(size);
                    setPage(1);
                  }}
                  renderActions={(row) => {
                    const rowObj = row as Record<string, unknown>;
                    const isOpen = rowObj.CloseStatus === "Open";
                    return (
                      <div className="flex gap-2 items-center">
                        {isOpen ? (
                          <span className="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700">
                            <span className="w-1.5 h-1.5 rounded-full bg-green-500" />
                            Open
                          </span>
                        ) : (
                          <span className="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                            <CheckCircle className="w-3 h-3" />
                            Closed
                          </span>
                        )}

                        {isOpen && (
                          <button
                            className="cursor-pointer text-red-600 px-2 py-1 rounded hover:text-red-800"
                            onClick={() => {
                              setRowToDelete(rowObj);
                              setDeleteModalOpen(true);
                            }}
                            title="Delete"
                          >
                            <TrashIcon className="w-5 h-5" />
                          </button>
                        )}
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

              {/* Delete Confirmation Modal */}
              {deleteModalOpen && rowToDelete && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/30">
                  <div className="bg-white rounded-lg shadow-lg p-8 max-w-sm w-full relative">
                    <button
                      className="absolute top-2 right-2 text-gray-500 hover:text-gray-700"
                      onClick={() => setDeleteModalOpen(false)}
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-xl font-bold mb-4 text-red-600">
                      {t("confirm_delete_title", "Confirm Delete")}
                    </h2>
                    <p className="mb-6">
                      {t("confirm_delete_msg", "Are you sure you want to delete this record?")}
                    </p>
                    <div className="flex justify-end gap-2">
                      <button
                        className="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300"
                        onClick={() => setDeleteModalOpen(false)}
                      >
                        {t("btn_cancel", "Cancel")}
                      </button>
                      <button
                        className={`px-4 py-2 rounded text-white ${
                          isDeleting
                            ? "bg-red-400 cursor-not-allowed"
                            : "bg-red-700 hover:bg-red-800"
                        }`}
                        onClick={() => deleteClosingMonth(rowToDelete)}
                        disabled={isDeleting}
                      >
                        {isDeleting ? t("btn_deleting", "Deleting...") : t("btn_delete", "Delete")}
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
