"use client";

import { useState, useEffect } from "react";
import { useRouter } from "next/navigation";
import { useParams } from "next/navigation";
import UserGroupForm, { UserGroupData } from "@/components/UserGroupForm";
import { useAuth } from "@/contexts/AuthContext";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef } from "react";
import { useTranslations } from "@/hooks/useTranslations";

export default function EditUserGroupPage() {
  const router = useRouter();
  const params = useParams();

  // Robust ID extraction with comprehensive logging
  const extractId = () => {
    console.log("Raw Params:", JSON.stringify(params));

    // Check if params exists and has an id property
    if (!params || params.id === undefined) {
      console.error("No params or ID found");
      return null;
    }

    // Convert to string and trim
    const rawId = String(params.id).trim();

    console.log("Raw ID:", rawId);

    // Additional validation
    if (rawId === "" || rawId === "undefined") {
      console.error("Invalid ID detected:", rawId);
      return null;
    }

    return rawId;
  };

  const id = extractId();

  // Log additional debugging information
  useEffect(() => {
    console.log("Extracted ID:", id);
    console.log("Full Params:", params);
  }, [id, params]);

  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const formRef = useRef<HTMLFormElement>(null);

  const [userGroup, setUserGroup] = useState<UserGroupData | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [updateLoading, setUpdateLoading] = useState(false);
  const [updateError, setUpdateError] = useState<string | null>(null);
  const [updateSuccess, setUpdateSuccess] = useState(false);

  // Fetch user group data
  useEffect(() => {
    const fetchUserGroup = async () => {
      // Validate ID before making API call
      if (!id) {
        setError("Invalid user group ID");
        setLoading(false);
        return;
      }

      try {
        setLoading(true);
        setError(null);

        const response = await fetch(
          `/api/v1.php?table=psUserGroup&action=view&editid1=${id}`,
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
          // Convert PascalCase API response to camelCase interface
          const convertedData: UserGroupData = {
            ID: result.data.ID,
            name: result.data.Name,
            remarks: result.data.Remarks || "",
            block: result.data.Block,
            BUnit: result.data.BUnit,
            UserName: result.data.UserName,
          };
          setUserGroup(convertedData);
        } else {
          throw new Error(result.message || "Failed to fetch user group");
        }
      } catch (err) {
        console.error("Error fetching user group:", err);
        setError(
          err instanceof Error ? err.message : "Failed to fetch user group"
        );
      } finally {
        setLoading(false);
      }
    };

    fetchUserGroup();
  }, [id, user?.apiKey]);

  const handleSubmit = async (data: UserGroupData) => {
    // Validate ID before submission
    if (!id) {
      setUpdateError("Invalid user group ID");
      return;
    }

    try {
      setUpdateLoading(true);
      setUpdateError(null);
      setUpdateSuccess(false);

      const formData = new FormData();
      formData.append("BUnit", data.BUnit || "");
      formData.append("Name", data.name);
      formData.append("Remarks", data.remarks || "");
      formData.append("UserName", data.UserName || "");
      formData.append("Block", data.block);

      const response = await fetch(
        `/api/v1.php?table=psUserGroup&action=update&editid1=${id}`,
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
      const jsonMatch = responseText.match(/\{[\s\S]*\}$/);

      if (!jsonMatch) {
        throw new Error("Invalid response format");
      }

      const result = JSON.parse(jsonMatch[0]);

      if (result.success) {
        setUpdateSuccess(true);
        // Reset form states after successful update
        setTimeout(() => {
          router.push("/user-groups");
        }, 1500);
      } else {
        throw new Error(result.message || "Failed to update user group");
      }
    } catch (err) {
      console.error("Error updating user group:", err);
      setUpdateError(
        err instanceof Error ? err.message : "Failed to update user group"
      );
    } finally {
      setUpdateLoading(false);
    }
  };

  // Error state for invalid ID
  if (!id) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen bg-gray-50">
          <Sidebar />
          <div className="flex-1 flex flex-col overflow-hidden">
            <div className="flex items-center justify-center h-full">
              <div className="text-center">
                <div className="text-red-600 text-xl mb-4">❌</div>
                <h2 className="text-xl font-semibold text-gray-900 mb-2">
                  {t("invalid_user_group", "Invalid User Group")}
                </h2>
                <p className="text-gray-600 mb-4">
                  {t("invalid_user_group_desc", "No valid user group ID was provided.")}
                </p>
                <button
                  onClick={() => router.push("/user-groups")}
                  className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  {t("btn_back_to_user_groups", "Back to User Groups")}
                </button>
              </div>
            </div>
          </div>
        </div>
      </ProtectedRoute>
    );
  }

  if (loading) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen bg-gray-50">
          <Sidebar />
          <div className="flex-1 flex flex-col overflow-hidden">
            <div className="flex items-center justify-center h-full">
              <div className="text-center">
                <div className="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mx-auto"></div>
                <p className="mt-4 text-gray-600">{t("loading_user_group", "Loading user group...")}</p>
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
                  {t("error_loading_user_group", "Error Loading User Group")}
                </h2>
                <p className="text-gray-600 mb-4">{error}</p>
                <button
                  onClick={() => router.push("/user-groups")}
                  className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  {t("btn_back_to_user_groups", "Back to User Groups")}
                </button>
              </div>
            </div>
          </div>
        </div>
      </ProtectedRoute>
    );
  }

  if (!userGroup) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen bg-gray-50">
          <Sidebar />
          <div className="flex-1 flex flex-col overflow-hidden">
            <div className="flex items-center justify-center h-full">
              <div className="text-center">
                <div className="text-gray-600 text-xl mb-4">❌</div>
                <h2 className="text-xl font-semibold text-gray-900 mb-2">
                  {t("user_group_not_found", "User Group Not Found")}
                </h2>
                <p className="text-gray-600 mb-4">
                  {t("user_group_not_found_desc", "The user group you're looking for doesn't exist.")}
                </p>
                <button
                  onClick={() => router.push("/user-groups")}
                  className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  {t("btn_back_to_user_groups", "Back to User Groups")}
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
                {t("page_title_edit_user_group", "Edit User Group")}
              </h1>
              <button
                onClick={() => formRef.current?.requestSubmit()}
                disabled={updateLoading}
                className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 disabled:opacity-50"
              >
                {updateLoading ? t("btn_updating", "Updating...") : t("btn_update_user_group", "Update User Group")}
              </button>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {/* Success Message */}
              {updateSuccess && (
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
                        {t("msg_user_group_updated", "User group updated successfully! Redirecting...")}
                      </p>
                    </div>
                  </div>
                </div>
              )}

              {/* Error Message */}
              {updateError && (
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
                        {updateError}
                      </p>
                    </div>
                  </div>
                </div>
              )}

              <UserGroupForm
                mode="edit"
                initialData={userGroup}
                onSubmit={handleSubmit}
                submitLabel={
                  updateLoading ? t("btn_updating", "Updating...") : t("btn_update_user_group", "Update User Group")
                }
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
