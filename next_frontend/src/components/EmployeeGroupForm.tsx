import React, { useState, useEffect } from "react";
import { SaveButton, UpdateButton } from "./ui";

export interface EmployeeGroupData {
  ID?: string; // Make ID optional
  name: string;
  remarks: string;
  block: string;
  BUnit?: string | null;
  UserName?: string | null;
}

export const defaultEmployeeGroupData: EmployeeGroupData = {
  name: "",
  remarks: "",
  block: "0", // Default to "0"
  BUnit: '',
  UserName: '',
};

interface EmployeeGroupFormProps {
  mode: "add" | "edit";
  initialData?: Partial<EmployeeGroupData>;
  onSubmit: (data: EmployeeGroupData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const EmployeeGroupForm: React.FC<EmployeeGroupFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<EmployeeGroupData>({
    ...defaultEmployeeGroupData,
    ...initialData,
  });

  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultEmployeeGroupData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (
    field: keyof EmployeeGroupData,
    value: string | null
  ) => {
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
      {/* Group Information Section */}
      <div className="bg-white rounded-lg shadow p-6">
        <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
          Group Information
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Group Name <span className="text-red-500">*</span>
            </label>
            <input
              type="text"
              required
              value={formData.name}
              onChange={(e) => handleInputChange("name", e.target.value)}
              placeholder="e.g., General Group, Managers, Sales Staff, Support Team"
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
              <option value="0">No</option>
              <option value="1">Yes</option>
            </select>
          </div>
        </div>
        <div className="mt-6">
          <label className="block text-sm font-medium text-gray-800 mb-2">
            Remarks
          </label>
          <textarea
            value={formData.remarks || ""}
            onChange={(e) => handleInputChange("remarks", e.target.value)}
            rows={4}
            placeholder="Additional notes about the employee group..."
            className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
      </div>

      {/* Submit Button */}
      <div className="flex justify-end">
        {mode === "edit" ? (
          <UpdateButton onClick={() => handleSubmit}>
            {submitLabel || "Update Employee Group"}
          </UpdateButton>
        ) : (
          <SaveButton onClick={() => handleSubmit}>
            {submitLabel || "Save Employee Group"}
          </SaveButton>
        )}
      </div>
    </form>
  );
};

export default EmployeeGroupForm;
