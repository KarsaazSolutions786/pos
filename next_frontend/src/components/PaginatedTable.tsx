import React, { useState } from "react";

export interface TableColumn {
  key: string;
  label: string;
  render?: (value: unknown, row: unknown) => React.ReactNode;
  sortable?: boolean;
}

interface LookupOption {
  value: string;
  label: string;
}

export type SortDirection = "asc" | "desc" | null;

export interface PaginatedTableProps {
  columns: TableColumn[];
  data: unknown[];
  page: number;
  pageSize: number;
  total: number;
  onPageChange: (page: number) => void;
  renderActions?: (row: unknown) => React.ReactNode;
  onSearchChange?: (value: string) => void;
  searchValue?: string;
  onPageSizeChange?: (size: number) => void;
  pageSizeOptions?: number[];
  sortBy?: string;
  sortDirection?: SortDirection;
  onSortChange?: (key: string, direction: SortDirection) => void;
   lookupOptions?: {
    [key: string]: LookupOption[];
  };
}

const PaginatedTable: React.FC<PaginatedTableProps> = ({
  columns,
  data,
  page,
  pageSize,
  total,
  onPageChange,
  renderActions,
  onSearchChange,
  searchValue = "",
  onPageSizeChange,
  pageSizeOptions = [10, 25, 50, 100],
  sortBy,
  sortDirection,
  onSortChange,
  lookupOptions
}) => {
  const totalPages = Math.ceil(total / pageSize);

  const handleSort = (col: TableColumn) => {
    if (!col.sortable || !onSortChange) return;
    let direction: SortDirection = "asc";
    if (sortBy === col.key) {
      direction = sortDirection === "asc" ? "desc" : "asc";
    }
    onSortChange(col.key, direction);
  };

  // Custom render function for special columns
  const renderColumnValue = (
    col: TableColumn,
    value: unknown,
    row: unknown
  ) => {
  
     if (typeof value === "string" && /\d{4}-\d{2}-\d{2}/.test(value)) {
    // Sirf date ka hissa lo
    const dateOnly = value.split(" ")[0];
    return <span>{dateOnly}</span>;
  }

    // Special handling for "Block" column
    if (col.label === "Block") {
      const blockValue = String(value).toLowerCase();
      return (
        <div className="text-center uppercase">
          {blockValue === "yes" ? (
            <span className="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">
              {blockValue}
            </span>
          ) : (
            <span className=" bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs">
              {blockValue}
            </span>
          )}
        </div>
      );
    }
if (col.key === "UnitCode") {
  return (
    <div>
      <span className="text-gray-600">
        {unitOptions.find((opt) => opt.value === value)?.label || value as React.ReactNode}
      </span>
    </div>
  );
}


if (col.key === "ProductGroupCode"  || col.key ===   'VMonth' ||  col.key ===  'business_id'  ||  col.key ===  'group_id'  || col.key === "GroupCode" || col.key === 'AccSubCode' || col.key === 'EmployeeGroup' || col.key === 'BUnit') {
  const groupOpts = lookupOptions?.[col.key] || [];
  return (
    <div>
      <span className="text-gray-600">
        {groupOpts.find((opt) => opt.value == value)?.label || value as React.ReactNode}
      </span>
    </div>
  );
}
    // Default rendering
    return col.render ? col.render(value, row) : (value as React.ReactNode);
  };


    const [unitOptions, setUnitOptions] = useState([
    { value: "1", label: "Pieces (PCS)" },
    { value: "2", label: "Kilograms (KG)" },
    { value: "3", label: "Grams (G)" },
    { value: "4", label: "Liters (L)" },
    { value: "5", label: "Milliliters (ML)" },
    { value: "6", label: "Meters (M)" },
    { value: "7", label: "Centimeters (CM)" },
    { value: "8", label: "Box" },
    { value: "9", label: "Pack" },
    { value: "10", label: "Bottle" },
    { value: "11", label: "Can" },
    { value: "12", label: "Bag" },
  ]);
  
    const [groupOptions, setGroupOptions] = useState([
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
    ]);

  return (
    <div className="bg-white rounded-xl shadow-lg p-6">
      {/* Top Controls */}
      <div className="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
        <div className="flex items-center gap-2">
          <span className="text-gray-800 text-sm">Show</span>
          <select
            className="border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none"
            value={pageSize}
            onChange={(e) =>
              onPageSizeChange && onPageSizeChange(Number(e.target.value))
            }
          >
            {pageSizeOptions.map((opt) => (
              <option key={opt} value={opt}>
                {opt}
              </option>
            ))}
          </select>
          <span className="text-gray-800 text-sm">entries</span>
        </div>
        <div className="flex items-center gap-2">
          <span className="text-gray-800 text-sm flex font-bold items-center gap-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="h-5 w-5 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              strokeWidth={2}
              aria-hidden="true"
            >
              <circle
                cx="11"
                cy="11"
                r="7"
                stroke="currentColor"
                strokeWidth="2"
                fill="none"
              />
              <line
                x1="16.5"
                y1="16.5"
                x2="21"
                y2="21"
                stroke="currentColor"
                strokeWidth="2"
              />
            </svg>
            Search:
          </span>
          <input
            type="text"
            className="border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none"
            value={searchValue}
            onChange={(e) => onSearchChange && onSearchChange(e.target.value)}
            placeholder=""
          />
        </div>
      </div>
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-gray-200">
          <thead className="bg-gray-100">
            <tr>
              {columns.map((col) => (
                <th
                  key={col.key}
                  className={`px-4 py-3 text-left text-xs font-bold text-gray-800 uppercase tracking-wider border-b border-gray-200 select-none ${
                    col.sortable ? "cursor-pointer hover:bg-gray-200" : ""
                  } ${col.label === "Block" ? "text-center" : ""}`}
                  onClick={() => handleSort(col)}
                >
                  <span
                    className={`flex items-center gap-1 ${
                      col.label === "Block" ? "justify-center" : ""
                    }`}
                  >
                    {col.label}
                    {col.sortable && sortBy === col.key && (
                      <span>{sortDirection === "asc" ? "▲" : "▼"}</span>
                    )}
                    {col.sortable && sortBy !== col.key && (
                      <span className="text-gray-300">▲</span>
                    )}
                  </span>
                </th>
              ))}
              {renderActions && (
                <th className="px-4 py-3 text-center text-xs font-bold text-gray-800 uppercase tracking-wider border-b border-gray-200 sticky right-0 z-10">
                  Action
                </th>
              )}
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-gray-300">
            {data.length === 0 ? (
              <tr>
                <td
                  colSpan={columns.length + (renderActions ? 1 : 0)}
                  className="px-4 py-6 text-center text-gray-400"
                >
                  No records found.
                </td>
              </tr>
            ) : (
              data.map((row, idx) => {
                console.log("🚀 ~ row:", row)
                const rowObj = row as Record<string, unknown>;
                return (
                  <tr
                    key={rowObj.id ? String(rowObj.id) : String(idx)}
                    className="hover:bg-gray-200 group transition"
                  >
                    {columns.map((col) => (
                      <td
                        key={col.key}
                        className={`px-4 py-3 whitespace-nowrap text-gray-800 group-hover:font-bold ${
                          col.label === "Block" ? "text-center" : ""
                        }`}
                      >
                        {renderColumnValue(col, rowObj[col.key], row)}
                      </td>
                    ))}
                    {renderActions && (
                      <td className="px-4 py-3 whitespace-nowrap flex justify-center text-gray-800 sticky right-0 bg-white z-10 border-l border-gray-200 group-hover:font-bold">
                        {renderActions(row)}
                      </td>
                    )}
                  </tr>
                );
              })
            )}
          </tbody>
        </table>
      </div>
      {/* Pagination Controls */}
      <div className="flex flex-col md:flex-row md:items-center md:justify-between px-2 py-3 bg-white border-t border-gray-100 mt-2 gap-2">
        <div className="text-sm text-gray-600">
          {`Showing ${(page - 1) * pageSize + 1} to ${Math.min(
            page * pageSize,
            total
          )} of ${total} entries`}
        </div>
        <div className="flex items-center gap-2">
          <button
            onClick={() => onPageChange(page - 1)}
            disabled={page <= 1}
            className="px-3 py-1 rounded bg-gray-200 text-gray-800 disabled:opacity-50 font-semibold flex items-center"
          >
            <span className="mr-1 font-bold" aria-hidden="true">
              {/* Backward Icon: Left Arrow SVG */}
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-4 w-4 inline"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M15 19l-7-7 7-7"
                />
              </svg>
            </span>
            <span className="font-bold">Previous</span>
          </button>
          <span className="px-2 py-1 rounded bg-blue-100 text-blue-700 font-bold">
            <b>{page}</b>
          </span>
          <button
            onClick={() => onPageChange(page + 1)}
            disabled={page >= totalPages}
            className="px-3 py-1 rounded bg-gray-200 text-gray-800 disabled:opacity-50 font-semibold flex items-center"
          >
            <span className="font-bold">Next</span>
            <span className="ml-1 font-bold" aria-hidden="true">
              {/* Forward Icon: Right Arrow SVG */}
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-4 w-4 inline"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </span>
          </button>
        </div>
      </div>
    </div>
  );
};

export default PaginatedTable;
