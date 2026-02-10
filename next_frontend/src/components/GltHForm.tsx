import React, { useState, useEffect } from "react";
import { SaveButton, UpdateButton } from "./ui";
import { getTodayDate } from "@/utils/dateUtils";

export interface GltHData {
  code: string;
  bookCode: string;
  virtualCode: string;
  tBook: string;
  tType: string;
  tDate: string;
  bUnit: string;
  status: string;
  remarks: string;
  userName: string;
  createDate: string;
  createTime: string;
  updateUser: string;
  updateDate: string;
  updateTime: string;
  block: string;
  lock: string;
  totalAmount: string;
}

interface GltHFormProps {
  mode: "add" | "edit";
  initialData?: Partial<GltHData>;
  onSubmit: (data: GltHData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const getDefaultData = (): GltHData => ({
  code: "",
  bookCode: "",
  virtualCode: "",
  tBook: "",
  tType: "",
  tDate: getTodayDate(),
  bUnit: "",
  status: "",
  remarks: "",
  userName: "",
  createDate: getTodayDate(),
  createTime: "",
  updateUser: "",
  updateDate: "",
  updateTime: "",
  block: "",
  lock: "",
  totalAmount: "",
});

const GltHForm: React.FC<GltHFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<GltHData>(() => ({
    ...getDefaultData(),
    ...initialData,
  }));

  useEffect(() => {
    if (initialData) {
      setFormData({ ...getDefaultData(), ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (field: keyof GltHData, value: string) => {
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
              Total Amount
            </label>
            <input
              type="number"
              step="0.01"
              value={formData.totalAmount}
              onChange={(e) => handleInputChange("totalAmount", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>
        <div className="mt-6">
          <label className="block text-sm font-medium text-gray-800 mb-2">
            Remarks
          </label>
          <textarea
            value={formData.remarks}
            onChange={(e) => handleInputChange("remarks", e.target.value)}
            rows={4}
            className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
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
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Lock
            </label>
            <select
              value={formData.lock}
              onChange={(e) => handleInputChange("lock", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option value="">Select Lock</option>
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
            {submitLabel || "Update GltH"}
          </UpdateButton>
        ) : (
          <SaveButton onClick={() => handleSubmit}>
            {submitLabel || "Save GltH"}
          </SaveButton>
        )}
      </div>
    </form>
  );
};

export default GltHForm;
