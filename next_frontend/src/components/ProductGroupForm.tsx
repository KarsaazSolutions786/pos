import { useAuth } from "@/contexts/AuthContext";
import { fetchBunitID, selectBunitID } from "@/Redux/slices/bunitSlice/bunitSlice";
import React, { useState, useEffect } from "react";
import { useDispatch, useSelector } from "react-redux";
import SearchableDropdown from "./SearchableDropdown";

export interface ProductGroupData {
  ID?: string; // Make ID optional and can be empty
  Code?: string;
  name: string;
  remarks: string;
  nameInUrdu?: string;
  remarksInUrdu?: string;
  UserName?: string | null;
  block: string;
  lock?: string;
  hide?: string;
  bookmark?: string;
  ECol1?: string | null;
  ECol2?: string;
  BUnit?: string | null;
}

export const defaultProductGroupData: ProductGroupData = {
  name: "",
  remarks: "",
  block: "0",
  lock: "0",
  hide: "0",
  bookmark: "0",
  nameInUrdu: "",
  remarksInUrdu: "",
  UserName: null,
  ECol1: null,
  ECol2: "",
  BUnit: null,
  ID: "", // Explicitly set to empty string
  Code: "", // Add Code as empty string
};

interface ProductGroupFormProps {
  mode?: "add" | "edit";
  initialData?: Partial<ProductGroupData>;
  onSubmit: (data: ProductGroupData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

const ProductGroupForm: React.FC<ProductGroupFormProps> = ({
  mode = "add",
  initialData = {},
  onSubmit,
  submitLabel = "Save Product Group",
  formRef,
}) => {
  const [formData, setFormData] = useState<ProductGroupData>({
    ...defaultProductGroupData,
    ...initialData,
  });
      const  {user}=useAuth()
    const dispatch = useDispatch()
    const bunitOptions = useSelector(selectBunitID);

  useEffect(() => {
    // Only update form data if initialData has changed
    if (initialData && Object.keys(initialData).length > 0) {
      setFormData((prev) => ({
        ...defaultProductGroupData,
        ...initialData,
      }));
    }
  }, [initialData]);

  const handleInputChange = (key: keyof ProductGroupData, value: string) => {
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
        {/* Code */}

                     <SearchableDropdown
            label="Business Unit"
           value={formData.BUnit}
            options={bunitOptions}
            onChange={(value) => handleInputChange("BUnit", value)}
            placeholder="Select Group"
            searchPlaceholder="Search group..."
            required={true}
          />
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            Code
            <input
              type="text"
              value={formData.Code || ""}
              onChange={(e) =>
                handleInputChange("Code", (e.target as HTMLInputElement).value)
              }
              placeholder="Product Group Code"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* Business Unit */}
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

        {/* Name (English) */}
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
              placeholder="e.g., Water, Beverages"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* Name (Urdu) */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            Name (Urdu)
            <input
              type="text"
              value={formData.nameInUrdu}
              onChange={(e) =>
                handleInputChange(
                  "nameInUrdu",
                  (e.target as HTMLInputElement).value
                )
              }
              placeholder="Name in Urdu"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* Remarks (English) */}
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
              placeholder="Additional notes about the product group"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* Remarks (Urdu) */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            Remarks (Urdu)
            <textarea
              value={formData.remarksInUrdu || ""}
              onChange={(e) =>
                handleInputChange(
                  "remarksInUrdu",
                  (e.target as HTMLTextAreaElement).value
                )
              }
              rows={3}
              placeholder="Remarks in Urdu"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* ECol1 */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            ECol1
            <input
              type="text"
              value={formData.ECol1 || ""}
              onChange={(e) =>
                handleInputChange("ECol1", (e.target as HTMLInputElement).value)
              }
              placeholder="Additional Column 1"
              className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </label>
        </div>

        {/* ECol2 */}
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-2">
            ECol2
            <input
              type="text"
              value={formData.ECol2 || ""}
              onChange={(e) =>
                handleInputChange("ECol2", (e.target as HTMLInputElement).value)
              }
              placeholder="Additional Column 2"
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

        {/* Additional Flags */}
        <div className="grid grid-cols-3 gap-4">
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-2">
              Lock
              <select
                value={formData.lock}
                onChange={(e) =>
                  handleInputChange(
                    "lock",
                    (e.target as HTMLSelectElement).value
                  )
                }
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="0">Unlocked</option>
                <option value="1">Locked</option>
              </select>
            </label>
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-2">
              Hide
              <select
                value={formData.hide}
                onChange={(e) =>
                  handleInputChange(
                    "hide",
                    (e.target as HTMLSelectElement).value
                  )
                }
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="0">Visible</option>
                <option value="1">Hidden</option>
              </select>
            </label>
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-2">
              Bookmark
              <select
                value={formData.bookmark}
                onChange={(e) =>
                  handleInputChange(
                    "bookmark",
                    (e.target as HTMLSelectElement).value
                  )
                }
                className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="0">Not Bookmarked</option>
                <option value="1">Bookmarked</option>
              </select>
            </label>
          </div>
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

export default ProductGroupForm;
