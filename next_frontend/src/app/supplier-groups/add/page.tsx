"use client";

import { useState } from "react";
import { useRouter } from "next/navigation";
import SupplierGroupForm, {
  SupplierGroupData,
} from "@/components/SupplierGroupForm";
import { useAuth } from "@/contexts/AuthContext";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef } from "react";
import { useTranslations } from "@/hooks/useTranslations";

export default function AddSupplierGroupPage() {
  const router = useRouter();
  const { user } = useAuth();
  const formRef = useRef<HTMLFormElement>(null);
  const { t, isRTL } = useTranslations();
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const [success, setSuccess] = useState(false);

  const handleSubmit = async (data: SupplierGroupData) => {
    console.log("Submitting Supplier Group Data:", data);
    try {
      setLoading(true);
      setError(null);
      setSuccess(false);

      const formData = new FormData();
      formData.append("BUnit", data.BUnit || "");
      formData.append("Name", data.name);
      formData.append("Remarks", data.remarks || "");
      formData.append("UserName", data.UserName || "");
      formData.append("Block", data.block);

      console.log("FormData entries:");
      for (const [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
      }

      const response = await fetch(
        "/api/v1.php?table=psSupplierGroup&action=insert",
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: formData,
        }
      );

      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }

      const responseText = await response.text();
      console.log("Raw Response:", responseText);
      const jsonMatch = responseText.match(/\{[\s\S]*\}$/);

      if (!jsonMatch) {
        // Check for specific database error
        if (responseText.includes("Duplicate entry")) {
          throw new Error(
            "A supplier group with this code already exists. Please use a different code or let the system generate one."
          );
        }
        throw new Error("Invalid response format");
      }

      const result = JSON.parse(jsonMatch[0]);
      console.log("Parsed Result:", result);

      if (result.success) {
        setSuccess(true);
        // Reset form states after successful save
        setTimeout(() => {
          router.push("/supplier-groups");
        }, 1500);
      } else {
        throw new Error(result.message || "Failed to save supplier group");
      }
    } catch (err) {
      console.error("Error saving supplier group:", err);
      setError(
        err instanceof Error ? err.message : "Failed to save supplier group"
      );
    } finally {
      setLoading(false);
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
         onClick={() => router.push('/supplier-groups')} // Go to home
        className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
      >
        {t("btn_back", "Back")}
      </button>
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_add_supplier_group", "Add New Supplier Group")}
              </h1>
              <button
                onClick={() => formRef.current?.requestSubmit()}
                disabled={loading}
                className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 disabled:opacity-50"
              >
                {loading ? t("btn_saving", "Saving...") : t("btn_save_supplier_group", "Save Supplier Group")}
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {/* Success Message */}
              {success && (
                <div className="mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
                  <div className="flex">
                    <div className="flex-shrink-0">
                      <svg
                        className="h-5 w-5 text-green-400"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fillRule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clipRule="evenodd"
                        />
                      </svg>
                    </div>
                    <div className="ml-3">
                      <p className="text-sm font-medium text-green-800">
                        {t("msg_supplier_group_saved", "Supplier group saved successfully! Redirecting...")}
                      </p>
                    </div>
                  </div>
                </div>
              )}

              {/* Error Message */}
              {error && (
                <div className="mb-6 p-4 bg-red-50 border border-red-200 rounded-md">
                  <div className="flex">
                    <div className="flex-shrink-0">
                      <svg
                        className="h-5 w-5 text-red-400"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fillRule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                          clipRule="evenodd"
                        />
                      </svg>
                    </div>
                    <div className="ml-3">
                      <p className="text-sm font-medium text-red-800">
                        {error}
                      </p>
                    </div>
                  </div>
                </div>
              )}

              <SupplierGroupForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel={loading ? t("btn_saving", "Saving...") : t("btn_save_supplier_group", "Save Supplier Group")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
