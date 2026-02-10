"use client";

import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { Button } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useSelector, useDispatch } from "react-redux";
import { selectAccountsState, fetchAccounts } from "@/Redux/slices/accountSlice/accountSlice";
import axios from "axios";
import React, { useEffect, useState } from "react";
import SearchableDropdown from "@/components/SearchableDropdown";
import { getTodayDate, getMonthStartDate } from "@/utils/dateUtils";
import { useTranslations } from "@/hooks/useTranslations";

// Define LedgerEntry interface based on your JSON data
interface LedgerEntry {
  Amount: string;
  Block: string | null;
  BuCode: string;
  Code: string;
  CodeD: string;
  CreateDate: string;
  CreateTime: string | null;
  PartyCode: string;
  ProductCode: string;
  ProductGroupCode: string;
  Qty: string;
  Rate: string;
  Remarks: string;
  Status: string | null;
  TStatus: "Dr" | "Cr";
  StoreCode: string;
  TDate: string;
  TotalNos: string | null;
  UnitCode: string | null;
  UpdateDate: string | null;
  UpdateTime: string | null;
  UpdateUser: string | null;
  UserName: string;
  VirtualCode: string;
  ParentAccountCode: string;
  Narration: string;
  [key: string]: any; // For dynamic field access
  id?: string;
  date?: string;
  voucherNo?: string;
  description?: string;
  chequeNo?: string;
  billNo?: string;
  debit?: string;
  credit?: string;
  balance?: string;
}

const CashBookLedger = () => {
  const { t, isRTL } = useTranslations();
  const [searchTerm, setSearchTerm] = useState("");
  const [dateFrom, seTDateFrom] = useState(getMonthStartDate());
  const [dateTo, seTDateTo] = useState(getTodayDate());
  const { user } = useAuth();
  const [ledgerEntries, setLedgerEntries] = useState<LedgerEntry[]>([]);
  const [isLoading, setIsLoading] = useState(false);
  const [selectedAccount, setSelectedAccount] = useState<string>("");
  const { accountsList } = useSelector(selectAccountsState);
  const dispatch: any = useDispatch();

  const fetchTSaleD = async () => {
    setIsLoading(true);
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "GLTD",
          action: "list",
        },
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data.data;
      console.log("🚀 ~ fetchTSaleD ~ result:", result.length);
      
      const filteredEntries = selectedAccount 
        ? result.filter((entry: LedgerEntry) => entry.ParentAccountCode === selectedAccount)
        : result;
      
      setLedgerEntries(filteredEntries);
      setIsLoading(false);
    } catch (error) {
      setIsLoading(false);
      console.error("Error fetching ledger entries:", error);
    }
  };
  // Fetch accounts list for dropdown
  useEffect(() => {
    dispatch(fetchAccounts(user?.apiKey));
  }, [dispatch, user?.apiKey]);






  const [appliedDateFrom, setAppliedDateFrom] = useState(dateFrom);
  const [appliedDateTo, setAppliedDateTo] = useState(dateTo);

const fieldsToSearch = ["Narration", "VirtualCode", "TStatus", "chequeNo", "billNo", "Amount"];

const filteredEntries = ledgerEntries
  .filter((entry) => {
   
const matchesSearch = !searchTerm || fieldsToSearch.some(
  key => entry[key]?.toString().toLowerCase().includes(searchTerm.toLowerCase())
);

    const entryDate = entry.TDate ? new Date(entry.TDate.split(" ")[0]) : null;
    const fromDate = appliedDateFrom ? new Date(appliedDateFrom) : null;
    const toDate = appliedDateTo ? new Date(appliedDateTo) : null;

    const matchesDateRange =
      (!fromDate || (entryDate && entryDate >= fromDate)) &&
      (!toDate || (entryDate && entryDate <= toDate));

    return matchesSearch && matchesDateRange;
  })
 
  console.log("🚀 ~ CashBookLedger ~ filteredEntries:", filteredEntries)


  const totalDebit = filteredEntries.reduce(
    (sum, entry) => sum + parseFloat(entry.TStatus === "Dr" ? entry.Amount || "0" : "0"),
    0
  );

  const totalCredit = filteredEntries.reduce(
    (sum, entry) => sum + parseFloat(entry.TStatus === "Cr" ? entry.Amount || "0" : "0"),
    0
  );

  const closingBalance = totalDebit - totalCredit;

  const netAfterTotalDebit = ledgerEntries
    .filter((entry) => {
      const entryDate = entry.TDate ? entry.TDate.split(" ")[0] : "";
      return appliedDateTo ? entryDate > appliedDateTo : false;
    }).reduce(
      (sum, entry) => sum + parseFloat(entry.TStatus === "Dr" ? entry.Amount || "0" : "0"),
      0
    );
  const netAfterTotalCredit = ledgerEntries
    .filter((entry) => {
      const entryDate = entry.TDate ? entry.TDate.split(" ")[0] : "";
      return appliedDateTo ? entryDate > appliedDateTo : false;
    }).reduce(
      (sum, entry) => sum + parseFloat(entry.TStatus === "Cr" ? entry.Amount || "0" : "0"),
      0
    );
  console.log("🚀 ~ CashBookLedger ~ netAfterTotalCredit:", netAfterTotalCredit,netAfterTotalDebit)

  const netAfter =  netAfterTotalDebit - netAfterTotalCredit;

  // Opening balance: transactions before the applied from date
  const openingDebit = appliedDateFrom
    ? ledgerEntries
        .filter((entry) => {
          const entryDate = entry.TDate ? entry.TDate.split(" ")[0] : "";
          return entryDate < appliedDateFrom;
        })
        .reduce((sum, entry) => sum + parseFloat(entry.TStatus === "Dr" ? entry.Amount || "0" : "0"), 0)
    : 0;

  const openingCredit = appliedDateFrom
    ? ledgerEntries
        .filter((entry) => {
          const entryDate = entry.TDate ? entry.TDate.split(" ")[0] : "";
          return entryDate < appliedDateFrom;
        })
        .reduce((sum, entry) => sum + parseFloat(entry.TStatus === "Cr" ? entry.Amount || "0" : "0"), 0)
    : 0;

  const openingBalance = openingDebit - openingCredit;



  const handleApplyFilter = () => {
    if (!selectedAccount) {
      alert("Please select an account first!");
      return;
    }
    if (dateFrom && dateTo && dateTo < dateFrom) {
      alert("❌ End date cannot be earlier than start date!");
      return;
    }
    setAppliedDateFrom(dateFrom);
    setAppliedDateTo(dateTo);
    fetchTSaleD();
  };

  const handleResetFilter = () => {
    setSearchTerm("");
    setSelectedAccount("");
    setAppliedDateFrom("");
    setAppliedDateTo("");
    setLedgerEntries([]);
  }
  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          <header id="ledger-filters" className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex flex-col px-6 py-4">
              <div className="flex items-center justify-between">
                <h1 className="text-2xl font-bold text-gray-900">{t("page_title_account_ledger")}</h1>
         
              </div>
            </div>
          </header>
          <main className="flex-1  m-[16px]">
            <main className=" mx-auto px-4 sm:px-6 lg:px-8 py-8">
              {/* Controls Section */}
              <div className="bg-white rounded-2xl shadow-md border border-gray-200 p-6 mb-6">
         <div className="flex items-center gap-6 bg-white">
  {/* Account Dropdown */}
  <div className="min-w-[320px]">
    <SearchableDropdown
      label={t("label_account_simple")}
      value={selectedAccount}
      options={accountsList.map((account: any) => ({
        value: account.AccSubCode || account.CoaCode || account.Code || "",
        label: account.Name || account.label || account.AccountName || "",
      }))}
      onChange={(val: string) => setSelectedAccount(val)}
      placeholder="Select Account"
      searchPlaceholder="Search accounts..."
      preventAutoSelect={true}
      className="w-full"
      // Make label bold
    />
  </div>

  {/* Date Pickers */}
  <div className="flex items-center gap-4">
    <div className="flex flex-col">
      <label className=" font-semibold text-gray-800 text-sm">{t("label_start_date")}</label>
      <div className="relative">
        <input
          type="date"
          value={dateFrom}
          onChange={(e) => seTDateFrom(e.target.value)}
          className="w-44 h-10 px-3 py-2 border border-gray-300 rounded-md bg-white text-base 
                     focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-violet-500 
                     appearance-none cursor-pointer"
          style={{ WebkitAppearance: 'none' }}
        />
        {/* Calendar icon */}
        <div className="absolute inset-y-0 right-2 flex items-center pointer-events-none">
          <svg className="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
        </div>
      </div>
    </div>

    <div className="flex flex-col">
      <label className=" font-semibold text-gray-800 text-sm">{t("label_end_date")}</label>
      <div className="relative">
        <input
          type="date"
          value={dateTo}
          onChange={(e) => seTDateTo(e.target.value)}
          className="w-44 h-10 px-3 py-2 border border-gray-300 rounded-md bg-white text-base 
                     focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-violet-500 
                     appearance-none cursor-pointer"
          style={{ WebkitAppearance: 'none' }}
        />
        <div className="absolute inset-y-0 right-2 flex items-center pointer-events-none">
          <svg className="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
        </div>
      </div>
    </div>
  </div>

  {/* Buttons */}
  <div className="flex items-center gap-3 mt-4">
    <button
      onClick={handleApplyFilter}
      disabled={!selectedAccount || isLoading}
      className="px-5 py-2 bg-violet-500 text-white font-medium rounded-md 
                 hover:bg-violet-600 disabled:opacity-50 disabled:cursor-not-allowed 
                 transition-colors shadow-sm"
    >
      {isLoading ? 'Loading...' : t("btn_apply")}
    </button>
    <button
      onClick={handleResetFilter}
      className="px-5 py-2 bg-gray-600 text-white font-medium rounded-md 
                 hover:bg-gray-700 transition-colors shadow-sm"
    >
      {t("btn_reset")}
    </button>
  </div>
</div>
              </div>

              <LedgerTable
                entries={filteredEntries}
                isLoading={isLoading}
                totalDebit={totalDebit}
                totalCredit={totalCredit}
                closingBalance={closingBalance}
                from={appliedDateFrom}
                to={appliedDateTo}
                netAfter={netAfter}
                openingDebit={openingDebit}
                openingCredit={openingCredit}
                openingBalance={openingBalance}
              />
            </main>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
};



const columnKeys = [
  { key: "table_col_s_no", align: "left" },
  { key: "table_col_date", align: "left" },
  { key: "table_col_voucher_no", align: "left" },
  { key: "table_col_description", align: "left" },
  { key: "cheque_no", align: "left" },
  { key: "bill_no", align: "left" },
  { key: "table_col_debit", align: "right" },
  { key: "table_col_credit", align: "right" },
  { key: "balance", align: "right" },
];

export default CashBookLedger;

interface LedgerTableProps {
  entries: LedgerEntry[];
  isLoading: boolean;
  totalDebit: number;
  totalCredit: number;
  closingBalance: number;
  from: string;
  to: string;
  netAfter: number;
  openingDebit: number;
  openingCredit: number;
  openingBalance: number;
}

function LedgerTable({
  entries,
  isLoading,
  totalDebit,
  totalCredit,
  closingBalance,
  from,
  to,
  netAfter,
  openingDebit,
  openingCredit,
  openingBalance,
}: LedgerTableProps) {
  const { t, isRTL } = useTranslations();
  const columns = columnKeys.map((col) => ({ label: t(col.key), align: col.align }));
  const [currentPage, setCurrentPage] = useState(1);
  const entriesPerPage = 10;
  const siblingCount = 2;

  const totalEntries = entries.length;
  const totalPages = Math.ceil(totalEntries / entriesPerPage);
  const indexOfLastEntry = currentPage * entriesPerPage;
  const indexOfFirstEntry = indexOfLastEntry - entriesPerPage;
  const currentEntries = entries.slice(indexOfFirstEntry, indexOfLastEntry);
  const [mainGroupOption,setMainGroupOption]=useState([])
  const {user}=useAuth()

  const handlePageChange = (page: number) => {
    if (page >= 1 && page <= totalPages) {
      setCurrentPage(page);
    }
  };

  const getPageNumbers = () => {
    const pageNumbers = [];
    const totalVisiblePages = Math.min(siblingCount * 2 + 1, totalPages);

    let startPage = Math.max(1, currentPage - siblingCount);
    let endPage = Math.min(totalPages, currentPage + siblingCount);

    if (endPage - startPage + 1 < totalVisiblePages) {
      if (startPage === 1) {
        endPage = Math.min(totalPages, startPage + totalVisiblePages - 1);
      } else if (endPage === totalPages) {
        startPage = Math.max(1, endPage - totalVisiblePages + 1);
      }
    }

    for (let i = startPage; i <= endPage; i++) {
      pageNumbers.push(i);
    }

    return pageNumbers;
  };

  const pageNumbers = getPageNumbers();

  const formatCurrency = (amount: number | string) => {
    const num = typeof amount === "string" ? parseFloat(amount) : amount;
    return new Intl.NumberFormat("en-IN").format(num);
  };


  const formaTDate = (dateString: string) => {
    const date = new Date(dateString);
    return date.toLocaleDateString("en-GB", {
      day: "2-digit",
      month: "short",
      year: "numeric",
    });
  };

  const formatBalance = (balance: string) => {
    const num = parseFloat(balance);
    const formatted = formatCurrency(Math.abs(num));
    return `${formatted} ${num >= 0 ? "Dr" : "Cr"}`;
  };
  const SkeletonRow = () => (
    <tr className="animate-pulse">
      {columns.map((_, index) => (
        <td key={index} className="px-6 py-4">
          <div className="h-4 bg-gray-200 rounded w-3/4"></div>
        </td>
      ))}
    </tr>
  );


  useEffect(() => {
    setCurrentPage(1);
  }, [entries]);
        const fetchMainGroupeCode_Coa_Code = async () => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "psChartofAccounts",
          action: "list",
        },
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data.data;
       const formattedData= result?.map(
                  (item: { Name: string; CoaCode: string }) => ({
                    label: item.Name,
                    value: item.CoaCode
                  })
                );

      setMainGroupOption(formattedData)
    } catch (error) {
      console.error("Error fetching tSaleD:", error);
    }
  };
  useEffect(()=>{
fetchMainGroupeCode_Coa_Code()

  },[])

  // Use CSS flexbox for table sizing instead of manual JS calculations.
  // The container (card) will be set to flex-col and the table wrapper to flex-1 with overflow.




  return (
    <div className="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden flex flex-col">
      <div className="bg-gray-50 px-6 py-4 border-b border-gray-200">
        <div className="flex justify-between items-center">
          <h2 className="text-lg font-semibold text-gray-900" data-testid="text-account-name">
        
          </h2>
          <div className="text-sm text-gray-600 font-bold" data-testid="text-date-range">
            {from && (
              <span>
                From {formaTDate(from)} To{" "}
                {formaTDate(to)}
              </span>
            )}

          </div>
        </div>
      </div>

      {/* Table */}
  <div className="overflow-x-auto flex-1" style={{ maxHeight: 'calc(100vh - 400px)' }}>
        <table className="min-w-full divide-y divide-gray-200" >
          <thead className="bg-gray-50">
            <tr>
              {columns.map((col, index) => (
                <th
                  key={index}
                  className={`px-4 py-3 text-${col.align} text-xs font-medium text-gray-500 uppercase tracking-wider`}
                >
                  {col.label}
                </th>
              ))}
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-gray-200">


            {
              isLoading ? (
                Array.from({ length: entriesPerPage }).map((_, index) => (
                  <SkeletonRow key={index} />
                ))
              ) : <>
                <tr className="font-bold">
                  <td colSpan={6} className="px-4 py-3 text-sm text-gray-700">{t("text_bf_balance")}</td>
                  <td className="px-4 py-8 text-sm text-right font-medium text-red-600">
                    {openingDebit > 0 ? openingDebit.toLocaleString("en-IN") : "0"}
                  </td>
                  <td className="px-4 py-8 text-sm text-right font-medium text-green-600">
                    {openingCredit > 0 ? openingCredit.toLocaleString("en-IN") : "0"}
                  </td>
                  <td className="px-4 py-8 text-sm text-right text-gray-900">
                    {formatCurrency(Math.abs(openingBalance))} {openingBalance >= 0 ? "Dr" : "Cr"}
                  </td>
                </tr>
                {(() => {
                  let runningBalance = openingBalance;
                  return currentEntries.map((entry, index) => {
                    const debit = entry.TStatus === "Dr" ? parseFloat(entry.Amount || "0") : 0;
                    const credit = entry.TStatus === "Cr" ? parseFloat(entry.Amount || "0") : 0;
                    runningBalance = runningBalance + debit - credit;

                    return (
                      <tr key={index} className="hover:bg-gray-50 transition-colors duration-150">
                        <td className="px-4 py-3 text-sm text-gray-900">{indexOfFirstEntry + index + 1}</td>
                        <td className="px-4 py-3 text-sm text-gray-900">{formaTDate(entry.TDate || "")}</td>
                        <td className="px-4 py-3 text-sm text-blue-600 font-medium">{entry.VirtualCode || ""}</td>
                        <td className="px-4 py-3 text-sm text-gray-900">{entry?.Narration || ""}</td>
                        <td className="px-4 py-3 text-sm text-gray-500">{entry.ChequeNo || ""}</td>
                        <td className="px-4 py-3 text-sm text-gray-500">{entry?.BillNo || ""}</td>
                        <td className="px-4 py-3 text-sm text-right font-medium text-red-600">
                          {debit > 0 ? debit.toLocaleString("en-IN") : "0"}
                        </td>
                        <td className="px-4 py-3 text-sm text-right font-medium text-green-600">
                          {credit > 0 ? credit.toLocaleString("en-IN") : "0"}
                        </td>
                        <td className="px-4 py-3 text-sm text-right font-bold text-gray-900">
                          {Math.abs(runningBalance).toLocaleString("en-IN")} {runningBalance >= 0 ? "Dr" : "Cr"}
                        </td>
                      </tr>
                    );
                  });
                })()}
                
              </>
            }

          </tbody>

          <tfoot className="bg-gray-50 font-bold sticky bottom-0 z-10">
        <tr>
          <td colSpan={6} className="px-4 py-3">
               <div
              className="text-sm font-medium text-gray-900 font-bold"
              data-testid="text-closing-date"
            >
              {t("text_closing_balance")}: {to ? formaTDate(to) : formaTDate(new Date().toISOString().split("T")[0])}
            </div>
          </td>
          <td className="px-4 py-3 text-right text-red-600">
            {formatCurrency(totalDebit)}
          </td>
          <td className="px-4 py-3 text-right text-green-600">
            {formatCurrency(totalCredit)}
          </td>
          <td className="px-4 py-3 text-right text-gray-900">
            {formatCurrency(Math.abs(closingBalance))}{" "}
            {closingBalance >= 0 ? "Dr" : "Cr"}
          </td>
        </tr>
        <tr>
          <td colSpan={12} className="px-4 py-3 text-right text-blue-600">
            {t("text_net_after_period")}: {formatCurrency(Math.abs(netAfter))}{" "}
            {netAfter >= 0 ? "Dr" : "Cr"}
          </td>
          <td></td>
        </tr>
      </tfoot>
        </table>
      </div>

      {/* Summary Footer */}
      {/* {entries.length > 0 && (
        <div className="bg-gray-50 px-6 py-4 border-t border-gray-200">
          <div className="flex justify-between items-center">
            <div
              className="text-sm font-medium text-gray-900"
              data-testid="text-closing-date"
            >
              Account Closing Balance As On: {to ? formaTDate(to) : formaTDate(new Date().toISOString().split("T")[0])}
            </div>
            <div className="flex gap-8 text-sm">
              <div
                className="text-red-600 font-semibold"
                data-testid="text-total-debit"
              >
                 {formatCurrency(totalDebit)}
              </div>
              <div
                className="text-green-600 font-semibold"
                data-testid="text-total-credit"
              >
                {formatCurrency(totalCredit)}
              </div>
              <div
                className="text-gray-900 font-bold"
                data-testid="text-closing-balance"
              >
                Closing Balance: {formatCurrency(Math.abs(closingBalance))}{" "}
                {closingBalance >= 0 ? "Dr" : "Cr"}
              </div>
             
            </div>
          </div>
           <div className="flex justify-end items-center">
      <div
                className="text-blue-600 font-bold"
              >
                {t("text_net_after_period")}: {formatCurrency(Math.abs(netAfter))}{" "}
                {netAfter >= 0 ? "Dr" : "Cr"}
              </div>
           </div>
     
        </div>
      )} */}


      {/* Pagination */}
      {totalEntries > entriesPerPage && (
        <div className="bg-gray-50 px-6 py-4 border-t border-gray-200 flex items-center justify-between">
          <div className="text-sm text-gray-700">
            Showing {indexOfFirstEntry + 1} to {Math.min(indexOfLastEntry, totalEntries)} of {totalEntries} entries
          </div>
          <div className="flex items-center gap-2">
            <button
              onClick={() => handlePageChange(currentPage - 1)}
              disabled={currentPage === 1}
              className={`px-3 py-1 rounded-md text-sm font-medium ${currentPage === 1
                ? "bg-gray-100 text-gray-400 cursor-not-allowed"
                : "bg-white text-gray-700 hover:bg-gray-100"
                } border border-gray-300`}
            >
              {t("pagination_previous")}
            </button>
            <div className="flex gap-1">
              {pageNumbers.map((page) => (
                <button
                  key={page}
                  onClick={() => handlePageChange(page)}
                  className={`px-3 py-1 rounded-md text-sm font-medium ${currentPage === page
                    ? "bg-blue-600 text-white"
                    : "bg-white text-gray-700 hover:bg-gray-100"
                    } border border-gray-300`}
                >
                  {page}
                </button>
              ))}
            </div>
            <button
              onClick={() => handlePageChange(currentPage + 1)}
              disabled={currentPage === totalPages}
              className={`px-3 py-1 rounded-md text-sm font-medium ${currentPage === totalPages
                ? "bg-gray-100 text-gray-400 cursor-not-allowed"
                : "bg-white text-gray-700 hover:bg-gray-100"
                } border border-gray-300`}
            >
              {t("pagination_next")}
            </button>

          </div>
        </div>
      )}

    </div>
  );
}