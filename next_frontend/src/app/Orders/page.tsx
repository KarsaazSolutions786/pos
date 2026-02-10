"use client";

import ProtectedRoute from '@/components/ProtectedRoute';
import Sidebar from '@/components/Sidebar';
import { Button } from '@/components/ui';
import { useAuth } from '@/contexts/AuthContext';
import { CalendarDateRangeIcon, CheckBadgeIcon, ChevronLeftIcon, ChevronRightIcon, ShoppingCartIcon } from '@heroicons/react/24/outline';
import axios from 'axios';
import React, { use, useEffect, useMemo, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { fetchProducts, productState } from '@/Redux/slices/productSlice/productSlice';
import { fetchAccounts, selectAccountsState } from '@/Redux/slices/accountSlice/accountSlice';
import { customerState, fetchCustomerList } from '@/Redux/slices/customerSlice/customerSlice';
import { useTranslations } from "@/hooks/useTranslations";

const tableHeaderKeys = [
  "table_col_date",
  "table_col_order_no",
  "table_col_party",
  "table_col_product",
  "table_col_qty",
  "table_col_status",
  "table_col_update_status",
];

const Orders = () => {
  const { t, isRTL } = useTranslations();
  const tableHeaders = tableHeaderKeys.map((key) => t(key));
  const { user } = useAuth();
  const [searchTerm, setSearchTerm] = useState("");
  const [statusFilter, setStatusFilter] = useState("All Status");
  const [currentPage, setCurrentPage] = useState(1);
  const [ordersList, setOrdersList] = useState([]);
  const [isInitialOrManualLoading, setIsInitialOrManualLoading] = useState(true);
  const [isUpdating, setIsUpdating] = useState(false);
  const [orderDetails, setOrderDetails] = useState([]);
  const [zain, setzain] = useState([]);
  const { accountsList } = useSelector(selectAccountsState);
  console.log("🚀 ~ Orders ~ accountsList:", ordersList);
    const { customerslist, } = useSelector(customerState);
  

  const dispatch = useDispatch();



  // const fetchTSaleD = async () => {
  //   try {
  //     const response = await axios.get("/api/v1.php", {
  //       params: {
  //         table: "tSaleD",
  //         action: "list",
  //       },
  //       headers: {
  //         "X-Auth-Token": user?.apiKey || "123",
  //         "Content-Type": "application/json",
  //       },
  //     });

  //     const result = response.data.data;
  //     // setOrdersList(result);
  //     console.log("✅ tSaleD fetched:", result);
  //   } catch (error) {
  //     console.error("❌ Error fetching tSaleD:", error);
  //   }
  // };

  const partyName = customerslist.reduce((acc, item) => {
    if (item.ID && item.Name) {
      acc[item.ID] = item.Name;
    }
    return acc;
  }, {});
  
  console.log("🚀 ~ Orders ~ customerslist:", customerslist)
  console.log("🚀 ~ Orders ~ partyName:", partyName,customerslist)


  const orderDetailsMap = useMemo(() => {
    const map = {};
    orderDetails.forEach((detail) => {
      const orderId = detail.OrderID || detail.VirtualCode || detail.RefNo;
      if (!map[orderId]) {
        map[orderId] = [];
      }
      map[orderId].push(detail);
    });
    return map;
  }, [orderDetails]);
  console.log("🚀 ~ Orders ~ orderDetailsMap:", orderDetailsMap);

  const itemsPerPage = 10;

  const filteredOrders = useMemo(() => {
    let filtered = ordersList;
    // Add filtering logic if needed
    /*
    if (searchTerm) {
      filtered = filtered.filter(order =>
        order.VirtualCode?.toLowerCase().includes(searchTerm.toLowerCase()) ||
        partyName[order.PartyCode]?.toLowerCase().includes(searchTerm.toLowerCase())
      );
    }
    if (statusFilter !== "All Status") {
      filtered = filtered.filter(order => {
        const detail = zain.find(o => o.ID === order.Code);
        return detail?.Status === statusFilter;
      });
    }
    */
    // Sort by CreateDate in descending order
    filtered = filtered.sort((a, b) => 
      new Date(b.CreateDate).getTime() - new Date(a.CreateDate).getTime()
    );
    return filtered;
  }, [ordersList, searchTerm, statusFilter, zain, partyName]);

  const paginatedOrders = useMemo(() => {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    return filteredOrders.slice(startIndex, endIndex);
  }, [filteredOrders, currentPage]);

  // const groupedOrders = useMemo(() => {
  //   const grouped = {};
  //   paginatedOrders.forEach(order => {
  //     const dateKey = new Date(order.CreateDate).toLocaleDateString('en-US', {
  //       year: 'numeric',
  //       month: 'long',
  //       day: 'numeric',
  //     });
  //     if (!grouped[dateKey]) {
  //       grouped[dateKey] = [];
  //     }
  //     grouped[dateKey].push(order);
  //   });
  //   // Sort date keys in descending order
  //   const sortedGrouped = {};
  //   Object.keys(grouped)
  //     .sort((a, b) => new Date(b).getTime() - new Date(a).getTime())
  //     .forEach(dateKey => {
  //       sortedGrouped[dateKey] = grouped[dateKey];
  //     });
  //   return sortedGrouped;
  // }, [paginatedOrders]);
  // console.log("🚀 ~ Orders ~ groupedOrders:", groupedOrders)

  const totalPages = Math.ceil(filteredOrders.length / itemsPerPage);









  const groupedOrders = useMemo(() => {
  const grouped = {};

  ordersList.forEach(order => {
    const dateKey = new Date(order.CreateDate).toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'long',
      day: 'numeric',
    });

    if (!grouped[dateKey]) grouped[dateKey] = [];

    order.tSaleD.forEach(detail => {
      grouped[dateKey].push({
        orderID: order.ID,
        orderCode: order.Code,
        virtualCode: order.VirtualCode,
        createDate: order.CreateDate,
        partyCode: order.PartyCode,
        productCode: detail.ProductCode,
        qty: detail.Qty,
        status: order.Status,
      });
    });
  });

  // sort by date descending
  const sortedGrouped = {};
  Object.keys(grouped)
    .sort((a, b) => new Date(b).getTime() - new Date(a).getTime())
    .forEach(key => {
      sortedGrouped[key] = grouped[key];
    });

  return sortedGrouped;
}, [ordersList]);
  console.log("🚀 ~ Orders ~ groupedOrders:", groupedOrders)
  const getStatusBadge = (status) => {
    const statusConfig = {
      Completed: { variant: "default", className: "bg-emerald-100 text-emerald-800" },
      Processing: { variant: "secondary", className: "bg-amber-100 text-amber-800" },
      Shipped: { variant: "default", className: "bg-blue-100 text-blue-800" },
      Pending: { variant: "secondary", className: "bg-amber-100 text-amber-800" },
      Cancelled: { variant: "destructive", className: "bg-red-100 text-red-800" },
      CLOSE: { variant: "default", className: "bg-gray-100 text-gray-800" },
      OPEN: { variant: "secondary", className: "bg-red-100 text-red-800" },
    };

    const config = statusConfig[status] || statusConfig["Pending"];
    return (
      <div className={`w-max px-4 h-8 rounded-lg flex items-center justify-center text-sm ${config.className}`}>
        {status}
      </div>
    );
  };
async function fetchPendingOrderList(isManual = false) {
  if (isManual) {
    setIsInitialOrManualLoading(true);
  }
  try {
    const myHeaders = new Headers();
    myHeaders.append("api_key", user?.apiKey || "123");
    myHeaders.append("Content-Type", "application/json");

    const raw = JSON.stringify({ status: 'OPEN', api_key: user?.apiKey || "123" });

    const requestOptions: RequestInit = {
      method: "POST",
      headers: myHeaders,
      body: raw,
      redirect: "follow",
    };

    const response = await fetch(
      "/custom_apis/sales_list.php",
      requestOptions
    );
    const data = await response.json();
    const result = data.data;

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    setOrdersList(result);
  } catch (error) {
    console.error("Error fetching sales list:", error);
    throw error;
  } finally {
     if (isManual || isInitialOrManualLoading) {
        setIsInitialOrManualLoading(false);
      }
  }
}
  useEffect(() => {
      fetchPendingOrderList(true);
    // fetchTSaleD();
    const intervalId = setInterval(() => {
      fetchPendingOrderList(false);
      // fetchTSaleD();
    }, 10 * 1000);
    return () => clearInterval(intervalId);
  }, []);



  const updateStatus = async (id) => {
    setIsUpdating(true);
    try {
      const form = new FormData();
      form.append("Status", "CLOSE");

      const response = await fetch(
        `/api/v1.php?table=tSaleH&action=update&editid1=${id}`,
        {
          method: "POST",
          headers: {
            "X-Auth-Token": user?.apiKey || "123",
          },
          body: form,
        }
      );
      fetchPendingOrderList(true)
      await response.json();
    } catch (error) {
      console.log("Error updating status:", error);
      alert("Failed to update status. Please try again.");
    } finally {
      setIsUpdating(false);
    }
  };

  const RefreshIcon = ({ className = "h-4 w-4" }) => (
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
      className={className}
    >
      <path
        strokeLinecap="round"
        strokeLinejoin="round"
        strokeWidth={2}
        d="M4 4v6h6M20 20v-6h-6M5.64 17.36A9 9 0 106.36 6.64l-1.42 1.42"
      />
    </svg>
  );

const onRefresh = () => {
  setIsInitialOrManualLoading(true);
  fetchPendingOrderList(true).finally(() => {
    setIsInitialOrManualLoading(false);
  });
};

  const SkeletonRow = () => (
    <tr className="animate-pulse">
      {tableHeaders.map((_, index) => (
        <td key={index} className="px-6 py-4">
          <div className="h-4 bg-gray-200 rounded w-3/4"></div>
        </td>
      ))}
    </tr>
  );

  useEffect(() => {
    dispatch(fetchProducts(user?.apiKey));
    dispatch(fetchAccounts(user?.apiKey));
    dispatch(fetchCustomerList())
    if (user?.apiKey) {
      console.log("Fetching products with API key:", user.apiKey);
    }
  }, [user]);

  const { productlist, isLoading, error, total } = useSelector(productState);
  console.log("🚀 ~ productlist:", productlist);

  const productName = productlist.reduce((acc, item) => {
    if (item.ID && item.Name) {
      acc[item.ID] = item.Name;
    }
    return acc;
  }, {});

  console.log("🚀 ~ partyName:", partyName);
  console.log("🚀 ~ productName:", productName);

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <div className="flex items-center">
                <h1 className="text-2xl font-bold text-gray-900">{t("page_title_orders_list")}</h1>
              </div>
            </div>
          </header>
          <main className="flex-1 overflow-y-auto">
            <div className="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
              <div className="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <div className="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                  <h2 className="text-lg font-semibold text-gray-900">{t("section_recent_orders")}</h2>
                  <Button
                    variant="ghost"
                    size="sm"
                    onClick={onRefresh}
                    disabled={isInitialOrManualLoading || isUpdating}
                  >
                    <RefreshIcon
                      className={`h-4 w-4 cursor-pointer ${isInitialOrManualLoading || isUpdating ? 'animate-spin' : ''}`}
                    />
                  </Button>
                </div>
              </div>

              <div className="overflow-x-auto h-[600px]">
                <table className="w-full" role="table">
                  <thead className="bg-gray-50 border-b border-gray-100 sticky top-0 z-10">
                    <tr>
                      {tableHeaders.map((header) => (
                        <th
                          key={header}
                          className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider bg-gray-50 sticky top-0"
                        >
                          {header}
                        </th>
                      ))}
                    </tr>
                  </thead>
              <tbody className="bg-white divide-y divide-gray-100">
  {(isInitialOrManualLoading || isUpdating) ? (
    Array.from({ length: 5 }).map((_, index) => <SkeletonRow key={index} />)
  ) : (
    Object.entries(groupedOrders).map(([dateKey, dateOrders]) =>
      dateOrders.map((order, index) => (
        <tr
          key={`${order.orderID}-${index}`}
          className="hover:bg-gray-50 transition-colors duration-150 cursor-pointer border-l-2 border-l-transparent hover:border-l-blue-400"
          data-testid={`row-order-${order.orderID}`}
        >
          {/* DATE COLUMN */}
          <td className="px-6 py-4 border-r border-gray-100">
            {index === 0 ? (
              <div className="flex flex-col gap-1">
                <span className="text-sm font-semibold text-blue-900" data-testid={`text-date-${dateKey}`}>
                  {new Date(order.createDate).toLocaleDateString('en-US', {
                    month: 'short',
                    day: '2-digit',
                  })}
                </span>
                <span className="text-xs text-gray-500">
                  {new Date(order.createDate).getFullYear()}
                </span>
              </div>
            ) : (
              <div className="h-12"></div>
            )}
          </td>

          {/* ORDER INFO */}
          <td className="px-6 py-4">
            <div className="flex flex-col">
              <span className="text-sm font-semibold text-gray-900" data-testid={`text-order-no-${order.orderID}`}>
                {order.virtualCode}
              </span>
              <span className="text-xs text-gray-500" data-testid={`text-order-time-${order.orderID}`}>
                {new Date(order.createDate).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}
              </span>
            </div>
          </td>

          {/* PARTY INFO */}
          <td className="px-6 py-4">
            <span className="text-sm font-medium text-gray-900" data-testid={`text-party-code-${order.orderID}`}>
              {partyName[order.partyCode] || "Unknown"}
              {order.Name}
            </span>
          </td>

          {/* PRODUCT INFO */}
          <td className="px-6 py-4">
            <span className="text-sm font-medium text-gray-900" data-testid={`text-product-${order.orderID}`}>
              {productName[order.productCode] || "Unknown"}
            </span>
          </td>

          {/* QUANTITY */}
          <td className="px-6 py-4">
            <span className="text-sm font-bold text-gray-900" data-testid={`text-quantity-${order.orderID}`}>
              {order.qty}
            </span>
          </td>

          {/* STATUS */}
          <td className="px-6 py-4">
            {order.status && getStatusBadge(order.status)}
          </td>

          {/* ACTION BUTTON */}
          <td className="px-6 py-4 cursor-pointer">
            <button
              onClick={() => {
                if (confirm("Mark this order as closed?")) {
                  updateStatus(order.orderID);
                }
              }}
              className="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition"
              disabled={isInitialOrManualLoading || isUpdating}
            >
              {t("btn_mark_as_closed")}
            </button>
          </td>
        </tr>
      ))
    )
  )}

  {/* NO ORDERS FOUND */}
  {!(isInitialOrManualLoading || isUpdating) && filteredOrders.length === 0 && (
    <tr>
      <td colSpan={7} className="px-6 py-12 text-center">
        <div className="text-gray-500">
          <ShoppingCartIcon className="w-12 h-12 mx-auto mb-4 text-gray-300" />
          <h3 className="text-lg font-medium text-gray-900 mb-2">{t("table_no_records")}</h3>
          <p className="text-sm">Try adjusting your search or filter to find what you're looking for.</p>
        </div>
      </td>
    </tr>
  )}
</tbody>

                </table>
              </div>

         

              {!(isInitialOrManualLoading || isUpdating) && filteredOrders.length > 0 && <div className="px-6 py-4 bg-gray-50 border-t border-gray-100">
  <div className="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div className="text-sm text-gray-600">
      Showing <span className="font-medium text-gray-900">{(currentPage - 1) * itemsPerPage + 1}-{Math.min(currentPage * itemsPerPage, filteredOrders.length)}</span> of{" "}
      <span className="font-medium text-gray-900">{filteredOrders.length}</span> orders
    </div>

    <div className="flex items-center gap-2 justify-center">
      {/* Previous Button */}
      <Button
        variant="outline"
        size="sm"
        disabled={currentPage <= 1 || isInitialOrManualLoading || isUpdating}
        onClick={() => setCurrentPage(prev => Math.max(prev - 1, 1))}
      >
        <ChevronLeftIcon className="w-4 h-4 mr-1" />
        {t("pagination_previous")}
      </Button>

      {/* Page Numbers */}
      {(() => {
        const pages = [];
        const maxVisiblePages = 5;
        let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = startPage + maxVisiblePages - 1;

        if (endPage > totalPages) {
          endPage = totalPages;
          startPage = Math.max(1, endPage - maxVisiblePages + 1);
        }

        for (let page = startPage; page <= endPage; page++) {
          pages.push(
            <Button
              key={page}
              variant={currentPage === page ? "default" : "outline"}
              size="sm"
              onClick={() => setCurrentPage(page)}
              className={currentPage === page ? "bg-blue-600 text-white" : ""}
              disabled={isInitialOrManualLoading || isUpdating}
            >
              {page}
            </Button>
          );
        }

        return (
          <>
            {startPage > 1 && (
              <>
                <Button
                  variant="outline"
                  size="sm"
                  onClick={() => setCurrentPage(1)}
                  disabled={isInitialOrManualLoading || isUpdating}
                >
                  1
                </Button>
                {startPage > 2 && <span className="px-2 text-gray-500">...</span>}
              </>
            )}
            {pages}
            {endPage < totalPages && (
              <>
                {endPage < totalPages - 1 && <span className="px-2 text-gray-500">...</span>}
                <Button
                  variant="outline"
                  size="sm"
                  onClick={() => setCurrentPage(totalPages)}
                  disabled={isInitialOrManualLoading || isUpdating}
                >
                  {totalPages}
                </Button>
              </>
            )}
          </>
        );
      })()}

      {/* Next Button */}
      <Button
        variant="outline"
        size="sm"
        disabled={currentPage >= totalPages || isInitialOrManualLoading || isUpdating}
        onClick={() => setCurrentPage(prev => Math.min(prev + 1, totalPages))}
      >
        {t("pagination_next")}
        <ChevronRightIcon className="w-4 h-4 ml-1" />
      </Button>
    </div>
  </div>
</div>
    }
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
};

export default Orders;