"use client";

import AccountsForm, { AccountsData } from "@/components/AccountsForm";
import { useParams, useRouter } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type for fetching account data
interface AccountApiResponse {
  ID: string;
  ParentAccountCode: string;
  Code: string;
  VirtualCode: string;
  BUnit: string;
  OldCode: string | null;
  CoaCode: string;
  AccSubCode: string;
  Name: string;
  AccType: string;
  Remarks: string | null;
  UnitCode: string;
  UserName: string;
  Block: string;
  GroupCode: string;
}

// Function to fetch account data by ID
const fetchAccountById = async (
  id: string,
  apiKey: string
): Promise<AccountsData> => {
  const response = await fetch(
    `/api/v1.php?table=pAccounts&action=view&editid1=${id}`,
    {
      method: "GET",
      headers: {
        "X-Auth-Token": apiKey,
        "Content-Type": "application/json",
      },
    }
  );

  if (!response.ok) {
    throw new Error("Failed to fetch account data");
  }

  const result = await response.json();

  if (result.success && result.data) {
    const accountData = result.data as AccountApiResponse;
    return {
      ID: accountData.ID,
      ParentAccountCode: accountData.ParentAccountCode,
      Code: accountData.Code,
      VirtualCode: accountData.VirtualCode,
      BUnit: accountData.BUnit,
      OldCode: accountData.OldCode,
      CoaCode: accountData.CoaCode,
      AccSubCode: accountData.AccSubCode,
      Name: accountData.Name,
      AccType: accountData.AccType,
      Remarks: accountData.Remarks,
      UnitCode: accountData.UnitCode,
      UserName: accountData.UserName,
      Block: accountData.Block,
      GroupCode: accountData.GroupCode,
    };
  } else {
    throw new Error("No account data found");
  }
};

export default function EditAccountPage() {
  const router = useRouter();
  const params = useParams();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const id = params?.id as string;
  const [initialData, setInitialData] = useState<AccountsData | null>(null);
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadAccountData = async () => {
      if (!user) return;

      try {
        setLoading(true);
        setError(null);
        const data = await fetchAccountById(id, user.apiKey || "123");
        setInitialData(data);
      } catch (error) {
        console.error("Error fetching account data:", error);
        setError(
          error instanceof Error ? error.message : t("msg_account_load_failed", "Failed to load account data")
        );
      } finally {
        setLoading(false);
      }
    };

    loadAccountData();
  }, [id, user]);

  const handleSubmit = async (data: AccountsData) => {
    setIsUpdating(true);

    try {
      // Create FormData object for update
      const form = new FormData();
      form.append("ID", id); // Include the account ID for update
      form.append("ParentAccountCode", data.ParentAccountCode);
      form.append("Code", data.Code);
      form.append("VirtualCode", data.VirtualCode);
      form.append("BUnit", data.BUnit);
      form.append("OldCode", data.OldCode || "");
      form.append("CoaCode", data.CoaCode);
      form.append("AccSubCode", data.AccSubCode);
      form.append("Name", data.Name);
      form.append("AccType", data.AccType);
      form.append("Remarks", data.Remarks || "");
      form.append("UnitCode", data.UnitCode);
      form.append("UserName", data.UserName);
      form.append("Block", data.Block);
      form.append("GroupCode", data.GroupCode);

      const response = await fetch(
        `/api/v1.php?table=pAccounts&action=update&editid1=${id}`,
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to update account");
      }

      const result = await response.json();

      if (result.success) {
        alert(t("msg_account_updated_success", "Account updated successfully!"));
        router.push("/accounts");
      } else {
        throw new Error(result.message || "Failed to update account");
      }
    } catch (error) {
      console.error("Error updating account:", error);
      alert(
        error instanceof Error
          ? error.message
          : t("msg_account_update_failed", "Failed to update account. Please try again.")
      );
    } finally {
      setIsUpdating(false);
    }
  };

  const handleUpdateClick = () => {
    if (formRef.current) {
      formRef.current.requestSubmit();
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
              <h1 className="text-2xl font-bold text-gray-900">{t("page_title_edit_account", "Edit Account")}</h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update_account", "Update Account")}
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>{t("msg_error_loading_account", "Error loading account data:")}</strong> {error}. {t("msg_try_refresh", "Please try refreshing the page or contact support.")}
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <AccountsForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel={t("btn_update_account", "Update Account")}
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
