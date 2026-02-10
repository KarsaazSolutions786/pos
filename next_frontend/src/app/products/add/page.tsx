"use client";

import ProductForm, { ProductData } from "@/components/ProductForm";
import { useRouter } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useRef, useState } from "react";
import { SaveButton } from "@/components/ui";
import { useAuth } from "@/contexts/AuthContext";
import { useTranslations } from "@/hooks/useTranslations";

export default function AddProductPage() {
  const router = useRouter();
  const { user } = useAuth();
  const { t, isRTL } = useTranslations();
  const formRef = useRef<HTMLFormElement>(null);
  const [isLoading, setIsLoading] = useState(false);

const handleSubmit = async (data: ProductData) => {
 
  setIsLoading(true);

  try {
    const form = new FormData();
    form.append("Code", data.Code);
    form.append("BUnit", data.BUnit || "");
    form.append("OldCode", data.OldCode);
    form.append("BarCode", data.BarCode);
    form.append("ProductGroupCode", data.ProductGroupCode);
    form.append("UnitCode", data.UnitCode);
    form.append("Name", data.Name);
    form.append("rate", data.rate);
    if (data.product_image instanceof File) {
      form.append("product_image", data.product_image); 
    }
    form.append("Packing", data.Packing);
    form.append("PackingQty", data.PackingQty || "");
    form.append("Remarks", data.Remarks);
    form.append("UserName", data.UserName || "");
    form.append("Block", data.Block);

    const response = await fetch(
      "/api/v1.php?table=pProductItems&action=insert",
      {
        method: "POST",
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
        },
        body: form,
      }
    );

    if (!response.ok) throw new Error("Failed to add product");

    const result = await response.json();

    if (result.success) {
      alert(t("msg_product_added_success", "Product added successfully!"));
      router.push("/products");
    } else {
      throw new Error(result.message || "Failed to add product");
    }
  } catch (error) {
    console.error("Error adding product:", error);
    alert(error instanceof Error ? error.message : t("msg_product_add_failed", "Failed to add product."));
  } finally {
    setIsLoading(false);
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
                 <button
         onClick={() => router.push('/products')} // Go to home
        className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
      >
        {t("btn_back", "Back")}
      </button>
              <h1 className="text-2xl font-bold text-gray-900">
                {t("page_title_add_product", "Add New Product")}
              </h1>
              <SaveButton
                onClick={() => formRef.current?.requestSubmit()}
                disabled={isLoading}
              >
                {isLoading ? t("btn_saving", "Saving...") : t("btn_save_product", "Save Product")}
              </SaveButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <ProductForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel={t("btn_save_product", "Save Product")}
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
