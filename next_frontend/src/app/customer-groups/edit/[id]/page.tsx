"use client";

import CustomerGroupForm, {
  CustomerGroupData,
} from "@/components/CustomerGroupForm";
import { useParams, useRouter } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

export default function EditCustomerGroupPage() {
  const params = useParams();
  const id = params?.id as string;
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const [initialData, setInitialData] = useState<CustomerGroupData | null>(
    null
  );
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  // Fetch customer group data
  useEffect(() => {
    const fetchCustomerGroup = async () => {
      try {
        setLoading(true);
        setError(null);

        const response = await fetch(
          `/api/v1.php?table=psCustomerGroup&action=view&editid1=${id}`,
          {
            headers: {
              "X-Auth-Token": user?.apiKey || "123",
            },
          }
        );

        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        const responseText = await response.text();
        const jsonMatch = responseText.match(/\{[\s\S]*\}$/);

        if (!jsonMatch) {
          throw new Error("Invalid response format");
        }

        const result = JSON.parse(jsonMatch[0]);

        if (result.success && result.data) {
          setInitialData(result.data);
        } else {
          throw new Error(result.message || "Failed to fetch customer group");
        }
      } catch (err) {
        console.error("Error fetching customer group:", err);
        setError(
          err instanceof Error ? err.message : "Failed to fetch customer group"
        );
      } finally {
        setLoading(false);
      }
    };

    if (id) {
      fetchCustomerGroup();
    }
  }, [id, user?.apiKey]);

  const handleSubmit = (data: CustomerGroupData) => {
    // Here you can add API call to update data
    alert("Customer Group data updated successfully!");
    console.log("Updated Customer Group Data:", data);
    router.push("/customer-groups");
  };

  if (loading) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen bg-gray-50">
          <Sidebar />
          <div className="flex-1 flex flex-col overflow-hidden">
            <div className="flex items-center justify-center h-full">
              <div className="text-center">
                <div className="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mx-auto"></div>
                <p className="mt-4 text-gray-600">{t("loading_customer_group", "Loading customer group...")}</p>
              </div>
            </div>
          </div>
        </div>
      </ProtectedRoute>
    );
  }

  if (error) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen bg-gray-50">
          <Sidebar />
          <div className="flex-1 flex flex-col overflow-hidden">
            <div className="flex items-center justify-center h-full">
              <div className="text-center">
                <div className="text-red-600 text-xl mb-4">⚠️</div>
                <h2 className="text-xl font-semibold text-gray-900 mb-2">
                  {t("error_loading_customer_group", "Error Loading Customer Group")}
                </h2>
                <p className="text-gray-600 mb-4">{error}</p>
                <button
                  onClick={() => router.push("/customer-groups")}
                  className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  {t("btn_back_to_customer_groups", "Back to Customer Groups")}
                </button>
              </div>
            </div>
          </div>
        </div>
      </ProtectedRoute>
    );
  }

  if (!initialData) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen bg-gray-50">
          <Sidebar />
          <div className="flex-1 flex flex-col overflow-hidden">
            <div className="flex items-center justify-center h-full">
              <div className="text-center">
                <div className="text-gray-600 text-xl mb-4">❌</div>
                <h2 className="text-xl font-semibold text-gray-900 mb-2">
                  {t("customer_group_not_found", "Customer Group Not Found")}
                </h2>
                <p className="text-gray-600 mb-4">
                  {t("customer_group_not_found_desc", "The customer group you're looking for doesn't exist.")}
                </p>
                <button
                  onClick={() => router.push("/customer-groups")}
                  className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  {t("btn_back_to_customer_groups", "Back to Customer Groups")}
                </button>
              </div>
            </div>
          </div>
        </div>
      </ProtectedRoute>
    );
  }

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_edit_customer_group", "Edit Customer Group")}
              </h1>
              <UpdateButton onClick={() => formRef.current?.requestSubmit()}>
                {t("btn_update_customer_group", "Update Customer Group")}
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <CustomerGroupForm
                mode="edit"
                initialData={initialData}
                onSubmit={handleSubmit}
                submitLabel={t("btn_update_customer_group", "Update Customer Group")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
