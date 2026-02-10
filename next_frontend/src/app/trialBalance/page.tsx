"use client";

interface Option {
  id: number;
  label: string;
}

interface AccountData {
  AccountName: string;
  CoaCode: string;
  AccSubCode: string;
  CBalStatus: "Dr" | "Cr";
  CBalance: string;
  [key: string]: any; // For dynamic property access in sorting
}

interface AccountGroups {
  [key: string]: string;
}

interface SubGroup {
  value: string;
  label: string;
}

import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { Button } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import {
  CalendarDateRangeIcon,
  CheckBadgeIcon,
  ChevronLeftIcon,
  ChevronRightIcon,
  ShoppingCartIcon,
  ChevronUpIcon,
  ChevronDownIcon,
} from "@heroicons/react/24/outline";
import axios from "axios";
import React, { useEffect, useMemo, useState } from "react";
import MultiSelectDropdown from "@/components/MultiSelectDropdown";
import { useDispatch, useSelector } from "react-redux";
import {
  fetchAccounts,
  selectAccountsState,
} from "@/Redux/slices/accountSlice/accountSlice";
import {
  fetchPsAccountSubGroup,
  selectPsAccountSubGroup,
} from "@/Redux/slices/psAccountSubGroupSlice/psAccountSubGroupSlice";
import { useTranslations } from "@/hooks/useTranslations";

const tableHeaderKeys = [
  { labelKey: "table_col_s_no", key: "index" },
  { labelKey: "table_col_main_groups", key: "AccountTypeCode" },
  { labelKey: "table_col_sub_groups", key: "AccountCode" },
  { labelKey: "table_col_name", key: "AccountName" },
  { labelKey: "table_col_debit_bal", key: "DebitBalance" },
  { labelKey: "table_col_credit_bal", key: "CreditBalance" },
  { labelKey: "table_col_date", key: "UDate" },
];

const options = [
  { id: 0, label: "Assets" },
  { id: 1, label: "Liabilities" },
  { id: 2, label: "Equity" },
  { id: 3, label: "Revenue" },
  { id: 4, label: "Expenses" },
];

const AccountBalance = () => {
  const { t, isRTL } = useTranslations();
  const { user } = useAuth();
  const tableHeaders = tableHeaderKeys.map((h) => ({ label: t(h.labelKey), key: h.key }));
  const [searchTerm, setSearchTerm] = useState("");
  const [currentPage, setCurrentPage] = useState(1);
  const [accountcBal, setAccountcBal] = useState([]);
  const [selectedOptions, setSelectedOptions] = useState<Option[]>([]); 
    const [groupingColumn, setGroupingColumn] = useState<string>(""); // No default grouping
  const [expandedGroups, setExpandedGroups] = useState<Set<string>>(new Set());
  const [creditCondition, setCreditCondition] = useState("greater");
  const [creditAmount, setCreditAmount] = useState("");
  const [debitCondition, setDebitCondition] = useState("greater");
  const [debitAmount, setDebitAmount] = useState("");
  const [isInitialOrManualLoading, setIsInitialOrManualLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [sortKey, setSortKey] = useState(null);
  const [sortDirection, setSortDirection] = useState("asc");
  const { accountsList, isLoading } = useSelector(selectAccountsState);
  const dispatch = useDispatch();
  const { accountSubGroups } = useSelector(selectPsAccountSubGroup);
  const [mainGroupOption, setMainGroupOption] = useState<Option[]>([])
    


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
       const formattedData: Option[] = result?.map(
                  (item: { Name: string; CoaCode: string }, index: number) => ({
                    id: parseInt(item.CoaCode) || index + 1,
                    label: item.Name
                  })
                ) || [];

      setMainGroupOption(formattedData)
    } catch (error) {
      console.error("Error fetching chart of accounts:", error);
    }
  };
  const accountSubGroupsValue: Record<string, string> = useMemo(() => {
    return accountSubGroups.reduce<Record<string, string>>((acc, item: SubGroup) => {
      if (item && item.value && item.label) {
        acc[item.value] = item.label;
      }
      return acc;
    }, {});
  }, [accountSubGroups]);

  console.log("🚀 ~ AccountBalance ~ accountSubGroupsValue:", accountSubGroupsValue)

  const accountMainGroups = useMemo(
    () =>
      mainGroupOption.reduce<Record<number, string>>((acc, item) => {
        acc[item.id] = item.label;
        return acc;
      }, {}),
    [mainGroupOption]
  );

  const fetchAccountCBal = async (isManual = false) => {
    debugger
    if (isManual) {
      setIsInitialOrManualLoading(true);
    }
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "AccountCBal",
          action: "list",
        },
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data.data;
     const mergedData = result.map((orderItem) => {
  const matchingAccount = accountsList.find(
    (account) => Number(account.Code) === Number(orderItem.AccountCode)
  );
  return {
    ...orderItem,
    AccSubCode: matchingAccount?.AccSubCode || null,
    // CoaCode: matchingAccount?.CoaCode || null, // <-- yahan dikkat
    AccountName: matchingAccount?.Name || null,
  };
});

      setAccountcBal(mergedData);
    } catch (error) {
      console.error("Error fetching AccountCBal:", error);
    } finally {
      if (isManual || isInitialOrManualLoading) {
        setIsInitialOrManualLoading(false);
      }
    }
  };

  useEffect(() => {
    fetchMainGroupeCode_Coa_Code()
    dispatch(fetchAccounts(user?.apiKey));
    dispatch(fetchPsAccountSubGroup(user?.apiKey));
  }, [dispatch, user?.apiKey]);

  useEffect(() => {
    fetchAccountCBal(false);
  }, [accountsList]);

  const itemsPerPage = 10;

  const filteredOrders = useMemo(() => {
    let filtered = [...accountcBal];

    // Filter by selected account types (MultiSelectDropdown)
    if (selectedOptions.length > 0) {
      const selectedIds = selectedOptions.map(opt => opt.id);
      filtered = filtered.filter((account: AccountData) => 
        account?.CoaCode != null && selectedIds.includes(parseInt(account.CoaCode))
      );


    }

    // Filter by credit balance
    if (creditAmount) {
      const amount = parseFloat(creditAmount);
      filtered = filtered.filter((account: AccountData) => {
        const creditBalance = account.CBalStatus === "Cr" ? parseFloat(account.CBalance) || 0 : 0;
        if (creditCondition === "greater") {
          return creditBalance > amount;
        } else if (creditCondition === "less") {
          return creditBalance < amount;
        } else if (creditCondition === "equal") {
          return creditBalance === amount;
        }
        return true;
      });
    }

    // Filter by debit balance
    if (debitAmount) {
      const amount = parseFloat(debitAmount);
      filtered = filtered.filter((account: AccountData) => {
        const debitBalance = account.CBalStatus === "Dr" ? parseFloat(account.CBalance) || 0 : 0;
        if (debitCondition === "greater") {
          return debitBalance > amount;
        } else if (debitCondition === "less") {
          return debitBalance < amount;
        } else if (debitCondition === "equal") {
          return debitBalance === amount;
        }
        return true;
      });
    }

    // Filter by search term
    if (searchTerm) {
      filtered = filtered.filter((account: AccountData) =>
        (account.AccountName?.toLowerCase() || "").includes(searchTerm.toLowerCase()) ||
        (accountSubGroupsValue[account.AccSubCode]?.toLowerCase() || "").includes(searchTerm.toLowerCase()) ||
        (accountMainGroups[parseInt(account.CoaCode)]?.toLowerCase() || "").includes(searchTerm.toLowerCase())
      );
    }

    // Apply sorting
    if (sortKey) {
      filtered.sort((a: AccountData, b: AccountData) => {
        let aValue: string | number = a[sortKey];
        let bValue: string | number = b[sortKey];

        if (sortKey === "DebitBalance") {
          aValue = a.CBalStatus === "Dr" ? parseFloat(a.CBalance) || 0 : 0;
          bValue = b.CBalStatus === "Dr" ? parseFloat(b.CBalance) || 0 : 0;
        } else if (sortKey === "CreditBalance") {
          aValue = a.CBalStatus === "Cr" ? parseFloat(a.CBalance) || 0 : 0;
          bValue = b.CBalStatus === "Cr" ? parseFloat(b.CBalance) || 0 : 0;
        } else if (sortKey === "UDate") {
          aValue = a.UDate ? new Date(a.UDate).getTime() : 0;
          bValue = b.UDate ? new Date(b.UDate).getTime() : 0;
        } else {
          aValue = aValue ? String(aValue).toLowerCase() : "";
          bValue = bValue ? String(bValue).toLowerCase() : "";
        }

        if (aValue < bValue) return sortDirection === "asc" ? -1 : 1;
        if (aValue > bValue) return sortDirection === "asc" ? 1 : -1;
        return 0;
      });
    }

    return filtered;
  }, [
    accountcBal,
    selectedOptions,
    creditAmount,
    creditCondition,
    debitAmount,
    debitCondition,
    searchTerm,
    sortKey,
    sortDirection,
    accountSubGroupsValue,
    accountMainGroups,
  ]);

  const groupedOrders = useMemo(() => {
      // If no grouping is selected, return all orders in a single group
      if (!groupingColumn) {
        return { "all": filteredOrders };
      }

    const grouped: { [key: string]: AccountData[] } = {};
    filteredOrders.forEach((account: AccountData) => {
      const groupKey = groupingColumn === 'AccountTypeCode' ? account.CoaCode : account.AccSubCode;
      if (!grouped[groupKey]) {
        grouped[groupKey] = [];
      }
      grouped[groupKey].push(account);
    });
    return grouped;
  }, [filteredOrders, groupingColumn]);

  // Set all groups as expanded when grouping changes or new data arrives
  useEffect(() => {
    if (groupingColumn && Object.keys(groupedOrders).length > 0) {
      setExpandedGroups(new Set(Object.keys(groupedOrders)));
    }
  }, [groupingColumn, groupedOrders]);

  const paginatedGroups = useMemo(() => {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    
    // Get all group keys and slice them for pagination
    const groupKeys = Object.keys(groupedOrders);
    const paginatedKeys = groupKeys.slice(startIndex, endIndex);
    
    // Create a new object with only the paginated groups
    const paginatedData: { [key: string]: AccountData[] } = {};
    paginatedKeys.forEach((key, groupIndex) => {
      paginatedData[key] = groupedOrders[key].map((account, index) => ({
        ...account,
        index: startIndex + groupIndex + 1, // Group number becomes the index
      }));
    });
    
    return paginatedData;
  }, [groupedOrders, currentPage, itemsPerPage]);

  const totalGroups = Object.keys(groupedOrders).length;
  const totalPages = Math.ceil(totalGroups / itemsPerPage);

  const handleReset = () => {
    setSelectedOptions([]); // Reset to empty selection
    setCreditAmount("");
    setCreditCondition("greater");
    setDebitAmount("");
    setDebitCondition("greater");
    setSearchTerm("");
    setCurrentPage(1);
    setGroupingColumn("AccountTypeCode"); // Reset to default grouping
    setExpandedGroups(new Set()); // Collapse all groups
    fetchAccountCBal(true); 
  };

  const handleApply = () => {
    setCurrentPage(1);
  };

  const handleSort = (key) => {
    if (sortKey === key) {
      setSortDirection(sortDirection === "asc" ? "desc" : "asc");
    } else {
      setSortKey(key);
      setSortDirection("asc");
    }
    setCurrentPage(1);
  };

  // Build headers dynamically so the grouped column appears first after SNo
  const groupedKey = groupingColumn === "AccountTypeCode" ? "AccountTypeCode" : "AccountCode";
  const visibleHeaders = useMemo(() => {
    const indexHeader = tableHeaders.find((h) => h.key === "index")!;
    if (!groupingColumn) {
      // No grouping: Always show 'Account Main Groups' first after SNo
      const mainGroupHeader = tableHeaders.find((h) => h.key === "AccountTypeCode")!;
      const other = tableHeaders.filter((h) => h.key !== "index" && h.key !== "AccountTypeCode");
      return [indexHeader, mainGroupHeader, ...other];
    } else {
      // Grouping: Show grouped column first after SNo
      const groupedHeaderLabel = groupedKey === "AccountTypeCode" ? t("table_col_main_groups") : t("table_col_sub_groups");
      const other = tableHeaders.filter((h) => h.key !== "index" && h.key !== groupedKey);
      return [indexHeader, { label: groupedHeaderLabel, key: groupedKey }, ...other];
    }
  }, [groupingColumn, groupedKey]);

  const SkeletonRow = () => (
    <tr className="animate-pulse">
      {visibleHeaders.map((_, index) => (
        <td key={index} className="px-6 py-4">
          <div className="h-4 bg-gray-200 rounded w-3/4"></div>
        </td>
      ))}
    </tr>
  );

  const SkeletonTotalRow = () => (
    <tr className="animate-pulse bg-gray-100">
      <td colSpan={4} className="px-6 py-3">
        <div className="h-4 bg-gray-200 rounded w-1/2"></div>
      </td>
      <td className="px-6 py-3">
        <div className="h-4 bg-gray-200 rounded w-1/2"></div>
      </td>
      <td className="px-6 py-3"></td>
    </tr>
  );

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-2">
              <div className="flex items-center">
                <h1 className="text-2xl font-bold text-gray-900">{t("page_title_trial_balance")}</h1>
              </div>
            </div>
          </header>
          <main className="flex-1 overflow-y-auto m-[16px]">
        <div className="bg-white rounded-2xl  p-4 border border-gray-100 mb-6">
  {/* Header */}
  <div className="flex items-center justify-between border-b border-gray-200 pb-3 mb-6">
    <h2 className="text-xl font-semibold text-gray-900">{t("section_filter_accounts")}</h2>
  </div>

  {/* Filters Grid */}
  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    {/* Account Type */}
    <div className="flex flex-col space-y-2">
      <label className="text-sm font-medium text-gray-700">{t("label_account_type")}</label>
      <MultiSelectDropdown
        options={mainGroupOption}
        selected={selectedOptions}
        onChange={setSelectedOptions}
      />
    </div>

    {/* Credit Balance */}
    <div className="flex flex-col space-y-2">
      <label className="text-sm font-medium text-gray-700">{t("label_credit_balance_filter")}</label>
      <div className="flex items-center gap-3">
        <select
          value={creditCondition}
          onChange={(e) => setCreditCondition(e.target.value)}
          className="border border-gray-300 rounded-lg px-4 py-2 text-sm text-gray-700 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all w-1/3 hover:border-blue-400"
        >
          <option value="greater">{t("dropdown_option_greater")}</option>
          <option value="less">{t("dropdown_option_less")}</option>
          <option value="equal">{t("dropdown_option_equal")}</option>
        </select>
        <input
          type="number"
          placeholder="Enter amount..."
          value={creditAmount}
          onChange={(e) => setCreditAmount(e.target.value)}
          className="border border-gray-300 rounded-lg px-4 py-2 text-sm text-gray-700 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all w-2/3 hover:border-blue-400"
        />
      </div>
    </div>

    {/* Debit Balance */}
    <div className="flex flex-col space-y-2">
      <label className="text-sm font-medium text-gray-700">{t("label_debit_balance_filter")}</label>
      <div className="flex items-center gap-3">
        <select
          value={debitCondition}
          onChange={(e) => setDebitCondition(e.target.value)}
          className="border border-gray-300 rounded-lg px-4 py-2 text-sm text-gray-700 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all w-1/3 hover:border-blue-400"
        >
          <option value="greater">{t("dropdown_option_greater")}</option>
          <option value="less">{t("dropdown_option_less")}</option>
          <option value="equal">{t("dropdown_option_equal")}</option>
        </select>
        <input
          type="number"
          placeholder="Enter amount..."
          value={debitAmount}
          onChange={(e) => setDebitAmount(e.target.value)}
          className="border border-gray-300 rounded-lg px-4 py-2 text-sm text-gray-700 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all w-2/3 hover:border-blue-400"
        />
      </div>
    </div>

    {/* Group By */}
    <div className="flex flex-col space-y-2">
      <label className="text-sm font-medium text-gray-700">{t("label_group_by")}</label>
      <select
        value={groupingColumn}
        onChange={(e) => setGroupingColumn(e.target.value)}
        className="border border-gray-300 rounded-lg px-4 py-2 text-sm text-gray-700 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all hover:border-blue-400"
      >
          <option value="">No Grouping</option>
        <option value="AccountTypeCode">{t("table_col_main_groups")}</option>
        <option value="AccountCode">{t("table_col_sub_groups")}</option>
      </select>
    </div>

    {/* Search */}
    <div className="flex flex-col space-y-2">
      <label className="text-sm font-medium text-gray-700">{t("label_search")}</label>
      <input
        type="text"
        placeholder={t("placeholder_search_group")}
        value={searchTerm}
        onChange={(e) => setSearchTerm(e.target.value)}
        className="border border-gray-300 rounded-lg px-4 py-2 text-sm text-gray-700 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all hover:border-blue-400"
      />
    </div>
  </div>

  {/* Buttons */}
  <div className="flex justify-end gap-4 mt-8">
    <Button
        variant="secondary"
      className="border border-gray-300 text-gray-700 hover:bg-gray-100 transition-all duration-200 px-5 py-1 rounded-lg font-medium"
      onClick={handleReset}
    >
      {t("btn_reset")}
    </Button>
    <Button
        variant="primary"
      onClick={handleApply}
      className="bg-blue-600 text-white hover:bg-blue-700 transition-all duration-200 px-6 py-1 rounded-lg shadow-md hover:shadow-lg font-medium"
    >
      {t("btn_apply")}
    </Button>
  </div>
</div>

            <div className="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
              <div className="overflow-x-auto h-[520px] bg-white rounded-b-lg shadow-sm">
                <table className="w-full" role="table">
                  <thead className="bg-gray-50 border-b border-gray-100 sticky top-0 z-10">
                    <tr>
                      {visibleHeaders.map((header) => (
                        <th
                          key={String(header.key)}
                          className="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase tracking-wider sticky top-0 bg-white border-b border-gray-200 cursor-pointer"
                          onClick={() => handleSort(String(header.key))}
                        >
                          <div className="flex items-center gap-2">
                            <span>{header.label}</span>
                            {sortKey === header.key && (
                              sortDirection === "asc" ? (
                                <ChevronUpIcon className="w-4 h-4 text-gray-400" />
                              ) : (
                                <ChevronDownIcon className="w-4 h-4 text-gray-400" />
                              )
                            )}
                          </div>
                        </th>
                      ))}
                    </tr>
                  </thead>
                  <tbody className="bg-white divide-y divide-gray-100">
                    {(isInitialOrManualLoading || isUpdating) ? (
                      <>
                        {Array.from({ length: 5 }).map((_, index) => (
                          <SkeletonRow key={index} />
                        ))}
                        <SkeletonTotalRow />
                      </>
                    ) : (
                      Object.entries(paginatedGroups).map(([groupKey, groupOrders]: [string, AccountData[]]) => {
                        // If no grouping selected, render plain rows (no parent/group header)
                        if (!groupingColumn) {
                          const grandDebit = groupOrders.reduce((sum, account) => account.CBalStatus === "Dr" ? sum + (parseFloat(account.CBalance) || 0) : sum, 0);
                          const grandCredit = groupOrders.reduce((sum, account) => account.CBalStatus === "Cr" ? sum + (parseFloat(account.CBalance) || 0) : sum, 0);
                          return (
                            <React.Fragment key={groupKey}>
                              {groupOrders.map((account, idx) => (
                                <tr
                                  key={account.id}
                                  className="hover:bg-gray-50 transition-colors duration-150 cursor-pointer"
                                  data-testid={`row-account-${account.id}`}
                                >
                                  {visibleHeaders.map((header) => {
                                    const key = String(header.key);

                                    if (key === "index") {
                                      return (
                                        <td key={key} className="px-6 py-2 border-r border-gray-100">
                                          <span className="text-sm font-semibold text-gray-800">{(currentPage - 1) * itemsPerPage + idx + 1}</span>
                                        </td>
                                      );
                                    }

                                    if (key === "AccountCode") {
                                      return (
                                        <td key={key} className="px-6 py-2 border-r border-gray-100">
                                          <span className="text-sm font-semibold text-gray-900">{accountSubGroupsValue[account.AccSubCode]}</span>
                                        </td>
                                      );
                                    }

                                    if (key === "AccountTypeCode") {
                                      return (
                                        <td key={key} className="px-6 py-2 border-r border-gray-100">
                                          <span className="text-sm text-gray-900">{accountMainGroups[parseInt(account.CoaCode) as any]}</span>
                                        </td>
                                      );
                                    }

                                    if (key === "AccountName") {
                                      return <td key={key} className="px-6 py-2 border-r border-gray-100">{account.AccountName}</td>;
                                    }

                                    if (key === "DebitBalance") {
                                      return (
                                        <td key={key} className="px-6 py-2 border-r border-gray-100 text-right">
                                          {account.CBalStatus === "Dr" ? (
                                            <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-800 ring-1 ring-green-100">{Math.abs(Number(account.CBalance) || 0).toFixed(2)}</span>
                                          ) : (
                                            <span className="text-gray-400">--</span>
                                          )}
                                        </td>
                                      );
                                    }

                                    if (key === "CreditBalance") {
                                      return (
                                        <td key={key} className="px-6 py-2 border-r border-gray-100 text-right">
                                          {account.CBalStatus === "Cr" ? (
                                            <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-50 text-red-700 ring-1 ring-red-100">{Math.abs(Number(account.CBalance) || 0).toFixed(2)}</span>
                                          ) : (
                                            <span className="text-gray-400">--</span>
                                          )}
                                        </td>
                                      );
                                    }

                                    if (key === "UDate") {
                                      return (
                                        <td key={key} className="px-6 py-2 border-r border-gray-100">
                                          <div className="flex flex-col">
                                            <span className="text-sm font-semibold text-blue-900">{new Date(account.UDate).toLocaleDateString("en-US", { month: "short", day: "2-digit" })}</span>
                                            <span className="text-xs text-gray-500">{new Date(account.UDate).getFullYear()}</span>
                                          </div>
                                        </td>
                                      );
                                    }

                                    return <td key={key} className="px-6 py-2 border-r border-gray-100"></td>;
                                  })}
                                </tr>
                              ))}
                              <tr className="bg-gray-100 font-bold text-gray-900 text-right">
                                <td className="px-6 py-3" colSpan={4}></td>
                                <td className="px-6 py-3 text-sm font-bold text-green-800">{Math.abs(grandDebit).toFixed(2)}</td>
                                <td className="px-6 py-3 text-sm font-bold text-red-800">{Math.abs(grandCredit).toFixed(2)}</td>
                                <td className="px-6 py-3"></td>
                              </tr>
                            </React.Fragment>
                          );
                        }

                        // grouped view (existing behavior)
                        const groupDebitTotal = groupOrders.reduce((sum, account) => {
                          return account.CBalStatus === "Dr" ? sum + (parseFloat(account.CBalance) || 0) : sum;
                        }, 0);
                        const groupCreditTotal = groupOrders.reduce((sum, account) => {
                          return account.CBalStatus === "Cr" ? sum + (parseFloat(account.CBalance) || 0) : sum;
                        }, 0);
                        const isExpanded = expandedGroups.has(groupKey);
                        return (
                          <React.Fragment key={groupKey}>
                            <tr
                              className="bg-gray-50 hover:bg-gray-100 transition-colors cursor-pointer"
                              onClick={() => setExpandedGroups(prev => {
                                const next = new Set(prev);
                                if (next.has(groupKey)) {
                                  next.delete(groupKey);
                                } else {
                                  next.add(groupKey);
                                }
                                return next;
                              })}
                            >
                              {visibleHeaders.map((header) => {
                                const key = String(header.key);
                                if (key === "index") {
                                      return (
                                        <td key={key} className="px-6 py-3">
                                          <div className="flex items-center gap-3">
                                            {isExpanded ? (
                                              <ChevronDownIcon className="w-5 h-5 text-gray-500" />
                                            ) : (
                                              <ChevronRightIcon className="w-5 h-5 text-gray-500" />
                                            )}
                                            <span className="text-sm font-semibold text-gray-800">{groupOrders[0]?.index || ""}</span>
                                          </div>
                                        </td>
                                      );
                                }

                                if (key === groupedKey) {
                                  return (
                                    <td key={key} className="px-6 py-3 font-semibold text-gray-800 text-lg">
                                      {groupingColumn === 'AccountTypeCode' 
                                        ? accountMainGroups[parseInt(groupKey)]
                                        : accountSubGroupsValue[groupKey]}
                                    </td>
                                  );
                                }

                                if (key === "DebitBalance") {
                                  // Don't show debit total on the parent/group header row
                                  return <td key={key} className="px-6 py-3"></td>;
                                }

                                if (key === "CreditBalance") {
                                  // Don't show credit total on the parent/group header row
                                  return <td key={key} className="px-6 py-3"></td>;
                                }

                                // default empty cell for parent row
                                return <td key={key} className="px-6 py-3"></td>;
                              })}
                            </tr>
                            {isExpanded && groupOrders.map((account) => (
                              <tr
                                key={account.id}
                                className="hover:bg-gray-50 transition-colors duration-150 cursor-pointer border-l-2 border-l-transparent hover:border-l-blue-400"
                                data-testid={`row-account-${account.id}`}
                              >
                                {visibleHeaders.map((header) => {
                                  const key = String(header.key);
                                  // show SNo for child row
                                  if (key === "index") {
                                    // hide serial number for child rows (only parent shows group number)
                                    return <td key={key} className="px-6 py-2 border-r border-gray-100"></td>;
                                  }

                                  // do not repeat grouped column value on child rows
                                  if (key === groupedKey) {
                                    return <td key={key} className="px-6 py-2 border-r border-gray-100"></td>;
                                  }

                                  if (key === "AccountTypeCode") {
                                    return (
                                      <td key={key} className="px-6 py-2 border-r border-gray-100">
                                        <div className="flex flex-col">
                                          <span className="text-sm font-semibold text-gray-900">
                                            {accountMainGroups[account.CoaCode]}
                                          </span>
                                        </div>
                                      </td>
                                    );
                                  }

                                  if (key === "AccountCode") {
                                    return (
                                      <td key={key} className="px-6 py-2 border-r border-gray-100">
                                        <div className="flex flex-col">
                                          <span className="text-sm font-semibold text-gray-900" data-testid={`text-account-no-${account.id}`}>
                                            {accountSubGroupsValue[account.AccSubCode]}
                                          </span>
                                        </div>
                                      </td>
                                    );
                                  }

                                  if (key === "AccountName") {
                                    return (
                                      <td key={key} className="px-6 py-2 border-r border-gray-100">
                                        <div className="flex items-center gap-2">
                                          <div className="flex flex-col">
                                            {account.AccountName}
                                          </div>
                                        </div>
                                      </td>
                                    );
                                  }

                                  if (key === "DebitBalance") {
                                    return (
                                      <td key={key} className="px-6 py-2 border-r border-gray-100 text-right">
                                        {account.CBalStatus === "Dr" ? (
                                          <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-800 ring-1 ring-green-100">
                                            {Math.abs(Number(account.CBalance) || 0).toFixed(2)}
                                          </span>
                                        ) : (
                                          <span className="text-gray-400">--</span>
                                        )}
                                      </td>
                                    );
                                  }

                                  if (key === "CreditBalance") {
                                    return (
                                      <td key={key} className="px-6 py-2 border-r border-gray-100 text-right">
                                        {account.CBalStatus === "Cr" ? (
                                          <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-50 text-red-700 ring-1 ring-red-100">
                                            {Math.abs(Number(account.CBalance) || 0).toFixed(2)}
                                          </span>
                                        ) : (
                                          <span className="text-gray-400">--</span>
                                        )}
                                      </td>
                                    );
                                  }

                                  if (key === "UDate") {
                                    return (
                                      <td key={key} className="px-6 py-2 border-r border-gray-100">
                                        <div className="flex flex-col">
                                          <span className="text-sm font-semibold text-blue-900" data-testid={`text-date-${account.id}`}>
                                            {new Date(account.UDate).toLocaleDateString("en-US", { month: "short", day: "2-digit" })}
                                          </span>
                                          <span className="text-xs text-gray-500">{new Date(account.UDate).getFullYear()}</span>
                                        </div>
                                      </td>
                                    );
                                  }

                                  // fallback empty cell
                                  return <td key={key} className="px-6 py-2 border-r border-gray-100"></td>;
                                })}
                              </tr>
                            ))}
                            <tr className="bg-gray-100 font-bold text-gray-900">
                              <td className="px-6 py-3" colSpan={4}></td>
                                <td className="px-6 py-3 text-sm font-bold text-green-800 text-right">
                                {Math.abs(groupDebitTotal).toFixed(2)}
                              </td>
                              <td className="px-6 py-3 text-sm font-bold text-red-800 text-right">
                                {Math.abs(groupCreditTotal).toFixed(2)}
                              </td>
                              <td className="px-6 py-3"></td>
                            </tr>
                          </React.Fragment>
                        );
                      })
                    )}
                    {!(isInitialOrManualLoading || isUpdating) && filteredOrders.length === 0 && (
                      <tr>
                        <td colSpan={7} className="px-6 py-12 text-center">
                          <div className="text-gray-500">
                            <ShoppingCartIcon className="w-12 h-12 mx-auto mb-4 text-gray-300" />
                            <h3 className="text-lg font-medium text-gray-900 mb-2">{t("table_no_records")}</h3>
                            <p className="text-sm">Try adjusting your search or filter to find what you're looking for.</p>
                          </div>
                        </td>
                      </tr>
                    )}
                  </tbody>
                </table>
              </div>
              {!(isInitialOrManualLoading || isUpdating) && filteredOrders.length > 0 && (
                <div className="px-6 py-2 bg-gray-50 border-t border-gray-100">
                  <div className="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div className="text-sm text-gray-600">
                      Showing <span className="font-medium text-gray-900">{(currentPage - 1) * itemsPerPage + 1}</span>-
                      <span className="font-medium text-gray-900">{Math.min(currentPage * itemsPerPage, filteredOrders.length)}</span> of{" "}
                      <span className="font-medium text-gray-900">{filteredOrders.length}</span> accounts
                    </div>
                    <div className="flex items-center gap-2">
                      <Button
                        variant="secondary"
                        size="sm"
                        disabled={currentPage <= 1 || isInitialOrManualLoading || isUpdating}
                        onClick={() => setCurrentPage((prev) => Math.max(prev - 1, 1))}
                        data-testid="button-previous-page"
                      >
                        <ChevronLeftIcon className="w-4 h-4 mr-1" />
                        {t("pagination_previous")}
                      </Button>
                      <div className="flex items-center gap-1">
                        {Array.from({ length: Math.min(totalPages, 5) }, (_, i) => {
                          const page = i + 1;
                          return (
                            <Button
                              key={page}
                              variant={currentPage === page ? "primary" : "secondary"}
                              size="sm"
                              onClick={() => setCurrentPage(page)}
                              className={currentPage === page ? "bg-blue-600 text-white" : ""}
                              data-testid={`button-page-${page}`}
                              disabled={isInitialOrManualLoading || isUpdating}
                            >
                              {page}
                            </Button>
                          );
                        })}
                        {totalPages > 5 && (
                          <>
                            <span className="px-2 text-gray-500">...</span>
                            <Button
                              variant="secondary"
                              size="sm"
                              onClick={() => setCurrentPage(totalPages)}
                              data-testid={`button-page-${totalPages}`}
                              disabled={isInitialOrManualLoading || isUpdating}
                            >
                              {totalPages}
                            </Button>
                          </>
                        )}
                      </div>
                      <Button
                        variant="secondary"
                        size="sm"
                        disabled={currentPage >= totalPages || isInitialOrManualLoading || isUpdating}
                        onClick={() => setCurrentPage((prev) => Math.min(prev + 1, totalPages))}
                        data-testid="button-next-page"
                      >
                        {t("pagination_next")}
                        <ChevronRightIcon className="w-4 h-4 ml-1" />
                      </Button>
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
};

export default AccountBalance;