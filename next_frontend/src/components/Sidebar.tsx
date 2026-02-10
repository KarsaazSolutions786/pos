"use client";

import React, { useState, useEffect } from "react";
import { useAuth } from "@/contexts/AuthContext";
import { useRouter, usePathname } from "next/navigation";
import { ChartBarIcon, ShoppingCartIcon, X } from "lucide-react";
import LanguageSwitcher from "./LanguageSwitcher";
import { useTranslations } from "@/hooks/useTranslations";

// Import Lucide Icons
import {
  Home,
  ShoppingCart,
  Calendar,
  Banknote,
  List,
  BookOpen,
  Users,
  FileText,
  Receipt,
  Building,
  User,
  Briefcase,
  UserCircle,
  Layers,
  Settings,
} from "lucide-react";

interface MenuItem {
  id: string;
  label: string;
  icon?: React.ReactNode;
  isCategory?: boolean;
  isActive?: boolean;
  route?: string;
}

interface SidebarProps {
  onClose?: () => void;
}

export default function Sidebar({ onClose }: SidebarProps) {
  const { user } = useAuth();
  const router = useRouter();
  const pathname = usePathname();
  const [activeItem, setActiveItem] = useState("dashboard");
  const { t, isRTL } = useTranslations();

  // ========== Sub Menus ==========
  const setupBooksItems: MenuItem[] = [
    { id: "Accounts", label: t("sidebar_submenu_accounts", "Accounts"), icon: <Banknote className="h-5 w-5" />, route: "/accounts" },
    { id: "Customers", label: t("sidebar_submenu_customers", "Customers"), icon: <Users className="h-5 w-5" />, route: "/customers" },
    { id: "Employees", label: t("sidebar_submenu_employees", "Employees"), icon: <Briefcase className="h-5 w-5" />, route: "/employees" },
    { id: "Banks", label: t("sidebar_submenu_banks", "Banks"), icon: <Building className="h-5 w-5" />, route: "/banks" },
    { id: "Products", label: t("sidebar_submenu_products", "Products"), icon: <ShoppingCartIcon className="h-5 w-5" />, route: "/products" },
    { id: "Suppliers", label: t("sidebar_submenu_suppliers", "Suppliers"), icon: <Building className="h-5 w-5" />, route: "/suppliers" },
    { id: "Customer Groups", label: t("sidebar_submenu_customer_groups", "Customer Groups"), icon: <User className="h-5 w-5" />, route: "/customer-groups" },
    { id: "Employee Groups", label: t("sidebar_submenu_employee_groups", "Employee Groups"), icon: <Briefcase className="h-5 w-5" />, route: "/employee-groups" },
    { id: "Product Groups", label: t("sidebar_submenu_product_groups", "Product Groups"), icon: <Layers className="h-5 w-5" />, route: "/product-groups" },
    { id: "Supplier Groups", label: t("sidebar_submenu_supplier_groups", "Supplier Groups"), icon: <Building className="h-5 w-5" />, route: "/supplier-groups" },
    { id: "Bank Groups", label: t("sidebar_submenu_bank_groups", "Bank Groups"), icon: <Building className="h-5 w-5" />, route: "/bank-groups" },
    { id: "User Groups", label: t("sidebar_submenu_user_groups", "User Groups"), icon: <UserCircle className="h-5 w-5" />, route: "/user-groups" },
  ];

  const transactionBookItems: MenuItem[] = [
    { id: "Orders", label: t("sidebar_submenu_orders_list", "Orders List"), icon: <List className="h-5 w-5" />, route: "/Orders" },
    { id: "POS", label: t("sidebar_submenu_point_of_sale", "Point of Sale"), icon: <ShoppingCart className="h-5 w-5" />, route: "/pos" },
    { id: "POSList", label: t("sidebar_submenu_pos_list", "POS List"), icon: <List className="h-5 w-5" />, route: "/posList" },
  ];

  const accountBookItems: MenuItem[] = [
    { id: "JournalVoucher", label: t("sidebar_submenu_journal_voucher", "Journal Voucher"), icon: <FileText className="h-5 w-5" />, route: "/Journalvoucher" },
    { id: "Voucher", label: t("sidebar_submenu_voucher_list", "Voucher List"), icon: <Receipt className="h-5 w-5" />, route: "/voucher" },
    { id: "CashPayment", label: t("sidebar_submenu_cash_payment", "Cash Payment"), icon: <Banknote className="h-5 w-5" />, route: "/cash-payment" },
    { id: "CashPaymentList", label: t("sidebar_submenu_cash_payment_list", "Cash Payment List"), icon: <List className="h-5 w-5" />, route: "/cash-payment-list" },
    { id: "CashReceive", label: t("sidebar_submenu_cash_receive", "Cash Receive"), icon: <Banknote className="h-5 w-5" />, route: "/cash-receive" },
    { id: "CashReceiveList", label: t("sidebar_submenu_cash_receive_list", "Cash Receive List"), icon: <List className="h-5 w-5" />, route: "/cash-receive-list" },
    { id: "BankPayment", label: t("sidebar_submenu_bank_payment", "Bank Payment"), icon: <Building className="h-5 w-5" />, route: "/bank-payment" },
    { id: "BankPaymentList", label: t("sidebar_submenu_bank_payment_list", "Bank Payment List"), icon: <List className="h-5 w-5" />, route: "/bank-payment-list" },
    { id: "BankDeposit", label: t("sidebar_submenu_bank_deposit", "Bank Deposit"), icon: <Building className="h-5 w-5" />, route: "/bank-deposit" },
    { id: "BankDepositList", label: t("sidebar_submenu_bank_deposit_list", "Bank Deposit List"), icon: <List className="h-5 w-5" />, route: "/bank-deposit-list" },
  ];

  const preferenceItems: MenuItem[] = [
    { id: "ClosingMonth", label: t("sidebar_submenu_closing_month", "Closing Month"), icon: <Calendar className="h-5 w-5" />, route: "/closingMonth" },
    { id: "UserManagement", label: t("sidebar_submenu_user_management", "User Management"), icon: <Users className="h-5 w-5" />, route: "/user-info" },
  ];
  const reportItems: MenuItem[] = [
    { id: "AccountLedger", label: t("sidebar_submenu_account_ledger", "Account Ledger"), icon: <Calendar className="h-5 w-5" />, route: "/accountLedger" },
    { id: "trialBalance", label: t("sidebar_submenu_trial_balance", "Trial Balance"), icon: <Banknote className="h-5 w-5" />, route: "/trialBalance" },
  ];

  const menuItems: MenuItem[] = [
    { id: "dashboard", label: t("sidebar_menu_dashboard", "Dashboard"), icon: <Home className="h-5 w-5" />, route: "/dashboard" },
  ];

  // ========== States ==========
  const [setupBooksOpen, setSetupBooksOpen] = useState(false);
  const [transactionBookOpen, setTransactionBookOpen] = useState(false);
  const [accountBookOpen, setAccountBookOpen] = useState(false);
  const [preferenceOpen, setPreferenceOpen] = useState(false);
  const [reportsOpen, setReportsOpen] = useState(false);

  // ========== Active Menu ==========
  useEffect(() => {
    let currentItem =
      menuItems.find((item) => item.route === pathname) ||
      setupBooksItems.find((item) => item.route === pathname) ||
      transactionBookItems.find((item) => item.route === pathname) ||
      accountBookItems.find((item) => item.route === pathname) ||
      preferenceItems.find((item) => item.route === pathname);
      reportItems.find((item) => item.route === pathname);

    if (currentItem) {
      setActiveItem(currentItem.id);
    }

    // auto open parent menu
    if (setupBooksItems.some((item) => item.route === pathname)) setSetupBooksOpen(true);
    if (transactionBookItems.some((item) => item.route === pathname)) setTransactionBookOpen(true);
    if (accountBookItems.some((item) => item.route === pathname)) setAccountBookOpen(true);
    if (preferenceItems.some((item) => item.route === pathname)) setPreferenceOpen(true);
    if (reportItems.some((item) => item.route === pathname)) setReportsOpen(true);
  }, [pathname]);

  const handleItemClick = (item: MenuItem) => {
    setActiveItem(item.id);
    if (item.route) {
      router.push(item.route);
    }
  };

  // ========== Reusable Dropdown Renderer ==========
// ========== Reusable Dropdown Renderer ==========
const renderDropdown = (
  title: string,
  icon: React.ReactNode,   // 👈 new param
  isOpen: boolean,
  setOpen: React.Dispatch<React.SetStateAction<boolean>>,
  items: MenuItem[]
) => (
  <li>
    <button
      type="button"
      onClick={() => setOpen((o) => !o)}
      className={`w-full ${isRTL ? 'text-right' : 'text-left'} px-3 cursor-pointer py-2.5 rounded-lg text-sm transition-all duration-200 flex items-center ${isRTL ? 'space-x-reverse space-x-3' : 'space-x-3'} ${
        isOpen
          ? "bg-blue-700 text-white"
          : "text-gray-400 hover:text-gray-300 hover:bg-gray-700"
      }`}
    >
      {icon} {/* 👈 dynamic icon */}
      <span className="font-semibold">{title}</span>
      <span className={isRTL ? 'mr-auto' : 'ml-auto'}>{isOpen ? "▲" : "▼"}</span>
    </button>
    {isOpen && (
      <ul className={`${isRTL ? 'pr-8' : 'pl-8'} mt-1 space-y-1 cursor-pointer`}>
        {items.map((item) => (
          <li key={item.id}>
            <button
              onClick={() => handleItemClick(item)}
              className={`w-full ${isRTL ? 'text-right' : 'text-left'} px-3 py-2 rounded-lg text-sm flex items-center ${isRTL ? 'space-x-reverse space-x-3' : 'space-x-3'} ${
                activeItem === item.id
                  ? "bg-blue-600 text-white shadow-lg transform scale-105"
                  : "text-gray-400 hover:text-gray-300 hover:bg-gray-700"
              }`}
            >
              {item.icon}
              <span className="font-medium">{item.label}</span>
            </button>
          </li>
        ))}
      </ul>
    )}
  </li>
);


  return (
    <div className="w-64 bg-gray-800 h-screen flex flex-col shadow-lg">
      {/* Header */}
      <div className="p-4 border-b border-gray-700">
        <div className="flex items-center justify-between">
          <div className={`flex items-center ${isRTL ? 'space-x-reverse space-x-3' : 'space-x-3'}`}>
            <div className="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center shadow-lg">
              <span className="text-white font-bold text-lg">K</span>
            </div>
            <div>
              <h1 className="text-white font-bold text-lg">{t("app_name_branding", "Karsaaz POS")}</h1>
              <p className="text-gray-400 text-xs capitalize">
                {user?.role?.replace("-", " ")}
              </p>
            </div>
          </div>
          {onClose && (
            <button
              onClick={onClose}
              className="p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700"
            >
              <X className="h-5 w-5" />
            </button>
          )}
        </div>
      </div>

      {/* Language Switcher */}
      <div className="px-4 py-2 border-b border-gray-700">
        <LanguageSwitcher />
      </div>

      {/* User Info */}
      <div className="p-4 border-b border-gray-700 bg-gray-750">
        <div className={`flex items-center ${isRTL ? 'space-x-reverse space-x-3' : 'space-x-3'}`}>
          <div className="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center shadow-lg">
            <span className="text-white text-sm font-semibold">
              {user?.name?.charAt(0) || "U"}
            </span>
          </div>
          <div className="flex-1 min-w-0">
            <p className="text-white text-sm font-semibold truncate">
              {user?.name || "User"}
            </p>
            <p className="text-gray-400 text-xs truncate">{user?.username}</p>
          </div>
        </div>
      </div>

      {/* Navigation */}
      <nav className="flex-1 overflow-y-auto py-4">
        <div className="px-3">
          <ul className="space-y-1">
            {menuItems.map((item) => (
              <li key={item.id}>
                <button
                  onClick={() => handleItemClick(item)}
                  className={`w-full ${isRTL ? 'text-right' : 'text-left'} px-3 py-2.5 rounded-lg text-sm flex items-center ${isRTL ? 'space-x-reverse space-x-3' : 'space-x-3'} ${
                    activeItem === item.id
                      ? "bg-blue-600 text-white shadow-lg transform scale-105"
                      : "text-gray-400 hover:text-gray-300 hover:bg-gray-700"
                  }`}
                >
                  {item.icon}
                  <span className="font-medium">{item.label}</span>
                </button>
              </li>
            ))}

{renderDropdown(t("sidebar_menu_transaction_book", "Transaction Book"), <ShoppingCart className="h-5 w-5" />, transactionBookOpen, setTransactionBookOpen, transactionBookItems)}
           {renderDropdown(t("sidebar_menu_setup_books", "Setup Books"), <BookOpen className="h-5 w-5" />, setupBooksOpen, setSetupBooksOpen, setupBooksItems)}
{renderDropdown(t("sidebar_menu_account_book", "Account Book"), <FileText className="h-5 w-5" />, accountBookOpen, setAccountBookOpen, accountBookItems)}
{renderDropdown(t("sidebar_menu_reports", "Reports"), <ChartBarIcon  className="h-5 w-5" />, reportsOpen, setReportsOpen, reportItems)}
{renderDropdown(t("sidebar_menu_preference", "Preference"), <Settings className="h-5 w-5" />, preferenceOpen, setPreferenceOpen, preferenceItems)}

          </ul>
        </div>
      </nav>

      {/* Footer */}
      <div className="p-4 border-t border-gray-700 bg-gray-750">
        <div className="text-center space-y-1">
          <p className="text-gray-400 text-xs font-medium">{t("footer_company_text", "Karsaaz Solutions")}</p>
          <p className="text-gray-500 text-xs">v1.0.0</p>
        </div>
      </div>
    </div>
  );
}
