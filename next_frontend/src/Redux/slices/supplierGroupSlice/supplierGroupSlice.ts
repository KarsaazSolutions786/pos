import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";

interface SupplierGroupState {
  supplierGroupList: any[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState = {
  supplierGroupList: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchSupplierGroups = createAsyncThunk<
  { data: []; total: number },
  string | undefined,
  { rejectValue: string }
>("supplierGroups/fetch", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "psSupplierGroup",
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formatted = result.data.map((item: any) => ({
        ID: item.ID,
        name: item.Name,
        remarks: item.Remarks || "",
        block: item.Block === "1" ? "yes" : "no",
        BUnit: item.BUnit,
        UserName: item.UserName,
      }));

      return { data: formatted, total: formatted.length };
    } else {
      return thunkAPI.rejectWithValue("No supplier group data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

const supplierGroupSlice = createSlice({
  name: "supplierGroups",
  initialState,
  reducers: {
    removeSupplierGroup: (state, action) => {
      const id = action.payload;
      state.supplierGroupList = state.supplierGroupList.filter((item) => item.ID !== id);
      state.total = state.supplierGroupList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchSupplierGroups.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchSupplierGroups.fulfilled, (state, action) => {
        state.supplierGroupList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchSupplierGroups.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.supplierGroupList = [];
        state.total = 0;
      });
  },
});

export default supplierGroupSlice.reducer;
export const { removeSupplierGroup } = supplierGroupSlice.actions;

export const supplierGroupState = (state) => ({
  supplierGroupList: state.supplierGroupData.supplierGroupList,
  total: state.supplierGroupData.total,
  loading: state.supplierGroupData.loading,
  error: state.supplierGroupData.error,
});