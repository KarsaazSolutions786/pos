"use client";

import { useState, useEffect, useRef } from "react";
import { useParams, useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import BankForm, { BankData } from "@/components/BankForm";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

const fetchBankById = async (id: string, apiKey: string): Promise<BankData> => {
  const res = await fetch(`/api/v1.php?table=pBank&action=view&editid1=${id}`, {
    headers: { "X-Auth-Token": apiKey },
  });

  if (!res.ok) throw new Error("Failed to fetch bank data");
  const result = await res.json();

  if (result.success && result.data) {
    const bank = result.data;
    return {
      BUnit: bank.business_id,
      old_code: bank.old_code,
      bank_name: bank.bank_name,
      account_title: bank.account_title,
      account_no: bank.account_no,
      group_id: bank.group_id,
    };
  } else throw new Error("Bank not found");
};

export default function EditBankPage() {
  const params = useParams();
  const id = params?.id as string;
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const [initialData, setInitialData] = useState<BankData | null>(null);
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadBank = async () => {
      if (!user?.apiKey || !id) return;
      try {
        setLoading(true);
        const data = await fetchBankById(id, user.apiKey);
        setInitialData(data);
      } catch (error) {
        console.error(error);
        alert(error instanceof Error ? error.message : t("msg_bank_load_failed", "Failed to load bank data"));
      } finally {
        setLoading(false);
      }
    };
    loadBank();
  }, [id, user?.apiKey]);

  const handleSubmit = async (data: BankData) => {
    setIsUpdating(true);
    try {
      const form = new FormData();
      form.append("Code", id); // Include ID for update
      form.append("business_id", data.BUnit);
      form.append("old_code", data.old_code);
      form.append("bank_name", data.bank_name);
      form.append("account_title", data.account_title);
      form.append("account_no", data.account_no);
      form.append("group_id", data.group_id);

      const res = await fetch(`/api/v1.php?table=pBank&action=update&editid1=${id}`, {
        method: "POST",
        headers: { "X-Auth-Token": user?.apiKey || "" },
        body: form,
      });

      const result = await res.json();
      if (result.success) {
        alert(t("msg_bank_updated_success", "Bank updated successfully!"));
        router.push("/banks");
      } else throw new Error(result.message || "Update failed");
    } catch (error) {
      alert(error instanceof Error ? error.message : t("msg_bank_update_failed", "Update failed"));
    } finally {
      setIsUpdating(false);
    }
  };

  const handleUpdateClick = () => formRef.current?.requestSubmit();

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">{t("page_title_edit_bank", "Edit Bank")}</h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update_bank", "Update Bank")}
              </UpdateButton>
            </div>
          </header>
          <main className="flex-1 overflow-y-auto p-6">
            {loading ? (
              <div className="flex justify-center items-center h-64">
                <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
              </div>
            ) : (
              <BankForm
                mode="edit"
                initialData={initialData || undefined}
                onSubmit={handleSubmit}
                submitLabel={t("btn_update_bank", "Update Bank")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            )}
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
