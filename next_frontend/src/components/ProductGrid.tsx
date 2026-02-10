import { useAuth } from "@/contexts/AuthContext";
import { fetchProducts, productState } from "@/Redux/slices/productSlice/productSlice";
import React, { useEffect, useMemo, useState } from "react";
import { useDispatch, useSelector } from "react-redux";

export interface Product {
  id: string;
  name: string;
  price: number;
  image: string;
  category?: string;
  brand?: string;
  tax: number;
  discount: number;
}

interface ProductGridProps {
  products: Product[];
  onProductSelect?: (product: Product) => void;
  selectedProducts?: Product[]; // New prop to track selected products
}

const ProductGrid: React.FC<ProductGridProps> = ({
  products,
  onProductSelect,
  selectedProducts = [], // Default to empty array
}) => {
  console.log("🚀 ~ ProductGrid ~ selectedProducts:", selectedProducts)
  const [searchTerm, setSearchTerm] = useState("");
  const [activeTab, setActiveTab] = useState("All Products");
  const { user } = useAuth();
  const tabs = ["All Products", "Category", "Brand", "Featured"];
  const dispatch = useDispatch(); 
  const { productlist, isLoading, error, total } = useSelector(productState);

  const filteredProducts = useMemo(() => {
    return productlist.filter((product) =>
      product.Name?.toLowerCase().includes(searchTerm?.toLowerCase())
    );
  }, [productlist, searchTerm]);
  console.log("🚀 ~ ProductGrid ~ filteredProducts:", filteredProducts)


  useEffect(() => {
    dispatch(fetchProducts(user?.apiKey));
    if (user?.apiKey) {
      // Fetch products when user API key is available
      console.log("Fetching products with API key:", user.apiKey);
      // Dispatch fetchProducts action here if needed
    }
  }, [user]);

  // console.log("🚀 ~ ProductGrid ~ products:", products);
  // console.log("🚀 ~ ProductGrid ~ filteredProducts:", filteredProducts);
console.log("🚀 ~ ProductGrid ~ productlist:", productlist)

  return (
    <div className="product-grid-container bg-white rounded-lg shadow-md p-6">
      {/* Search Input */}
      <div className="mb-4">
        <input
          type="text"
          placeholder="Search products..."
          value={searchTerm}
          onChange={(e) => setSearchTerm(e.target.value)}
          className="w-full border rounded p-2"
        />
      </div>

      {/* Tabs */}
      {/* <div className="flex space-x-2 mb-4 overflow-x-auto">
        {tabs.map((tab, index) => (
          <button
            key={tab}
            className={`px-4 py-2 rounded text-white ${
              activeTab === tab
                ? [
                    "bg-blue-500",
                    "bg-green-500",
                    "bg-orange-500",
                    "bg-purple-500",
                  ][index]
                : [
                    "bg-blue-400",
                    "bg-green-400",
                    "bg-orange-400",
                    "bg-purple-400",
                  ][index]
            }`}
            onClick={() => setActiveTab(tab)}
          >
            {tab}
          </button>
        ))}
      </div> */}

      {/* Product Grid */}
      <div className="overflow-x-auto max-h-[500px] overflow-y-auto">
        {/* <div className="grid grid-cols-5 xl:grid-cols-3 gap-2"> */}
       <div className="grid grid-cols-3 gap-2">
  {filteredProducts?.map((product :any) => {
    console.log("🚀 ~ map ~ product:", product ,selectedProducts);
    // Check if this product is selected
const isSelected = selectedProducts.some((p: any) =>
  String(p.ProductCode || p.ID) === String(product.ProductCode || product.ID)
);



let imageSrc = "";

if (product?.product_image instanceof File) {
  // Local uploaded file → blob URL
  imageSrc = URL.createObjectURL(product.product_image);
} else if (typeof product?.product_image === "string") {
  // Already a URL from backend
  imageSrc = product.product_image.startsWith("http")
    ? product.product_image
    : `https://karsaazpos.karsaazebs.com/${product.product_image}`;
} else if (product?.product_image?.name) {
  // Backend sent object with name property
  imageSrc = `https://karsaazpos.karsaazebs.com/${product.product_image.name}`;
}

    console.log("🚀 ~ imageSrc:", product.product_image)

     
    return (
            <div
        key={product.id}
        className={` border  rounded-lg p-2 text-center cursor-pointer hover:shadow-lg transition-shadow ${
          isSelected ? "border-blue-500 border-2 bg-blue-50" : "border-gray-300"
        }`}
        onClick={() => onProductSelect && onProductSelect(product)}
      >
        {product?.product_image ? (
          <div className="h-[80px] w-full mb-4 overflow-hidden rounded">
            <img
              src={imageSrc}
              alt={product.Name}
              className="w-full h-full object-cover"
            />
          </div>
        ) : (
          <div className="h-[80px] bg-slate-500 text-white flex items-center justify-center text-3xl font-semibold rounded mb-4">
            {product.Name?.charAt(0)?.toUpperCase() || "?"}
          </div>
        )}

        <h3 className="font-semibold text-sm break-words whitespace-normal">
          {product?.Name}
        </h3>
        <p className="text-gray-800 truncate font-semibold">Rs. {product?.rate}</p>
      </div>

          );
        })}
      </div>


              {/* <div className="flex flex-wrap gap-2">
          {filteredProducts?.map((product) => {
            console.log("🚀 ~ map ~ product:", product)
            // Check if this product is selected
            const isSelected = selectedProducts.some(
              (p) => p.id === product.id
            );

            return (
              <div
                key={product.id}
                className={`border rounded-lg p-2 text-center cursor-pointer hover:shadow-lg transition-shadow 
                  ${
                    isSelected
                      ? "border-blue-500 border-2 bg-blue-50"
                      : "border-gray-300"
                  }`}
                onClick={() => onProductSelect && onProductSelect(product)}
              >
                
                <div className="h-25 flex items-start justify-center mb-4">
                  <img
                    src={product.image}
                    alt={product.name}
                    className="max-h-full max-w-full object-contain"
                  />
                </div>
                <h3 className="font-semibold text-sm">{product.name}</h3>
                <p className="text-gray-800">Rs. {product.price}</p>
              </div>
            );
          })}
        </div> */}
      </div>
    </div>
  );
};

export default ProductGrid;
