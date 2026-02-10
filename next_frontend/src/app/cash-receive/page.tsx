"use client";
import { use, useEffect, useMemo, useState } from "react";
import {
  DocumentTextIcon,
  BriefcaseIcon,
  CalendarDaysIcon,
  HashtagIcon,
  CreditCardIcon,
  CurrencyDollarIcon,
  ExclamationCircleIcon,
} from "@heroicons/react/24/outline";
import SearchableDropdown from "@/components/SearchableDropdown";
import Sidebar from "@/components/Sidebar";
import ProtectedRoute from "@/components/ProtectedRoute";
import { useAuth } from "@/contexts/AuthContext";
import { fetchAccounts, selectAccountsState } from "@/Redux/slices/accountSlice/accountSlice";
import { useDispatch, useSelector } from "react-redux";
import { fetchClosingMonths, selectClosingMonthState } from "@/Redux/slices/sClosingMonth/sClosingMonth";
import { getTodayDate } from "@/utils/dateUtils";
import { useTranslations } from "@/hooks/useTranslations";

export default function CashReceive() {
  const { t, isRTL } = useTranslations();
  const [formData, setFormData] = useState({
    voucherNumber: "",
    date: getTodayDate(), // Default to today's date
    billNumber: "",
    chequeNumber: "",
    Amount: "",
    transactionType: "",
    debitAccount: null,
    creditAccount: null,
    debitNarration: "",
    creditNarration: "",
    Narration: "",
    TBook:''
  });
  console.log("🚀 ~ CashReceive ~ formData:", formData.debitAccount)
  const { user, logout } = useAuth()
  const [errors, setErrors] = useState({});
  const [submitted, setSubmitted] = useState(false);
  const [loading, setLoading] = useState(false);
  const [billNumberExists, setBillNumberExists] = useState(false);
  const [checkingBillNumber, setCheckingBillNumber] = useState(false);
  const dispatch = useDispatch()
   const { accountsList, isLoading,} = useSelector(selectAccountsState);

    const { closingMonthsList,  } = useSelector(selectClosingMonthState);


// const debitOptions = useMemo(() => {
//   return accountsList
//     .filter((account) => account.Code !== formData.creditAccount)
//     .map((account) => ({
//       value: account?.Code,
//       label: `${account.Name} (${account?.Code})`,
//     }));
// }, [accountsList, formData.creditAccount]);

// const creditOptions = useMemo(() => {
//   return accountsList
//     .filter((account) => account.Code !== formData.debitAccount)
//     .map((account) => ({
//       value: account?.Code,
//       label: `${account.Name} (${account?.Code})`,
//     }));
// }, [accountsList, formData.debitAccount]);

  const handleChange = (field, value) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));

    setErrors((prevErrors) => {
      const newErrors = { ...prevErrors };
      if (value && newErrors[field]) {
        delete newErrors[field];
      }
      return newErrors;
    });

    // Reset bill number exists flag when user types
    if (field === "billNumber") {
      setBillNumberExists(false);
    }
  };

  // Check if bill number already exists in database
  const checkBillNumberExists = async (billNumber: string) => {
    if (!billNumber || billNumber.trim() === "") {
      setBillNumberExists(false);
      return false;
    }

    setCheckingBillNumber(true);
    try {
      const payload = {
        api_key: user?.apiKey || "123",
        limit: 1000,
        offset: 0,
        include_details: true
      };

      const response = await fetch("/custom_apis/cash_receive_list.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload)
      });

      const result = await response.json();

      if (result.success && result.data) {
        // Check if any JV has this bill number in details
        const exists = result.data.some((entry: any) => {
          return entry.details?.some((detail: any) =>
            detail.BillNo && detail.BillNo.toString().toLowerCase() === billNumber.toLowerCase()
          );
        });

        setBillNumberExists(exists);
        if (exists) {
          setErrors((prev) => ({ ...prev, billNumber: "This Bill Number already exists!" }));
        }
        return exists;
      }
      return false;
    } catch (error) {
      console.error("Error checking bill number:", error);
      return false;
    } finally {
      setCheckingBillNumber(false);
    }
  };

// 1. handleSave function pura replace kar do ye wala
const handleSave = async () => {
  try {
    const debitParentAccountCode = accountsList.find(acc => String(acc.Code) === String(formData.debitAccount))?.AccSubCode;
    const creditParentAccountCode = accountsList.find(acc => String(acc.Code) === String(formData.creditAccount))?.AccSubCode;

    setLoading(true);
    setSubmitted(true);

    // Closing month check
    const entryMonth = new Date(formData.date).getMonth() + 1;
    const entryYear = new Date(formData.date).getFullYear();
    const monthObj = closingMonthsList.find(
      (m) => Number(m.VMonth) === entryMonth && Number(m.VYear) === entryYear
    );

    if (!monthObj) {
      alert("Closing month not found. Please contact admin.");
      setLoading(false);
      return;
    }
    if (monthObj.CloseStatus !== "Open") {
      alert("You cannot make entry for a closed month!");
      setLoading(false);
      return;
    }

    // Check for duplicate bill number before saving
    const billExists = await checkBillNumberExists(formData.billNumber);
    if (billExists) {
      alert("This Bill Number already exists! Please use a different bill number.");
      setLoading(false);
      return;
    }

    // Validation
    const requiredFields = {
      date: "Date is required",
      billNumber: "Bill number is required",
      Amount: "Bill amount is required",
      debitAccount: "Debit account is required",
      creditAccount: "Credit account is required",
    };

    const newErrors = Object.entries(requiredFields).reduce((acc, [key, msg]) => {
      if (!formData[key]) acc[key] = msg;
      return acc;
    }, {});

    setErrors(newErrors);
    if (Object.keys(newErrors).length > 0) {
      setLoading(false);
      return;
    }

    // Naya API payload - custom_apis/create_cash_receive
  const payload = {
  api_key: user?.apiKey || "123",
  master: { Amount: parseFloat(formData.Amount), BillNo: formData.billNumber || "", ChequeNo: formData.chequeNumber || "" },
  details: [
    {
      AccountCode: formData.debitAccount,
      Narration: formData.debitNarration || "Debit Entry",
      Amount: parseFloat(formData.Amount),
      TStatus: "Dr",
      Block: 0
    },
    {
      AccountCode: formData.creditAccount,
      Narration: formData.creditNarration || "Credit Entry",
      Amount: parseFloat(formData.Amount),
      TStatus: "Cr",
      Block: 0
    }
  ]
};


    const res = await fetch("/custom_apis/create_cash_receive.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(payload),
    });

    const result = await res.json();

    if (!res.ok || !result.success) {
      throw new Error(result.message || "Failed to create Cash Receive");
    }

    alert("Cash Receive created successfully! Virtual Code: " + (result.virtual_code || "N/A"));
    setLoading(false);

    // Optional: Reset form with today's date
    setFormData({
      voucherNumber: "",
      date: getTodayDate(), // Reset to today's date
      billNumber: "",
      chequeNumber: "",
      Amount: "",
      transactionType: "",
      debitAccount: null,
      creditAccount: null,
      debitNarration: "",
      creditNarration: "",
      Narration: "",
      TBook: ''
    });
    setBillNumberExists(false); // Reset bill number check

  } catch (error: any) {
    setLoading(false);
    console.error("Cash Receive Create Error:", error);
    alert("Error: " + (error.message || "Something went wrong"));
  }
};






    useEffect(() => {

      //   try {
      //     setIsLoading(true);
      //     const response = await fetch(
      //       `/api/v1.php?table=pAccounts&action=list`,
      //       {
      //         method: "GET",
      //         headers: {
      //           "X-Auth-Token": user?.apiKey || "123",
      //           "Content-Type": "application/json",
      //         },
      //       }
      //     );

      //     if (!response.ok) {
      //       throw new Error("Failed to fetch accounts");
      //     }

      //     const result = await response.json();

      //     if (result.success && result.data) {
      //       // Map API data to table format
      //       const formattedData = result.data.map(
      //         (account: Record<string, unknown>) => ({
      //           id: account.ID,
      //           Code: account.Code,
      //           Name: account.Name,
      //           AccType: account.AccType,
      //           GroupCode: account.GroupCode,
      //           UserName: account.UserName || "N/A",
      //           Block: account.Block === "0" ? "No" : "Yes",
      //           // Additional details for view modal
      //           ParentAccountCode: account.ParentAccountCode,
      //           VirtualCode: account.VirtualCode,
      //           Remarks: account.Remarks || "N/A",
      //           CreateDate: account.CreateDate,
      //           UpdateDate: account.UpdateDate,
      //         })
      //       );

      //       setaccountsList(formattedData);
      //       // Assuming the API provides total record count
      //       setTotalRecords(result.total || formattedData.length);
      //     } else {
      //       throw new Error("No account data found");
      //     }
      //   } catch (err) {
      //     console.error("Error fetching accounts:", err);
      //     setaccountsList([]);
      //     setTotalRecords(0);
      //   } finally {
      //     setIsLoading(false);
      //   }
      // };

     dispatch(fetchAccounts(user?.apiKey));
     dispatch(fetchClosingMonths(user?.apiKey));
    }, []);


  const showError = (field) =>
    submitted && errors[field] ? (
      <p className="text-red-500 text-xs flex items-center mt-2">
        <ExclamationCircleIcon className="w-4 h-4 mr-1" />
        {errors[field]}
      </p>
    ) : null;
  const getRoleColor = (role: string) => {
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

// Cash Receive: Debit = Cash Accounts, Credit = All Accounts
const debitOptions = useMemo(() => {
  let options = accountsList
    .filter(a => a.AccType === "Cash")
    .map(a => ({ value: a.Code, label: `${a.Name} (${a.AccSubCode})` }));

  if (formData.creditAccount) {
    options = options.filter(
      a => String(a.value) === String(formData.debitAccount) || String(a.value) !== String(formData.creditAccount)
    );
  }

  return options;
}, [accountsList, formData.creditAccount, formData.debitAccount]);

const creditOptions = useMemo(() => {
  if (!formData.debitAccount) return [];

  let options = accountsList.map(a => ({ value: a.Code, label: `${a.Name} (${a.AccSubCode})` }));

  if (formData.debitAccount) {
    options = options.filter(
      a => String(a.value) === String(formData.creditAccount) || String(a.value) !== String(formData.debitAccount)
    );
  }

  return options;
}, [accountsList, formData.debitAccount, formData.creditAccount]);





  return (
    <ProtectedRoute>


      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <div className="flex items-center">
                <h1 className="text-2xl font-bold text-gray-900">{t("dashboard", "Dashboard")}</h1>
              </div>
              <div className="flex items-center space-x-4">
                <div className="flex items-center space-x-3">
                  <span className="text-sm text-gray-700">
                    {t("welcome", "Welcome")}, {user?.name}
                  </span>
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
                  {t("logout", "Logout")}
                </button>
              </div>
            </div>
          </header>
          <main className="flex-1 overflow-y-auto">
            <div className="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-50 to-pink-50 p-4">
              <div className="bg-white rounded-2xl shadow-lg p-6 max-w-5xl w-full">
                <h1 className="text-2xl font-bold text-center mb-1 text-blue-900">
                  {t("cash_receive_entry", "Cash Receive Entry")}
                </h1>
                <p className="text-center text-gray-500 text-sm mb-6">
                  {t("secure_accounting_management", "Secure & Professional Accounting Management")}
                </p>

                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <h2 className="flex items-center text-lg font-semibold mb-4 text-green-700">
                      <DocumentTextIcon className="w-5 h-5 mr-2 text-green-500" />
                      {t("basic_information", "Basic Information")}
                    </h2>

                    <div className="space-y-4">
                      {/* <div>
                <label className="block text-sm font-medium text-gray-700">Voucher Number</label>
                <div className="relative">
                  <input
                    type="text"
                    placeholder="Enter voucher number"
                    value={formData.voucherNumber}
                    onChange={(e) => handleChange("voucherNumber", e.target.value)}
                    className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                  />
                  <BriefcaseIcon className="absolute right-3 top-2.5 w-5 h-5 text-gray-400" />
                </div>
                {showError("voucherNumber")}
              </div> */}

                      <div>
                        <label className="block text-sm font-medium text-gray-700">{t("label_date", "Date")}</label>
                        <div className="relative">
                          <input
                            type="date"
                            value={formData.date}
                            onChange={(e) => handleChange("date", e.target.value)}
                            className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                          />
                          <CalendarDaysIcon className="absolute right-3 top-2.5 w-5 h-5 text-gray-400 pointer-events-none" />
                        </div>
                        {showError("date")}
                      </div>

                      <div>
                        <label className="block text-sm font-medium text-gray-700">{t("label_bill_number", "Bill Number")}</label>
                        <div className="relative">
                          <input
                            type="text"
                            placeholder={t("enter_bill_number", "Enter bill number")}
                            value={formData.billNumber}
                            onChange={(e) => handleChange("billNumber", e.target.value)}
                            onBlur={(e) => checkBillNumberExists(e.target.value)}
                            className={`mt-2 w-full rounded-md border px-3 py-2 text-sm ${
                              billNumberExists
                                ? "border-red-500 focus:border-red-500 focus:ring-red-500"
                                : "border-gray-300"
                            }`}
                          />
                          {checkingBillNumber ? (
                            <div className="absolute right-3 top-4">
                              <div className="animate-spin rounded-full h-4 w-4 border-b-2 border-blue-500"></div>
                            </div>
                          ) : (
                            <HashtagIcon className="absolute right-3 top-4 w-5 h-5 text-gray-400" />
                          )}
                        </div>
                        {billNumberExists && (
                          <p className="text-red-500 text-xs flex items-center mt-2">
                            <ExclamationCircleIcon className="w-4 h-4 mr-1" />
                            {t("bill_number_exists", "This Bill Number already exists!")}
                          </p>
                        )}
                        {showError("billNumber")}
                      </div>

                      <div>
                        <label className="block text-sm font-medium text-gray-700">{t("label_cheque_number", "Cheque Number")}</label>
                        <div className="relative">
                          <input
                            type="text"
                            placeholder={t("enter_cheque_number", "Enter cheque number")}
                            value={formData.chequeNumber}
                            onChange={(e) => handleChange("chequeNumber", e.target.value)}
                            className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                          />
                          <CreditCardIcon className="absolute right-3 top-2.5 w-5 h-5 text-gray-400" />
                        </div>
                      </div>

                      <div>
                        <label className="block text-sm font-medium text-gray-700">{t("label_amount", "Amount")}</label>
                        <div className="relative">
                          <input
                            type="number"
                            placeholder="0.00"
                            value={formData.Amount}
                            onChange={(e) => handleChange("Amount", e.target.value)}
                            className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                          />
                          <CurrencyDollarIcon className="absolute right-3 top-2.5 w-5 h-5 text-gray-400" />
                        </div>
                        {showError("Amount")}
                      </div>
                    </div>
                  </div>

                  <div>
                    <h2 className="flex items-center text-lg font-semibold mb-4 text-pink-700">
                      <BriefcaseIcon className="w-5 h-5 mr-2 text-pink-500" />
                      {t("section_account_details", "Account Details")}
                    </h2>

                    <div className="space-y-4">
                      {/* <div>
                <label className="block text-sm font-medium text-gray-700">Transaction Type</label>
                <select
                  value={formData.transactionType}
                  onChange={(e) => handleChange("transactionType", e.target.value)}
                  className="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                >
                  <option value="">Select Transaction Type</option>
                  {transactionTypes.map((type) => (
                    <option key={type} value={type}>
                      {type}
                    </option>
                  ))}
                </select>
              </div> */}

                      <div>

                        <SearchableDropdown
                          label={t("label_debit_account", "Debit Account")}
                          value={formData.debitAccount}
                          options={debitOptions}
                          onChange={(val) => handleChange("debitAccount", val)}
                          placeholder={t("select_group", "Select Group")}
                          searchPlaceholder={t("search_debit_account", "Search Debit Account...")}
                          required
                          className="w-full  text-sm"
                           preventAutoSelect={true}
                        />

                        {showError("debitAccount")}
                      </div>

                      <div>

                        <SearchableDropdown
                          label={t("label_credit_account", "Credit Account")}
                          value={formData.creditAccount}
                          options={creditOptions}
                          onChange={(val) => handleChange("creditAccount", val)}
                          placeholder={t("select_group", "Select Group")}
                          searchPlaceholder={t("search_credit_account", "Search Credit Account...")}
                          required
                          className="w-full  text-sm"
                           preventAutoSelect={true}
                        />
                        {showError("creditAccount")}
                      </div>

                      <div>
                        <label className="block text-sm font-medium text-gray-700">{t("label_debit_narration", "Debit Narration")}</label>
                        <textarea
                          placeholder={t("enter_debit_narration", "Enter debit narration details...")}
                          value={formData.debitNarration}
                          onChange={(e) => handleChange("debitNarration", e.target.value)}
                          className="mt-2 h-20 w-full rounded-md border border-gray-300 px-3 py-2 text-sm resize-none"
                        />


                      </div>

                      <div>
                        <label className="block text-sm font-medium text-gray-700">{t("label_credit_narration", "Credit Narration")}</label>
                        <textarea
                          placeholder={t("enter_credit_narration", "Enter credit narration details...")}
                          value={formData.creditNarration}
                          onChange={(e) => handleChange("creditNarration", e.target.value)}
                          className="mt-2 h-20 w-full rounded-md border border-gray-300 px-3 py-2 text-sm resize-none"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div className="flex justify-center space-x-4 mt-10">
                  <button
                    onClick={handleSave}
                    disabled={loading}
                    className={`px-6 py-2 rounded-lg ${loading ? "bg-purple-400 cursor-not-allowed" : "bg-purple-600 hover:bg-purple-700"} text-white shadow`}
                  >
                    {loading ? t("saving", "Saving...") : t("btn_save_entry", "Save Entry")}
                  </button>

                  <button className="px-6 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 shadow">
                    {t("btn_exit", "Exit")}
                  </button>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>

  );
}








  // const handleSave = async () => {
  //   debugger;
  //   try {

  //       const debitParentAccountCode = accountsList.find(acc => String(acc.Code) === String(formData.debitAccount))?.AccSubCode ;
  //       const creditParentAccountCode = accountsList.find(acc => String(acc.Code) === String(formData.creditAccount))?.AccSubCode ;

  //     setLoading(true);
  //     setSubmitted(true);

  //         const entryMonth = new Date(formData.date).getMonth() + 1;
  //   const entryYear = new Date(formData.date).getFullYear();

  //   const monthObj = closingMonthsList.find(
  //     (m) => Number(m.VMonth) === entryMonth && Number(m.VYear) === entryYear
  //   );

  //   if (!monthObj) {
  //     alert("Closing month not found. Please contact admin.");
  //     setLoading(false);
  //     return;
  //   }

  //   if (monthObj.CloseStatus !== "Open") {
  //     alert("You cannot make entry for a closed month!");
  //     setLoading(false);
  //     return;
  //   }


  //     const requiredFields = {
  //       date: "Date is required",
  //       billNumber: "Bill number is required",
  //       Amount: "Bill amount is required",
  //       debitAccount: "Debit account is required",
  //       creditAccount: "Credit account is required",
  //     };

  //     const newErrors = Object.entries(requiredFields).reduce((acc, [key, msg]) => {
  //       if (!formData[key]) acc[key] = msg;
  //       return acc;
  //     }, {});

  //     setErrors(newErrors);
  //     if (Object.keys(newErrors).length > 0) {
  //       setLoading(false);
  //       return;
  //     }

  //     const createFormData = (fields) => {
  //       const fd = new FormData();
  //       Object.entries(fields).forEach(([k, v]) => fd.append(k, v ?? ""));
  //       return fd;
  //     };

  //     const glthFields = {
  //       TBook: formData.date,
  //       TType: 'J.v',
  //       TDate: formData.billNumber,
  //       BUnit: "0",
  //       TBook:'Journal Voucher',
  //       // Status: "open",
  //       // Remarks: formData.billNumber,
  //       UserName: user?.username,
  //       // Block: "false",
  //       // Lock: "false",
  //     };

  //     const glthRes = await fetch("/api/v1.php?table=GltH&action=insert", {
  //       method: "POST",
  //       headers: { "X-Auth-Token": user?.apiKey || "123" },
  //       body: createFormData(glthFields),
  //     });

  //     const glthJson = await glthRes.json();
  //     if (!glthRes.ok || !glthJson?.data?.Code) {
  //       throw new Error("Failed to create GltH entry");
  //     }

  //     const generatedCode = glthJson.data.Code;

  //     const commonFields = {
  //       Code: generatedCode,
  //        TType: 'J.v',
  //       TDate: formData.date,
  //       BillNo: formData.billNumber,
  //       ChequeNo: formData.chequeNumber,
  //       Amount: formData.Amount,
  //     };

  //     const debitForm = createFormData({
  //       ...commonFields,
  //       TStatus: "Dr",
  //       AccountCode: formData.debitAccount,
  //       Narration: formData.debitNarration,
  //       ParentAccountCode:debitParentAccountCode
  //     });

  //     const creditForm = createFormData({
  //       ...commonFields,
  //       TStatus: "Cr",
  //       AccountCode: formData.creditAccount,
  //       Narration: formData.creditNarration,
  //       ParentAccountCode:creditParentAccountCode

  //     });

  //     const postEntry = (formData) =>
  //       fetch("/api/v1.php?table=GLTD&action=insert", {
  //         method: "POST",
  //         headers: { "X-Auth-Token": user?.apiKey || "123" },
  //         body: formData,
  //       }).then((res) => res.json());

  //     const [debitJson, creditJson] = await Promise.all([
  //       postEntry(debitForm),
  //       postEntry(creditForm),
  //     ]);

  //     if (
  //       debitJson.success || creditJson.success
  //     ) {
  //       setLoading(false);
  //       alert("Journal entry submitted successfully!");
  //     } else {

  //       const response = await fetch(`/api/v1.php?table=GLTD&action=delete&editid1=${debitJson?.data?.CodeD || creditJson?.data?.CodeD}`, {
  //         method: "POST",
  //         headers: { "X-Auth-Token": user?.apiKey || "123" },
  //       });
  //       alert("Error: One entry failed, so changes were rolled back.");
  //     }

  //   } catch (error) {
  //     setLoading(false);
  //     console.error("Submit error:", error);
  //     alert("Error submitting entry: " + (error.message || "Unknown error."));
  //   }
  // };
