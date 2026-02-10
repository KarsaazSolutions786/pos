import React, { useState, useEffect, useMemo } from "react";
import SearchableDropdown, { DropdownOption } from "./SearchableDropdown";
import FormModal from "./FormModal";
import SupplierGroupForm from "./SupplierGroupForm";
import { SaveButton, UpdateButton } from "./ui";
import { fetchSupplierGroups, supplierGroupState } from "@/Redux/slices/supplierGroupSlice/supplierGroupSlice";
import { useDispatch, useSelector } from "react-redux";
import { useAuth } from "@/contexts/AuthContext";
import { insertGroup } from "@/services/httpService";

export interface SupplierData {
  ID: string;
  // Code: string;
  BUnit: string | null;
  OldCode: string;
  Name: string;
  ContactName: string;
  GroupCode: string;
  Address: string;
  SaleTaxRegNo: string;
  NTNNo: string;
  CNIC: string;
  Phone: string;
  Fax: string;
  Cell: string;
  WebAddress: string;
  EMail: string;
  Remarks: string;
  UserName: string | null;
  Block: string;
}

interface SupplierFormProps {
  mode: "add" | "edit";
  initialData?: Partial<SupplierData>;
  onSubmit: (data: SupplierData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const defaultData: SupplierData = {
  ID: "",
  // Code: "",
  BUnit: null,
  OldCode: "",
  Name: "",
  ContactName: "",
  GroupCode: "",
  Address: "",
  SaleTaxRegNo: "",
  NTNNo: "",
  CNIC: "",
  Phone: "",
  Fax: "",
  Cell: "",
  WebAddress: "",
  EMail: "",
  Remarks: "",
  UserName: "",
  Block: "0",
};

const SupplierForm: React.FC<SupplierFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<SupplierData>({
    ...defaultData,
    ...initialData,
  });

  // Modal state
  const [isModalOpen, setIsModalOpen] = useState(false);
  const { supplierGroupList, loading, total } = useSelector(supplierGroupState);
  const {user}=useAuth()
  const dispatch=useDispatch()
            const supplierGroupsOption = useMemo(() => {
          return supplierGroupList.map((item)=>{
            console.log("🚀 ~ EmployeeForm ~ item:", item)
            return {
              label:item?.name,
              value:item?.ID,
            }
          })
        }, [supplierGroupList]);


  // Group options for Suppliers
  const [groupOptions, setGroupOptions] = useState<DropdownOption[]>([
    { value: "1", label: "General Supplier" },
    { value: "2", label: "Manufacturers" },
    { value: "3", label: "Distributors" },
    { value: "4", label: "Wholesalers" },
    { value: "5", label: "Importers" },
    { value: "6", label: "Exporters" },
    { value: "7", label: "Service Providers" },
    { value: "8", label: "Raw Material Suppliers" },
    { value: "9", label: "Equipment Suppliers" },
    { value: "10", label: "Logistics Providers" },
    { value: "11", label: "Consultants" },
  ]);

    useEffect(() => {
      if (user) {
       dispatch(fetchSupplierGroups(user.apiKey))
      }
    }, [user, ]);
  useEffect(() => {
    
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (
    field: keyof SupplierData,
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

  const obj={
  Name: data?.name,
  Remarks:data?.remarks,
  Block: data?.remarks
}
  try {
    const result = await insertGroup("psSupplierGroup", obj, user?.apiKey);
     dispatch(fetchSupplierGroups(user?.apiKey))
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
                Supplier Code <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.Code}
                onChange={(e) => handleInputChange("Code", e.target.value)}
                placeholder="e.g., 82"
                required
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div> */}
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Old Code
              </label>
              <input
                type="text"
                value={formData.OldCode}
                onChange={(e) => handleInputChange("OldCode", e.target.value)}
                placeholder="e.g., OLD-001"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Supplier Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                required
                value={formData.Name}
                onChange={(e) => handleInputChange("Name", e.target.value)}
                placeholder="e.g., Supplier"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Contact Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                required
                value={formData.ContactName}
                onChange={(e) =>
                  handleInputChange("ContactName", e.target.value)
                }
                placeholder="e.g., Hamza Danish"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <SearchableDropdown
              label="Supplier Group "
              value={formData.GroupCode}
              options={supplierGroupsOption}
              onChange={(value) => handleInputChange("GroupCode", value)}
              placeholder="Select Group"
              searchPlaceholder="Search group..."
              addButtonTitle="Add"
              onAddClick={handleAddGroup}
              required={true}
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Phone 
              </label>
              <input
                type="tel"
                value={formData.Phone}
                onChange={(e) => handleInputChange("Phone", e.target.value)}
                placeholder="e.g., 03172825059"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
          <div className="mt-6">
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

        {/* Contact Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Contact Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Sale Tax Reg No
              </label>
              <input
                type="text"
                value={formData.SaleTaxRegNo}
                onChange={(e) =>
                  handleInputChange("SaleTaxRegNo", e.target.value)
                }
                placeholder="e.g., STRN-123456"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                NTN No
              </label>
              <input
                type="text"
                value={formData.NTNNo}
                onChange={(e) => handleInputChange("NTNNo", e.target.value)}
                placeholder="e.g., NTN-98765"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                CNIC
              </label>
              <input
                type="text"
                value={formData.CNIC}
                onChange={(e) => handleInputChange("CNIC", e.target.value)}
                placeholder="00000-0000000-0"
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
                placeholder="e.g., 021-7654321"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Cell
              </label>
              <input
                type="tel"
                value={formData.Cell}
                onChange={(e) => handleInputChange("Cell", e.target.value)}
                placeholder="e.g., 0300-1234567"
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
                placeholder="https://example.com"
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
                placeholder="supplier@example.com"
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
              value={formData.Remarks}
              onChange={(e) => handleInputChange("Remarks", e.target.value)}
              rows={4}
              placeholder="Additional notes about the supplier..."
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>

        {/* Submit Button */}
        <div className="flex justify-end">
          {mode === "edit" ? (
            <UpdateButton onClick={() => handleSubmit}>
              {submitLabel || "Update Supplier"}
            </UpdateButton>
          ) : (
            <SaveButton onClick={() => handleSubmit}>
              {submitLabel || "Save Supplier"}
            </SaveButton>
          )}
        </div>
      </form>

      {/* Modal for adding new group */}
      <FormModal
        isOpen={isModalOpen}
        onClose={handleModalClose}
        title="Add New Supplier Group"
        size="lg"
      >
        <SupplierGroupForm
          mode="add"
          onSubmit={handleGroupSubmit}
          submitLabel="Save Supplier Group"
        />
      </FormModal>
    </>
  );
};

export default SupplierForm;
