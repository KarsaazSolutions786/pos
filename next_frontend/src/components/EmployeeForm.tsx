import React, { useState, useEffect, useMemo } from "react";
import SearchableDropdown, { DropdownOption } from "./SearchableDropdown";
import FormModal from "./FormModal";
import EmployeeGroupForm, { EmployeeGroupData as FormEmployeeGroupData } from "./EmployeeGroupForm";
import { SaveButton, UpdateButton } from "./ui";
import { fetchBunitID, selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import { useDispatch, useSelector } from "react-redux";
import { useAuth } from "@/contexts/AuthContext";
import { fetchEmployeeGroups, selectEmployeeGroupsState, EmployeeGroupData as ReduxEmployeeGroupData } from "@/Redux/slices/employeeGroupSlice/employeeGroupSlice";

interface ComissionGroupApiResponse {
  id?: number | string;
  ID?: number | string;
  name?: string;
  Name?: string;
  is_active?: number | string;
  Is_Active?: number | string;
  IsActive?: number | string;
}
import { insertGroup } from "@/services/httpService";
import { AppDispatch } from "@/Redux/slices/store";

export interface EmployeeData {
  Code: string;
  BUnit: string;
  OldCode: string;
  Name: string;
  FatherName: string;
  EmployeeGroup: string;
  AccType: string;
  Gender: string;
  Address: string;
  Phone: string;
  Cell: string;
  CNIC: string;
  NTNNo: string;
  Fax: string;
  EMail: string;
  PerHourRate: string | null;
  TotalSalary: string | null;
  OfficeTimeFrom: string | null;
  OfficeTimeTo: string | null;
  Remarks: string;
  UserName: string | null;
  Block: string;
  comission_group_id: string | null;
}

interface EmployeeFormProps {
  mode: "add" | "edit";
  initialData?: Partial<EmployeeData>;
  onSubmit: (data: EmployeeData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const defaultData: EmployeeData = {
  Code: "",
  BUnit: "",
  OldCode: "",
  Name: "",
  FatherName: "",
  EmployeeGroup: "",
  AccType: 'employes',
  Gender: "",
  Address: "",
  Phone: "",
  Cell: "",
  CNIC: "",
  NTNNo: "",
  Fax: "",
  EMail: "",
  PerHourRate: "",
  TotalSalary: "",
  OfficeTimeFrom: "",
  OfficeTimeTo: "",
  Remarks: "",
  UserName: "",
  Block: "0",
  comission_group_id: "",
};

const EmployeeForm: React.FC<EmployeeFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<EmployeeData>({
    ...defaultData,
    ...initialData,
  });

  // Modal state
  const [isModalOpen, setIsModalOpen] = useState(false);
  const bunitOptions = useSelector(selectBunitID);
  const { user } = useAuth()
  const dispatch = useDispatch<AppDispatch>();
  const { employeeGroupsList } = useSelector(selectEmployeeGroupsState);

  console.log("🚀 ~ EmployeeForm ~ employeeGroupsList from Redux:", employeeGroupsList);

  const employeeGroupsOption = useMemo(() => {
    if (!employeeGroupsList || !Array.isArray(employeeGroupsList)) {
      console.log("🚀 ~ EmployeeForm ~ employeeGroupsList is empty or not an array");
      return [];
    }
    return employeeGroupsList.map((item: ReduxEmployeeGroupData) => {
      const label = item?.name || (item as any)?.Name || "";
      const value = item?.ID || (item as any)?.id || "";
      return { label, value };
    }).filter(opt => opt.label && opt.value);
  }, [employeeGroupsList]);
  console.log("🚀 ~ EmployeeForm ~ employeeGroupsOption:", employeeGroupsOption);

  // Commission Group options
  const [comissionGroupOptions, setComissionGroupOptions] = useState<DropdownOption[]>([]);
  // Removed unused state: const [isLoadingComissionGroups, setIsLoadingComissionGroups] = useState(false);

  // Gender options
  const genderOptions: DropdownOption[] = [
    { value: "Male", label: "Male" },
    { value: "Female", label: "Female" },
    { value: "Other", label: "Other" },
  ];

  useEffect(() => {
    if (user?.apiKey) {
      console.log("🚀 ~ EmployeeForm ~ Dispatching fetchBunitID and fetchEmployeeGroups with apiKey:", user.apiKey);
      dispatch(fetchBunitID(user.apiKey))
        .unwrap()
        .then((result) => console.log("🚀 ~ fetchBunitID success:", result))
        .catch((err) => console.error("🚀 ~ fetchBunitID error:", err));
      dispatch(fetchEmployeeGroups(user.apiKey))
        .unwrap()
        .then((result) => console.log("🚀 ~ fetchEmployeeGroups success:", result))
        .catch((err) => console.error("🚀 ~ fetchEmployeeGroups error:", err));
    }
  }, [dispatch, user]);

  // Fetch Commission Groups
  useEffect(() => {
    const fetchComissionGroups = async () => {
      if (!user?.apiKey) return;
      try {
        const response = await fetch("/api/v1.php?table=comission_group&action=list", {
          method: "GET",
          headers: {
            "X-Auth-Token": user.apiKey,
            "Content-Type": "application/json",
          },
        });

        if (!response.ok) {
          throw new Error("Failed to fetch commission groups");
        }

        const result = await response.json();

        if (result.success && result.data && Array.isArray(result.data)) {
          const options: DropdownOption[] = result.data
            .filter((group: ComissionGroupApiResponse) => {
              const isActive = group.is_active ?? group.Is_Active ?? group.IsActive;
              return String(isActive) === "1" || String(isActive).toLowerCase() === "true";
            })
            .map((group: ComissionGroupApiResponse) => ({
              value: String(group.id ?? group.ID ?? ""),
              label: String(group.name ?? group.Name ?? ""),
            }))
            .filter((opt: DropdownOption) => opt.value && opt.label);

          setComissionGroupOptions(options);
        } else {
          console.warn("Commission Group API returned no data or unsuccessful response:", result);
          setComissionGroupOptions([]);
        }
      } catch (error) {
        console.error("Error fetching commission groups:", error);
      }
    };

    fetchComissionGroups();
  }, [user]);

  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (field: keyof EmployeeData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    // Validate required fields
    const requiredFields: (keyof EmployeeData)[] = [
      // "Code",
      "Name",
      "FatherName",
      "EmployeeGroup",
      // "Phone",
    ];

    const missingFields = requiredFields.filter((field) => !formData[field]);

    if (missingFields.length > 0) {
      alert(`Please fill in all required fields: ${missingFields.join(", ")}`);
      return;
    }

    onSubmit(formData);
  };

  const handleAddGroup = () => {
    setIsModalOpen(true);
  };

  const handleModalClose = () => {
    setIsModalOpen(false);
  };

  const handleGroupSubmit = async (data: FormEmployeeGroupData) => {
    const obj = {
      Name: data?.name,
      Remarks: data?.remarks,
      Block: data?.block
    }
    try {
      const result = await insertGroup("psEmployeeGroup", obj, user?.apiKey);
      console.log("Insert result:", result);
      dispatch(fetchEmployeeGroups(user?.apiKey))
      setIsModalOpen(false);
    } catch (error) {
      console.error("Insert failed:", error);
    }
  };


  return (
    <>
      <form ref={formRef} onSubmit={handleSubmit} className="space-y-8">
        {/* Basic Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Basic Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {/* <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Employee Code <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.Code}
                onChange={(e) => handleInputChange("Code", e.target.value)}
                placeholder="e.g., 64"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div> */}
            <SearchableDropdown
              label="Business Unit"
              value={formData.BUnit}
              options={bunitOptions}
              onChange={(value) => handleInputChange("BUnit", value)}
              placeholder="Business Unit "
              searchPlaceholder="Search Business Unit ..."
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Employee Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.Name}
                onChange={(e) => handleInputChange("Name", e.target.value)}
                placeholder="e.g., Sarosh ALI"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Father Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.FatherName}
                onChange={(e) =>
                  handleInputChange("FatherName", e.target.value)
                }
                placeholder="e.g., gfgdg"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Old Code
              </label>
              <input
                type="text"
                value={formData.OldCode}
                onChange={(e) => handleInputChange("OldCode", e.target.value)}
                placeholder="e.g., OLD001"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            {/* <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Business Unit
              </label>
              <input
                type="text"
                value={formData.BUnit}
                onChange={(e) => handleInputChange("BUnit", e.target.value)}
                placeholder="e.g., 0"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div> */}
            <SearchableDropdown
              label="Employee Group "
              value={formData.EmployeeGroup}
              options={employeeGroupsOption}
              onChange={(value) => handleInputChange("EmployeeGroup", value)}
              placeholder="Select Group"
              searchPlaceholder="Search group..."
              addButtonTitle="Add"
              onAddClick={handleAddGroup}
              required={true}
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Gender
              </label>
              <select
                value={formData.Gender}
                onChange={(e) => handleInputChange("Gender", e.target.value)}
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="">Select Gender</option>
                {genderOptions.map((option) => (
                  <option key={option.value} value={option.value}>
                    {option.label}
                  </option>
                ))}
              </select>
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                User Name
              </label>
              <input
                type="text"
                value={formData.UserName || ""}
                onChange={(e) => handleInputChange("UserName", e.target.value)}
                placeholder="e.g., admin"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Block Status
              </label>
              <select
                value={formData.Block}
                onChange={(e) => handleInputChange("Block", e.target.value)}
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="0">Active</option>
                <option value="1">Blocked</option>
              </select>
            </div>
          </div>
        </div>

        {/* Contact Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Contact Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Phone / Cell
              </label>
              <input
                type="tel"
                value={formData.Phone}
                onChange={(e) => handleInputChange("Phone", e.target.value)}
                placeholder="e.g., 03172825059"

                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Other Number
              </label>
              <input
                type="tel"
                value={formData.Cell}
                onChange={(e) => handleInputChange("Cell", e.target.value)}
                placeholder="e.g., 03001234567"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Email
              </label>
              <input
                type="email"
                value={formData.EMail}
                onChange={(e) => handleInputChange("EMail", e.target.value)}
                placeholder="e.g., employee@example.com"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Fax
              </label>
              <input
                type="text"
                value={formData.Fax}
                onChange={(e) => handleInputChange("Fax", e.target.value)}
                placeholder="e.g., 021-1234567"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
        </div>

        {/* Address Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Address Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div className="md:col-span-2 lg:col-span-3">
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Address
              </label>
              <textarea
                value={formData.Address}
                onChange={(e) => handleInputChange("Address", e.target.value)}
                rows={3}
                placeholder="e.g., H-no A-60 Quetta Town Scheme 33 Karachi"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
        </div>

        {/* Legal Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Legal Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                CNIC
              </label>
              <input
                type="text"
                value={formData.CNIC}
                onChange={(e) => handleInputChange("CNIC", e.target.value)}
                placeholder="e.g., 12345-1234567-1"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                NTN Number
              </label>
              <input
                type="text"
                value={formData.NTNNo}
                onChange={(e) => handleInputChange("NTNNo", e.target.value)}
                placeholder="e.g., 1234567-8"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
        </div>

        {/* Employment Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Employment Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <SearchableDropdown
              label="Commission Group"
              value={formData.comission_group_id || ""}
              options={comissionGroupOptions}
              onChange={(value) => handleInputChange("comission_group_id", value)}
              placeholder="Select Commission Group"
              searchPlaceholder="Search commission group..."
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Per Hour Rate
              </label>
              <input
                type="number"
                step="0.01"
                min="0"
                value={formData.PerHourRate || ""}
                onChange={(e) =>
                  handleInputChange("PerHourRate", e.target.value)
                }
                placeholder="e.g., 25.00"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Total Salary
              </label>
              <input
                type="number"
                step="0.01"
                min="0"
                value={formData.TotalSalary || ""}
                onChange={(e) =>
                  handleInputChange("TotalSalary", e.target.value)
                }
                placeholder="e.g., 50000.00"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Office Time From
              </label>
              <input
                type="time"
                value={formData.OfficeTimeFrom || ""}
                onChange={(e) =>
                  handleInputChange("OfficeTimeFrom", e.target.value)
                }
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Office Time To
              </label>
              <input
                type="time"
                value={formData.OfficeTimeTo || ""}
                onChange={(e) =>
                  handleInputChange("OfficeTimeTo", e.target.value)
                }
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
          <div className="mt-6">
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Remarks
            </label>
            <textarea
              value={formData.Remarks}
              onChange={(e) => handleInputChange("Remarks", e.target.value)}
              rows={4}
              placeholder="Additional notes about the employee..."
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>

        {/* Submit Button */}
        <div className="flex justify-end">
          {mode === "edit" ? (
            <UpdateButton onClick={() => handleSubmit}>
              {submitLabel || "Update Employee"}
            </UpdateButton>
          ) : (
            <SaveButton onClick={() => handleSubmit}>
              {submitLabel || "Save Employee"}
            </SaveButton>
          )}
        </div>
      </form>

      {/* Modal for adding new group */}
      <FormModal
        isOpen={isModalOpen}
        onClose={handleModalClose}
        title="Add New Employee Group"
        size="lg"
      >
        <EmployeeGroupForm
          mode="add"
          onSubmit={handleGroupSubmit}
          submitLabel="Save Employee Group"
        />
      </FormModal>
    </>
  );
};

export default EmployeeForm;
