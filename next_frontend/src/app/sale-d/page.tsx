"use client";

import { useState } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";

interface TSaleHData {
  code: string;
  tMonth: string;
  tYear: string;
  bookCode: string;
  bookId: string;
  virtualCode: string;
  tBook: string;
  tType: string;
  tDate: string;
  status: string;
  partyCode: string;
  totalAmount: string;
  freightAccountCode: string;
  freightCharges: string;
  laborAccountCode: string;
  laborCharges: string;
  saleTaxAccCode: string;
  saleTaxRate: string;
  saleTaxAmount: string;
  discountAccCode: string;
  discountRemarks: string;
  discountRate: string;
  discountAmount: string;
  grandTotal: string;
  saleMenCode: string;
  commission: string;
  remarks: string;
  block: string;
}

export default function TSaleHPage() {
  const [formData, setFormData] = useState<TSaleHData>({
    code: "",
    tMonth: "",
    tYear: "",
    bookCode: "",
    bookId: "",
    virtualCode: "",
    tBook: "",
    tType: "",
    tDate: "",
    status: "",
    partyCode: "",
    totalAmount: "",
    freightAccountCode: "",
    freightCharges: "",
    laborAccountCode: "",
    laborCharges: "",
    saleTaxAccCode: "",
    saleTaxRate: "",
    saleTaxAmount: "",
    discountAccCode: "",
    discountRemarks: "",
    discountRate: "",
    discountAmount: "",
    grandTotal: "",
    saleMenCode: "",
    commission: "",
    remarks: "",
    block: "",
  });

  // const handleInputChange = (field: keyof TSaleHData, value: string) => {
  //   setFormData((prev) => ({
  //     ...prev,
  //     [field]: value,
  //   }));
  // };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    console.log("T Sale H Form Data:", formData);
    // Here you can add API call to save data
    alert("T Sale H data saved successfully!");
  };

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />

        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <div className="flex items-center">
                <h1 className="text-2xl font-bold text-gray-900">
                  T Sale D - Add New
                </h1>
              </div>
            </div>
          </header>

          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <form onSubmit={handleSubmit} className="space-y-8">
                {/* Basic Information Section */}
                <div className="bg-white rounded-lg shadow p-6">
                  <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
                    Coming Soon!
                  </h2>
                </div>
              </form>
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
