import React, { useCallback, useEffect, useMemo, useState } from 'react'
import ProductGrid from './ProductGrid';
import { useAuth } from '@/contexts/AuthContext';
import { useDispatch, useSelector } from 'react-redux';
import { fetchProducts, productState } from '@/Redux/slices/productSlice/productSlice';
import SearchableDropdown from './SearchableDropdown';
import ProtectedRoute from './ProtectedRoute';

const UpdateSaleInvoice = ({
    saleData,
    onSaleUpdated,
}) => {
    console.log("🚀 ~ UpdateSaleInvoice ~ saleData:", saleData)
    const { user } = useAuth();

    const [paymentType, setPaymentType] = useState<"Cash" | "Credit">(
        saleData.paymentType
    );
    const [selectedCustomerId, setSelectedCustomerId] = useState(
        saleData.customerId
    );
    const [selectedProducts, setSelectedProducts] = useState<[]>(
        saleData.products
    );
    const [invoiceDiscount, setInvoiceDiscount] = useState(saleData.invoiceDiscount);
    const [salesmanCommission, setSalesmanCommission] = useState(
        saleData.salesmanCommission
    );
    const [commissionType, setCommissionType] = useState<
        "percentage" | "rate"
        >(saleData.commissionType);

        const [selectedSalesmanId, setSelectedSalesmanId] = useState(
            saleData.salesmanId || ""
        );
        
        const [customerOptions, setCustomerOptions] = useState<[]>([]);
        console.log("🚀 ~ UpdateSaleInvoice ~ selectedProducts:", selectedProducts,selectedCustomerId)
    const [salesmanOptions, setSalesmanOptions] = useState<[]>([]);
    const [isCustomerModalOpen, setIsCustomerModalOpen] = useState(false);
    const [isCustomerSelectedModalOpen, setIsCustomerSelectedModalOpen] =
    useState(false);
    const [isLoadingCustomers, setIsLoadingCustomers] = useState(true);
    const [isSalesmanLoading, setIsSalesmanLoading] = useState(true);
    const { productlist, } = useSelector(productState);
    const dispatch = useDispatch();
    
    console.log("🚀 ~ UpdateSaleInvoice ~ selectedSalesmanId:", selectedSalesmanId)

    console.log("🚀 ~ UpdateSaleInvoice ~ productlist:", productlist)

    useEffect(() => {
        dispatch(fetchProducts(user?.apiKey))
    }, [dispatch, user?.apiKey]);
    const productName = useMemo(() => {
        return productlist.reduce((acc, item) => {
            acc[item.ID] = item.Name;
            return acc;
        }, {});
    }, [productlist]);

    // Fetch customers
    useEffect(() => {
        const fetchCustomers = async () => {
            debugger
            try {
                setIsLoadingCustomers(true);
                const response = await fetch(
                    "/api/v1.php?table=pCustomer&action=list",
                    {
                        method: "GET",
                        headers: {
                            "X-Auth-Token": user?.apiKey || "123",
                            "Content-Type": "application/json",
                        },
                    }
                );
                const result = await response.json();
                if (result.success && result.data) {
                    const formattedCustomers = result.data.map((customer: CustomerData) => ({
                        value: customer.Code,
                        label: customer.Name + customer.Code,
                        phone: customer.Phone || "",
                        code: customer.Code,
                        address: customer.Address,
                        contactName: customer.ContactName,
                        saleMenCode: customer.SaleMenCode || undefined,
                    }));

                    setCustomerOptions([
          { value: '-1', label: 'Walking Customer', code: '-1', phone: '', address: '', contactName: '' },
          ...formattedCustomers
        ]);
                    
                    // setCustomerOptions(formattedCustomers);
                }
            } catch (error) {
                console.error(error);
                setCustomerOptions([]);
            } finally {
                setIsLoadingCustomers(false);
            }
        };
        fetchCustomers();
    }, [user]);

    // Fetch salesmen
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
                const result = await response.json();
                if (result.success && result.data) {
                    const formattedSalesmen = result.data.map((employee: any) => ({
                        value: employee.ID,
                        label: `${employee.Name} (${employee.Code || "No Code"})`,
                    }));
                    setSalesmanOptions(formattedSalesmen);
                }
            } catch (error) {
                console.error(error);
                setSalesmanOptions([]);
            } finally {
                setIsSalesmanLoading(false);
            }
        };
        fetchSalesmen();
    }, [user]);

    // Compute totals
const calculateTotals = useMemo(() => {
  const totalPrice = selectedProducts?.reduce((sum, p) => sum + p.Rate * p.Qty, 0) || 0;
  const discountedTotal = Math.max(0, totalPrice - invoiceDiscount);

  const commission =
    commissionType === "percentage"
      ? discountedTotal * (salesmanCommission / 100)
      : salesmanCommission;

  const grandTotal = Math.round(discountedTotal); // ← Commission nahi katna

  return {
    totalPrice: Math.round(totalPrice),
    discountedTotal: Math.round(discountedTotal),
    salesmanCommission: Math.round(commission),
    grandTotal,
  };
}, [selectedProducts, invoiceDiscount, salesmanCommission, commissionType]);

    // Product updates
    const updateProductField = useCallback(
        (productId: string | number, field: keyof Product, value: number) => {
            setSelectedProducts((prev) =>
                prev.map((p) =>
                    p.ID === productId ? { ...p, [field]: value } : p
                )
            );
        },
        []
    );

    const removeProduct = useCallback((productId: string) => {
        debugger
        setSelectedProducts((prev) => prev.filter((p) => p.ProductCode != productId));
    }, []);

    
    const updateQuantity = useCallback(
        (productId: string | number, change: number) => {
            setSelectedProducts((prev) =>
                prev.map((p) =>
                    p.ID === productId
                        ? { ...p, Qty: Math.max(1, p.Qty + change) }
                        : p
                )
            );
        },
        []
    );


    const handleCustomerSelect = (customerId: string) => {
        setSelectedCustomerId(customerId);
        const selectedCustomer = customerOptions.find(
            (c) => c.value === customerId
        );
        // if (selectedCustomer?.saleMenCode) {
        //     setSelectedSalesmanId(selectedCustomer.saleMenCode);
        // }


        setIsCustomerModalOpen(false);
        setIsCustomerSelectedModalOpen(false);
    };

    // Handle Update Sale API
    const handleUpdateSale = async () => {
        debugger;
        if (!selectedCustomerId || selectedProducts.length === 0) {
            alert("Select customer and add products");
            return;
        }

        const selectedCustomer = customerOptions.find(
            (c) => c.saleMenCode === selectedCustomerId
        );

        const saleMenCode = selectedCustomer?.saleMenCode
            ? Number(selectedCustomer.saleMenCode)
            : 1;
 console.log(saleData.ID)
        const requestBody = {
            api_key: user?.apiKey || "123",

            // 🔑 root level ID (tSaleH ka primary key)
            id: saleData.ID,

            master: {
                SaleID: saleData.ID, // optional, PHP second code me mostly root ID se kaam hota hai
                PartyCode:
                    selectedCustomerId === "walking" ? 0 : Number(selectedCustomerId),
                TotalAmount: calculateTotals.totalPrice || 0,
                DiscountRemarks: invoiceDiscount > 0 ? "Invoice Discount" : "",
                DiscountRate:
                    invoiceDiscount > 0
                        ? (invoiceDiscount / calculateTotals.totalPrice) * 100
                        : 0,
                DiscountAmount: invoiceDiscount || 0,
                GrandTotal: calculateTotals.grandTotal || 0,
                SaleMenCode: selectedSalesmanId
                    ? Number(selectedSalesmanId)
                    : saleMenCode,
                Commission: calculateTotals.salesmanCommission || 0,
                SaleType: paymentType,
                Block: 0,
            },

            details: selectedProducts.map((p) => ({
                // 👇 yahan har product ka apna SaleD ka ID bhejna hai (agar DB me hai)
                // Agar new product hai to null bhejna
                ID: p.CodeD || null,

                ProductCode: Number(p.ProductCode ?? p.ID),
                ProductGroupCode: 1,
                UnitCode: 1,
                Qty: p.Qty,
                Rate: p.Rate,
                Amount: p.Rate * p.Qty,
                Remarks: p.Remarks || "",
                Block: 0,
                UserName: user?.ID || 1,
            })),
        };

        try {
            const response = await fetch("/custom_apis/update_sales.php", {
                method: "POST",
                headers: {
                    "X-Auth-Token": user?.apiKey || "123",
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(requestBody),
            });

            const result = await response.json();
            if (result.success) {
                alert("Sale updated successfully!");
                if (onSaleUpdated) onSaleUpdated();
            } else {
                alert("Failed to update sale: " + (result.error || ""));
            }
        } catch (error) {
            console.error(error);
            alert("Error updating sale");
        }
    };

   const handleProductSelect = (product: Product) => {
    setSelectedProducts((prevProducts) => {
        const selectedCode = String(product.ProductCode || product.ID);

        const existingIndex = prevProducts.findIndex((p) => {
            const existingCode = String(p.ProductCode || p.ID);
            return existingCode === selectedCode;
        });

        if (existingIndex > -1) {
            // Product already exists → increment Qty
            const updatedProducts = [...prevProducts];
            const currentQty = parseFloat(updatedProducts[existingIndex].Qty) || 1;
            updatedProducts[existingIndex] = {
                ...updatedProducts[existingIndex],
                Qty: currentQty + 1,
            };
            return updatedProducts;
        } else {
            // New product → add it
            return [
                ...prevProducts,
                {
                    ...product,
                    ID: product.ID || product.ProductCode || `temp-${Date.now()}`,
                    ProductCode: product.ProductCode || product.ID,
                    Qty: product.Qty || 1,
                    Rate: Number(product.Rate || product.rate || 0),
                    Name: product.Name,
                    Remarks: product.Remarks || "",
                },
            ];
        }
    });
};

  if (isLoadingCustomers && isSalesmanLoading) {
    return (
      <ProtectedRoute>
        <div className="flex h-screen items-center justify-center">
          <div className="flex flex-col items-center">
            <div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500 mb-4"></div>
            <p className="text-gray-600">Loading customers...</p>
          </div>
        </div>
      </ProtectedRoute>
    );
  }



    return (
        <div className="grid grid-cols-12 p-6 gap-6">
            <div className="sale-invoice-container col-span-8 bg-white rounded-lg shadow-md p-6 ">
                {/* Customer & Salesman Dropdowns */}
                <div className="grid grid-cols-2 gap-4 mb-4">
                    <SearchableDropdown
                        label="Select Customer"
                        value={selectedCustomerId}
                        options={customerOptions}
                        onChange={handleCustomerSelect}
                        placeholder="Search and select customer"
                        preventAutoSelect={true}
                    />
                    <SearchableDropdown
                        label="Sale Man"
                        value={selectedSalesmanId}
                        options={salesmanOptions}
                        onChange={setSelectedSalesmanId}
                        placeholder="Search Sale Man"
                        preventAutoSelect={true}
                    />
                </div>

                {/* Product Table */}

                <div className="overflow-x-auto max-h-[300px] overflow-y-auto">
                    <table className="w-full mb-4">
                        <thead className="bg-gray-100">
                            <tr className="text-left ">
                                <th className="py-3">Sno</th>
                                <th className="py-3">Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            {selectedProducts.map((product, index) => (
                                <tr className="border-b py-4" key={index}>
                                    <td>{index + 1}</td>
                                    <td className="py-3">{productName[product.ProductCode] ?? product.Name}</td>
                                    <td>{product.Rate}</td>
                                    <td>
                                        <div className="flex items-center">
                                            <button className="px-2 bg-red-200  cursor-pointer" onClick={() => updateQuantity(product.ID, -1)}>-</button>
                                            <input
                                                type="number"
                                                value={product.Qty}
                                                onChange={(e) =>
                                                    updateProductField(product.ID, "Qty", Math.max(1, Number(e.target.value)))
                                                }
                                                className="w-12 text-center mx-2 border rounded"
                                            />
                                            <button className="px-2 bg-green-500 text-white cursor-pointer" onClick={() => updateQuantity(product.ID, 1)}>+</button>

                                        </div>
                                    </td>
                                    <td>{(product.Rate * product.Qty).toFixed(2)}</td>
                                    <td>
                                        <button onClick={() => removeProduct(product.ProductCode)}>✕</button>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>

                {/* Totals */}
                <div className="grid grid-cols-2 gap-2 mb-4">
                    <div>Total Amount: {calculateTotals.totalPrice}</div>
                    <div>Grand Total: {calculateTotals.grandTotal}</div>
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
                                    value={selectedProducts?.reduce((sum, p) => sum + parseInt(p.Qty), 0) || 0}
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
                {/* Action Button */}
                <div className="flex justify-end">
                    <button
                        className="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                        onClick={handleUpdateSale}
                    >
                        Update Sale
                    </button>
                </div>
            </div>
            <div className="col-span-4">
                <ProductGrid
                    //  key={productlist.length}
                    products={productlist}
                    onProductSelect={handleProductSelect}
                    selectedProducts={selectedProducts}
                />
            </div>
        </div>

    );
};

export default UpdateSaleInvoice