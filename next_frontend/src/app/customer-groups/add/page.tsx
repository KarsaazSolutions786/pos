"use client";

import CustomerGroupForm, {
  CustomerGroupData,
} from "@/components/CustomerGroupForm";
import { useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef, useState } from "react";
import { SaveButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

export default function AddCustomerGroupPage() {
  const router = useRouter();
  const formRef = useRef<HTMLFormElement>(null);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const [success, setSuccess] = useState(false);
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();

  const handleSubmit = async (data: CustomerGroupData) => {
  console.log("Submitting Supplier Group Data:", data);
  try {
    setLoading(true);
    setError(null);
    setSuccess(false);

    // Convert JS object to FormData
    const formData = new FormData();
    Object.entries(data).forEach(([key, value]) => {
      // Only append if value is not undefined/null
      if (value !== undefined && value !== null) {
        formData.append(key, value as string | Blob);
      }
    });

    const response = await fetch(
      "/api/v1.php?table=psCustomerGroup&action=insert",
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
      if (responseText.includes("Duplicate entry")) {
        throw new Error(
          "A supplier group with this code already exists. Please use a different code or let the system generate one."
        );
      }
      throw new Error("Invalid response format");
    }

    const result = await JSON.parse(jsonMatch[0]);
    console.log("Parsed Result:", result);

    if (result.success) {
      setSuccess(true);
      router.push("/customer-groups");
    } else {
      throw new Error(result.message || "Failed to save supplier group");
    }
  } catch (err) {
    console.error("Error saving supplier group:", err);
    setError(err instanceof Error ? err.message : "Failed to save supplier group");
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
         onClick={() => router.push('/customer-groups')} 
        className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
      >
        {t("btn_back", "Back")}
      </button>
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_add_customer_group", "Add New Customer Group")}
              </h1>
              <SaveButton onClick={() => formRef.current?.requestSubmit()}>
                {t("btn_save_customer_group", "Save Customer Group")}
              </SaveButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <CustomerGroupForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel={t("btn_save_customer_group", "Save Customer Group")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
