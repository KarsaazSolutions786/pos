import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

interface CustomerGroupData {
  ID: string;
  Block: string;
  [key: string]: any;
}

interface CustomerGroupState {
  customerGroupsList: CustomerGroupData[];
  loading: boolean;
  error: string | null;
}

const initialState: CustomerGroupState = {
  customerGroupsList: [],
  loading: false,
  error: null,
};

export const fetchCustomerGroups = createAsyncThunk<
  CustomerGroupData[],
  string | undefined,
  { rejectValue: string }
>(
  "customerGroups/fetchCustomerGroups",
  async (apiKey, thunkAPI) => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "psCustomerGroup",
          action: "list",
        },
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data;

      if (result.success && result.data) {
        const formattedData: CustomerGroupData[] = result.data.map((group: CustomerGroupData) => ({
          ...group,
          Block: group.Block === "0" ? "No" : "Yes",
        }));

        return formattedData;
      } else {
        return thunkAPI.rejectWithValue(result.message || "Unknown error occurred");
      }
    } catch (error) {
      return thunkAPI.rejectWithValue("Network error");
    }
  }
);

const customerGroupSlice = createSlice({
  name: "customerGroups",
  initialState,
  reducers: {
    removeCustomerGroup: (state, action: PayloadAction<string>) => {
      state.customerGroupsList = state.customerGroupsList.filter(
        (group) => group.ID !== action.payload
      );
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchCustomerGroups.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchCustomerGroups.fulfilled, (state, action: PayloadAction<CustomerGroupData[]>) => {
        state.customerGroupsList = action.payload;
        state.loading = false;
      })
      .addCase(fetchCustomerGroups.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Failed to fetch customer groups";
        state.customerGroupsList = [];
      });
  },
});

export const { removeCustomerGroup } = customerGroupSlice.actions;
export default customerGroupSlice.reducer;

export const selectCustomerGroupsState = (state: RootState) => ({
  customerGroupsList: state.customerGroupData.customerGroupsList,
  isLoading: state.customerGroupData.loading,
  error: state.customerGroupData.error,
});
