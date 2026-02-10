"use client";

import ClosingMonthForm, { ClosingMonthData, months } from "@/components/ClosingMonthForm";
import { useParams, useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useEffect, useState, useRef } from "react";
import { useTranslations } from "@/hooks/useTranslations";

// API response type
interface ClosingMonthApiResponse {
  Code: string;
  VMonth: string;
  VYear: string;
  CloseStatus: string;
  UserName: string;
}

const fetchClosingMonthByCode = async (code: string, apiKey: string): Promise<ClosingMonthData> => {
  debugger
  const res = await fetch(`/api/v1.php?table=sClosingMonth&action=view&editid1=${code}`, {
    method: "GET",
    headers: { "X-Auth-Token": apiKey, "Content-Type": "application/json" },
  });

  if (!res.ok) throw new Error("Failed to fetch closing month data");

  const result = await res.json();

  if (result.success && result.data) {
    const data: ClosingMonthApiResponse = result.data;
    return {
      vMonth: data.VMonth,
      vYear: data.VYear,
      Status: data.CloseStatus,
    };
  } else {
    throw new Error(result.message || "Closing month not found");
  }
};

export default function EditClosingMonthPage() {
  const router = useRouter();
  const params = useParams();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const code = params?.id;
  console.log("🚀 ~ EditClosingMonthPage ~ code:", code)

  const [initialData, setInitialData] = useState<ClosingMonthData | null>(null);
  console.log("🚀 ~ EditClosingMonthPage ~ initialData:", initialData)
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadData = async () => {
      if (!user) return;
      try {
        setLoading(true);
        setError(null);
        const data = await fetchClosingMonthByCode(code, user.apiKey || "123");
        setInitialData(data);
      } catch (err) {
        setError(err instanceof Error ? err.message : "Failed to load data");
      } finally {
        setLoading(false);
      }
    };
    loadData();
  }, [code, user]);

  const handleSubmit = async (data: ClosingMonthData) => {
    setIsUpdating(true);
    try {
      const form = new FormData();
      form.append("VMonth", data.vMonth);
      form.append("VYear", data.vYear);
      form.append("CloseStatus", data.Status);
      form.append("UserName", user?.username || "unknown");

      const res = await fetch(`/api/v1.php?table=sClosingMonth&action=update&editid1=${code}`, {
        method: "POST",
        headers: { "X-Auth-Token": user?.apiKey || "123" },
        body: form,
      });

      const result = await res.json();
      if (result.success) {
        alert("Closing Month updated successfully!");
        router.push("/closingMonth");
      } else {
        throw new Error(result.message || "Failed to update closing month");
      }
    } catch (err) {
      alert(err instanceof Error ? err.message : "Update failed");
    } finally {
      setIsUpdating(false);
    }
  };

  const handleUpdateClick = () => {
    formRef.current?.requestSubmit();
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
                onClick={() => router.push("/closingMonth")}
                className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
              >
                {t("btn_back", "Back")}
              </button>
              <h1 className="text-2xl font-bold text-gray-900">{t("page_title_edit_closing_month", "Edit Closing Month")}</h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update", "Update")}
              </UpdateButton>
            </div>
          </header>

          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>{t("label_error", "Error")}:</strong> {error}
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <ClosingMonthForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel={t("btn_update_closing_month", "Update Closing Month")}
                  formRef={formRef as React.RefObject<HTMLFormElement>}
                />
              )}
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
