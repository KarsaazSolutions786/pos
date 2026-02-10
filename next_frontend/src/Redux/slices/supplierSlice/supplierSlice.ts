import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

interface SupplierData {
  ID: string;
  Block: string;
  [key: string]: any;
}

interface SupplierState {
  supplierslist: SupplierData[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState = {
  supplierslist: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchSupplierList = createAsyncThunk<
  { data: []; total: number },
  string | undefined,
  { rejectValue: string }
>(
  "supplierslist/fetchSupplierList",
  async (apiKey, thunkAPI) => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "pSupplier",
          action: "list",
        },
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data;

      if (result.success && result.data) {
        const formatted: [] = result.data.map((supplier) => ({
          ...supplier,
          Block: supplier.Block === "0" ? "No" : "Yes",
        }));

        return { data: formatted, total: result.total || formatted.length };
      } else {
        return thunkAPI.rejectWithValue("No supplier data found");
      }
    } catch (error) {
      return thunkAPI.rejectWithValue("Network error");
    }
  }
);

const supplierSlice = createSlice({
  name: "selectSupplierState",
  initialState,
  reducers: {
    removeSupplier: (state, action: PayloadAction<string>) => {
      const supplierId = action.payload;
      state.supplierslist = state.supplierslist.filter(supplier => supplier.ID !== supplierId);
      state.total = state.supplierslist.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchSupplierList.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchSupplierList.fulfilled, (state, action) => {
        state.supplierslist = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchSupplierList.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.supplierslist = [];
        state.total = 0;
      });
  },
});

export default supplierSlice.reducer;
export const { removeSupplier } = supplierSlice.actions;

export const supplierState = (state: RootState) => ({
  supplierslist: state.supplierData.supplierslist,
  isLoading: state.supplierData.loading,
  error: state.supplierData.error,
  total: state.supplierData.total,
});
