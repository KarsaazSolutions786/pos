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
  CheckCircle,
  AlertTriangle,
  Loader2,
  Calendar,
  Lock,
  ChevronLeft,
  RotateCcw,
  ArrowRight,
  ArrowLeft,
} from "lucide-react";
import {
  RevertResult,
  WIZARD_STEPS_REVERT,
  getMonthLabel,
} from "../types";

export default function RevertWizardPage() {
  const { t } = useTranslations();
  const { user } = useAuth();
  const dispatch = useDispatch();
  const router = useRouter();

  const { closingMonthsList, isLoading } = useSelector(selectClosingMonthState);

  const [wizardStep, setWizardStep] = useState(1);
  const [selectedCodes, setSelectedCodes] = useState<Set<string>>(new Set());
  const [isReverting, setIsReverting] = useState(false);
  const [revertResults, setRevertResults] = useState<RevertResult[] | null>(null);
  const [closingError, setClosingError] = useState<string | null>(null);

  useEffect(() => {
    dispatch(fetchClosingMonths(user?.apiKey));
  }, [dispatch, user?.apiKey]);

  // Closed months sorted reverse chronologically (descending)
  const closedMonths = useMemo(() => {
    return closingMonthsList
      .filter((m) => m.CloseStatus === "Closed")
      .sort((a, b) => {
        const yearDiff = Number(b.VYear) - Number(a.VYear);
        if (yearDiff !== 0) return yearDiff;
        return Number(b.VMonth) - Number(a.VMonth);
      });
  }, [closingMonthsList]);

  // Reverse sequential selection logic
  const selectableRevertCodes = useMemo(() => {
    const selectable = new Set<string>();
    for (const m of closedMonths) {
      const code = String(m.Code);
      if (selectable.size === 0) {
        selectable.add(code);
      } else {
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
        const idx = closedMonths.findIndex((m) => String(m.Code) === code);
        for (let i = idx; i < closedMonths.length; i++) {
          next.delete(String(closedMonths[i].Code));
        }
      } else {
        const idx = closedMonths.findIndex((m) => String(m.Code) === code);
        for (let i = 0; i <= idx; i++) {
          next.add(String(closedMonths[i].Code));
        }
      }
      return next;
    });
  };

  const toggleSelectAll = () => {
    if (selectedCodes.size === closedMonths.length) {
      setSelectedCodes(new Set());
    } else {
      setSelectedCodes(new Set(closedMonths.map((m) => String(m.Code))));
    }
  };

  const getSelectedCodesArray = (): number[] => {
    // Sort codes in reverse chronological order (by year/month desc) for revert
    const selected = Array.from(selectedCodes).map(Number);
    return selected.sort((a, b) => {
      const mA = closedMonths.find((m) => Number(m.Code) === a);
      const mB = closedMonths.find((m) => Number(m.Code) === b);
      if (!mA || !mB) return b - a;
      const yearDiff = Number(mB.VYear) - Number(mA.VYear);
      if (yearDiff !== 0) return yearDiff;
      return Number(mB.VMonth) - Number(mA.VMonth);
    });
  };

  const selectedMonthsSummary = useMemo(() => {
    return getSelectedCodesArray().map((code) => {
      const m = closingMonthsList.find((item) => Number(item.Code) === code);
      if (!m) return `Code ${code}`;
      return `${getMonthLabel(Number(m.VMonth))} ${m.VYear}`;
    });
  }, [selectedCodes, closingMonthsList]);

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
        setWizardStep(3);
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
        const totalCount = closedMonths.length;
        return (
          <div>
            <div className="mb-5">
              <h3 className="text-base font-semibold text-gray-800 mb-1">
                {t("wizard_revert_step1_title", "Choose which months to revert")}
              </h3>
              <p className="text-sm text-gray-500">
                {t("wizard_revert_step1_desc", "Select closed months to revert. They must be reverted in reverse chronological order — most recent first.")}
              </p>
            </div>

            {/* Sequential order info */}
            <div className="flex items-center gap-2 p-3 bg-amber-50 border-amber-200 border rounded-lg mb-4">
              <AlertTriangle className="w-4 h-4 text-amber-600 shrink-0" />
              <span className="text-sm text-amber-700">
                Months must be reverted in reverse order. Selecting a month auto-selects all months after it.
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
                  : t("btn_select_all_closed", "Select All Closed")}
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
                  No closed months available to revert.
                </p>
              </div>
            ) : (
              <div className="flex flex-wrap gap-2 mb-6">
                {closedMonths.map((m) => {
                  const code = String(m.Code);
                  const isSelected = selectedCodes.has(code);
                  const isSelectable = selectableRevertCodes.has(code);
                  return (
                    <button
                      key={code}
                      onClick={() => isSelectable && toggleSelect(code)}
                      disabled={!isSelectable}
                      title={!isSelectable ? "Select the more recent months first" : undefined}
                      className={`inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-medium border-2 transition-all duration-200 ${
                        isSelected
                          ? "border-amber-500 bg-amber-50 text-amber-700 shadow-md ring-2 ring-amber-200"
                          : isSelectable
                            ? "border-gray-200 bg-white text-gray-600 hover:border-gray-300 hover:bg-gray-50 cursor-pointer"
                            : "border-gray-100 bg-gray-50 text-gray-400 cursor-not-allowed opacity-60"
                      }`}
                    >
                      <span
                        className={`w-5 h-5 rounded border-2 flex items-center justify-center text-xs transition-all ${
                          isSelected
                            ? "border-amber-500 bg-amber-500 text-white"
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

      // ── STEP 2: Confirm Revert ──
      case 2:
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

      // ── STEP 3: Results ──
      case 3:
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
              onClick={() => { setWizardStep(1); setSelectedCodes(new Set()); setRevertResults(null); setClosingError(null); }}
              className="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition"
            >
              <RotateCcw className="w-4 h-4" />
              Revert More Months
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
                  <h1 className="text-2xl font-bold text-gray-900">Revert Closing</h1>
                  <p className="text-sm text-gray-500 mt-1">Revert closed months and delete GL closing entries</p>
                </div>
              </div>
            </div>
          </header>

          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <div className="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                {/* Stepper Header */}
                <div className="bg-gradient-to-r from-amber-600 to-amber-700 px-6 py-4">
                  <div className="flex items-center justify-between">
                    {WIZARD_STEPS_REVERT.map((step, index) => {
                      const StepIcon = step.icon;
                      const isActive = wizardStep === step.id;
                      const isCompleted = wizardStep > step.id;
                      return (
                        <React.Fragment key={step.id}>
                          <div className="flex items-center gap-2">
                            <div
                              className={`w-9 h-9 rounded-full flex items-center justify-center transition-all ${
                                isActive
                                  ? "bg-white text-amber-600 shadow-lg scale-110"
                                  : isCompleted
                                  ? "bg-amber-400 text-white"
                                  : "bg-amber-500/40 text-amber-200"
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
                                  ? "text-amber-200"
                                  : "text-amber-300/60"
                              }`}
                            >
                              {step.label}
                            </span>
                          </div>
                          {index < WIZARD_STEPS_REVERT.length - 1 && (
                            <div className={`flex-1 h-0.5 mx-3 rounded ${isCompleted ? "bg-amber-400" : "bg-amber-500/30"}`} />
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
