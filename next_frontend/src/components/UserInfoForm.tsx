import React, { useState, useEffect, useMemo } from "react";
import SearchableDropdown, { DropdownOption } from "./SearchableDropdown";
import FormModal from "./FormModal";
import UserGroupForm from "./UserGroupForm";
import { SaveButton, UpdateButton } from "./ui";
import { fetchUserGroups, userGroupState } from "@/Redux/slices/userGroupSlice/userGroupSlice";
import { useDispatch, useSelector } from "react-redux";
import { useAuth } from "@/contexts/AuthContext";

export interface UserInfoData {
  UserName: string | null;
  CellNo: string;
  Email: string | null;
  LoginUserName: string;
  Password: string;
  PasswordHint: string | null;
  GroupCode: string | null;
  Remarks: string | null;
  UserType: string | null;
  isAccountActive: string;
  NoOfAttempt: string;
  NoOfWorngAttempt: string;
}

interface UserInfoFormProps {
  mode: "add" | "edit";
  initialData?: Partial<UserInfoData>;
  onSubmit: (data: UserInfoData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const defaultData: UserInfoData = {
  UserName: "",
  CellNo: "",
  Email: "",
  LoginUserName: "",
  Password: "",
  PasswordHint: "",
  GroupCode: "",
  Remarks: "",
  UserType: "",
  isAccountActive: "1",
  NoOfAttempt: "10",
  NoOfWorngAttempt: "0",
};

const UserInfoForm: React.FC<UserInfoFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<UserInfoData>({
    ...defaultData,
    ...initialData,
  });
const {user}=useAuth()
const dispatch=useDispatch()
  // Modal state
  const [isModalOpen, setIsModalOpen] = useState(false);

  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (field: keyof UserInfoData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    // Validate required fields
    const requiredFields: (keyof UserInfoData)[] = [
      "UserName",
      "Email",
      "LoginUserName",
      "Password",
      "PasswordHint",
      "GroupCode",
      "Remarks",
      "UserType",
      "isAccountActive",
      "NoOfAttempt",
      "NoOfWorngAttempt",
    ];

    const missingFields = requiredFields.filter((field) => !formData[field]);

    if (missingFields.length > 0) {
      alert(`Please fill in all required fields: ${missingFields.join(", ")}`);
      return;
    }

    onSubmit(formData);
  };

  // Group options for User Info
  const [groupOptions, setGroupOptions] = useState<DropdownOption[]>([
    { value: "admin", label: "Administrators" },
    { value: "manager", label: "Managers" },
    { value: "sales", label: "Sales Staff" },
    { value: "support", label: "Support Team" },
    { value: "user", label: "Regular Users" },
  ]);

  const handleAddGroup = () => {
    setIsModalOpen(true);
  };

  const handleModalClose = () => {
    setIsModalOpen(false);
  };

  const handleGroupSubmit = (data: {
    name: string;
    remarks: string;
    block: string;
  }) => {
    // Handle the new group data here
    console.log("New group data:", data);
    // Add new group to options
    setGroupOptions((prev) => [
      ...prev,
      { value: data.name, label: data.name },
    ]);
    setIsModalOpen(false);
  };
  const { userGroupList, loading, error } = useSelector(userGroupState);
            const userGroupsOption = useMemo(() => {
          return userGroupList.map((item)=>{
            console.log("🚀 ~ EmployeeForm ~ item:", item)
            return {
              label:item?.name,
              value:item?.ID,
            }
          })
        }, [userGroupList]);
            
  

   useEffect(() => {

  
      if (user) {
         dispatch(fetchUserGroups(user?.apiKey));
      }
    }, [user,]);
  

  return (
    <>
      <form ref={formRef} onSubmit={handleSubmit} className="space-y-8">
        {/* Basic Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Basic Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                User Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.UserName || ""}
                onChange={(e) => handleInputChange("UserName", e.target.value)}
                placeholder="e.g., John Doe"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Cell No 
              </label>
              <input
                type="tel"
                value={formData.CellNo}
                onChange={(e) => handleInputChange("CellNo", e.target.value)}
                placeholder="+92-300-1234567"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Email <span className="text-red-500">*</span>
              </label>
              <input
                type="email"
                value={formData.Email || ""}
                onChange={(e) => handleInputChange("Email", e.target.value)}
                placeholder="user@example.com"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Login User Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.LoginUserName}
                onChange={(e) =>
                  handleInputChange("LoginUserName", e.target.value)
                }
                placeholder="e.g., johndoe"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Password <span className="text-red-500">*</span>
              </label>
              <input
                type="password"
                value={formData.Password}
                onChange={(e) => handleInputChange("Password", e.target.value)}
                placeholder="Enter password"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Password Hint <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.PasswordHint || ""}
                onChange={(e) =>
                  handleInputChange("PasswordHint", e.target.value)
                }
                placeholder="e.g., My first pet's name"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <SearchableDropdown
              label="Group Code "
              value={formData.GroupCode || ""}
              options={userGroupsOption}
              onChange={(value) => handleInputChange("GroupCode", value)}
              placeholder="Select Group"
              searchPlaceholder="Search group..."
              addButtonTitle="Add"
              onAddClick={handleAddGroup}
              required={true}
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                User Type <span className="text-red-500">*</span>
              </label>
              <select
                value={formData.UserType || ""}
                onChange={(e) => handleInputChange("UserType", e.target.value)}
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="">Select User Type</option>
                <option value="admin">Administrator</option>
                <option value="manager">Manager</option>
                <option value="employee">Employee</option>
                <option value="customer">Customer</option>
                <option value="guest">Guest</option>
              </select>
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Is Account Active <span className="text-red-500">*</span>
              </label>
              <select
                value={formData.isAccountActive}
                onChange={(e) =>
                  handleInputChange("isAccountActive", e.target.value)
                }
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
          </div>
        </div>
        {/* Security Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Security Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                No Of Attempt <span className="text-red-500">*</span>
              </label>
              <input
                type="number"
                min="0"
                value={formData.NoOfAttempt}
                onChange={(e) =>
                  handleInputChange("NoOfAttempt", e.target.value)
                }
                placeholder="10"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                No Of Wrong Attempt <span className="text-red-500">*</span>
              </label>
              <input
                type="number"
                min="0"
                value={formData.NoOfWorngAttempt}
                onChange={(e) =>
                  handleInputChange("NoOfWorngAttempt", e.target.value)
                }
                placeholder="0"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
          <div className="mt-6">
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Remarks <span className="text-red-500">*</span>
            </label>
            <textarea
              value={formData.Remarks || ""}
              onChange={(e) => handleInputChange("Remarks", e.target.value)}
              rows={4}
              placeholder="Additional notes about the user..."
              required
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>
        {/* Submit Button */}
        <div className="flex justify-end">
          {mode === "edit" ? (
            <UpdateButton onClick={() => handleSubmit}>
              {submitLabel || "Update User Info"}
            </UpdateButton>
          ) : (
            <SaveButton onClick={() => handleSubmit}>
              {submitLabel || "Save User Info"}
            </SaveButton>
          )}
        </div>
      </form>

      {/* Modal for adding new group */}
      <FormModal
        isOpen={isModalOpen}
        onClose={handleModalClose}
        title="Add New User Group"
        size="lg"
      >
        <UserGroupForm
          mode="add"
          onSubmit={handleGroupSubmit}
          submitLabel="Save User Group"
        />
      </FormModal>
    </>
  );
};

export default UserInfoForm;
