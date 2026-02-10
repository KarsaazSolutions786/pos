"use client";

import { useAuth } from "@/contexts/AuthContext";
import { useRouter } from "next/navigation";
import { useEffect, useMemo, useState } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import axios from "axios";
import { ArrowDownCircle, Banknote, CalendarCheck2, DollarSign, Package, ShoppingCart, TrendingUp, UserCheck, Users, Wallet } from "lucide-react";
import { formatDate } from "@/services/httpService";
import { useTranslations } from "@/hooks/useTranslations";
import { customerState, fetchCustomerList } from "@/Redux/slices/customerSlice/customerSlice";
import { useDispatch, useSelector } from "react-redux";
import { LucideIcon } from "lucide-react";
import { fetchAccounts, selectAccountsState } from "@/Redux/slices/accountSlice/accountSlice";
import { fetchPsAccountSubGroup, selectPsAccountSubGroup } from "@/Redux/slices/psAccountSubGroupSlice/psAccountSubGroupSlice";

// Skeleton Components
const SkeletonStatsCard = () => (
  <div className="relative p-6 rounded-2xl backdrop-blur-md border border-white/10 shadow-lg overflow-hidden animate-pulse">
    <div className="flex items-center justify-between mb-4">
      <div className="h-6 bg-gray-300 rounded w-32"></div>
      <div className="w-8 h-8 bg-gray-300 rounded-full"></div>
    </div>
    <div className="h-8 bg-gray-300 rounded w-24 mb-4"></div>
    <div className="space-y-1">
      <div className="h-4 bg-gray-300 rounded w-full mb-1"></div>
      <div className="h-4 bg-gray-300 rounded w-4/5"></div>
    </div>
  </div>
);

const SkeletonTable = () => (
  <div className="border border-gray-200 rounded-lg shadow overflow-hidden animate-pulse h-fit">
    <div className="w-full h-12 bg-gray-200"></div>
    <div className="bg-white p-4">
      <div className="mb-4">
        <div className="w-full h-10 bg-gray-300 rounded-lg"></div>
      </div>
      <div className="relative max-h-80 overflow-hidden rounded-xl">
        <div className="space-y-3">
          {[...Array(5)].map((_, i) => (
            <div key={i} className="flex space-x-4 p-4">
              <div className="h-4 bg-gray-300 rounded w-6"></div>
              <div className="h-4 bg-gray-300 rounded w-32"></div>
              <div className="h-4 bg-gray-300 rounded w-24"></div>
              <div className="h-4 bg-gray-300 rounded w-20"></div>
              <div className="h-4 bg-gray-300 rounded w-28"></div>
            </div>
          ))}
        </div>
      </div>
    </div>
  </div>
);

const SkeletonHeader = () => (
  <header className="bg-white shadow-sm border-b border-gray-200 animate-pulse">
    <div className="flex justify-between items-center px-6 py-4">
      <div className="h-8 bg-gray-300 rounded w-32"></div>
      <div className="flex items-center space-x-4">
        <div className="flex items-center space-x-3">
          <div className="h-4 bg-gray-300 rounded w-24"></div>
          <div className="h-6 bg-gray-300 rounded-full w-20"></div>
        </div>
        <div className="h-10 bg-gray-300 rounded-md w-20"></div>
      </div>
    </div>
  </header>
);

const SkeletonWelcome = () => (
  <div className="mb-8 animate-pulse">
    <div className="h-6 bg-gray-300 rounded w-48 mb-4"></div>
    <div className="h-4 bg-gray-300 rounded w-96"></div>
  </div>
);

interface SubValue {
  label: string;
  value: string | number;
}

interface StatsCardProps {
  title: string;
  value: string | number;
  subValues?: SubValue[];
  icon: LucideIcon;
  gradient: string;
  isAnimated?: boolean;
}

function StatsCard({
  title,
  value,
  subValues = [],
  icon: Icon,
  gradient,
  isAnimated = true
}: StatsCardProps) {
  return (
    <div
      className={`
        relative p-6 rounded-2xl backdrop-blur-md border border-white/10 
        shadow-lg hover:shadow-xl transition-all duration-500 
        hover:scale-105 hover:-translate-y-1 group overflow-hidden
      `}
      style={{ background: gradient }}
    >
      <div className="flex items-center justify-between mb-4">
        <h2 className="text-lg font-semibold text-white">{title}</h2>
        <Icon className="w-8 h-8 text-white opacity-80" />
      </div>
      <div className="text-3xl font-bold text-white mb-4">{value}</div>

      {subValues.length > 0 && (
        <div className="space-y-1">
          {subValues.map((sub, idx) => (
            <div key={idx} className="flex justify-between text-sm text-white/90">
              <span>{sub.label}</span>
              <span className="font-semibold">{sub.value}</span>
            </div>
          ))}
        </div>
      )}
    </div>
  );
}


function DashboardContent() {
  const { user, logout } = useAuth();
  const [isLoading, setIsLoading] = useState(true);
  const [posList, setPosList] = useState([]);
  const [sales, setSales] = useState([]);
  const router = useRouter();
  const [GLTDList, setGLTDList] = useState([]);
  const [accountCbalList, setAccountCbalList] = useState([]);
  const { t, isRTL } = useTranslations();
  
  // Redux selectors
  const { customerslist, loading: customersLoading } = useSelector(customerState);
  const { accountsList, loading: accountsLoading } = useSelector(selectAccountsState);
  const { accountSubGroups, loading: subGroupsLoading } = useSelector(selectPsAccountSubGroup);

  const dispatch = useDispatch();

  // Check if all data is loaded
  const isDataLoading = useMemo(() => {
    return isLoading || customersLoading || accountsLoading || subGroupsLoading;
  }, [isLoading, customersLoading, accountsLoading, subGroupsLoading]);

  const getRoleColor = (role) => {
    switch (role) {
      case "super-admin":
        return "bg-red-100 text-red-800";
      case "admin":
        return "bg-blue-100 text-blue-800";
      case "user":
        return "bg-green-100 text-green-800";
      default:
        return "bg-gray-100 text-gray-800";
    }
  };

  const getRoleSpecificContent = () => {
    switch (user?.role) {
      case "super-admin":
        return (
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div className="bg-white p-6 rounded-lg shadow">
              <h3 className="text-lg font-semibold text-gray-900 mb-4">
                System Management
              </h3>
              <ul className="space-y-2 text-sm text-gray-600">
                <li>• Manage all users and roles</li>
                <li>• System configuration</li>
                <li>• Database administration</li>
                <li>• Security settings</li>
              </ul>
            </div>
            <div className="bg-white p-6 rounded-lg shadow">
              <h3 className="text-lg font-semibold text-gray-900 mb-4">
                Analytics
              </h3>
              <ul className="space-y-2 text-sm text-gray-600">
                <li>• System performance</li>
                <li>• User activity logs</li>
                <li>• Error monitoring</li>
                <li>• Backup management</li>
              </ul>
            </div>
            <div className="bg-white p-6 rounded-lg shadow">
              <h3 className="text-lg font-semibold text-gray-900 mb-4">
                Advanced Features
              </h3>
              <ul className="space-y-2 text-sm text-gray-600">
                <li>• API management</li>
                <li>• Third-party integrations</li>
                <li>• Custom workflows</li>
                <li>• System maintenance</li>
              </ul>
            </div>
          </div>
        );
      case "admin":
        return (
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div className="bg-white p-6 rounded-lg shadow">
              <h3 className="text-lg font-semibold text-gray-900 mb-4">
                User Management
              </h3>
              <ul className="space-y-2 text-sm text-gray-600">
                <li>• View user accounts</li>
                <li>• Manage permissions</li>
                <li>• User activity monitoring</li>
                <li>• Account settings</li>
              </ul>
            </div>
            <div className="bg-white p-6 rounded-lg shadow">
              <h3 className="text-lg font-semibold text-gray-900 mb-4">
                Content Management
              </h3>
              <ul className="space-y-2 text-sm text-gray-600">
                <li>• Create and edit content</li>
                <li>• Manage categories</li>
                <li>• Content approval</li>
                <li>• Media management</li>
              </ul>
            </div>
          </div>
        );
      case "user":
        return (
          <div className="bg-white p-6 rounded-lg shadow">
            <h3 className="text-lg font-semibold text-gray-900 mb-4">
              User Dashboard
            </h3>
            <ul className="space-y-2 text-sm text-gray-600">
              <li>• View your profile</li>
              <li>• Update personal information</li>
              <li>• View activity history</li>
              <li>• Access basic features</li>
            </ul>
          </div>
        );
      default:
        return <div>No content available for this role.</div>;
    }
  };

  async function fetchPendingOrderList() {
    setIsLoading(true);
    try {
      const myHeaders = new Headers();
      myHeaders.append("api_key", user?.apiKey || "123");
      myHeaders.append("Content-Type", "application/json");

      const raw = JSON.stringify({ status: "OPEN", api_key: user?.apiKey || "123" });

      const requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: raw,
        redirect: "follow",
      };

      const response = await fetch(
        "/custom_apis/sales_list.php",
        requestOptions
      );
      const data = await response.json();
      const result = data.data;
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      setSales(result);
    } catch (error) {
      console.error("Error fetching sales list:", error);
    } finally {
      setIsLoading(false);
    }
  }

  const fetchTSaleD = async () => {
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
      setGLTDList(result);
    } catch (error) {
      console.error("Error fetching ledger entries:", error);
    }
  };

  const fetchAccountCBal = async () => {
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
      setAccountCbalList(result);
    } catch (error) {
      console.error("Error fetching AccountCBal:", error);
    }
  };

  useEffect(() => {
    if (!user) {
      router.push("/login");
      return;
    }

    // Fetch all data
    const fetchAllData = async () => {
      setIsLoading(true);
      try {
        await Promise.all([
          fetchPendingOrderList(),
          fetchTSaleD(),
          fetchAccountCBal(),
          dispatch(fetchCustomerList()),
          dispatch(fetchAccounts(user?.apiKey)),
          dispatch(fetchPsAccountSubGroup(user?.apiKey))
        ]);
      } catch (error) {
        console.error("Error fetching dashboard data:", error);
      } finally {
        setIsLoading(false);
      }
    };

    fetchAllData();
  }, [user, router, dispatch]);

  // Show skeleton while loading


  // Calculate derived values only when data is available
  const partyName = useMemo(() => {
    return accountsList.reduce((acc, item) => {
      acc[item.Code] = item.Name;
      return acc;
    }, {});
  }, [accountsList]);

  const accountTypeList = useMemo(() => {
    return accountSubGroups.reduce((acc, item) => {
      acc[item.value] = item.label;
      return acc;
    }, {});
  }, [accountSubGroups]);

  const today = new Date().toISOString().split("T")[0];
  const todayCash = GLTDList
    .filter((inv) => inv.ParentAccountCode == 1 && inv.TStatus === "Dr" && inv.CreateDate.startsWith(today))
    .reduce((acc, inv) => acc + parseFloat(inv.Amount || 0), 0);

  const totalCash = accountCbalList.filter((acc) => acc.AccSubCode == 1 && acc.CBalStatus === "Dr")
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.CBalance || "0")), 0);

  const todayTotalCashout = GLTDList
    .filter((acc) => acc.ParentAccountCode == 1 && acc.TStatus == "Cr" && acc.CreateDate.startsWith(today))
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.Amount || "0")), 0);

  const totalExpense = accountCbalList.filter((acc) => acc.AccSubCode == 19 && acc.CBalStatus === "Dr")
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.CBalance || "0")), 0);

  const todayTotalExpense = GLTDList.filter((acc) => acc.ParentAccountCode == 19 && acc.TStatus === "Dr" && acc.CreateDate.startsWith(today))
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.Amount || "0")), 0);

  const totalCashInBank = accountCbalList.filter((acc) => acc.AccSubCode == 9 && acc.CBalStatus === "Dr")
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.CBalance || "0")), 0);

  const todayCashInBank = GLTDList.filter((acc) => acc.ParentAccountCode == 9 && acc.TStatus === "Dr" && acc.CreateDate.startsWith(today))
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.Amount || "0")), 0);

  const todayCashOutBank = GLTDList.filter((acc) => acc.ParentAccountCode == 9 && acc.TStatus === "Cr" && acc.CreateDate.startsWith(today))
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.Amount || "0")), 0);

  const totalsales = sales.filter((sale) => sale.SaleType === "Cash")
    .reduce((sum, sale) => sum + Math.abs(parseFloat(sale.GrandTotal || "0")), 0);

  const cashInTable = GLTDList
    .filter((inv) => inv.ParentAccountCode == 1 && inv.TStatus === "Dr" && inv.CreateDate.startsWith(today));

  const cashOutTable = GLTDList
    .filter((inv) => inv.ParentAccountCode == 1 && inv.TStatus === "Cr" && inv.CreateDate.startsWith(today));

  const cashInBankTable = GLTDList
    .filter((inv) => inv.ParentAccountCode == 9 && inv.TStatus === "Dr" && inv.CreateDate.startsWith(today));

  const cashOutBankTable = GLTDList
    .filter((inv) => inv.ParentAccountCode == 9 && inv.TStatus === "Cr" && inv.CreateDate.startsWith(today));

  const expenseTable = GLTDList.filter((inv) => inv.ParentAccountCode == 19 && inv.TStatus === "Dr" && inv.CreateDate.startsWith(today));

  const debitorsTable = GLTDList.filter((acc) => (acc.ParentAccountCode == 6 || acc.ParentAccountCode == 7 || acc.ParentAccountCode == 8) && acc.CreateDate.startsWith(today) && acc.TStatus === "Dr");
  const creditorsTable = GLTDList.filter((acc) => (acc.ParentAccountCode == 6 || acc.ParentAccountCode == 7 || acc.ParentAccountCode == 8) && acc.CreateDate.startsWith(today) && acc.TStatus === "Cr");

  const allDebitors = GLTDList.filter((acc) => acc.TStatus === "Dr" && acc.CreateDate.startsWith(today));
  const allCreditors = GLTDList.filter((acc) => acc.TStatus === "Cr" && acc.CreateDate.startsWith(today));

  const totalCreditors = accountCbalList
    .filter(
      (acc) =>
        (acc.AccSubCode == 6 || acc.AccSubCode == 7 || acc.AccSubCode == 8) &&
        acc.CBalStatus === "Cr"
    )
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.CBalance || "0")), 0);

  const totalDebtors = accountCbalList
    .filter(
      (acc) =>
        (acc.AccSubCode == 6 || acc.AccSubCode == 7 || acc.AccSubCode == 8) &&
        acc.CBalStatus === "Dr"
    )
    .reduce((sum, acc) => sum + Math.abs(parseFloat(acc.CBalance || "0")), 0);

  const tablesConfig = [
    { title: t("section_all_creditors", "All Creditors"), data: allCreditors, highlight: "credit" },
    { title: t("section_all_debitors", "All Debitors"), data: allDebitors, highlight: "debit" },
    { title: t("section_debitors", "Debitors"), data: debitorsTable, highlight: "debit" },
    { title: t("section_creditors", "Creditors"), data: creditorsTable, highlight: "credit" },
    { title: t("section_cash_in_hand_debit", "Cash In Hand (Debit)"), data: cashInTable, highlight: "debit" },
    { title: t("section_parties_to_pay_credit", "Parties to Pay (Credit)"), data: cashOutTable, highlight: "credit" },
    { title: t("section_cash_incoming_bank_debit", "Cash Incoming in Bank (Debit)"), data: cashInBankTable, highlight: "debit" },
    { title: t("section_cash_outgoing_bank_credit", "Cash Outgoing in Bank (Credit)"), data: cashOutBankTable, highlight: "credit" },
    { title: t("section_expense_debit", "Expense (Debit)"), data: expenseTable, highlight: "Debit" },
  ];

  const cards  =[
    {
      title: t("card_total_cash", "Total Cash"),
      value: totalCash.toLocaleString(),
      subValues: [
        { label: t("card_today_cash_in", "Today Cash In"), value: todayCash.toLocaleString(), color: "text-green-600" },
        { label: t("card_today_cash_out", "Today Cash Out"), value: todayTotalCashout.toLocaleString(), color: "text-red-600" },
      ],
      icon: DollarSign,
      gradient: "linear-gradient(135deg, #34d399 0%, #059669 100%)",
    },
    {
      title: t("card_total_sales", "Total Sales"),
      value: totalsales.toLocaleString(),
      subValues: [],
      icon: TrendingUp,
      gradient: "linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%)",
    },
    {
      title: t("card_total_cash_bank", "Total Cash in Bank"),
      value: totalCashInBank.toLocaleString(),
      subValues: [
        { label: t("card_incoming", "Incoming"), value: todayCashInBank.toLocaleString(), color: "text-green-600" },
        { label: t("card_outgoing", "Outgoing"), value: todayCashOutBank.toLocaleString(), color: "text-red-600" },
      ],
      icon: Banknote,
      gradient: "linear-gradient(135deg, #f97316 0%, #ea580c 100%)",
    },
    {
      title: t("card_total_expense", "Total Expense"),
      value: totalExpense.toLocaleString(),
      subValues: [
        { label: t("card_today_expense", "Today Expense"), value: todayTotalExpense.toLocaleString(), color: "text-red-600" },
      ],
      icon: ShoppingCart,
      gradient: "linear-gradient(135deg, #ec4899 0%, #db2777 100%)",
    },
    {
      title: t("card_total_debtors", "Total Debtors"),
      value: totalDebtors.toLocaleString(),
      subValues: [],
      icon: Users,
      gradient: "linear-gradient(135deg, #a855f7 0%, #7e22ce 100%)",
    },
    {
      title: t("card_total_creditors", "Total Creditors"),
      value: totalCreditors.toLocaleString(),
      subValues: [],
      icon: UserCheck,
      gradient: "linear-gradient(135deg, #facc15 0%, #eab308 100%)",
    },
  ]

    if (isDataLoading) {
    return (
      <div className="flex h-screen bg-gray-50">
        {/* Sidebar */}
        <Sidebar />
        
        {/* Main Content */}
        <div className="flex-1 flex flex-col overflow-hidden">
          <SkeletonHeader />
          
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <SkeletonWelcome />
              
              {/* Stats Cards Skeleton */}
              <div className="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                {[...Array(6)].map((_, i) => (
                  <SkeletonStatsCard key={i} />
                ))}
              </div>

              {/* Tables Skeleton */}
              <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                {[...Array(9)].map((_, i) => (
                  <SkeletonTable key={i} />
                ))}
              </div>
            </div>
          </main>
        </div>
      </div>
    );
  }
  return (
    <div className="flex h-screen bg-gray-50">
      {/* Sidebar */}
      <Sidebar />

      {/* Main Content */}
      <div className="flex-1 flex flex-col overflow-hidden">
        {/* Header */}
        <header className="bg-white shadow-sm border-b border-gray-200">
          <div className="flex justify-between items-center px-6 py-4">
            <div className="flex items-center">
              <h1 className="text-2xl font-bold text-gray-900">{t("dashboard_title", "Dashboard")}</h1>
            </div>
            <div className="flex items-center space-x-4">
              <div className="flex items-center space-x-3">
                <span className="text-sm text-gray-700">{t("welcome_user_msg", "Welcome")}, {user?.name}</span>
                <span
                  className={`inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${getRoleColor(
                    user?.role || ""
                  )}`}
                >
                  {user?.role}
                </span>
              </div>
              <button
                onClick={logout}
                className="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors"
              >
                {t("logout_btn", "Logout")}
              </button>
            </div>
          </div>
        </header>

        {/* Main Content Area */}
        <main className="flex-1 overflow-y-auto">
          <div className="p-6">
            <div className="mb-8">
              <h2 className="text-xl font-semibold text-gray-900 mb-4">
                {t("welcome_user_msg", "Welcome")} - {user?.role} {t("dashboard_title", "Dashboard")}
              </h2>
              <p className="text-gray-600">
                {t("role_access_text", "You have access to the following features based on your role.")}
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-4 gap-6">
             {cards.map((card, idx) => (
                <StatsCard
                  key={idx}
                  title={card.title}
                  value={card.value}
                  subValues={card.subValues}
                  icon={card.icon as LucideIcon}
                  gradient={card.gradient}
                />
              ))}
            </div>

            <div className="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
              {tablesConfig.map((table, idx) => (
                <DataTable
                  key={idx}
                  title={table.title}
                  data={table.data}
                  partyName={partyName}
                  accountTypeList={accountTypeList}
                  highlight={table.highlight as "debit" | "credit"}
                  defaultOpen={idx < 2}
                />
              ))}
            </div>

            {/* {getRoleSpecificContent()} */}
          </div>
        </main>
      </div>
    </div>
  );
}

interface DataTableProps {
  title: string;
  data: any[];
  partyName: Record<string, string>;
  accountTypeList: Record<string, string>;
  highlight?: "debit" | "credit";
  defaultOpen?: boolean;
}

const DataTable: React.FC<DataTableProps> = ({
  title,
  data,
  partyName,
  accountTypeList,
  highlight = "debit",
  defaultOpen = false,
}) => {
  const [searchTerm, setSearchTerm] = useState("");
  const [isOpen, setIsOpen] = useState(defaultOpen);
  const { t } = useTranslations();

  const filteredData = useMemo(() => {
    if (!searchTerm) return data;
    const lower = searchTerm.toLowerCase();
    return data.filter(
      (acc) =>
        partyName[acc.AccountCode]?.toLowerCase().includes(lower) ||
        accountTypeList[acc.ParentAccountCode]?.toLowerCase().includes(lower) ||
        acc.Amount?.toString().includes(lower) ||
        acc.TDate?.toLowerCase().includes(lower)
    );
  }, [data, searchTerm, partyName, accountTypeList]);

  return (
    <div className="border border-gray-200 rounded-lg shadow overflow-hidden cursor-pointer h-fit">
      <button
        onClick={() => setIsOpen(!isOpen)}
        className="w-full flex justify-between items-center px-4 py-3 bg-gray-100 hover:bg-gray-200 transition cursor-pointer"
      >
        <span className="text-lg font-semibold text-gray-900">{title}</span>
        <span
          className={`text-xl transform transition-transform duration-300 ${
            isOpen ? "rotate-180" : "rotate-0"
          }`}
        >
          ▼
        </span>
      </button>

      <div
        className={`transition-all duration-500 ease-in-out overflow-hidden ${
          isOpen ? "max-h-[600px] opacity-100" : "max-h-0 opacity-0"
        }`}
      >
        <div className="bg-white p-4">
          <div className="mb-4">
            <input
              type="text"
              placeholder={t("label_search", "Search records...")}
              className="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
              value={searchTerm}
              onChange={(e) => setSearchTerm(e.target.value)}
            />
          </div>

          {/* Table */}
          <div className="relative max-h-80 overflow-y-auto rounded-xl shadow-lg">
            <table className="min-w-full table-auto border border-gray-200 bg-white rounded-xl">
              <thead className="sticky top-0 z-10 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white">
                <tr>
                  <th className="px-6 py-3 border-b text-left text-sm font-semibold">
                    {t("table_col_sno", "SNO.")}
                  </th>
                  <th className="px-6 py-3 border-b text-left text-sm font-semibold">
                    {t("table_col_party_name", "Party Name")}
                  </th>
                  <th className="px-6 py-3 border-b text-left text-sm font-semibold">
                    {t("table_col_account_type", "Account Type")}
                  </th>
                  <th className="px-6 py-3 border-b text-left text-sm font-semibold">
                    {t("table_col_balance", "Balance")}
                  </th>
                  <th className="px-6 py-3 border-b text-left text-sm font-semibold">
                    {t("table_col_last_updated", "Last Updated")}
                  </th>
                </tr>
              </thead>
              <tbody className="divide-y divide-gray-100">
                {filteredData.length > 0 ? (
                  filteredData.map((acc, idx) => (
                    <tr
                      key={acc.Code}
                      className="hover:bg-gray-50 transition-colors"
                    >
                      <td className="px-6 py-4 text-sm text-gray-700">
                        {idx + 1}
                      </td>
                      <td className="px-6 py-4 text-sm text-gray-700">
                        {partyName[acc.AccountCode] || "N/A"}
                      </td>
                      <td className="px-6 py-4 text-sm text-gray-700">
                        {accountTypeList[acc.ParentAccountCode] || "N/A"}
                      </td>
                      <td
                        className={`px-6 py-4 text-sm font-medium ${
                          highlight === "credit"
                            ? "text-red-600"
                            : "text-green-600"
                        }`}
                      >
                        {parseFloat(acc.Amount || 0).toLocaleString()}
                      </td>
                      <td className="px-6 py-4 text-sm text-gray-500">
                        {acc.TDate
                          ? new Date(acc.TDate).toLocaleDateString()
                          : "N/A"}
                      </td>
                    </tr>
                  ))
                ) : (
                  <tr>
                    <td
                      colSpan={5}
                      className="px-6 py-4 text-center text-sm text-gray-500"
                    >
                      {t("table_no_records", "No records found")}
                    </td>
                  </tr>
                )}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  );
};

export default function Dashboard() {
  return (
    <ProtectedRoute>
      <DashboardContent />
    </ProtectedRoute>
  );
}