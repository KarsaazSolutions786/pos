import React, { useState, useEffect, useMemo } from "react";
import SearchableDropdown from "./SearchableDropdown";
import { SaveButton, UpdateButton } from "./ui";
import { fetchBunitID, selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
import { bankGroupState, fetchBankGroups } from "@/Redux/slices/bankgroupSlice/bankgroupSlice";

export interface BankData {
  BUnit: string;
  account_title: string;
  account_no: string;
  old_code:string
  group_id:string
  bank_name:string
}

interface BankFormProps {
  mode: "add" | "edit";
  initialData?: Partial<BankData>;
  onSubmit: (data: BankData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const defaultData: BankData = {
  BUnit: "0",
  old_code:'',
  bank_name:'',
  account_title: "",
  account_no: "",
  group_id:'',
};

const BankForm: React.FC<BankFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<BankData>({
    ...defaultData,
    ...initialData,
  });
    const { bankgrouplist, isLoading, error, total } = useSelector(bankGroupState);
  

  const { user } = useAuth();
  const dispatch = useDispatch();
  const bunitOptions = useSelector(selectBunitID);
  const [isModalOpen, setIsModalOpen] = useState(false);



  const bankGroupOptions = useMemo(() => {
    return bankgrouplist?.map(item => ({
      value: item.id,
      label: item.name,
    })) || [];
  }, [bankgrouplist]);
  
  
  

  
    useEffect(() => {
      // fetchCustomers();
            dispatch(fetchBankGroups(user?.apiKey));
    }, []);
  

  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  useEffect(() => {
    if (user?.apiKey) {
      dispatch(fetchBunitID(user.apiKey));
    }
  }, [dispatch, user]);

  const handleInputChange = (field: keyof BankData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    // Validate required fields
    // if (!formData.BUnit || !formData.account_title || !formData.IBAN) {
    //   alert("Please fill in all required fields.");
    //   return;
    // }

    onSubmit(formData);
  };
  const handleAddGroup = () => {
    setIsModalOpen(true);
  };
  


  return (
    <form ref={formRef} onSubmit={handleSubmit} className="space-y-8">
      {/* Basic Information */}
      <div className="bg-white rounded-lg shadow p-6">
        <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
          Bank Account Information
        </h2>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {/* Business Unit */}
          <SearchableDropdown
            label="Business Unit"
            value={formData.BUnit}
            options={bunitOptions}
            onChange={(value) => handleInputChange("BUnit", value)}
            placeholder="Select Business Unit"
            searchPlaceholder="Search business unit..."
            required={true}
          />
              <div>
            <label className="block text-sm font-medium text-gray-800 ">
              Old Code 
            </label>
            <input
              type="text"
              value={formData.old_code}
              onChange={(e) => handleInputChange("old_code", e.target.value)}
              placeholder=""
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
               <div>
            <label className="block text-sm font-medium text-gray-800 ">
              Bank Name <span className="text-red-500">*</span>
            </label>
            <input
              type="text"
              value={formData.bank_name}
              onChange={(e) => handleInputChange("bank_name", e.target.value)}
              placeholder="e.g., Meezan Bank"
              required
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>

          {/* account_title of Account */}
          <div>
            <label className="block text-sm font-medium text-gray-800 ">
              Title of Account <span className="text-red-500">*</span>
            </label>
            <input
              type="text"
              value={formData.account_title}
              onChange={(e) => handleInputChange("account_title", e.target.value)}
              placeholder="e.g., Meezan Bank Current Account"
              required
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>

          {/* IBAN Number */}
          <div>
            <label className="block text-sm font-medium text-gray-800 ">
              IBAN Number 
            </label>
            <input
              type="text"
              value={formData.account_no}
              onChange={(e) => handleInputChange("account_no", e.target.value)}
              placeholder="e.g., PK36MEZN0000123456789002"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
    
             <SearchableDropdown
              label="Bank Group Code "
              value={formData.group_id}
              options={bankGroupOptions}
              onChange={(value) => handleInputChange("group_id", value)}
              placeholder="Select Group"
              searchPlaceholder="Search group..."
              addButtonTitle="Add"
              onAddClick={handleAddGroup}
              required={true}
            />
        </div>
      </div>

      {/* Submit Button */}
      <div className="flex justify-end">
        {mode === "edit" ? (
          <UpdateButton onClick={() => handleSubmit}>
            {submitLabel || "Update Bank"}
          </UpdateButton>
        ) : (
          <SaveButton onClick={() => handleSubmit}>
            {submitLabel || "Save Bank"}
          </SaveButton>
        )}
      </div>
    </form>
  );
};

export default BankForm;
