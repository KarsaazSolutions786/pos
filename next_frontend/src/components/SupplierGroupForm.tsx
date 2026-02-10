"use client";

import { useAuth } from "@/contexts/AuthContext";
import { fetchBunitID, selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import React, { useState, useEffect } from "react";
import { useDispatch, useSelector } from "react-redux";
import SearchableDropdown from "./SearchableDropdown";

export interface SupplierGroupData {
  ID?: string;
  name: string;
  remarks: string;
  block: string;
  BUnit?: string | null;
  UserName?: string | null;
}

export const defaultSupplierGroupData: SupplierGroupData = {
  name: "",
  remarks: "",
  block: "0",
  BUnit: null,
  UserName: null,
};

interface SupplierGroupFormProps {
  mode?: "add" | "edit";
  initialData?: Partial<SupplierGroupData>;
  onSubmit: (data: SupplierGroupData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const SupplierGroupForm: React.FC<SupplierGroupFormProps> = ({
  mode = "add",
  initialData = {},
  onSubmit,
  submitLabel = "Save Supplier Group",
  formRef,
}) => {
  const [formData, setFormData] = useState<SupplierGroupData>({
    ...defaultSupplierGroupData,
    ...initialData,
  });
  const  {user}=useAuth()
    const dispatch = useDispatch()
    const bunitOptions = useSelector(selectBunitID);

  useEffect(() => {
    // Only update form data if initialData has changed
    if (initialData && Object.keys(initialData).length > 0) {
      setFormData((prev) => ({
        ...defaultSupplierGroupData,
        ...initialData,
      }));
    }
  }, [initialData]);

  const handleInputChange = (key: keyof SupplierGroupData, value: string) => {
    console.log(`Changing ${key}:`, value);
    setFormData((prev) => {
      const newState = {
        ...prev,
        [key]: value,
      };
      console.log("New form state:", newState);
      return newState;
    });
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    onSubmit(formData);
  };

  useEffect(() => {
         if (user?.apiKey) {
           dispatch(fetchBunitID(user.apiKey));
         }
       }, [dispatch, user]);

  return (
    <form
      ref={formRef}
      onSubmit={handleSubmit}
      className="space-y-6 bg-white rounded-lg p-6 shadow"
    >
      <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
        {/* Business Unit */}
                      <SearchableDropdown
            label="Business Unit"
           value={formData.BUnit}
            options={bunitOptions}
            onChange={(value) => handleInputChange("BUnit", value)}
            placeholder="Select Group"
            searchPlaceholder="Search group..."
            required={true}
          />
        {/* <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            Business Unit
            <input
              type="text"
              value={formData.BUnit || ""}
              onChange={(e) =>
                handleInputChange("BUnit", (e.target as HTMLInputElement).value)
              }
              placeholder="Business Unit"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div> */}

        {/* UserName */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            User Name
            <input
              type="text"
              value={formData.UserName || ""}
              onChange={(e) =>
                handleInputChange(
                  "UserName",
                  (e.target as HTMLInputElement).value
                )
              }
              placeholder="User Name"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* Name */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            Name
            <input
              type="text"
              required
              value={formData.name}
              onChange={(e) =>
                handleInputChange("name", (e.target as HTMLInputElement).value)
              }
              placeholder="e.g., General Supplier"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* Remarks */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            Remarks
            <textarea
              value={formData.remarks || ""}
              onChange={(e) =>
                handleInputChange(
                  "remarks",
                  (e.target as HTMLTextAreaElement).value
                )
              }
              rows={3}
              placeholder="Additional notes about the supplier group"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* Block Status */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            Block Status
            <select
              value={formData.block}
              onChange={(e) =>
                handleInputChange(
                  "block",
                  (e.target as HTMLSelectElement).value
                )
              }
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              <option value="0">Active</option>
              <option value="1">Blocked</option>
            </select>
          </label>
        </div>
      </div>

      <div className="flex justify-end mt-6">
        <button
          type="submit"
          className="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
          {submitLabel}
        </button>
      </div>
    </form>
  );
};

export default SupplierGroupForm;
