"use client";

import React, { useState } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import PaginatedTable, {
  TableColumn,
  SortDirection,
} from "@/components/PaginatedTable";
import { useRouter } from "next/navigation";
import {
  PencilSquareIcon,
  EyeIcon,
  TrashIcon,
  XMarkIcon,
  PlusIcon,
} from "@heroicons/react/24/solid";

// Generate 50 mock items for testing
const dummyData = Array.from({ length: 50 }, (_, i) => ({
  id: i + 1,
  code: `C${(i + 1).toString().padStart(2, "0")}`,
  codeD: `D${(i + 1).toString().padStart(2, "0")}`,
  status: ["active", "inactive", "pending"][i % 3],
  amount: Math.floor(Math.random() * 1000) + 100,
}));

export default function GLTDPage() {
  const [page, setPage] = useState(1);
  const [pageSize, setPageSize] = useState(10);
  const total = 2; // Replace with real total from API
  const router = useRouter();
  const [viewModalOpen, setViewModalOpen] = useState(false);
  const [selectedRow, setSelectedRow] = useState<Record<
    string,
    unknown
  > | null>(null);
  const [deleteModalOpen, setDeleteModalOpen] = useState(false);
  const [rowToDelete, setRowToDelete] = useState<Record<
    string,
    unknown
  > | null>(null);
  const [tableData, setTableData] = useState(dummyData);
  const [search, setSearch] = useState("");
  const [sortBy, setSortBy] = useState<string | undefined>(undefined);
  const [sortDirection, setSortDirection] = useState<SortDirection>(null);

  const columns: TableColumn[] = [
    { key: "code", label: "Code", sortable: true },
    { key: "codeD", label: "Code D", sortable: true },
    { key: "status", label: "Status", sortable: true },
    { key: "amount", label: "Amount", sortable: true },
  ];

  // Filtered and paginated data for table
  const filteredData = tableData.filter((row) => {
    const rowObj = row as Record<string, unknown>;
    const searchStr = search.toLowerCase();
    return (
      String(rowObj.code).toLowerCase().includes(searchStr) ||
      String(rowObj.codeD).toLowerCase().includes(searchStr) ||
      String(rowObj.status ?? "")
        .toLowerCase()
        .includes(searchStr) ||
      String(rowObj.amount).toLowerCase().includes(searchStr)
    );
  });
  // Sort filtered data
  const sortedData = [...filteredData];
  if (sortBy && sortDirection) {
    sortedData.sort((a, b) => {
      const aVal = (a as Record<string, unknown>)[sortBy];
      const bVal = (b as Record<string, unknown>)[sortBy];
      if (aVal === undefined || bVal === undefined) return 0;
      if (typeof aVal === "number" && typeof bVal === "number") {
        return sortDirection === "asc" ? aVal - bVal : bVal - aVal;
      }
      return sortDirection === "asc"
        ? String(aVal).localeCompare(String(bVal))
        : String(bVal).localeCompare(String(aVal));
    });
  }
  const paginatedData = sortedData.slice(
    (page - 1) * pageSize,
    page * pageSize
  );

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">GLTD List</h1>
              <button
                className="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium flex items-center gap-2"
                onClick={() => router.push("/gltd/add")}
              >
                Add <PlusIcon className="w-4 h-4" />
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <PaginatedTable
                columns={columns}
                data={paginatedData}
                page={page}
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
                      <button
                        className="cursor-pointer text-blue-600 px-3 py-1 rounded hover:text-blue-800 transition flex items-center justify-center"
                        onClick={() => router.push(`/gltd/edit/${rowObj.id}`)}
                        title="Edit"
                      >
                        <PencilSquareIcon className="w-6 h-6" />
                      </button>
                      <button
                        className="cursor-pointer text-green-600 px-3 py-1 rounded hover:text-green-800 transition flex items-center justify-center"
                        onClick={() => {
                          setSelectedRow(rowObj);
                          setViewModalOpen(true);
                        }}
                        title="View"
                      >
                        <EyeIcon className="w-6 h-6" />
                      </button>
                      <button
                        className="cursor-pointer text-red-600 px-3 py-1 rounded hover:text-red-800 transition flex items-center justify-center"
                        onClick={() => {
                          setRowToDelete(rowObj);
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
              {/* Modal for View */}
              {viewModalOpen && selectedRow && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
                  <div className="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full relative">
                    <button
                      className="cursor-pointer absolute top-3 right-3 text-gray-400 hover:text-gray-800"
                      onClick={() => setViewModalOpen(false)}
                      title="Close"
                    >
                      <XMarkIcon className="w-6 h-6" />
                    </button>
                    <h2 className="text-2xl font-bold text-center mb-8 tracking-tight">
                      GLTD Details
                    </h2>
                    <div className="grid grid-cols-2 gap-y-0 gap-x-6">
                      {Object.entries(selectedRow).map(
                        ([key, value], idx, arr) => (
                          <React.Fragment key={key}>
                            <div className="text-gray-500 font-medium capitalize flex items-center py-3 border-b border-gray-200">
                              {key}
                            </div>
                            <div className="text-right font-semibold text-gray-900 flex items-center justify-end py-3 border-b border-gray-200">
                              {key === "status" ? (
                                <span
                                  className={`px-3 py-1 rounded-full text-xs font-bold
                                ${
                                  value === "active"
                                    ? "bg-green-100 text-green-700"
                                    : value === "inactive"
                                    ? "bg-red-100 text-red-700"
                                    : value === "pending"
                                    ? "bg-yellow-100 text-yellow-700"
                                    : "bg-gray-100 text-gray-800"
                                }
                              `}
                                >
                                  {String(value)}
                                </span>
                              ) : (
                                <span>{String(value)}</span>
                              )}
                            </div>
                          </React.Fragment>
                        )
                      )}
                    </div>
                  </div>
                </div>
              )}
              {/* Modal for Delete Confirmation */}
              {deleteModalOpen && rowToDelete && (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
                  <div className="bg-white rounded-lg shadow-lg p-8 max-w-sm w-full relative">
                    <button
                      className="cursor-pointer absolute top-2 right-2 text-gray-500 hover:text-gray-800"
                      onClick={() => setDeleteModalOpen(false)}
                      title="Close"
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
                        className="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
                        onClick={() => {
                          setTableData((prev) =>
                            prev.filter(
                              (row) =>
                                (row as Record<string, unknown>).id !==
                                rowToDelete.id
                            )
                          );
                          setDeleteModalOpen(false);
                          setRowToDelete(null);
                        }}
                      >
                        Delete
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
