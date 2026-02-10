import React, { useState, useEffect } from "react";
import { SaveButton, UpdateButton } from "./ui";

export interface CustomerGroupData {
  ID?: string;
  BUnit: string;
  Name: string;
  Remarks: string | null;
  UserName: string | null;
  Block: string;
}

interface CustomerGroupFormProps {
  mode: "add" | "edit";
  initialData?: Partial<CustomerGroupData>;
  onSubmit: (data: CustomerGroupData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const defaultData: CustomerGroupData = {
  BUnit: "0",
  Name: "",
  Remarks: "",
  UserName: "",
  Block: "0",
};

const CustomerGroupForm: React.FC<CustomerGroupFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<CustomerGroupData>({
    ...defaultData,
    ...initialData,
  });

  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (
    field: keyof CustomerGroupData,
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
              value={formData.Name}
              onChange={(e) => handleInputChange("Name", e.target.value)}
              placeholder="e.g., General Customer, VIP Customers, Wholesale Customers"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Block
            </label>
            <select
              value={formData.Block}
              onChange={(e) => handleInputChange("Block", e.target.value)}
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
            value={formData.Remarks || ""}
            onChange={(e) => handleInputChange("Remarks", e.target.value)}
            rows={4}
            placeholder="Additional notes about the customer group..."
            className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
      </div>

      {/* Submit Button */}
      <div className="flex justify-end">
        {mode === "edit" ? (
          <UpdateButton onClick={() => handleSubmit}>
            {submitLabel || "Update Customer Group"}
          </UpdateButton>
        ) : (
          <SaveButton onClick={() => handleSubmit}>
            {submitLabel || "Save Customer Group"}
          </SaveButton>
        )}
      </div>
    </form>
  );
};

export default CustomerGroupForm;
