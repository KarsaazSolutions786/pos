"use client";

import EmployeeForm, { EmployeeData } from "@/components/EmployeeForm";
import { useParams, useRouter } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type for fetching employee data
interface EmployeeApiResponse {
  Code: string;
  BUnit: string;
  OldCode: string;
  Name: string;
  FatherName: string;
  EmployeeGroup: string;
  AccType: string;
  Gender: string;
  Address: string;
  Phone: string;
  Cell: string;
  CNIC: string;
  NTNNo: string;
  Fax: string;
  EMail: string;
  PerHourRate: string | null;
  TotalSalary: string | null;
  OfficeTimeFrom: string | null;
  OfficeTimeTo: string | null;
  Remarks: string;
  UserName: string | null;
  Block: string;
  comission_group_id: string | null;
}

// Function to fetch employee data by ID
const fetchEmployeeById = async (
  id: string,
  apiKey: string
): Promise<EmployeeData> => {
  const response = await fetch(
    `/api/v1.php?table=pEmployee&action=view&editid1=${id}`,
    {
      method: "GET",
      headers: {
        "X-Auth-Token": apiKey,
        "Content-Type": "application/json",
      },
    }
  );

  if (!response.ok) {
    throw new Error("Failed to fetch employee data");
  }

  const result = await response.json();

  if (result.success && result.data) {
    const employeeData = result.data as EmployeeApiResponse;
    return {
      Code: employeeData.Code,
      BUnit: employeeData.BUnit,
      OldCode: employeeData.OldCode,
      Name: employeeData.Name,
      FatherName: employeeData.FatherName,
      EmployeeGroup: employeeData.EmployeeGroup,
      AccType: employeeData.AccType || 'employes',
      Gender: employeeData.Gender,
      Address: employeeData.Address,
      Phone: employeeData.Phone,
      Cell: employeeData.Cell,
      CNIC: employeeData.CNIC,
      NTNNo: employeeData.NTNNo,
      Fax: employeeData.Fax,
      EMail: employeeData.EMail,
      PerHourRate: employeeData.PerHourRate,
      TotalSalary: employeeData.TotalSalary,
      OfficeTimeFrom: employeeData.OfficeTimeFrom,
      OfficeTimeTo: employeeData.OfficeTimeTo,
      Remarks: employeeData.Remarks,
      UserName: employeeData.UserName,
      Block: employeeData.Block,
      comission_group_id: employeeData.comission_group_id,
    };
  } else {
    throw new Error("No employee data found");
  }
};

export default function EditEmployeePage() {
  const params = useParams();
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const id = params?.id as string;
  const [initialData, setInitialData] = useState<EmployeeData | null>(null);
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadEmployeeData = async () => {
      if (!user || !id) return;

      try {
        setLoading(true);
        setError(null);
        const data = await fetchEmployeeById(id, user.apiKey || "123");
        setInitialData(data);
      } catch (error) {
        console.error("Error fetching employee data:", error);
        setError(
          error instanceof Error
            ? error.message
            : t("msg_employee_load_failed", "Failed to load employee data")
        );
      } finally {
        setLoading(false);
      }
    };

    loadEmployeeData();
  }, [id, user]);

  const handleSubmit = async (data: EmployeeData) => {
    setIsUpdating(true);

    try {
      // Create FormData object for update
      const form = new FormData();
      form.append("Code", id); // Include the employee ID for update
      form.append("BUnit", data.BUnit);
      form.append("OldCode", data.OldCode);
      form.append("Name", data.Name);
      form.append("FatherName", data.FatherName);
      form.append("EmployeeGroup", data.EmployeeGroup);
      form.append("Gender", data.Gender);
      form.append("Address", data.Address);
      form.append("Phone", data.Phone);
      form.append("Cell", data.Cell);
      form.append("CNIC", data.CNIC);
      form.append("NTNNo", data.NTNNo);
      form.append("Fax", data.Fax);
      form.append("EMail", data.EMail);
      form.append("PerHourRate", data.PerHourRate || "");
      form.append("TotalSalary", data.TotalSalary || "");
      form.append("OfficeTimeFrom", data.OfficeTimeFrom || "");
      form.append("OfficeTimeTo", data.OfficeTimeTo || "");
      form.append("Remarks", data.Remarks);
      form.append("UserName", data.UserName || "");
      form.append("Block", data.Block);
      form.append("comission_group_id", data.comission_group_id || "");

      const response = await fetch(
        `/api/v1.php?table=pEmployee&action=update&editid1=${id}`,
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to update employee");
      }

      const result = await response.json();

      if (result.success) {
        alert(t("msg_employee_updated_success", "Employee updated successfully!"));
        router.push("/employees");
      } else {
        throw new Error(result.message || "Failed to update employee");
      }
    } catch (error) {
      console.error("Error updating employee:", error);
      alert(
        error instanceof Error
          ? error.message
          : t("msg_employee_update_failed", "Failed to update employee. Please try again.")
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
                {t("page_title_edit_employee", "Edit Employee")}
              </h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update_employee", "Update Employee")}
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>{t("msg_error_loading_employee", "Error loading employee data:")}</strong> {error}. {t("msg_try_refresh", "Please try refreshing the page or contact support.")}
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <EmployeeForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel={t("btn_update_employee", "Update Employee")}
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
