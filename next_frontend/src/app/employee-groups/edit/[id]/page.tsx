"use client";

import { useState, useEffect } from "react";
import { useRouter } from "next/navigation";
import { useParams } from "next/navigation";
import EmployeeGroupForm, {
  EmployeeGroupData,
} from "@/components/EmployeeGroupForm";
import { useAuth } from "@/contexts/AuthContext";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef } from "react";
import { UpdateButton } from "@/components/ui";
import { useTranslations } from "@/hooks/useTranslations";

export default function EditEmployeeGroupPage() {
  const router = useRouter();
  const params = useParams();
  const id = params?.id as string;
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const formRef = useRef<HTMLFormElement>(null);

  const [employeeGroup, setEmployeeGroup] = useState<EmployeeGroupData | null>(
    null
  );
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [updateLoading, setUpdateLoading] = useState(false);
  const [updateError, setUpdateError] = useState<string | null>(null);
  const [updateSuccess, setUpdateSuccess] = useState(false);

  // Fetch employee group data
  useEffect(() => {
    const fetchEmployeeGroup = async () => {
      try {
        setLoading(true);
        setError(null);

        const response = await fetch(
          `/api/v1.php?table=psEmployeeGroup&action=view&editid1=${id}`,
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
          const convertedData: EmployeeGroupData = {
            ID: result.data.ID,
            name: result.data.Name,
            remarks: result.data.Remarks || "",
            block: result.data.Block,
            BUnit: result.data.BUnit,
            UserName: result.data.UserName,
          };
          setEmployeeGroup(convertedData);
        } else {
          throw new Error(result.message || "Failed to fetch employee group");
        }
      } catch (err) {
        console.error("Error fetching employee group:", err);
        setError(
          err instanceof Error ? err.message : "Failed to fetch employee group"
        );
      } finally {
        setLoading(false);
      }
    };

    if (id) {
      fetchEmployeeGroup();
    }
  }, [id, user?.apiKey]);

  const handleSubmit = async (data: EmployeeGroupData) => {
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
        `/api/v1.php?table=psEmployeeGroup&action=update&editid1=${id}`,
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
          router.push("/employee-groups");
        }, 1500);
      } else {
        throw new Error(result.message || "Failed to update employee group");
      }
    } catch (err) {
      console.error("Error updating employee group:", err);
      setUpdateError(
        err instanceof Error ? err.message : "Failed to update employee group"
      );
    } finally {
      setUpdateLoading(false);
    }
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
                <p className="mt-4 text-gray-600">{t("loading_employee_group", "Loading employee group...")}</p>
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
                  {t("error_loading_employee_group", "Error Loading Employee Group")}
                </h2>
                <p className="text-gray-600 mb-4">{error}</p>
                <button
                  onClick={() => router.push("/employee-groups")}
                  className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  {t("btn_back_to_employee_groups", "Back to Employee Groups")}
                </button>
              </div>
            </div>
          </div>
        </div>
      </ProtectedRoute>
    );
  }

  if (!employeeGroup) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen bg-gray-50">
          <Sidebar />
          <div className="flex-1 flex flex-col overflow-hidden">
            <div className="flex items-center justify-center h-full">
              <div className="text-center">
                <div className="text-gray-600 text-xl mb-4">❌</div>
                <h2 className="text-xl font-semibold text-gray-900 mb-2">
                  {t("employee_group_not_found", "Employee Group Not Found")}
                </h2>
                <p className="text-gray-600 mb-4">
                  {t("employee_group_not_found_desc", "The employee group you're looking for doesn't exist.")}
                </p>
                <button
                  onClick={() => router.push("/employee-groups")}
                  className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  {t("btn_back_to_employee_groups", "Back to Employee Groups")}
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
                {t("page_title_edit_employee_group", "Edit Employee Group")}
              </h1>
              <UpdateButton
                onClick={() => formRef.current?.requestSubmit()}
                disabled={updateLoading}
              >
                {updateLoading ? t("btn_updating", "Updating...") : t("btn_update_employee_group", "Update Employee Group")}
              </UpdateButton>
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
                        {t("msg_employee_group_updated", "Employee group updated successfully! Redirecting...")}
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

              <EmployeeGroupForm
                mode="edit"
                initialData={employeeGroup}
                onSubmit={handleSubmit}
                submitLabel={
                  updateLoading ? t("btn_updating", "Updating...") : t("btn_update_employee_group", "Update Employee Group")
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
