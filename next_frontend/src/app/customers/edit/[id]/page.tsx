"use client";

import CustomerForm, { CustomerData } from "@/components/CustomerForm";
import { useParams, useRouter } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type for fetching customer data
interface CustomerApiResponse {
  Code: string;
  BUnit: string;
  OldCode: string;
  Name: string;
  ContactName: string;
  GroupCode: string;
  Address: string;
  SaleTaxRegNo: string;
  NTNNo: string;
  CNIC: string;
  Phone: string;
  Fax: string;
  Cell: string;
  WebAddress: string;
  EMail: string;
  Remarks: string;
  SecurtyDeposit: string | null;
  SaleMenCode: string;
  Commission: string | null;
  UserName: string | null;
  Block: string;
}

// Function to fetch customer data by ID
const fetchCustomerById = async (
  id: string,
  apiKey: string
): Promise<CustomerData> => {
  const response = await fetch(
    `/api/v1.php?table=pCustomer&action=view&editid1=${id}`,
    {
      method: "GET",
      headers: {
        "X-Auth-Token": apiKey,
        "Content-Type": "application/json",
      },
    }
  );

  if (!response.ok) {
    throw new Error("Failed to fetch customer data");
  }

  const result = await response.json();

  if (result.success && result.data) {
    const customerData = result.data as CustomerApiResponse;
    return {
      Code: customerData.Code,
      BUnit: customerData.BUnit,
      OldCode: customerData.OldCode,
      Name: customerData.Name,
      ContactName: customerData.ContactName,
      GroupCode: customerData.GroupCode,
      Address: customerData.Address,
      SaleTaxRegNo: customerData.SaleTaxRegNo,
      NTNNo: customerData.NTNNo,
      CNIC: customerData.CNIC,
      Phone: customerData.Phone,
      Fax: customerData.Fax,
      Cell: customerData.Cell,
      WebAddress: customerData.WebAddress,
      EMail: customerData.EMail,
      Remarks: customerData.Remarks,
      SecurtyDeposit: customerData.SecurtyDeposit,
      SaleMenCode: customerData.SaleMenCode,
      Commission: customerData.Commission,
      UserName: customerData.UserName,
      Block: customerData.Block,
    };
  } else {
    throw new Error("No customer data found");
  }
};

export default function EditCustomerPage() {
  const params = useParams();
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const id = params?.id as string;
  const [initialData, setInitialData] = useState<CustomerData | null>(null);
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadCustomerData = async () => {
      if (!user || !id) return;

      try {
        setLoading(true);
        setError(null);
        const data = await fetchCustomerById(
          id as string,
          user.apiKey || "123"
        );
        setInitialData(data);
      } catch (error) {
        console.error("Error fetching customer data:", error);
        setError(
          error instanceof Error
            ? error.message
            : t("msg_customer_load_failed", "Failed to load customer data")
        );
      } finally {
        setLoading(false);
      }
    };

    loadCustomerData();
  }, [id, user]);

  const handleSubmit = async (data: CustomerData) => {
    setIsUpdating(true);

    try {
      // Create FormData object for update
      const form = new FormData();
      form.append("Code", id as string); // Include the customer ID for update
      form.append("BUnit", data.BUnit);
      form.append("OldCode", data.OldCode);
      form.append("Name", data.Name);
      form.append("ContactName", data.ContactName);
      form.append("GroupCode", data.GroupCode);
      form.append("Address", data.Address);
      form.append("SaleTaxRegNo", data.SaleTaxRegNo);
      form.append("NTNNo", data.NTNNo);
      form.append("CNIC", data.CNIC);
      form.append("Phone", data.Phone);
      form.append("Fax", data.Fax);
      form.append("Cell", data.Cell);
      form.append("WebAddress", data.WebAddress);
      form.append("EMail", data.EMail);
      form.append("Remarks", data.Remarks);
      form.append("SecurtyDeposit", data.SecurtyDeposit || "");
      form.append("SaleMenCode", data.SaleMenCode);
      form.append("Commission", data.Commission || "");
      form.append("UserName", data.UserName || "");
      form.append("Block", data.Block);

      const response = await fetch(
        `/api/v1.php?table=pCustomer&action=update&editid1=${id}`,
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to update customer");
      }

      const result = await response.json();

      if (result.success) {
        alert(t("msg_customer_updated_success", "Customer updated successfully!"));
        router.push("/customers");
      } else {
        throw new Error(result.message || "Failed to update customer");
      }
    } catch (error) {
      console.error("Error updating customer:", error);
      alert(
        error instanceof Error
          ? error.message
          : t("msg_customer_update_failed", "Failed to update customer. Please try again.")
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
                {t("page_title_edit_customer", "Edit Customer")}
              </h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update_customer", "Update Customer")}
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>{t("msg_error_loading_customer", "Error loading customer data:")}</strong> {error}. {t("msg_try_refresh", "Please try refreshing the page or contact support.")}
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <CustomerForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel={t("btn_update_customer", "Update Customer")}
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
