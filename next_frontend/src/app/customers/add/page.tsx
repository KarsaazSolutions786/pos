"use client";

import CustomerForm, { CustomerData } from "@/components/CustomerForm";
import { useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef, useState } from "react";
import { SaveButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

export default function AddCustomerPage() {
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const formRef = useRef<HTMLFormElement>(null);
  const [isLoading, setIsLoading] = useState(false);

  const handleSubmit = async (data: CustomerData) => {
    setIsLoading(true);

    try {
      // Create FormData object
      const form = new FormData();
      form.append("Code", data.Code);
      form.append("BUnit", data.BUnit);
      form.append("OldCode", data.OldCode);
      form.append("Name", data.Name);
      form.append("ContactName", data.ContactName);
      form.append("GroupCode", data.GroupCode);
      form.append("Address", data.Address);
      form.append("SaleTaxRegNo", data.SaleTaxRegNo);
      form.append("NTNNo", data.NTNNo);
      form.append("CNIC", data.CNIC);
      form.append("Phone", data.Phone);
      form.append("Fax", data.Fax);
      form.append("Cell", data.Cell);
      form.append("WebAddress", data.WebAddress);
      form.append("EMail", data.EMail);
      form.append("Remarks", data.Remarks);
      form.append("SecurtyDeposit", data.SecurtyDeposit || "");
      form.append("SaleMenCode", data.SaleMenCode);
      form.append("Commission", data.Commission || "");
      form.append("UserName", data.UserName || "");
      form.append("Block", data.Block);

      const response = await fetch(
        "/api/v1.php?table=pCustomer&action=insert",
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to add customer");
      }

      const result = await response.json();

      if (result.success) {
        alert(t("msg_customer_added_success", "Customer added successfully!"));
        router.push("/customers");
      } else {
        throw new Error(result.message || "Failed to add customer");
      }
    } catch (error) {
      console.error("Error adding customer:", error);
      alert(
        error instanceof Error
          ? error.message
          : t("msg_customer_add_failed", "Failed to add customer. Please try again.")
      );
    } finally {
      setIsLoading(false);
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
                <button
         onClick={() => router.push('/customers')} // Go to home
        className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
      >
        {t("btn_back", "Back")}
      </button>
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_add_customer", "Add New Customer")}
              </h1>


              <SaveButton
                onClick={() => formRef.current?.requestSubmit()}
                disabled={isLoading}
              >
                {isLoading ? t("btn_saving", "Saving...") : t("btn_save_customer", "Save Customer")}
              </SaveButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <CustomerForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel={t("btn_save_customer", "Save Customer")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
