"use client";

import SupplierForm, { SupplierData } from "@/components/SupplierForm";
import { useParams, useRouter } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type for fetching supplier data
interface SupplierApiResponse {
  ID: string;
  Code: string;
  BUnit: string | null;
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
  UserName: string | null;
  Block: string;
}

// Function to fetch supplier data by ID
const fetchSupplierById = async (
  id: string,
  apiKey: string
): Promise<SupplierData> => {
  const response = await fetch(
    `/api/v1.php?table=pSupplier&action=view&editid1=${id}`,
    {
      method: "GET",
      headers: {
        "X-Auth-Token": apiKey,
        "Content-Type": "application/json",
      },
    }
  );

  if (!response.ok) {
    throw new Error("Failed to fetch supplier data");
  }

  const result = await response.json();

  if (result.success && result.data) {
    const supplierData = result.data as SupplierApiResponse;
    return {
      ID: supplierData.ID,
      Code: supplierData.Code,
      BUnit: supplierData.BUnit,
      OldCode: supplierData.OldCode,
      Name: supplierData.Name,
      ContactName: supplierData.ContactName,
      GroupCode: supplierData.GroupCode,
      Address: supplierData.Address,
      SaleTaxRegNo: supplierData.SaleTaxRegNo,
      NTNNo: supplierData.NTNNo,
      CNIC: supplierData.CNIC,
      Phone: supplierData.Phone,
      Fax: supplierData.Fax,
      Cell: supplierData.Cell,
      WebAddress: supplierData.WebAddress,
      EMail: supplierData.EMail,
      Remarks: supplierData.Remarks,
      UserName: supplierData.UserName,
      Block: supplierData.Block,
    };
  } else {
    throw new Error("No supplier data found");
  }
};

export default function EditSupplierPage() {
  const params = useParams();
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const id = params?.id as string;
  const [initialData, setInitialData] = useState<SupplierData | null>(null);
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadSupplierData = async () => {
      if (!user || !id) return;

      try {
        setLoading(true);
        setError(null);
        const data = await fetchSupplierById(id, user.apiKey || "123");
        setInitialData(data);
      } catch (error) {
        console.error("Error fetching supplier data:", error);
        setError(
          error instanceof Error
            ? error.message
            : t("msg_supplier_load_failed", "Failed to load supplier data")
        );
      } finally {
        setLoading(false);
      }
    };

    loadSupplierData();
  }, [id, user]);

  const handleSubmit = async (data: SupplierData) => {
    setIsUpdating(true);

    try {
      // Create FormData object for update
      const form = new FormData();
      form.append("Code", id); // Include the supplier ID for update
      form.append("BUnit", data.BUnit || "");
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
      form.append("UserName", data.UserName || "");
      form.append("Block", data.Block);

      const response = await fetch(
        `/api/v1.php?table=pSupplier&action=update&editid1=${id}`,
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to update supplier");
      }

      const result = await response.json();

      if (result.success) {
        alert(t("msg_supplier_updated_success", "Supplier updated successfully!"));
        router.push("/suppliers");
      } else {
        throw new Error(result.message || "Failed to update supplier");
      }
    } catch (error) {
      console.error("Error updating supplier:", error);
      alert(
        error instanceof Error
          ? error.message
          : t("msg_supplier_update_failed", "Failed to update supplier. Please try again.")
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
                {t("page_title_edit_supplier", "Edit Supplier")}
              </h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update_supplier", "Update Supplier")}
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>{t("msg_error_loading_supplier", "Error loading supplier data:")}</strong> {error}. {t("msg_try_refresh", "Please try refreshing the page or contact support.")}
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <SupplierForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel={t("btn_update_supplier", "Update Supplier")}
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
