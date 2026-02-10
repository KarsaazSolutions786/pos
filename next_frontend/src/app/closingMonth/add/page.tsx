"use client";

import ClosingMonthForm, { ClosingMonthData } from "@/components/ClosingMonthForm";
import { useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef, useState } from "react";
import { SaveButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

export default function AddClosingMonthPage() {
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const formRef = useRef<HTMLFormElement>(null);
  const [isLoading, setIsLoading] = useState(false);

  const handleSubmit = async (data: ClosingMonthData) => {
    debugger
    setIsLoading(true);
    try {
      const form = new FormData();
      form.append("VMonth", data.vMonth);
      form.append("VYear", data.vYear);
      form.append("CloseStatus", data.Status);
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
        alert("Closing Month added successfully!");
        router.push("/closingMonth");
      } else {
        throw new Error(result.message || "Failed to add closing month");
      }
    } catch (error) {
      console.error("Error adding closing month:", error);
      alert("Error while saving. Please try again.");
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
                onClick={() => router.push("/closingmonth")}
                className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
              >
                {t("btn_back", "Back")}
              </button>
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_add_closing_month", "Add New Closing Month")}
              </h1>
              <SaveButton
                onClick={() => formRef.current?.requestSubmit()}
                disabled={isLoading}
              >
                {isLoading ? t("btn_saving", "Saving...") : t("btn_save", "Save")}
              </SaveButton>
            </div>
          </header>

          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <ClosingMonthForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel={t("btn_save", "Save")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
