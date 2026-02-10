import React, { useState, useEffect, useMemo } from "react";
import SearchableDropdown, { DropdownOption } from "./SearchableDropdown";
import FormModal from "./FormModal";
import { SaveButton, UpdateButton } from "./ui";
import { useAuth } from "@/contexts/AuthContext";
import { useRouter } from "next/navigation";
import { useDispatch, useSelector } from "react-redux";
import { fetchPsAccountSubGroup, selectPsAccountSubGroup } from "@/Redux/slices/psAccountSubGroupSlice/psAccountSubGroupSlice";
import { fetchBunitID, selectBunitID, selectBunitLoading } from "@/Redux/slices/bunitSlice/bunitSlice";
import axios from "axios";

export interface AccountsData {
  ID?: string;
  ParentAccountCode: string;
  VirtualCode: string;
  BUnit: string;
  OldCode: string | null;
  CoaCode: string;
  AccSubCode: string;
  Name: string;
  AccType: string;
  Remarks: string | null;
  UnitCode: string;
  UserName: string;
  Block: string;
  GroupCode: string;
}

interface AccountsFormProps {
  mode: "add" | "edit";
  initialData?: Partial<AccountsData>;
  onSubmit: (data: AccountsData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}



const AccountsForm: React.FC<AccountsFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {

  const { accountSubGroups } = useSelector(selectPsAccountSubGroup);
  console.log("🚀 ~ AccountsForm ~ accountSubGroups:", accountSubGroups)
  const [error, setError] = useState<string | null>(null);
    const [bunitID, setBunitID] = useState([] as DropdownOption[]);
      const     dispatch=useDispatch()

   const router = useRouter();
  const { user } = useAuth();
    const bunitOptions = useSelector(selectBunitID);


    const fetchMainGroupeCode_Coa_Code = async () => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "psChartofAccounts",
          action: "list",
        },
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data.data;
       const formattedData= result?.map(
                  (item) => ({
                    label: item.Name,
                  value:item.CoaCode
                  })
                );

      setMainGroupOption(formattedData)
    } catch (error) {
      console.error("Error fetching tSaleD:", error);
    }
  };

  useEffect(() => {
    if (user?.apiKey) {
      fetchMainGroupeCode_Coa_Code()
      dispatch(fetchBunitID(user.apiKey));
    }
  }, [dispatch, user]);


    const defaultData: AccountsData = {
  ParentAccountCode: "0",
  VirtualCode: "",
  BUnit: bunitID[0]?.value || "",
  OldCode: "",
  CoaCode: "",
  AccSubCode: "",
  Name: "",
  AccType: "",
  Remarks: "",
  UnitCode: "0.0000",
  UserName: "",
  Block: "0",
  GroupCode: "0",
};
  const [formData, setFormData] = useState<AccountsData>({
    ...defaultData,
    ...initialData,
  });
  // Account type options
  const accountTypeOptions: DropdownOption[] = [
    { value: "Cash", label: "Cash" },
    { value: "Bank", label: "Bank" },
    { value: "Asset", label: "Asset" },
    { value: "Liability", label: "Liability" },
    { value: "Equity", label: "Equity" },
    { value: "Revenue", label: "Revenue" },
    { value: "Expense", label: "Expense" },
    { value: "Current Asset", label: "Current Asset" },
    { value: "Fixed Asset", label: "Fixed Asset" },
    { value: "Current Liability", label: "Current Liability" },
    { value: "Long Term Liability", label: "Long Term Liability" },
  ];

  
  const groupOptions: DropdownOption[] = [
    { value: "0", label: "Assets" },
    { value: "1", label: "Liabilities" },
    { value: "2", label: "Equity" },
    { value: "3", label: "Revenue" },
    { value: "4", label: "Expenses" },
  ];

const [mainGroupOption,setMainGroupOption]=useState([])
console.log("🚀 ~ AccountsForm ~ mainGroupOption:", mainGroupOption)

const subAccountMapping: Record<string, string[]> = {
  '0':['0'],
  "1": ["1","2","3","4","5","12","13","14","15"],
  "2": ["16","17"],
  "3": ["25","26","27"], 
  "4": ["21","22","23","29","30"], 
  "5": ["19","20","28","31"], 
};





  const accountSubGroupsValue = useMemo(() => {
    return accountSubGroups.map((item) => ({
      value: item.value,
      label: item.label,
    }));
  }, [accountSubGroups]);
  console.log("🚀 ~ AccountsForm ~ accountSubGroupsValue:", accountSubGroupsValue)

  // Filtered sub accounts based on selected group
const filteredSubAccounts = useMemo(() => {
  if (!formData.GroupCode) return [];
  return accountSubGroupsValue.filter((sub) =>
    subAccountMapping[formData.GroupCode]?.includes(sub.value)
  );
}, [formData.GroupCode, accountSubGroupsValue]);




//   const accountSubGroupsValue = useMemo(() => {
//   return accountSubGroups.map(item => ({
//     value: item.value,
//     label: item.label,
//   }));
// }, [accountSubGroups]);


  const groupToAccountTypes: { [key: string]: string[] } = {
  "1": ["Cash", "Bank", "Asset", "Current Asset", "Fixed Asset"], 
  "2": ["Liability", "Current Liability", "Long Term Liability"], 
  "3": ["Equity"], 
  "4": ["Revenue"], 
  "5": ["Expense"], 
  "6": accountTypeOptions.map(opt => opt.value), 
};

  useEffect(() => {
    dispatch(fetchPsAccountSubGroup(user?.apiKey));
  }, [dispatch, user?.apiKey]);

const filteredAccountTypeOptions = accountTypeOptions.filter((option) =>
  groupToAccountTypes[formData.GroupCode]?.includes(option.value)
);
  // console.log("🚀 ~ AccountsForm ~ filteredAccountTypeOptions:", filteredAccountTypeOptions)


  
  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (field: keyof AccountsData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    // Validate required fields
    const requiredFields: (keyof AccountsData)[] = [
      // "Code",
      "Name",
      // "AccType",
      // "GroupCode",
    ];

    const missingFields = requiredFields.filter((field) => !formData[field]);

    if (missingFields.length > 0) {
      alert(`Please fill in all required fields: ${missingFields.join(", ")}`);
      return;
    }

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
          {/* <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Account Code <span className="text-red-500">*</span>
            </label>
            <input
              type="text"
              value={formData.Code}
              onChange={(e) => handleInputChange("Code", e.target.value)}
              placeholder="e.g., 11"
              required
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div> */}
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
            label="Business Unit"
           value={formData.BUnit}
            options={bunitOptions}
            onChange={(value) => handleInputChange("BUnit", value)}
            placeholder="Select Group"
            searchPlaceholder="Search group..."
          />
    
          {/* <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Virtual Code
            </label>
            <input
              type="text"
              value={formData.VirtualCode}
              onChange={(e) => handleInputChange("VirtualCode", e.target.value)}
              placeholder="e.g., 1-1"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div> */}
          {/* <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Parent Account Code
            </label>
            <input
              type="text"
              value={formData.ParentAccountCode}
              onChange={(e) =>
                handleInputChange("ParentAccountCode", e.target.value)
              }
              placeholder="e.g., 0"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div> */}
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Old Code
            </label>
            <input
              type="text"
              value={formData.OldCode || ""}
              onChange={(e) => handleInputChange("OldCode", e.target.value)}
              placeholder="e.g., OLD001"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
                <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Account Name <span className="text-red-500">*</span>
            </label>
            <input
              type="text"
              value={formData.Name}
              onChange={(e) => handleInputChange("Name", e.target.value)}
              placeholder="e.g., Cash In Hand"
              required
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          {/* <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              COA Code
            </label>
            <input
              type="text"
              value={formData.CoaCode}
              onChange={(e) => handleInputChange("CoaCode", e.target.value)}
              placeholder="e.g., 1"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Account Sub Code
            </label>
            <input
              type="text"
              value={formData.AccSubCode}
              onChange={(e) => handleInputChange("AccSubCode", e.target.value)}
              placeholder="e.g., 1"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div> */}
               <SearchableDropdown
            label="Account Main Group"
            value={formData.GroupCode}
            options={mainGroupOption}
            onChange={(value) => {
              handleInputChange("GroupCode", value)
              handleInputChange("CoaCode", value)
            }}
            placeholder="Select Group"
            searchPlaceholder="Search group..."
            required={true}
          />

                 <SearchableDropdown
            label="Account Sub Group"
            value={formData.AccSubCode}
            options={filteredSubAccounts}
            onChange={(value) => handleInputChange("AccSubCode", value)}
            placeholder="Select Account Sub Group"
            searchPlaceholder="Search group..."
            required={true}
          />

          {/* <div>
  <label className="block text-sm font-medium text-gray-800 mb-2">
    Account Sub Group<span className="text-red-500">*</span>
  </label>
  <select
    value={formData.AccSubCode}
    onChange={(e) => handleInputChange("AccSubCode", e.target.value)}
    required
    className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
    disabled={!formData.GroupCode} // Disable until group selected
  >
    <option value="">Select Account Sub</option>
    {filteredSubAccounts?.map((option) => (
      <option key={option.value} value={option.value}>
        {option.label}
      </option>
    ))}
  </select>
</div> */}
     
          {/* <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Unit Code
            </label>
            <input
              type="text"
              value={formData.UnitCode}
              onChange={(e) => handleInputChange("UnitCode", e.target.value)}
              placeholder="e.g., 0.0000"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div> */}
         
          {/* <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              User Name
            </label>
            <input
              type="text"
              value={formData.UserName}
              onChange={(e) => handleInputChange("UserName", e.target.value)}
              placeholder="e.g., 1"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div> */}
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
        <div className="mt-6">
          <label className="block text-sm font-medium text-gray-800 mb-2">
            Remarks
          </label>
          <textarea
            value={formData.Remarks || ""}
            onChange={(e) => handleInputChange("Remarks", e.target.value)}
            rows={4}
            placeholder="Additional notes about the account..."
            className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>
      </div>

      {/* Submit Button */}
     <div className="flex justify-between items-center">
      {/* Save / Update Button */}
      <div className="cursor-pointer">
        {mode === "edit" ? (
          <UpdateButton onClick={()=>handleSubmit}>
            {submitLabel || "Update Account"}
          </UpdateButton>
        ) : (
          <SaveButton  onClick={()=>handleSubmit}>
            {submitLabel || "Save Account"}
          </SaveButton>
        )}
      </div>
    </div>
    </form>
  );
};

export default AccountsForm;
