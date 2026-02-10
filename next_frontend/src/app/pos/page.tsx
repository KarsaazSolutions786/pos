"use client";

import ProductGrid, { Product } from "@/components/ProductGrid";
import ProtectedRoute from "@/components/ProtectedRoute";
import SaleInvoice, { ProductWithDiscount } from "@/components/SaleInvoice";
import Sidebar from "@/components/Sidebar";
import { mockProducts } from "@/utils/mockData";
import { getTodayDate } from "@/utils/dateUtils";
import { useState } from "react";
import { Bars3Icon, XMarkIcon, CalendarIcon } from "@heroicons/react/24/outline";
import { useTranslations } from "@/hooks/useTranslations";

export default function POSPage() {
  const { t, isRTL } = useTranslations();
  const [selectedProducts, setSelectedProducts] = useState<
    ProductWithDiscount[]
  >([]);
  const [sidebarOpen, setSidebarOpen] = useState(false);
  const [saleDate, setSaleDate] = useState(getTodayDate());

  const handleProductSelect = (product: Product) => {
    setSelectedProducts((prevProducts) => {
      // Check if product already exists
      const existingProductIndex = prevProducts.findIndex(
        (p) => p.ID === product.ID
      );

      if (existingProductIndex > -1) {
        // If product exists, increment quantity
        const updatedProducts = [...prevProducts];
        updatedProducts[existingProductIndex] = {
          ...updatedProducts[existingProductIndex],
          quantity: updatedProducts[existingProductIndex].quantity + 1,
        };
        return updatedProducts;
      } else {
        // If product doesn't exist, add with quantity 1
        return [...prevProducts, { ...product, quantity: 1, discount: 0 }];
      }
    });
  };

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        {/* Sidebar - Hidden by default, shown when sidebarOpen is true */}
        {sidebarOpen && (
          <div className="fixed inset-0 z-40 lg:hidden">
            <div
              className="fixed inset-0 bg-gray-600 bg-opacity-75"
              onClick={() => setSidebarOpen(false)}
            />
          </div>
        )}

        <div
          className={`${
            sidebarOpen ? "translate-x-0" : "-translate-x-full"
          } fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform transition-transform duration-300 ease-in-out`}
        >
          <Sidebar onClose={() => setSidebarOpen(false)} />
        </div>

        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <div className="flex items-center gap-4">
                {/* Sidebar Toggle Button */}
                <button
                  onClick={() => setSidebarOpen(!sidebarOpen)}
                  className="p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                >
                  {sidebarOpen ? (
                    <XMarkIcon className="h-6 w-6" />
                  ) : (
                    <Bars3Icon className="h-6 w-6" />
                  )}
                </button>
                <h1 className="text-2xl font-bold text-gray-900">
                  {t("page_title_pos")}
                </h1>
              </div>
              {/* Date Picker */}
              <div className="flex items-center gap-2">
                <CalendarIcon className="h-5 w-5 text-gray-500" />
                <label className="text-sm font-medium text-gray-700">{t("label_sale_date")}:</label>
                <input
                  type="date"
                  value={saleDate}
                  onChange={(e) => setSaleDate(e.target.value)}
                  max={getTodayDate()}
                  className="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
                />
              </div>
            </div>
          </header>

          {/* Main Content */}
          <main className="flex-1 overflow-y-auto grid grid-cols-1 xl:grid-cols-3 gap-4 p-6">
            {/* Product Grid - First on small devices */}
            <div className="order-1 xl:order-2">
              <ProductGrid
                products={mockProducts}
                onProductSelect={handleProductSelect}
                selectedProducts={selectedProducts}
              />
            </div>

            {/* Sale Invoice - Second on small devices */}
            <div className="xl:col-span-2 order-2 xl:order-1">
              <SaleInvoice
                selectedProducts={selectedProducts}
                setSelectedProducts={setSelectedProducts}
                saleDate={saleDate}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
