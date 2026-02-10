import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";
// import {  } from "../types"; // or define inline

interface ProductState {
  productlist: [];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState = {
  productlist: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchProducts = createAsyncThunk<
  { data: []; total: number },
  string | undefined,
  { rejectValue: string }
>("products/fetchProducts", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "pProductItems",
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formatted: [] = result.data.map((product: any) => ({
        ...product,
        Block: product.Block === "0" ? "No" : "Yes",
      }));

      return {
        data: formatted,
        total: result.total || formatted.length,
      };
    } else {
      return thunkAPI.rejectWithValue("No product data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

const productSlice = createSlice({
  name: "productlist",
  initialState,
  reducers: {
    removeProduct: (state, action) => {
      const productId = action.payload;
      state.productlist = state.productlist.filter(
        (product) => product.ID !== productId
      );
      state.total = state.productlist.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchProducts.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchProducts.fulfilled, (state, action) => {
        state.productlist = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchProducts.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.productlist = [];
        state.total = 0;
      });
  },
});

export default productSlice.reducer;
export const { removeProduct } = productSlice.actions;

export const productState = (state: RootState) => ({
  productlist: state.productData.productlist,
  isLoading: state.productData.loading,
  error: state.productData.error,
  total: state.productData.total,
});
