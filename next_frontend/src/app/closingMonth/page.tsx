"use client";

import React, { useState, useEffect, useMemo } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import PaginatedTable, {
  TableColumn,
  SortDirection,
} from "@/components/PaginatedTable";
import { TrashIcon, XMarkIcon } from "@heroicons/react/24/solid";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
import {
  fetchClosingMonths,
  removeClosingMonth,
  selectClosingMonthState,
} from "@/Redux/slices/sClosingMonth/sClosingMonth";
import { deleteData } from "@/services/httpService";
import { useRouter } from "next/navigation";
import { fetchGLTDList, gltdState } from "@/Redux/slices/GLTDSlice/GLTDSlice";
import { useTranslations } from "@/hooks/useTranslations";
import { toast } from "react-hot-toast";
import {
  CheckCircle,
  Plus,
  Play,
  RotateCcw,
  Lock,
} from "lucide-react";
import { months } from "./types";

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
  const columns: TableColumn[] = columnDefs.map((col) => ({
    key: col.key,
    label: t(col.labelKey),
    sortable: col.sortable,
  }));

  const { closingMonthsList, isLoading } = useSelector(selectClosingMonthState);
  const lookupOptions = { VMonth: months };

  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>(null);

  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<Record<string, unknown> | null>(null);
  const [isDeleting, setIsDeleting] = useState(false);

  const { gltdList } = useSelector(gltdState);

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

  const openMonths = useMemo(() => {
    return closingMonthsList.filter((m) => m.CloseStatus === "Open");
  }, [closingMonthsList]);

  const closedMonths = useMemo(() => {
    return closingMonthsList.filter((m) => m.CloseStatus === "Closed");
  }, [closingMonthsList]);

  // Determine which open months are eligible to close (previous month must be closed or it's the first)
  const closableCodes = useMemo(() => {
    const sorted = [...closingMonthsList].sort((a, b) => {
      const yearDiff = Number(a.VYear) - Number(b.VYear);
      if (yearDiff !== 0) return yearDiff;
      return Number(a.VMonth) - Number(b.VMonth);
    });

    const closable = new Set<number>();
    for (let i = 0; i < sorted.length; i++) {
      const m = sorted[i];
      if (m.CloseStatus !== "Open") continue;

      // First month overall or previous month is closed
      if (i === 0) {
        closable.add(Number(m.Code));
      } else {
        const prev = sorted[i - 1];
        if (prev.CloseStatus === "Closed") {
          closable.add(Number(m.Code));
        }
      }
      // Only the first eligible open month can be closed individually
      break;
    }
    return closable;
  }, [closingMonthsList]);

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
                {closedMonths.length > 0 && (
                  <button
                    onClick={() => router.push("/closingMonth/revert")}
                    className="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-amber-600 hover:bg-amber-700 transition shadow-sm"
                  >
                    <RotateCcw className="w-4 h-4" />
                    Revert Closing
                  </button>
                )}
                {openMonths.length > 0 && (
                  <button
                    onClick={() => router.push("/closingMonth/close")}
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
              {/* All months closed info */}
              {closingMonthsList.length > 0 && openMonths.length === 0 && (
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
                    const code = Number(rowObj.Code);
                    const canClose = isOpen && closableCodes.has(code);
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
                            className={`inline-flex items-center gap-1 px-3 py-1.5 rounded-lg text-xs font-semibold transition ${
                              canClose
                                ? "text-white bg-green-600 hover:bg-green-700 cursor-pointer"
                                : "text-gray-400 bg-gray-100 cursor-not-allowed"
                            }`}
                            disabled={!canClose}
                            onClick={() => {
                              if (canClose) {
                                router.push("/closingMonth/close");
                              }
                            }}
                            title={canClose ? "Close this month" : "Close the previous month first"}
                          >
                            <Lock className="w-3.5 h-3.5" />
                            Close
                          </button>
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
