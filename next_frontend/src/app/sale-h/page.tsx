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

  const handleInputChange = (field: keyof TSaleHData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

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
                  T Sale H - Add New
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
                  T Sale H - Add New
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
                    Basic Information
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Code <span className="text-red-500">*</span>
                      </label>
                      <input
                        type="text"
                        required
                        value={formData.code}
                        onChange={(e) =>
                          handleInputChange("code", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        T Month
                      </label>
                      <select
                        value={formData.tMonth}
                        onChange={(e) =>
                          handleInputChange("tMonth", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        T Year
                      </label>
                      <input
                        type="number"
                        min="2000"
                        max="2100"
                        value={formData.tYear}
                        onChange={(e) =>
                          handleInputChange("tYear", e.target.value)
                        }
                        placeholder="2024"
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Book Code
                      </label>
                      <input
                        type="text"
                        value={formData.bookCode}
                        onChange={(e) =>
                          handleInputChange("bookCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Book ID
                      </label>
                      <input
                        type="text"
                        value={formData.bookId}
                        onChange={(e) =>
                          handleInputChange("bookId", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Virtual Code
                      </label>
                      <input
                        type="text"
                        value={formData.virtualCode}
                        onChange={(e) =>
                          handleInputChange("virtualCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        T Book
                      </label>
                      <input
                        type="text"
                        value={formData.tBook}
                        onChange={(e) =>
                          handleInputChange("tBook", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        T Type
                      </label>
                      <input
                        type="text"
                        value={formData.tType}
                        onChange={(e) =>
                          handleInputChange("tType", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        T Date
                      </label>
                      <input
                        type="date"
                        value={formData.tDate}
                        onChange={(e) =>
                          handleInputChange("tDate", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Status
                      </label>
                      <select
                        value={formData.status}
                        onChange={(e) =>
                          handleInputChange("status", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select Status</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                      </select>
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Party Code
                      </label>
                      <select
                        value={formData.partyCode}
                        onChange={(e) =>
                          handleInputChange("partyCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select</option>
                        <option value="customer1">Customer 1</option>
                        <option value="customer2">Customer 2</option>
                        <option value="customer3">Customer 3</option>
                      </select>
                    </div>
                  </div>
                </div>

                {/* Financial Information Section */}
                <div className="bg-white rounded-lg shadow p-6">
                  <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
                    Financial Information
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Total Amount
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        value={formData.totalAmount}
                        onChange={(e) =>
                          handleInputChange("totalAmount", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Freight Account Code
                      </label>
                      <input
                        type="text"
                        value={formData.freightAccountCode}
                        onChange={(e) =>
                          handleInputChange(
                            "freightAccountCode",
                            e.target.value
                          )
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Freight Charges
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        value={formData.freightCharges}
                        onChange={(e) =>
                          handleInputChange("freightCharges", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Labor Account Code
                      </label>
                      <input
                        type="text"
                        value={formData.laborAccountCode}
                        onChange={(e) =>
                          handleInputChange("laborAccountCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Labor Charges
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        value={formData.laborCharges}
                        onChange={(e) =>
                          handleInputChange("laborCharges", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Sale Tax Acc Code
                      </label>
                      <input
                        type="text"
                        value={formData.saleTaxAccCode}
                        onChange={(e) =>
                          handleInputChange("saleTaxAccCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Sale Tax Rate (%)
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="100"
                        value={formData.saleTaxRate}
                        onChange={(e) =>
                          handleInputChange("saleTaxRate", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Sale Tax Amount
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        value={formData.saleTaxAmount}
                        onChange={(e) =>
                          handleInputChange("saleTaxAmount", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Discount Acc Code
                      </label>
                      <input
                        type="text"
                        value={formData.discountAccCode}
                        onChange={(e) =>
                          handleInputChange("discountAccCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Discount Rate (%)
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="100"
                        value={formData.discountRate}
                        onChange={(e) =>
                          handleInputChange("discountRate", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Discount Amount
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        value={formData.discountAmount}
                        onChange={(e) =>
                          handleInputChange("discountAmount", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Grand Total
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        value={formData.grandTotal}
                        onChange={(e) =>
                          handleInputChange("grandTotal", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>
                  </div>

                  <div className="mt-6">
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                      Discount Remarks
                    </label>
                    <textarea
                      value={formData.discountRemarks}
                      onChange={(e) =>
                        handleInputChange("discountRemarks", e.target.value)
                      }
                      rows={3}
                      placeholder="Additional notes about the discount..."
                      className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                  </div>
                </div>

                {/* Additional Information Section */}
                <div className="bg-white rounded-lg shadow p-6">
                  <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
                    Additional Information
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Sale Men Code
                      </label>
                      <input
                        type="text"
                        value={formData.saleMenCode}
                        onChange={(e) =>
                          handleInputChange("saleMenCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Commission
                      </label>
                      <input
                        type="number"
                        step="0.01"
                        min="0"
                        value={formData.commission}
                        onChange={(e) =>
                          handleInputChange("commission", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Block
                      </label>
                      <select
                        value={formData.block}
                        onChange={(e) =>
                          handleInputChange("block", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select Block</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>

                  <div className="mt-6">
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                      Remarks
                    </label>
                    <textarea
                      value={formData.remarks}
                      onChange={(e) =>
                        handleInputChange("remarks", e.target.value)
                      }
                      rows={4}
                      placeholder="Additional notes about the sale..."
                      className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                  </div>
                </div>

                {/* Submit Button */}
                <div className="flex justify-end">
                  <button
                    type="submit"
                    className="px-8 py-3 bg-green-600 text-white rounded-md hover:bg-green-700 font-medium"
                  >
                    Save T Sale H
                  </button>
                </div>
              </form>
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
