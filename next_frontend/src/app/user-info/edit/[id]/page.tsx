"use client";

import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import UserInfoForm, { UserInfoData } from "@/components/UserInfoForm";
import { useRouter, useParams } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type for fetching user data
interface UserInfoApiResponse {
  Code: string;
  UserName: string | null;
  CellNo: string;
  Email: string | null;
  LoginUserName: string;
  Password: string;
  PasswordHint: string | null;
  GroupCode: string | null;
  Remarks: string | null;
  UserType: string | null;
  isAccountActive: string;
  NoOfAttempt: string;
  NoOfWorngAttempt: string;
  api_key: string;
}

// Function to fetch user data by ID
const fetchUserInfoById = async (
  id: string,
  apiKey: string
): Promise<UserInfoData> => {
  const response = await fetch(
    `/api/v1.php?table=umUserInfo&action=view&editid1=${id}`,
    {
      method: "GET",
      headers: {
        "X-Auth-Token": apiKey,
        "Content-Type": "application/json",
      },
    }
  );

  if (!response.ok) {
    throw new Error("Failed to fetch user data");
  }

  const result = await response.json();

  if (result.success && result.data) {
    const userData = result.data as UserInfoApiResponse;
    return {
      UserName: userData.UserName,
      CellNo: userData.CellNo,
      Email: userData.Email,
      LoginUserName: userData.LoginUserName,
      Password: userData.Password,
      PasswordHint: userData.PasswordHint,
      GroupCode: userData.GroupCode,
      Remarks: userData.Remarks,
      UserType: userData.UserType,
      isAccountActive: userData.isAccountActive,
      NoOfAttempt: userData.NoOfAttempt,
      NoOfWorngAttempt: userData.NoOfWorngAttempt,
    };
  } else {
    throw new Error("No user data found");
  }
};

export default function UserInfoEditPage() {
  const router = useRouter();
  const params = useParams();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const id = params?.id as string;
  const [initialData, setInitialData] = useState<UserInfoData | null>(null);
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadUserData = async () => {
      if (!user) return;

      try {
        setLoading(true);
        setError(null);
        const data = await fetchUserInfoById(id, user.apiKey || "123");
        setInitialData(data);
      } catch (error) {
        console.error("Error fetching user data:", error);
        setError(
          error instanceof Error ? error.message : "Failed to load user data"
        );
      } finally {
        setLoading(false);
      }
    };

    loadUserData();
  }, [id, user]);

  const handleSubmit = async (data: UserInfoData) => {
    setIsUpdating(true);

    try {
      // Create FormData object for update
      const form = new FormData();
      form.append("Code", id); // Include the user ID for update
      form.append("UserName", data.UserName || "");
      form.append("CellNo", data.CellNo);
      form.append("Email", data.Email || "");
      form.append("LoginUserName", data.LoginUserName);
      form.append("Password", data.Password);
      form.append("PasswordHint", data.PasswordHint || "");
      form.append("GroupCode", data.GroupCode || "");
      form.append("Remarks", data.Remarks || "");
      form.append("UserType", data.UserType || "");
      form.append("isAccountActive", data.isAccountActive);
      form.append("NoOfAttempt", data.NoOfAttempt);
      form.append("NoOfWorngAttempt", data.NoOfWorngAttempt);

      const response = await fetch(
        `/api/v1.php?table=umUserInfo&action=update&editid1=${id}`,
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to update user");
      }

      const result = await response.json();

      if (result.success) {
        alert("User updated successfully!");
        router.push("/user-info");
      } else {
        throw new Error(result.message || "Failed to update user");
      }
    } catch (error) {
      console.error("Error updating user:", error);
      alert(
        error instanceof Error
          ? error.message
          : "Failed to update user. Please try again."
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
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_edit_user_info", "User Info - Edit")}
              </h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update_user_info", "Update User Info")}
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>{t("error_loading_user_data", "Error loading user data")}:</strong> {error}. {t("msg_try_refreshing", "Please try refreshing the page or contact support.")}
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <UserInfoForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel={t("btn_update_user_info", "Update User Info")}
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
