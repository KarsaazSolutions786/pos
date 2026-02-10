"use client";

import BankForm, { BankData } from "@/components/BankForm";
import { useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef, useState } from "react";
import { SaveButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

export default function AddBankPage() {
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const formRef = useRef<HTMLFormElement>(null);
  const [isLoading, setIsLoading] = useState(false);

  const handleSubmit = async (data: BankData) => {
    setIsLoading(true);

    try {
      const form = new FormData();
      form.append("business_id", data.BUnit);
      form.append("old_code", data.old_code);

      form.append("bank_name", data.bank_name);
      form.append("account_title", data.account_title);
      form.append("account_no", data.account_no || "");
      form.append("group_id", data.group_id || "");

      const response = await fetch(
        "/api/v1.php?table=pBank&action=insert",
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) throw new Error("Failed to add bank");

      const result = await response.json();

      if (result.success) {
        alert(t("msg_bank_added_success", "Bank added successfully!"));
        router.push("/banks");
      } else {
        throw new Error(result.message || "Failed to add bank");
      }
    } catch (error) {
      console.error("Error adding bank:", error);
      alert(
        error instanceof Error ? error.message : t("msg_bank_add_failed", "Failed to add bank. Please try again.")
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
                onClick={() => router.push("/banks")}
                className="bg-red-100 text-red-500 px-4 py-2 rounded hover:bg-red-200"
              >
                {t("btn_back", "Back")}
              </button>
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_add_bank", "Add New Bank")}
              </h1>

              <SaveButton
                onClick={() => formRef.current?.requestSubmit()}
                disabled={isLoading}
              >
                {isLoading ? t("btn_saving", "Saving...") : t("btn_save_bank", "Save Bank")}
              </SaveButton>
            </div>
          </header>

          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <BankForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel={t("btn_save_bank", "Save Bank")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
