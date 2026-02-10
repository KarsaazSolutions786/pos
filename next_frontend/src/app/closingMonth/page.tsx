"use client";

import React, { useState, useEffect } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import PaginatedTable, {
  TableColumn,
  SortDirection,
} from "@/components/PaginatedTable";
import {
  PencilSquareIcon,
  EyeIcon,
  TrashIcon,
  XMarkIcon,
  PlusIcon,
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
import { SaveButton } from "@/components/ui";
import { fetchGLTDList, gltdState } from "@/Redux/slices/GLTDSlice/GLTDSlice";
import { useTranslations } from "@/hooks/useTranslations";


const columnDefs = [
  { key: "Code", labelKey: "table_col_code_closing", sortable: true },
  { key: "VMonth", labelKey: "table_col_month", sortable: true },
  { key: "VYear", labelKey: "table_col_year", sortable: true },
  { key: "CloseStatus", labelKey: "table_col_status", sortable: true },
  { key: "UserName", labelKey: "table_col_created_by", sortable: true },
];

export default function ClosingMonthPage() {
  const { t, isRTL } = useTranslations();
  const { user } = useAuth();
  const dispatch = useDispatch();
  const router = useRouter();
  const columns: TableColumn[] = columnDefs.map((col) => ({ key: col.key, label: t(col.labelKey), sortable: col.sortable }));

  const { closingMonthsList, isLoading } = useSelector(selectClosingMonthState);
  console.log("🚀 ~ ClosingMonthPage ~ closingMonthsList:", closingMonthsList)
  const lookupOptions = {
    VMonth: months,
  };

  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>(null);

  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<Record<string, unknown> | null>(
    null
  );
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<Record<string, unknown> | null>(
    null
  );
  const [isDeleting, setIsDeleting] = useState(false);
  const [deleteId, setDeleteId] = useState<string | null>(null);
const { gltdList, error, total } = useSelector(gltdState);
console.log("🚀 ~ ClosingMonthPage ~ gltdList:", gltdList)



  useEffect(() => {
     dispatch(fetchClosingMonths(user?.apiKey));
     dispatch(fetchGLTDList());
  }, [dispatch, user?.apiKey]);
const filteredData = closingMonthsList.filter((row) => {
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


  const sortedData = [...filteredData];
  if (sortBy && sortDirection) {
    sortedData.sort((a, b) => {
      const aVal = a[sortBy];
      const bVal = b[sortBy];
      if (aVal === undefined || bVal === undefined) return 0;

      return sortDirection === "asc"
        ? String(aVal).localeCompare(String(bVal))
        : String(bVal).localeCompare(String(aVal));
    });
  }

  const paginatedData = sortedData.slice(
    (page - 1) * pageSize,
    page * pageSize
  );

 const handleAddClosingMonth = async () => {
  try {
    let nextMonth, nextYear;

    if (!closingMonthsList || closingMonthsList.length === 0) {
      // ⚙️ No previous month found → use current date
      const now = new Date();
      nextMonth = now.getMonth() + 1; // JS months are 0-based
      nextYear = now.getFullYear();
    } else {
      // ✅ Get last closing month
      const lastMonth = closingMonthsList[closingMonthsList.length - 1];
      nextMonth = parseInt(lastMonth.VMonth);
      nextYear = parseInt(lastMonth.VYear);

      // Increment month/year
      if (nextMonth === 12) {
        nextMonth = 1;
        nextYear += 1;
      } else {
        nextMonth += 1;
      }
    }

    // Prepare form data
    const form = new FormData();
    form.append("VMonth", String(nextMonth).padStart(2, "0"));
    form.append("VYear", String(nextYear));
    form.append("CloseStatus", "Open");
    form.append("UserName", user?.username || "unknown");

    const response = await fetch(
      "/api/v1.php?table=sClosingMonth&action=insert",
      {
        method: "POST",
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
        },
        body: form,
      }
    );

    const result = await response.json();

    if (result.success) {
      alert(`Closing Month ${nextMonth}/${nextYear} added successfully!`);
      dispatch(fetchClosingMonths(user?.apiKey));
      router.push("/closingMonth");
    } else {
      throw new Error(result.message || "Failed to add closing month");
    }
  } catch (error) {
    console.error("Error adding closing month:", error);
    alert("Error while saving. Please try again.");
  }
};


const deleteClosingMonth = async (closingMonth: any) => {
  try {
    // Extract VMonth and VYear from closing month
    const { Code, VMonth, VYear } = closingMonth;

    // ✅ Check if GLTD has records for this month/year
    const hasDataInGLTD = gltdList.some((item) => {
      if (!item.TDate) return false;

      const [day, month, year] = item.TDate.split("/"); // format dd/mm/yyyy
      return parseInt(month) === parseInt(VMonth) && parseInt(year) === parseInt(VYear);
    });

    if (hasDataInGLTD) {
 alert("❌ This closing month cannot be deleted because its records already exist in the accounts.");
      return;
    }

    // ✅ Proceed with delete if no GLTD data
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
            <p className="text-gray-600">Loading closing months...</p>
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
              {/* <button
                onClick={() => router.push("/closingMonth")}
                className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
              >
                Back
              </button> */}
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_closing_month_list")}
              </h1>
              <SaveButton
                onClick={handleAddClosingMonth}
                disabled={isLoading}
              >
                {isLoading ? "Saving..." : t("btn_add_closing_month_action")}
              </SaveButton>
            </div>
          </header>

          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {closingMonthsList.length === 0 && (
                <div className="flex justify-center items-center h-64 bg-white rounded-lg shadow-md">
                  <div className="text-center">
                    <h2 className="text-xl font-semibold text-gray-600 mb-2">
                      {t("table_no_records")}
                    </h2>
                    <p className="text-gray-500">
                      {search
                        ? "No closing months match your search criteria."
                        : "There are no closing months to display."}
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
  return (
    <div className="flex gap-2">
      {/* View button */}
     

      {/* Edit button */}
   

      {/* Delete button */}
      <button
        className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800"
        onClick={() => {
          setRowToDelete(rowObj);
          setDeleteId(String(rowObj.Code));
          setDeleteModalOpen(true);
        }}
        title="Delete"
      >
        <TrashIcon className="w-6 h-6" />
      </button>
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

              {viewModalOpen && selectedRow && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
                  <div className="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full relative">
                    <button
                      className="absolute top-3 right-3 text-gray-400 hover:text-gray-700"
                      onClick={() => setViewModalOpen(false)}
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-2xl font-bold text-center mb-8">
                      Closing Month Details
                    </h2>
                    <div className="grid grid-cols-2 gap-x-6">
                      {Object.entries(selectedRow).map(([key, value]) => (
                        <React.Fragment key={key}>
                          <div className="text-gray-500 font-medium capitalize py-2 border-b">
                            {key}
                          </div>
                          <div className="text-right font-semibold text-gray-900 py-2 border-b">
                            {String(value)}
                          </div>
                        </React.Fragment>
                      ))}
                    </div>
                  </div>
                </div>
              )}

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
                      Confirm Delete
                    </h2>
                    <p className="mb-6">
                      Are you sure you want to delete this record?
                    </p>
                    <div className="flex justify-end gap-2">
                      <button
                        className="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300"
                        onClick={() => setDeleteModalOpen(false)}
                      >
                        Cancel
                      </button>
                      <button
                        className={`px-4 py-2 rounded text-white ${isDeleting
                            ? "bg-red-400 cursor-not-allowed"
                            : "bg-red-700 hover:bg-red-800"
                          }`}
                        onClick={() => deleteClosingMonth(rowToDelete)}
                        disabled={isDeleting}
                      >
                        {isDeleting ? "Deleting..." : "Delete"}
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
