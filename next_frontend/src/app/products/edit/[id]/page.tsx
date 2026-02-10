"use client";

import ProductForm, { ProductData } from "@/components/ProductForm";
import { useParams, useRouter } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { UpdateButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

// API Response type for fetching product data
interface ProductApiResponse {
  Code: string;
  BUnit: string | null;
  OldCode: string;
  BarCode: string;
  ProductGroupCode: string;
  UnitCode: string;
  Name: string;
  rate: string;
  product_image: string | null;
  Packing: string;
  PackingQty: string | null;
  Remarks: string;
  UserName: string | null;
  Block: string;
}

// Function to fetch product data by ID
const fetchProductById = async (
  id: string,
  apiKey: string
): Promise<ProductData> => {
  const response = await fetch(
    `/api/v1.php?table=pProductItems&action=view&editid1=${id}`,
    {
      method: "GET",
      headers: {
        "X-Auth-Token": apiKey,
        "Content-Type": "application/json",
      },
    }
  );

  if (!response.ok) {
    throw new Error("Failed to fetch product data");
  }

  const result = await response.json();

  if (result.success && result.data) {
    const productData = result.data as ProductApiResponse;
    return {
      Code: productData.Code,
      BUnit: productData.BUnit,
      OldCode: productData.OldCode,
      BarCode: productData.BarCode,
      ProductGroupCode: productData.ProductGroupCode,
      UnitCode: productData.UnitCode,
      Name: productData.Name,
      rate: productData.rate,
      product_image: productData.product_image,
      Packing: productData.Packing,
      PackingQty: productData.PackingQty,
      Remarks: productData.Remarks,
      UserName: productData.UserName,
      Block: productData.Block,
    };
  } else {
    throw new Error("No product data found");
  }
};

export default function EditProductPage() {
  const params = useParams();
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const id = params?.id as string;
  const [initialData, setInitialData] = useState<ProductData | null>(null);
  const [loading, setLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    const loadProductData = async () => {
      if (!user || !id) return;

      try {
        setLoading(true);
        setError(null);
        const data = await fetchProductById(id, user.apiKey || "123");
        setInitialData(data);
      } catch (error) {
        console.error("Error fetching product data:", error);
        setError(
          error instanceof Error ? error.message : t("msg_product_load_failed", "Failed to load product data")
        );
      } finally {
        setLoading(false);
      }
    };

    loadProductData();
  }, [id, user]);

  const handleSubmit = async (data: ProductData) => {
    setIsUpdating(true);

    try {
      // Create FormData object for update
      const form = new FormData();
      form.append("Code", id); // Include the product ID for update
      form.append("BUnit", data.BUnit || "");
      form.append("OldCode", data.OldCode);
      form.append("BarCode", data.BarCode);
      form.append("ProductGroupCode", data.ProductGroupCode);
      form.append("UnitCode", data.UnitCode);
      form.append("Name", data.Name);
      form.append("rate", data.rate);
      form.append("product_image", data.product_image || "");
      form.append("Packing", data.Packing);
      form.append("PackingQty", data.PackingQty || "");
      form.append("Remarks", data.Remarks);
      form.append("UserName", data.UserName || "");
      form.append("Block", data.Block);

      const response = await fetch(
        `/api/v1.php?table=pProductItems&action=update&editid1=${id}`,
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );

      if (!response.ok) {
        throw new Error("Failed to update product");
      }

      const result = await response.json();

      if (result.success) {
        alert(t("msg_product_updated_success", "Product updated successfully!"));
        router.push("/products");
      } else {
        throw new Error(result.message || "Failed to update product");
      }
    } catch (error) {
      console.error("Error updating product:", error);
      alert(
        error instanceof Error
          ? error.message
          : t("msg_product_update_failed", "Failed to update product. Please try again.")
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
              <h1 className="text-2xl font-bold text-gray-900">{t("page_title_edit_product", "Edit Product")}</h1>
              <UpdateButton onClick={handleUpdateClick} disabled={isUpdating}>
                {isUpdating ? t("btn_updating", "Updating...") : t("btn_update_product", "Update Product")}
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {error && (
                <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                  <strong>{t("msg_error_loading_product", "Error loading product data:")}</strong> {error}. {t("msg_try_refresh", "Please try refreshing the page or contact support.")}
                </div>
              )}

              {loading ? (
                <div className="flex justify-center items-center h-64">
                  <div className="animate-spin rounded-full h-32 w-32 border-b-2 border-blue-700"></div>
                </div>
              ) : (
                <ProductForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel={t("btn_update_product", "Update Product")}
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
