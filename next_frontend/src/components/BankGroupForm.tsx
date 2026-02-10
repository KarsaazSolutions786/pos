"use client";

import { useAuth } from "@/contexts/AuthContext";
import { fetchBunitID, selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import React, { useState, useEffect } from "react";
import { useDispatch, useSelector } from "react-redux";
import SearchableDropdown from "./SearchableDropdown";

export interface BankGroupData {
    ID?: string;
    name: string;
    Remarks: string;
    Block: string;
    BUnit?: string | null;
    UserName?: string | null;
}

export const defaultBankGroupData: BankGroupData = {
    name: "",
    Remarks: "",
    Block: "0",
    BUnit: null,
    UserName: null,
};

interface BankGroupFormProps {
    mode?: "add" | "edit";
    initialData?: Partial<BankGroupData>;
    onSubmit: (data: BankGroupData) => void;
    submitLabel?: string;
    formRef?: React.RefObject<HTMLFormElement>;
}

const BankGroupForm: React.FC<BankGroupFormProps> = ({
    mode = "add",
    initialData = {},
    onSubmit,
    submitLabel = "Save Bank Group",
    formRef,
}) => {
    const [formData, setFormData] = useState<BankGroupData>({
        ...defaultBankGroupData,
        ...initialData,
    });
    const { user } = useAuth()
    const dispatch = useDispatch()
    const bunitOptions = useSelector(selectBunitID);


    useEffect(() => {
        if (initialData && Object.keys(initialData).length > 0) {
            setFormData((prev) => ({
                ...defaultBankGroupData,
                ...initialData,
            }));
        }
    }, [initialData]);

    const handleInputChange = (key: keyof BankGroupData, value: string) => {
        setFormData((prev) => ({
            ...prev,
            [key]: value,
        }));
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
  <div className="grid grid-cols-1 sm:grid-cols-2 gap-6 items-start">
    {/* Business Unit */}
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

                {/* User name */}
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                        User Name
                        <input
                            type="text"
                            value={formData.UserName || ""}
                            onChange={(e) =>
                                handleInputChange("UserName", (e.target as HTMLInputElement).value)
                            }
                            placeholder="User name"
                            className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </label>
                </div>

                {/* Bank Group name */}
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                        Bank Group Name
                        <input
                            type="text"
                            required
                            value={formData.name}
                            onChange={(e) =>
                                handleInputChange("name", (e.target as HTMLInputElement).value)
                            }
                            placeholder="e.g., HBL, UBL"
                            className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </label>
                </div>

                {/* Remarks */}
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                        Remarks
                        <textarea
                            value={formData.Remarks || ""}
                            onChange={(e) =>
                                handleInputChange("Remarks", (e.target as HTMLTextAreaElement).value)
                            }
                            rows={3}
                            placeholder="Notes about this bank group"
                            className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </label>
                </div>

                {/* Block Status */}
                <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                        Block Status
                        <select
                            value={formData.Block}
                            onChange={(e) =>
                                handleInputChange("Block", (e.target as HTMLSelectElement).value)
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

export default BankGroupForm;
