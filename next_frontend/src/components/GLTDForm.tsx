import React, { useState, useEffect } from "react";
import { SaveButton, UpdateButton } from "./ui";
import { getTodayDate } from "@/utils/dateUtils";

export interface GLTDData {
  code: string;
  codeD: string;
  bookCode: string;
  bookId: string;
  virtualCode: string;
  status: string;
  tDate: string;
  bUnit: string;
  tBook: string;
  tType: string;
  accountCode: string;
  billNo: string;
  chequeNo: string;
  narration: string;
  remarks: string;
  amount: string;
  storeCode: string;
  qty: string;
  weight: string;
  rate: string;
  userName: string;
  createDate: string;
  createTime: string;
  updateUser: string;
  updateDate: string;
  updateTime: string;
  block: string;
  productCode: string;
  productGroupCode: string;
  unitCode: string;
}

interface GLTDFormProps {
  mode: "add" | "edit";
  initialData?: Partial<GLTDData>;
  onSubmit: (data: GLTDData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const getDefaultData = (): GLTDData => ({
  code: "",
  codeD: "",
  bookCode: "",
  bookId: "",
  virtualCode: "",
  status: "",
  tDate: getTodayDate(),
  bUnit: "",
  tBook: "",
  tType: "",
  accountCode: "",
  billNo: "",
  chequeNo: "",
  narration: "",
  remarks: "",
  amount: "",
  storeCode: "",
  qty: "",
  weight: "",
  rate: "",
  userName: "",
  createDate: getTodayDate(),
  createTime: "",
  updateUser: "",
  updateDate: "",
  updateTime: "",
  block: "",
  productCode: "",
  productGroupCode: "",
  unitCode: "",
});

const GLTDForm: React.FC<GLTDFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<GLTDData>(() => ({
    ...getDefaultData(),
    ...initialData,
  }));

  useEffect(() => {
    if (initialData) {
      setFormData({ ...getDefaultData(), ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (field: keyof GLTDData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    onSubmit(formData);
  };

  return (
    <form ref={formRef} onSubmit={handleSubmit} className="space-y-8">
      {/* Basic Information Section */}
      <div className="bg-white rounded-lg shadow p-6">
        <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
          Basic Information
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {/* ... (repeat all input fields as in the add form) ... */}
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Code <span className="text-red-500">*</span>
            </label>
            <input
              type="text"
              required
              value={formData.code}
              onChange={(e) => handleInputChange("code", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Code D <span className="text-red-500">*</span>
            </label>
            <input
              type="text"
              required
              value={formData.codeD}
              onChange={(e) => handleInputChange("codeD", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Book Code
            </label>
            <input
              type="text"
              value={formData.bookCode}
              onChange={(e) => handleInputChange("bookCode", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Book ID
            </label>
            <input
              type="text"
              value={formData.bookId}
              onChange={(e) => handleInputChange("bookId", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Virtual Code
            </label>
            <input
              type="text"
              value={formData.virtualCode}
              onChange={(e) => handleInputChange("virtualCode", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Status
            </label>
            <select
              value={formData.status}
              onChange={(e) => handleInputChange("status", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option value="">Select Status</option>
              <option value="active">Block</option>
              <option value="inactive">Inactive</option>
              <option value="pending">Pending</option>
            </select>
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              T Date
            </label>
            <input
              type="date"
              value={formData.tDate}
              onChange={(e) => handleInputChange("tDate", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Business Unit
            </label>
            <input
              type="text"
              value={formData.bUnit}
              onChange={(e) => handleInputChange("bUnit", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              T Book
            </label>
            <input
              type="text"
              value={formData.tBook}
              onChange={(e) => handleInputChange("tBook", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              T Type
            </label>
            <input
              type="text"
              value={formData.tType}
              onChange={(e) => handleInputChange("tType", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Account Code
            </label>
            <input
              type="text"
              value={formData.accountCode}
              onChange={(e) => handleInputChange("accountCode", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>
      </div>
      {/* Transaction Details Section */}
      <div className="bg-white rounded-lg shadow p-6">
        <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
          Transaction Details
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Bill No
            </label>
            <input
              type="text"
              value={formData.billNo}
              onChange={(e) => handleInputChange("billNo", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Cheque No
            </label>
            <input
              type="text"
              value={formData.chequeNo}
              onChange={(e) => handleInputChange("chequeNo", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Amount
            </label>
            <input
              type="number"
              step="0.01"
              value={formData.amount}
              onChange={(e) => handleInputChange("amount", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Store Code
            </label>
            <input
              type="text"
              value={formData.storeCode}
              onChange={(e) => handleInputChange("storeCode", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Qty
            </label>
            <input
              type="number"
              value={formData.qty}
              onChange={(e) => handleInputChange("qty", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Weight
            </label>
            <input
              type="number"
              step="0.01"
              value={formData.weight}
              onChange={(e) => handleInputChange("weight", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Rate
            </label>
            <input
              type="number"
              step="0.01"
              value={formData.rate}
              onChange={(e) => handleInputChange("rate", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>
        <div className="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Narration
            </label>
            <textarea
              value={formData.narration}
              onChange={(e) => handleInputChange("narration", e.target.value)}
              rows={3}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Remarks
            </label>
            <textarea
              value={formData.remarks}
              onChange={(e) => handleInputChange("remarks", e.target.value)}
              rows={3}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>
      </div>
      {/* Product Information Section */}
      <div className="bg-white rounded-lg shadow p-6">
        <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
          Product Information
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Product Code
            </label>
            <input
              type="text"
              value={formData.productCode}
              onChange={(e) => handleInputChange("productCode", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Product Group Code
            </label>
            <input
              type="text"
              value={formData.productGroupCode}
              onChange={(e) =>
                handleInputChange("productGroupCode", e.target.value)
              }
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Unit Code
            </label>
            <input
              type="text"
              value={formData.unitCode}
              onChange={(e) => handleInputChange("unitCode", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>
      </div>
      {/* User Management Section */}
      <div className="bg-white rounded-lg shadow p-6">
        <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
          User Management
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              User Name
            </label>
            <input
              type="text"
              value={formData.userName}
              onChange={(e) => handleInputChange("userName", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Create Date
            </label>
            <input
              type="date"
              value={formData.createDate}
              onChange={(e) => handleInputChange("createDate", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Create Time
            </label>
            <input
              type="time"
              value={formData.createTime}
              onChange={(e) => handleInputChange("createTime", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Update User
            </label>
            <input
              type="text"
              value={formData.updateUser}
              onChange={(e) => handleInputChange("updateUser", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Update Date
            </label>
            <input
              type="date"
              value={formData.updateDate}
              onChange={(e) => handleInputChange("updateDate", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Update Time
            </label>
            <input
              type="time"
              value={formData.updateTime}
              onChange={(e) => handleInputChange("updateTime", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Block
            </label>
            <select
              value={formData.block}
              onChange={(e) => handleInputChange("block", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option value="">Select Block</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
        </div>
      </div>
      {/* Submit Button */}
      <div className="flex justify-end">
        {mode === "edit" ? (
          <UpdateButton onClick={() => handleSubmit}>
            {submitLabel || "Update GLTD"}
          </UpdateButton>
        ) : (
          <SaveButton onClick={() => handleSubmit}>
            {submitLabel || "Save GLTD"}
          </SaveButton>
        )}
      </div>
    </form>
  );
};

export default GLTDForm;
