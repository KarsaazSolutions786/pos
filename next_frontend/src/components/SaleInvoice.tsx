import React, { useCallback, useMemo, useState, useEffect } from "react";
import CustomerForm from "./CustomerForm";
import FormModal from "./FormModal";
import { Product } from "./ProductGrid";
import SearchableDropdown, { DropdownOption } from "./SearchableDropdown";
import { useAuth } from "@/contexts/AuthContext";
import { useSelector } from "react-redux";
import { selectClosingMonthState } from "@/Redux/slices/sClosingMonth/sClosingMonth";

// Add this type definition near the top of the file, after other imports
interface CustomerData {
  ID: string;
  Code: string;
  Name: string;
  Phone?: string;
  Address?: string;
  SaleMenCode?: string | null;
  ContactName?: string;
  Commission?: any;
  // Add other fields as needed
}

// Extend DropdownOption to include additional properties
interface ExtendedDropdownOption extends DropdownOption {
  code?: string;
  address?: string;
  contactName?: string;
  saleMenCode?: string;
  comission_group_id?: string; // Add this
}

interface CommissionDetail {
  id: string;
  comission_group_id: string;
  product_id: string;
  discount: string; // Rate/Percentage
  discount_type: string; // "1" for %, "2" for Fixed
}

// Export ProductWithDiscount type
export type ProductWithDiscount = Product & {
  quantity: number;
};

interface SaleInvoiceProps {
  onCustomerAdd?: () => void;
  selectedProducts?: ProductWithDiscount[];
  setSelectedProducts?: React.Dispatch<
    React.SetStateAction<ProductWithDiscount[]>
  >;
  saleDate?: string;
}

const SaleInvoice: React.FC<SaleInvoiceProps> = ({
  onCustomerAdd,
  selectedProducts,
  setSelectedProducts,
  saleDate,
}) => {
  console.log("🚀 ~ SaleInvoice ~ selectedProducts:", selectedProducts)
  // State for payment type and other local states remain unchanged
  const [paymentType, setPaymentType] = useState<"Cash" | "Credit">("Cash");
  const [selectedCustomerId, setSelectedCustomerId] = useState("");
  const [isCustomerModalOpen, setIsCustomerModalOpen] = useState(false); // Auto-open on load
  const [isCustomerSelectedModalOpen, setIsCustomerSelectedModalOpen] =
    useState(true); // Auto-open on load

  // State for invoice-level discount
  const [invoiceDiscount, setInvoiceDiscount] = useState(0);

  // State for salesman commission
  const [salesmanCommission, setSalesmanCommission] = useState(0);
  const [commissionType, setCommissionType] = useState<"percentage" | "rate">(
    "percentage"
  );

  // Customer options with phone numbers
  const [customerOptions, setCustomerOptions] = useState<
    ExtendedDropdownOption[]
  >([]);
  const [isLoadingCustomers, setIsLoadingCustomers] = useState(true);
  const [customerError, setCustomerError] = useState<string | null>(null);
  const { user } = useAuth();

  // State for salesman options
  const [salesmanOptions, setSalesmanOptions] = useState<DropdownOption[]>([]);
  const [selectedSalesmanId, setSelectedSalesmanId] = useState("");
  const [isSalesmanLoading, setIsSalesmanLoading] = useState(true);
  const [salesmanError, setSalesmanError] = useState<string | null>(null);


  // State for commission details
  const [commissionDetails, setCommissionDetails] = useState<CommissionDetail[]>([]);

  const { closingMonthsList } = useSelector(selectClosingMonthState);

  // Fetch commission details
  useEffect(() => {
    const fetchCommissionDetails = async () => {
      try {
        const response = await fetch("/api/v1.php?table=comission_group_detail&action=list", {
          method: "GET",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
        });
        if (response.ok) {
          const result = await response.json();
          if (result.success && result.data) {
            setCommissionDetails(result.data);
          }
        }
      } catch (err) {
        console.error("Error fetching commission details:", err);
      }
    };

    if (user) {
      fetchCommissionDetails();
    }
  }, [user]);

  // Fetch customer list from API
  // Extracted fetch function so it can be reused after creating a customer
  const fetchCustomers = async () => {
    try {
      setIsLoadingCustomers(true);
      const response = await fetch("/api/v1.php?table=pCustomer&action=list", {
        method: "GET",
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      if (!response.ok) {
        throw new Error("Failed to fetch customers");
      }

      const result = await response.json();

      if (result.success && result.data) {
        const formattedCustomers: ExtendedDropdownOption[] = result.data.map(
          (customer: CustomerData) => ({
            value: customer.Code,
            label: customer.Name + (customer.Code ? ` (${customer.Code})` : ""),
            phone: customer.Phone || "",
            // Add additional metadata if needed
            code: customer.Code,
            address: customer.Address,
            contactName: customer.ContactName,
            saleMenCode: customer.SaleMenCode || undefined,
            Commission: customer.Commission,
          })
        );

        setCustomerOptions(formattedCustomers);
        setCustomerError(null);
      } else {
        throw new Error("No customer data found");
      }
    } catch (error) {
      console.error("Error fetching customers:", error);
      setCustomerError(error instanceof Error ? error.message : "Unknown error");
      // Set empty array when API fails
      setCustomerOptions([]);
    } finally {
      setIsLoadingCustomers(false);
    }
  };

  useEffect(() => {
    if (user) {
      fetchCustomers();
    }
  }, [user]); // Add user as a dependency

  // Fetch salesman list from API
  useEffect(() => {
    const fetchSalesmen = async () => {
      try {
        setIsSalesmanLoading(true);
        const response = await fetch(
          "/api/v1.php?table=pEmployee&action=list",
          {
            method: "GET",
            headers: {
              "X-Auth-Token": user?.apiKey || "123",
              "Content-Type": "application/json",
            },
          }
        );

        if (!response.ok) {
          throw new Error("Failed to fetch salesmen");
        }

        const result = await response.json();

        if (result.success && result.data) {
          const formattedSalesmen: DropdownOption[] = result.data.map(
            (employee: { ID: string; Name: string; Code?: string; comission_group_id?: string }) => ({
              value: employee.ID,
              label: `${employee.Name} (${employee.Code || "No Code"})`,
              comission_group_id: employee.comission_group_id
            })
          );

          setSalesmanOptions(formattedSalesmen);
          setSalesmanError(null);
        } else {
          throw new Error("No salesman data found");
        }
      } catch (error) {
        console.error("Error fetching salesmen:", error);
        setSalesmanError(
          error instanceof Error ? error.message : "Unknown error"
        );
        // Fallback to mock salesmen if API fails
        setSalesmanOptions([
          { value: "1", label: "Ali" },
          { value: "2", label: "Ahmed" },
          { value: "3", label: "Mohamed" },
        ]);
      } finally {
        setIsSalesmanLoading(false);
      }
    };

    if (user) {
      fetchSalesmen();
    }
  }, [user]); // Add user as a dependency

  // Compute customer options based on payment type
  const computedCustomerOptions = useMemo(() => {
    const baseOptions = [...customerOptions];

    // Add Walking Customer only if payment type is Cash
    if (paymentType === "Cash") {
      baseOptions.unshift({
        value: "walking",
        label: "Walking Customer",
        phone: " ",
      });
    }

    return baseOptions;
  }, [customerOptions, paymentType]);
  console.log("🚀 ~ SaleInvoice ~ computedCustomerOptions:", computedCustomerOptions)

  // Auto-calculate salesman commission
  useEffect(() => {
    if (!selectedSalesmanId || !selectedProducts || selectedProducts.length === 0) {
      // Don't reset to 0 if we assume manual entry, but per requirement "display automatically"
      // If no salesman, maybe keep as is, but if products change, we might need to re-calc?
      // Let's assume if no salesman selected, we don't auto-calc.
      return;
    }

    const salesman = salesmanOptions.find(s => s.value === selectedSalesmanId) as ExtendedDropdownOption;
    if (!salesman || !salesman.comission_group_id) {
      return;
    }

    const groupId = salesman.comission_group_id;
    let totalCommission = 0;

    selectedProducts.forEach(product => {
      const rule = commissionDetails.find(d => String(d.comission_group_id) === String(groupId) && String(d.product_id) === String(product.ID));

      if (rule) {
        const rate = parseFloat(rule.discount || "0");
        // Assuming discount_type: "1" = Percentage, "2" = Fixed (Rate)
        // Based on UI logic, we usually default to percentage, but let's see.
        // If standard is 1=%, 2=Fixed:
        if (rule.discount_type === "1") {
          const amount = (product.rate * product.quantity) * (rate / 100);
          totalCommission += amount;
        } else {
          // Fixed amount per unit * quantity
          totalCommission += rate * product.quantity;
        }
      }
    });

    if (totalCommission > 0) {
      setSalesmanCommission(parseFloat(totalCommission.toFixed(2)));
      setCommissionType("rate"); // Since we summed up calculated amounts, it's a fixed total value now
    } else {
      setSalesmanCommission(0);
      setCommissionType("rate");
    }

  }, [selectedSalesmanId, selectedProducts, commissionDetails, salesmanOptions]);

  // Calculate totals (update to include salesman commission)
  // const calculateTotals = useMemo(() => {
  //   const totalPrice =
  //     selectedProducts?.reduce((sum, product) => {
  //       const productTotal = product.rate * product.quantity;
  //       return sum + productTotal;
  //     }, 0) || 0;

  //   // Apply invoice-level discount
  //   const discountedTotal = Math.max(0, totalPrice - invoiceDiscount);

  //   // Calculate salesman commission
  //   const commission =
  //     commissionType === "percentage"
  //       ? discountedTotal * (salesmanCommission / 100)
  //       : salesmanCommission;

  //   // Final grand total after deducting commission
  //   const grandTotal = Math.max(0, discountedTotal - commission);

  //   return {
  //     totalPrice: Math.round(totalPrice),
  //     invoiceDiscount: Math.round(invoiceDiscount),
  //     discountedTotal: Math.round(discountedTotal),
  //     salesmanCommission: Math.round(commission),
  //     grandTotal: Math.round(grandTotal),
  //   };
  // }, [selectedProducts, invoiceDiscount, salesmanCommission, commissionType]);


  const calculateTotals = useMemo(() => {
    const totalPrice =
      selectedProducts?.reduce((sum, product) => {
        const productTotal = product.rate * product.quantity;
        return sum + productTotal;
      }, 0) || 0;

    // Apply invoice-level discount
    const discountedTotal = Math.max(0, totalPrice - invoiceDiscount);

    // Calculate salesman commission (for internal record only)
    const commission =
      commissionType === "percentage"
        ? discountedTotal * (salesmanCommission / 100)
        : salesmanCommission;

    // Grand Total = Net amount customer pays (NO commission deduction)
    const grandTotal = Math.round(discountedTotal);

    return {
      totalPrice: Math.round(totalPrice),
      invoiceDiscount: Math.round(invoiceDiscount),
      discountedTotal: Math.round(discountedTotal),
      salesmanCommission: Math.round(commission),
      grandTotal, // ← Yeh ab sirf discount ke baad ka amount
    };
  }, [selectedProducts, invoiceDiscount, salesmanCommission, commissionType]);
  console.log("🚀 ~ SaleInvoice ~ calculateTotals:", calculateTotals)

  // Product field update handler
  const updateProductField = useCallback(
    (
      productId: string,
      field: keyof ProductWithDiscount,
      value: number | string
    ) => {
      if (setSelectedProducts) {
        setSelectedProducts((prev) =>
          prev.map((p) => (p.ID === productId ? { ...p, [field]: value } : p))
        );
      }
    },
    [setSelectedProducts]
  );

  // Add method to remove a specific product
  const removeProduct = useCallback(
    (productId: string) => {
      if (setSelectedProducts) {
        setSelectedProducts((prev) => prev.filter((p) => p.ID !== productId));
      }
    },
    [setSelectedProducts]
  );

  // Quantity update handler
  const updateQuantity = useCallback(
    (productId: string, change: number) => {
      if (setSelectedProducts) {
        setSelectedProducts((prev) =>
          prev
            .map((p) =>
              p.ID === productId
                ? { ...p, quantity: Math.max(1, p.quantity + change) }
                : p
            )
            .filter((p) => p.quantity > 0)
        );
      }
    },
    [setSelectedProducts]
  );

  // Handle customer selection
  const handleCustomerSelect = (customerId: string) => {
    debugger
    // Special handling for Walking Customer
    if (customerId === "walking" && paymentType !== "Cash") {
      alert("Walking Customer is only available for Cash payments.");
      return;
    }

    // Find the selected customer to get additional details
    const selectedCustomer = customerOptions.find(
      (customer) => customer.value === customerId
    );

    if (selectedCustomer) {
      setSelectedCustomerId(customerId);
      setSalesmanCommission(customerOptions.find(c => c.value == customerId)?.Commission || 0);
      // Automatically select salesman if SaleMenCode is available
      if (selectedCustomer.saleMenCode) {
        const salesmanToSelect = salesmanOptions.find(
          (salesman) => salesman.value === selectedCustomer.saleMenCode
        );

        if (salesmanToSelect) {
          setSelectedSalesmanId(salesmanToSelect.value);
          console.log("Auto-selected Salesman:", salesmanToSelect);
        } else {
          console.warn(
            `No salesman found for SaleMenCode: ${selectedCustomer.saleMenCode}`
          );
        }
      } else {
        // Clear salesman selection if no SaleMenCode
        setSelectedSalesmanId("");
      }

      // Optional: You could use additional customer details here
      console.log("Selected Customer Details:", {
        ID: selectedCustomer.value,
        Name: selectedCustomer.label,
        phone: selectedCustomer.phone,
        code: selectedCustomer.code,
        address: selectedCustomer.address,
        saleMenCode: selectedCustomer.saleMenCode,
      });
    } else if (customerId === "walking") {
      // Explicitly handle walking customer
      setSelectedCustomerId(customerId);
      // Clear salesman for walking customer
      setSelectedSalesmanId("");
    } else {
      // Fallback error handling
      alert("Invalid customer selection. Please try again.");
    }

    // Close customer selection modals
    setIsCustomerModalOpen(false);
    setIsCustomerSelectedModalOpen(false);
  };

  // Handle new customer submission - persist to API and refresh list
  const handleCustomerSubmit = async (data: any) => {
    console.log("New customer data (submit):", data);

    // Build FormData the same way as `AddCustomerPage` does
    try {
      const form = new FormData();
      // List of known fields from CustomerForm
      const fields = [
        "Code",
        "BUnit",
        "OldCode",
        "Name",
        "ContactName",
        "GroupCode",
        "Address",
        "SaleTaxRegNo",
        "NTNNo",
        "CNIC",
        "Phone",
        "Fax",
        "Cell",
        "WebAddress",
        "EMail",
        "Remarks",
        "SecurtyDeposit",
        "SaleMenCode",
        "Commission",
        "UserName",
        "Block",
      ];

      fields.forEach((f) => {
        const value = data[f] ?? "";
        form.append(f, String(value));
      });

      const response = await fetch("/api/v1.php?table=pCustomer&action=insert", {
        method: "POST",
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
        },
        body: form,
      });

      if (!response.ok) {
        throw new Error("Failed to add customer");
      }

      const result = await response.json();

      if (result.success) {
        // Refresh the customers list and try to select the newly created customer
        await fetchCustomers();

        // Try to find the created record. Prefer server-returned Code/ID when available.
        let createdCode: string | undefined;
        if (result.data && result.data.Code) createdCode = result.data.Code;
        if (!createdCode && result.insertId) createdCode = String(result.insertId);

        // If server didn't return Code, match by Name + Phone as fallback
        if (!createdCode) {
          const matched = customerOptions.find(
            (c) => c.label?.toLowerCase().includes((data.Name || "").toLowerCase()) && (data.Phone ? c.phone === data.Phone : true)
          );
          if (matched) createdCode = matched.value;
        }

        if (createdCode) {
          setSelectedCustomerId(createdCode);
        }

        setIsCustomerModalOpen(false);
        alert("Customer added successfully");
      } else {
        throw new Error(result.message || "Failed to add customer");
      }
    } catch (error) {
      console.error("Error adding customer:", error);
      alert(error instanceof Error ? error.message : "Failed to add customer");
    }
  };

  const handleSaveSale = async () => {
    debugger
    // Validate required fields

    // Find the selected customer to get additional details
    const selectedCustomer = customerOptions.find(
      (customer) => customer.value === selectedCustomerId
    );

    // Determine SaleMenCode
    const saleMenCode = selectedCustomer?.saleMenCode
      ? Number(selectedCustomer.saleMenCode)
      : null; // Default to 1 if not provided

    // Find the selected salesman to get additional details
    const selectedSalesman = salesmanOptions.find(
      (salesman) => salesman.value === selectedSalesmanId
    );

    // Closing month validation: prevent creating sales if closing month for selected date doesn't exist or is closed
    try {
      const selectedDate = saleDate ? new Date(saleDate) : new Date();
      const entryMonth = selectedDate.getMonth() + 1; // 1-12
      const entryYear = selectedDate.getFullYear();

      const monthObj = closingMonthsList.find(
        (m: any) => Number(m.VMonth) === entryMonth && Number(m.VYear) === entryYear
      );

      if (!monthObj) {
        alert("Closing month not found for the selected date. Please contact admin.");
        return;
      }

      if (monthObj.CloseStatus !== "Open") {
        alert("You cannot make sale for a closed month!");
        return;
      }
    } catch (err) {
      console.error("Error validating closing month:", err);
      // fail-safe: block the save if validation can't run
      alert("Unable to validate closing month. Please try again later.");
      return;
    }

    const myHeaders = new Headers();
    myHeaders.append("api_key", user?.apiKey || "123");
    myHeaders.append("Content-Type", "application/json");

    // Prepare the API request body
    const requestBody = {
      api_key: user?.apiKey || 123, // Use user's API key or fallback
      master: {
        // TODO: Implement dynamic mapping for account codes
        Date: saleDate || new Date().toISOString().split('T')[0], // Use selected date or today
        PartyCode:
          selectedCustomerId === "walking" ? -1 : Number(selectedCustomerId),
        TotalAmount: calculateTotals.totalPrice,
        // LaborAccountCode: 1, // Default, might need to be configurable
        // FreightAccountCode: 1, // Optional
        // FreightCharges: 0, // Optional
        // LaborCharges: 0, // Optional
        // SaleTaxAccCode: 1, // Optional
        // SaleTaxRate: 0, // Optional
        // SaleTaxAmount: 0, // Optional
        // DiscountAccCode: 1, // Optional
        DiscountRemarks: invoiceDiscount > 0 ? "Invoice Discount" : undefined,
        DiscountRate:
          invoiceDiscount > 0
            ? (invoiceDiscount / calculateTotals.totalPrice) * 100
            : undefined,
        DiscountAmount: invoiceDiscount,
        GrandTotal: calculateTotals.grandTotal,
        SaleMenCode: selectedSalesmanId
          ? Number(selectedSalesmanId)
          : saleMenCode, // Use selected salesman or fallback
        Commission: calculateTotals.salesmanCommission,
        SaleType: paymentType,
        Block: 0,
      },
      details: selectedProducts.map((product) => ({
        // TODO: Implement dynamic product group and unit code mapping
        ProductCode: Number(product.ID),
        ProductGroupCode: product?.ProductGroupCode, // TODO: Get from product details or default
        UnitCode: product?.UnitCode, // TODO: Get from product details or default
        Qty: product.quantity,
        Rate: product.rate,
        Amount: product.rate * product.quantity,
        UserName: user?.ID || 1,
      })),
    };

    try {
      const response = await fetch("/custom_apis/create_sales.php", {
        method: "POST",
        headers: {
          "X-Auth-Token": user?.apiKey || "123",
          "Content-Type": "application/json",

        },
        body: JSON.stringify(requestBody),
      });

      if (!response.ok) {
        throw new Error("Failed to save sale");
      }

      const responseText = await response.text();
      console.log("Raw response:", responseText);

      // Try to extract JSON from the response (it might be mixed with PHP output)
      let result;
      try {
        // Look for JSON at the end of the response
        const jsonMatch = responseText.match(/\{[\s\S]*\}$/);
        if (jsonMatch) {
          result = JSON.parse(jsonMatch[0]);
        } else {
          // If no JSON found, create a success result
          result = { success: true, message: "Sale saved successfully" };
        }
      } catch (parseError) {
        console.log("JSON parse error, treating as success:", parseError);
        result = { success: true, message: "Sale saved successfully" };
      }

      console.log("Sale saved successfully:", result);
      console.log("Response status:", response.status);

      // Only reset if API response is successful
      if (response.status === 200 || result.success) {
        // Reset all states after successful POST API
        console.log("Resetting states...");
        if (setSelectedProducts) {
          setSelectedProducts([]);
          console.log("Products reset");
        }
        setSelectedCustomerId("");
        setSelectedSalesmanId("");
        setInvoiceDiscount(0);
        setSalesmanCommission(0);
        setCommissionType("percentage");
        setPaymentType("Cash");
        setIsCustomerSelectedModalOpen(true);
        console.log("All states reset successfully");

        alert("Sale saved successfully!");
      } else {
        alert("Sale saved but response indicates failure");
      }
    } catch (error) {
      console.error("Error saving sale:", error);
      alert("Failed to save sale. Please try again.");
    }
  };

  return (
    <div className="sale-invoice-container bg-white rounded-lg shadow-md p-6">
      {/* Modal for customer selection */}
      <FormModal
        isOpen={isCustomerSelectedModalOpen}
        size="lg"
        className="min-h-96"
        bodyClassName="overflow-y-visible"
      >
        {/* Payment Type Toggle */}
        <div className="flex justify-start mb-4">
          <div className="inline-flex rounded-md shadow-sm" role="group">
            <button
              type="button"
              className={`px-4 py-2 text-sm font-medium border border-gray-200 
              ${paymentType === "Cash"
                  ? "bg-blue-500 text-white"
                  : "bg-white text-gray-900 hover:bg-gray-100"
                } 
              rounded-l-lg`}
              onClick={() => setPaymentType("Cash")}
            >
              Cash
            </button>
            <button
              type="button"
              className={`px-4 py-2 text-sm font-medium border border-gray-200 
              ${paymentType === "Credit"
                  ? "bg-blue-500 text-white"
                  : "bg-white text-gray-900 hover:bg-gray-100"
                } 
              rounded-r-lg`}
              onClick={() => setPaymentType("Credit")}
            >
              Credit
            </button>
          </div>
        </div>

        <SearchableDropdown
          label="Select Customer"
          value={selectedCustomerId}
          options={computedCustomerOptions}
          onChange={handleCustomerSelect}
          placeholder="Search and select customer"
          searchPlaceholder="Search customers..."
          addButtonTitle="Add"
          onAddClick={() => {
            // Open customer creation modal
            setIsCustomerModalOpen(true);
          }}
          required={true}
          preventAutoSelect={true} // Prevent auto-selection
          defaultOpen={true} // Keep dropdown open by default
        />
      </FormModal>

      {customerError && (
        <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
          <strong>Error loading customers:</strong> {customerError}. Please try
          refreshing the page or contact support.
        </div>
      )}

      {/* Payment Type Toggle */}
      <div className="flex justify-start mb-4">
        <div className="inline-flex rounded-md shadow-sm" role="group">
          <button
            type="button"
            className={`px-4 py-2 text-sm font-medium border border-gray-200 
              ${paymentType === "Cash"
                ? "bg-blue-500 text-white"
                : "bg-white text-gray-900 hover:bg-gray-100"
              } 
              rounded-l-lg`}
            onClick={() => setPaymentType("Cash")}
          >
            Cash
          </button>
          <button
            type="button"
            className={`px-4 py-2 text-sm font-medium border border-gray-200 
              ${paymentType === "Credit"
                ? "bg-blue-500 text-white"
                : "bg-white text-gray-900 hover:bg-gray-100"
              } 
              rounded-r-lg`}
            onClick={() => setPaymentType("Credit")}
          >
            Credit
          </button>
        </div>
      </div>

      {/* Top Dropdowns */}
      <div className="grid grid-cols-2 gap-4 mb-4">
        {/* Customer Dropdown */}
        <SearchableDropdown
          label="Select Customer"
          value={selectedCustomerId}
          options={computedCustomerOptions}
          onChange={handleCustomerSelect}
          placeholder="Search and select customer"
          searchPlaceholder="Search customers..."
          addButtonTitle="Add"
          onAddClick={() => setIsCustomerModalOpen(true)}
          required={true}
          preventAutoSelect={true} // Explicitly prevent auto-selection
        />

        {/* Sale Man Dropdown */}
        <SearchableDropdown
          label="Sale Man"
          value={selectedSalesmanId}
          options={salesmanOptions}
          onChange={setSelectedSalesmanId}
          placeholder="Search Sale Man"
          searchPlaceholder="Search Sale Man..."
          preventAutoSelect={true}
        />
      </div>

      {/* Product Table */}
      <div className="overflow-x-auto max-h-[300px] overflow-y-auto">
        <table className="w-full mb-4">
          <thead className="sticky top-0 bg-gray-100 z-5">
            <tr className="text-left">
              <th className="p-2 sticky left-0 bg-gray-100 z-10 w-[20px]">
                ‎
              </th>
              <th className="p-2 sticky left-0 bg-gray-100 z-10">
                Product Name
              </th>
              <th className="p-2">Price</th>
              <th className="p-2">Quantity</th>
              <th className="p-2">Total</th>

            </tr>
          </thead>
          <tbody>
            {selectedProducts?.length === 0 ? (
              <tr>
                <td colSpan={6} className="text-center text-gray-500 p-4">
                  No data found!
                </td>
              </tr>
            ) : (
              selectedProducts?.map((product) => {
                console.log("🚀 ~ map ~ product:1111111", product);
                const productTotal = product.rate * product.quantity;

                return (
                  <tr key={product.ID} className="border-b">
                    <td className="p-2 sticky right-0 bg-white">
                      <button
                        onClick={() => removeProduct(product.ID)}
                        className="text-red-500 border-2 rounded px-2 border-red-500 w-5 h-5 flex items-center justify-center"
                      >
                        ✕
                      </button>
                    </td>
                    <td className="p-2 sticky left-0 bg-white">
                      {`${product.Name} (${product?.Code})`}
                    </td>
                    <td className="p-2">{product?.rate}</td>
                    <td className="p-2">
                      <div className="flex items-center">
                        <button
                          onClick={() => updateQuantity(product.ID, -1)}
                          className="px-2 bg-red-200  cursor-pointer"
                        >
                          -
                        </button>
                        <input
                          type="number"
                          value={product.quantity}
                          onChange={(e) =>
                            updateProductField(
                              product.ID,
                              "quantity",
                              Math.max(1, Number(e.target.value))
                            )
                          }
                          className="w-12 text-center mx-2 border rounded"
                        />
                        <button
                          onClick={() => updateQuantity(product.ID, 1)}
                          className="px-2 bg-green-500 text-white cursor-pointer"
                        >
                          +
                        </button>
                      </div>
                    </td>
                    <td className="p-2">{productTotal.toFixed(2)}</td>

                  </tr>
                );
              })
            )}
          </tbody>
        </table>
      </div>

      <div className="grid grid-cols-2 gap-2 mb-4 w-full mt-[50px]">
        <div className=""></div>
        <div className="">
          <div className="grid grid-cols-6 gap-2 mb-4 w-full">
            <div className="col-span-6 flex items-center justify-between">
              <label className="w-1/6 mr-2 whitespace-nowrap">Total Amount</label>
              <input
                type="text"
                value={`${calculateTotals.totalPrice}`}
                readOnly
                className="text-right w-4/6 border rounded p-2"
              />
            </div>
            <div className="col-span-6 flex items-center justify-between">
              <label className="w-1/6 mr-2 whitespace-nowrap">Invoice Discount</label>
              <input
                type="number"
                value={invoiceDiscount}
                onChange={(e) => setInvoiceDiscount(Number(e.target.value))}
                className="text-right  w-4/6 border rounded p-2 "
                placeholder="Enter discount amount"
                min="0"
              />
            </div>
            <div className="col-span-6 flex items-center justify-between">
              <label className="w-1/6 mr-2 whitespace-nowrap">Total Item</label>
              <input
                type="text"
                value={selectedProducts?.reduce((sum, p) => sum + p.quantity, 0) || 0}
                readOnly
                className="text-right w-4/6 border rounded p-2"
              />
            </div>
            <div className="col-span-6 flex items-center justify-between">
              <label className="w-1/6 mr-2 whitespace-nowrap">Salesman Commission</label>
              <div className="w-4/6 relative">
                <input
                  type="number"
                  value={salesmanCommission}
                  onChange={(e) => setSalesmanCommission(Number(e.target.value))}
                  className="w-full text-right border rounded p-2"
                  placeholder="Enter commission"
                  min="0"
                />
                <span className="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                  {commissionType === "percentage" ? "%" : "$"}
                </span>
              </div>
            </div>
            <div className="col-span-6 flex items-center justify-between">
              <label className="w-1/6 mr-2 whitespace-nowrap">Commission Type</label>
              <div className="w-4/6 flex justify-end">
                <button
                  type="button"
                  className={`px-4 py-2 text-sm font-medium border border-gray-200 
          ${commissionType === "percentage"
                      ? "bg-blue-500 text-white"
                      : "bg-white text-gray-900 hover:bg-gray-100"
                    } 
          rounded-l-lg whitespace-nowrap`}
                  onClick={() => setCommissionType("percentage")}
                >
                  %
                </button>
                <button
                  type="button"
                  className={`px-4 py-2 text-sm font-medium border border-gray-200 
          ${commissionType === "rate"
                      ? "bg-blue-500 text-white"
                      : "bg-white text-gray-900 hover:bg-gray-100"
                    } 
          rounded-r-lg whitespace-nowrap`}
                  onClick={() => setCommissionType("rate")}
                >
                  $
                </button>
              </div>
            </div>
          </div>

          {/* Grand Total */}
          <div className="flex justify-end items-center mb-4 col-span-6">
            <div className="text-xl font-bold whitespace-nowrap">Grand Total: {calculateTotals.grandTotal}</div>
          </div>
        </div>
      </div>

      {/* Totals */}

      {/* Action Buttons */}
      <div className="flex justify-end">
        <button
          className={`px-4 py-2 rounded ${!selectedProducts || selectedProducts.length === 0
            ? "bg-blue-300 text-white cursor-not-allowed"
            : "bg-blue-500 text-white hover:bg-blue-600"
            }`}
          disabled={!selectedProducts || selectedProducts.length === 0}
          onClick={handleSaveSale}
        >
          Save
        </button>
      </div>

      {/* Modal for adding new customer */}
      <FormModal
        isOpen={isCustomerModalOpen}
        onClose={() => setIsCustomerModalOpen(false)} // This will be handled by the SearchableDropdown's onAddClick
        title="Add New Customer"
        size="lg"
      >
        <CustomerForm
          mode="add"
          onSubmit={handleCustomerSubmit}
          onClose={() => setIsCustomerModalOpen(false)}
          submitLabel="Save Customer"
        />
      </FormModal>
    </div>
  );
};

export default SaleInvoice;
