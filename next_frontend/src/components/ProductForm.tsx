import React, { useState, useEffect, use } from "react";
import SearchableDropdown, { DropdownOption } from "./SearchableDropdown";
import FormModal from "./FormModal";
import ProductGroupForm from "./ProductGroupForm";
import { SaveButton, UpdateButton } from "./ui";
import ImageUploader from "./ImageUploader";
import axios from "axios";
import { useAuth } from "@/contexts/AuthContext";

export interface ProductData {
  Code: string;
  BUnit: string | null;
  OldCode: string;
  BarCode: string;
  ProductGroupCode: string;
  UnitCode: string;
  Name: string;
  rate: string;
  product_image: any ;
  Packing: string;
  PackingQty: string | null;
  Remarks: string;
  UserName: string | null;
  Block: string;
}

interface ProductFormProps {
  mode: "add" | "edit";
  initialData?: Partial<ProductData>;
  onSubmit: (data: ProductData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const defaultData: ProductData = {
  Code: "",
  BUnit: null,
  OldCode: "",
  BarCode: "",
  ProductGroupCode: "",
  UnitCode: "",
  Name: "",
  rate: "0.00",
  product_image: null,
  Packing: "",
  PackingQty: "",
  Remarks: "",
  UserName: "",
  Block: "0",
};

const ProductForm: React.FC<ProductFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const [formData, setFormData] = useState<ProductData>({
    ...defaultData,
    ...initialData,
  });

  // Modal state
  const [isModalOpen, setIsModalOpen] = useState(false);
    const [quantityUnit, setQuantityUnit] = useState({})
                    const { user } = useAuth();
                    const [groupOptions, setGroupOptions] = useState<DropdownOption[]>([]);
  const [loadingGroups, setLoadingGroups] = useState(true);
  


    //  const employeeGroupsOption = useMemo(() => {
    //       return employeeGroupsList.map((item)=>{
    //         console.log("🚀 ~ EmployeeForm ~ item:", item)
    //         return {
    //           label:item?.name,
    //           value:item?.ID,
    //         }
    //       })
    //     }, [employeeGroupsList]);

  // Product Group options

   const fetchQuantityUnit = async () => {
      try {
        const response = await axios.get("/api/v1.php", {
          params: { table: "psunits", action: "list", },
          headers: { "X-Auth-Token": user?.apiKey || "123" },
        });
        const result = response.data.data;
        const formateData = result.reduce((acc, item) => {
          acc[item.ID] = item.Name;
          return acc;
        }, {});
        setQuantityUnit(formateData)
        console.log("🚀 ~ fetchQuantityUnit ~ result:", result)
      } catch (error) {
        console.error("Error fetching quantity unit:", error);
      }
    };

   // NEW: Fetch Product Groups from API
  const fetchProductGroups = async () => {
    if (!user) return;

    try {
      setLoadingGroups(true);
      const response = await fetch(
        `/api/v1.php?table=psProductGroup&action=list`,
        {
          method: "GET",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
            "Content-Type": "application/json",
          },
        }
      );

      if (!response.ok) throw new Error("Failed to fetch product groups");

      const result = await response.json();

      if (result.success && Array.isArray(result.data)) {
        const options = result.data.map((item: any) => ({
          value: item.Code,   // Code as valueuar value
          label: item.Name,   // Name as label
        }));
        setGroupOptions(options);
      } else {
        setGroupOptions([]);
      }
    } catch (error) {
      console.error("Error fetching product groups:", error);
      setGroupOptions([]); // fallback
    } finally {
      setLoadingGroups(false);
    }
  };

  // Fetch both on mount
  useEffect(() => {
    fetchQuantityUnit();
    fetchProductGroups();
  }, [user]);

  // const [groupOptions, setGroupOptions] = useState<DropdownOption[]>([
  //   { value: "0", label: "Water" },
  //   { value: "1", label: "Electronics" },
  //   { value: "2", label: "Clothing" },
  //   { value: "3", label: "Food & Beverages" },
  //   { value: "4", label: "Books" },
  //   { value: "5", label: "Sports" },
  //   { value: "6", label: "Home & Garden" },
  //   { value: "7", label: "Automotive" },
  //   { value: "8", label: "Health & Beauty" },
  //   { value: "9", label: "Toys & Games" },
  //   { value: "10", label: "Jewelry & Watches" },
  //   { value: "11", label: "Office Supplies" },
  //   { value: "12", label: "Pet Supplies" },
  // ]);

  // Unit options
  const [unitOptions, setUnitOptions] = useState<DropdownOption[]>([
    { value: "1", label: "Pieces (PCS)" },
    { value: "2", label: "Kilograms (KG)" },
    { value: "3", label: "Grams (G)" },
    { value: "4", label: "Liters (L)" },
    { value: "5", label: "Milliliters (ML)" },
    { value: "6", label: "Meters (M)" },
    { value: "7", label: "Centimeters (CM)" },
    { value: "8", label: "Box" },
    { value: "9", label: "Pack" },
    { value: "10", label: "Bottle" },
    { value: "11", label: "Can" },
    { value: "12", label: "Bag" },
  ]);

  useEffect(() => {
    if (initialData) {
      setFormData({ ...defaultData, ...initialData });
    }
  }, [initialData]);

  const handleInputChange = (
    field: keyof ProductData,
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

  const handleGroupSubmit = (data: {
    name: string;
    remarks: string;
    block: string;
  }) => {
    // Handle the new group data here
    console.log("New product group data:", data);
    // Add new group to options
    setGroupOptions((prev) => [
      ...prev,
      { value: data.name, label: data.name },
    ]);
    setIsModalOpen(false);
  };

  return (
    <>
      <form ref={formRef} onSubmit={handleSubmit} className="space-y-8">
        {/* Product Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Product Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {/* <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Product Code <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                value={formData.Code}
                onChange={(e) => handleInputChange("Code", e.target.value)}
                placeholder="e.g., 52"
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
                Bar Code
              </label>
              <input
                type="text"
                value={formData.BarCode}
                onChange={(e) => handleInputChange("BarCode", e.target.value)}
                placeholder="e.g., 1234567890123"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <SearchableDropdown
              label="Product Group "
              value={formData.ProductGroupCode}
              options={groupOptions}
              onChange={(value) => handleInputChange("ProductGroupCode", value)}
              placeholder="Select Product Group"
              searchPlaceholder="Search product group..."
              addButtonTitle="Add"
              onAddClick={handleAddGroup}
              required={true}
            />
            <SearchableDropdown
              label="Unit "
              value={formData.UnitCode}
              options={quantityUnit ? Object.entries(quantityUnit).map(([key, value]) => ({ value: key, label: value })) : []   }
              onChange={(value) => handleInputChange("UnitCode", value)}
              placeholder="Select Unit"
              searchPlaceholder="Search units..."
              required={true}
            />
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Product Name <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                required
                value={formData.Name}
                onChange={(e) => handleInputChange("Name", e.target.value)}
                placeholder="e.g., waterfall"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Rate <span className="text-red-500">*</span>
              </label>
              <input
                type="number"
                step="0.01"
                min="0"
                required
                value={formData.rate}
                onChange={(e) => handleInputChange("rate", e.target.value)}
                placeholder="0.00"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>

            <div>
              <ImageUploader
                initialImage={formData.product_image || undefined}
                onChange={(file :any) =>{
                  console.log("🚀 ~ file:", file)
                  handleInputChange("product_image", file);
                  
                }
                  
                }
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
        </div>

        {/* Packaging Information Section */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
            Packaging Information
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Packing
              </label>
              <input
                type="text"
                value={formData.Packing}
                onChange={(e) => handleInputChange("Packing", e.target.value)}
                placeholder="e.g., 12 bottles per box"
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div>
              <label className="block text-sm font-medium text-gray-800 mb-2">
                Packing Qty
              </label>
              <input
                type="number"
                min="0"
                step="0.01"
                value={formData.PackingQty || ""}
                onChange={(e) =>
                  handleInputChange("PackingQty", e.target.value)
                }
                placeholder="0.00"
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
              placeholder="Additional notes about the product..."
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
        </div>

        {/* Submit Button */}
        <div className="flex justify-end">
          {mode === "edit" ? (
            <UpdateButton onClick={() => handleSubmit}>
              {submitLabel || "Update Product"}
            </UpdateButton>
          ) : (
            <SaveButton onClick={() => handleSubmit}>
              {submitLabel || "Save Product"}
            </SaveButton>
          )}
        </div>
      </form>

      {/* Modal for adding new group */}
      <FormModal
        isOpen={isModalOpen}
        onClose={handleModalClose}
        title="Add New Product Group"
        size="lg"
      >
        <ProductGroupForm
          mode="add"
          onSubmit={handleGroupSubmit}
          submitLabel="Save Product Group"
        />
      </FormModal>
    </>
  );
};

export default ProductForm;
