import React, { useState, useEffect, useMemo } from "react";
import SearchableDropdown, { DropdownOption } from "./SearchableDropdown";
import FormModal from "./FormModal";
import CustomerGroupForm from "./CustomerGroupForm";
import { SaveButton, UpdateButton } from "./ui";
import { fetchBunitID, selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import { useAuth } from "@/contexts/AuthContext";
import { useDispatch, useSelector } from "react-redux";
import { fetchCustomerGroups, selectCustomerGroupsState } from "@/Redux/slices/customerGroupSlice/customerGroupSlice";
import { insertGroup } from "@/services/httpService";

export interface CustomerData {
  Code: string;
  BUnit: string;
  OldCode: string;
  Name: string;
  ContactName: string;
  GroupCode: string;
  Address: string;
  TType:string;
  SaleTaxRegNo: string;
  NTNNo: string;
  CNIC: string;
  Phone: string;
  Fax: string;
  Cell: string;
  WebAddress: string;
  EMail: string;
  Remarks: string;
  SecurtyDeposit: string | null;
  SaleMenCode: string;
  Commission: string | null;
  UserName: string | null;
  Block: string;
}

interface CustomerFormProps {
  mode: "add" | "edit";
  initialData?: Partial<CustomerData>;
  onSubmit: (data: CustomerData) => void | Promise<any>;
  // Optional callback: if provided, CustomerForm will call this after submit completes
  onClose?: () => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const defaultData: CustomerData = {
  Code: "",
  BUnit: "",
  OldCode: "",
  Name: "",
  ContactName: "",
  GroupCode: "",
  Address: "",
  TType:'POS',
  SaleTaxRegNo: "",
  NTNNo: "",
  CNIC: "",
  Phone: "",
  Fax: "",
  Cell: "",
  WebAddress: "",
  EMail: "",
  Remarks: "",
  SecurtyDeposit: "",
  SaleMenCode: "",
  Commission: "",
  UserName: "",
  Block: "0",
};

const CustomerForm: React.FC<CustomerFormProps> = ({
  mode,
  initialData,
  onSubmit,
  onClose,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<CustomerData>({
    ...defaultData,
    ...initialData,
  });
    const { customerGroupsList, isLoading, error } = useSelector(selectCustomerGroupsState);
  

      const customerGroupsOption = useMemo(() => {
        return customerGroupsList.map((item)=>{
          return {
            label:item.Name,
            value:item.ID,
          }
        })
      }, [customerGroupsList]);
  // Modal state
  const [isModalOpen, setIsModalOpen] = useState(false);
    const  {user}=useAuth()
    const dispatch = useDispatch()
    const bunitOptions = useSelector(selectBunitID);


  // Group options for Customer
  const [groupOptions, setGroupOptions] = useState<DropdownOption[]>([
    { value: "1", label: "General Group" },
    { value: "2", label: "Retail Customers" },
    { value: "3", label: "Wholesale Customers" },
    { value: "4", label: "Corporate Customers" },
    { value: "5", label: "VIP Customers" },
  ]);

  // Sale Men options
  const [saleMenOptions, setSaleMenOptions] = useState<DropdownOption[]>([]);

  // Fetch employees for salesman dropdown
  useEffect(() => {
    const fetchEmployees = async () => {
      debugger
      try {
        const response = await fetch('/api/v1.php?table=pEmployee&action=list', {
          method: 'GET',
          headers: {
            'X-Auth-Token': user?.apiKey || '',
          },
        });
        
        if (!response.ok) {
          throw new Error('Failed to fetch employees');
        }

        const data = await response.json();
        if (data.success && Array.isArray(data.data)) {
          const employeeOptions = data.data.filter((emp)=> emp.EmployeeGroup == 13 ).map((emp: any) => ({
            value: emp.ID,
            label: emp.Name
          }));
          setSaleMenOptions(employeeOptions);
        }
      } catch (error) {
        console.error('Error fetching employees:', error);
      }
    };

    if (user?.apiKey) {
      fetchEmployees();
    }
  }, [user?.apiKey]);
    useEffect(() => {
          dispatch(fetchCustomerGroups(user?.apiKey));
    }, [ user?.apiKey]);
  

  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (field: keyof CustomerData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();

    // Validate required fields
    const requiredFields: (keyof CustomerData)[] = [
      // "Code",
      "Name",
      // "ContactName",
      "GroupCode",
      // "Phone",
    ];

    const missingFields = requiredFields.filter((field) => !formData[field]);

    if (missingFields.length > 0) {
      alert(`Please fill in all required fields: ${missingFields.join(", ")}`);
      return;
    }

    try {
      const result = onSubmit(formData);
      if (result && typeof (result as Promise<any>).then === "function") {
        await result;
      }

      // If the parent passed an onClose callback (e.g., to close a modal), call it
      if (onClose && typeof onClose === "function") {
        try {
          onClose();
        } catch (err) {
          console.error("onClose callback threw:", err);
        }
      }
    } catch (err) {
      // Let the parent handle/display errors; just log here
      console.error("Error in onSubmit:", err);
      // rethrowing is optional; we keep the modal open so the user can correct
    }
  };

  const handleAddGroup = () => {
    setIsModalOpen(true);
  };

  const handleModalClose = () => {
    setIsModalOpen(false);
  };

const handleGroupSubmit = async (data: {
  name: string;
  remarks: string;
  Block: string;
}) => {
  console.log("🚀 ~ handleGroupSubmit ~ data:", data)
  try {
    const result = await insertGroup("psCustomerGroup", data, user?.apiKey);
    dispatch(fetchCustomerGroups( user?.apiKey))
    setIsModalOpen(false);
    console.log("Record Inserted:", result);
  } catch (error) {
    console.error("Insert failed:", error);
  }
};

     useEffect(() => {
       if (user?.apiKey) {
         dispatch(fetchBunitID(user.apiKey));
       }
     }, [dispatch, user]);
              

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
                Customer Code <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.Code}
                onChange={(e) => handleInputChange("Code", e.target.value)}
                placeholder="e.g., 79"
                required
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
                Business Unit
              </label>
              <input
                type="text"
                value={formData.BUnit}
                onChange={(e) => handleInputChange("BUnit", e.target.value)}
                placeholder="e.g., 1"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div> */}
             {/* <div>
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
            </div> */}
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Customer Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.Name}
                onChange={(e) => handleInputChange("Name", e.target.value)}
                placeholder="e.g., Sarosh"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Contact Name 
              </label>
              <input
                type="text"
                value={formData.ContactName}
                onChange={(e) =>
                  handleInputChange("ContactName", e.target.value)
                }
                placeholder="e.g., Hamza Danish"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
           
          
               <SearchableDropdown
              label="Group Code "
              value={formData.GroupCode}
              options={customerGroupsOption}
              onChange={(value) => handleInputChange("GroupCode", value)}
              placeholder="Select Group"
              searchPlaceholder="Search group..."
              addButtonTitle="Add"
              onAddClick={handleAddGroup}
              required={true}
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Security Deposit
              </label>
              <input
                type="number"
                step="0.01"
                min="0"
                value={formData.SecurtyDeposit || ""}
                onChange={(e) =>
                  handleInputChange("SecurtyDeposit", e.target.value)
                }
                placeholder="e.g., 1000.00"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
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
                placeholder="e.g., customer@example.com"
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
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Web Address
              </label>
              <input
                type="url"
                value={formData.WebAddress}
                onChange={(e) =>
                  handleInputChange("WebAddress", e.target.value)
                }
                placeholder="e.g., https://example.com"
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
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Sales Tax Registration No
              </label>
              <input
                type="text"
                value={formData.SaleTaxRegNo}
                onChange={(e) =>
                  handleInputChange("SaleTaxRegNo", e.target.value)
                }
                placeholder="e.g., 123456789"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
        </div>

        {/* Sales Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Sales Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <SearchableDropdown
              label="Salesman Code"
              value={formData.SaleMenCode}
              options={saleMenOptions}
              onChange={(value) => handleInputChange("SaleMenCode", value)}
              placeholder="Select Salesman"
              searchPlaceholder="Search salesman..."
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Commission
              </label>
              <input
                type="number"
                step="0.01"
                min="0"
                value={formData.Commission || ""}
                onChange={(e) =>
                  handleInputChange("Commission", e.target.value)
                }
                placeholder="e.g., 5.00"
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
          <div className="mt-6">
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Remarks
            </label>
            <textarea
              value={formData.Remarks}
              onChange={(e) => handleInputChange("Remarks", e.target.value)}
              rows={4}
              placeholder="Additional notes about the customer..."
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>

        {/* Submit Button */}
        <div className="flex justify-end">
          {mode === "edit" ? (
            <UpdateButton onClick={() => handleSubmit}>
              {submitLabel || "Update Customer"}
            </UpdateButton>
          ) : (
            <SaveButton onClick={() => handleSubmit}>
              {submitLabel || "Save Customer"}
            </SaveButton>
          )}
        </div>
      </form>

      {/* Modal for adding new group */}
      <FormModal
        isOpen={isModalOpen}
        onClose={handleModalClose}
        title="Add New Customer Group"
        size="lg"
      >
        <CustomerGroupForm
          mode="add"
          onSubmit={handleGroupSubmit}
          submitLabel="Save Customer Group"
        />
      </FormModal>
    </>
  );
};

export default CustomerForm;
