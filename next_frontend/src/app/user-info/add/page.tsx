"use client";

import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import UserInfoForm, { UserInfoData } from "@/components/UserInfoForm";
import { useRouter } from "next/navigation";
import { useRef, useState } from "react";
import { SaveButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

export default function UserInfoAddPage() {
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const formRef = useRef<HTMLFormElement>(null);
  const [isLoading, setIsLoading] = useState(false);

  const handleSubmit = async (data: UserInfoData) => {
    setIsLoading(true);

    try {
      // Create FormData object
      const form = new FormData();
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
        "/api/v1.php?table=umUserInfo&action=insert",
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to add user");
      }

      const result = await response.json();

      if (result.success) {
        alert("User added successfully!");
        router.push("/user-info");
      } else {
        throw new Error(result.message || "Failed to add user");
      }
    } catch (error) {
      console.error("Error adding user:", error);
      alert(
        error instanceof Error
          ? error.message
          : "Failed to add user. Please try again."
      );
    } finally {
      setIsLoading(false);
    }
  };

  const handleSaveClick = () => {
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
                {t("page_title_add_user_info", "User Info - Add New")}
              </h1>
              <SaveButton onClick={handleSaveClick} disabled={isLoading}>
                {isLoading ? t("btn_saving", "Saving...") : t("btn_save_user_info", "Save User Info")}
              </SaveButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <UserInfoForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel={t("btn_save_user_info", "Save User Info")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
