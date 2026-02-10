import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store"; 


interface CustomerState {
  customerslist: [];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState = {
  customerslist: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchCustomerList = createAsyncThunk<
  { data; total: number },
  string | undefined, 
  { rejectValue: string }
>("customerslist/fetchCustomerList", async (apiKey, thunkAPI) => {
    debugger
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "pCustomer",
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formatted: [] = result.data.map((customer: any) => ({
        ...customer,
        Block: customer.Block === "0" ? "No" : "Yes",
      }));

      return { data: formatted, total: result.total || formatted.length };
    } else {
      return thunkAPI.rejectWithValue("No customer data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

const customerSlice = createSlice({
  name: "customerslist",
  initialState,
  reducers: {
    removeCustomer: (state, action) => {
      debugger
   const customerId = action.payload;
   state.customerslist = state.customerslist.filter(customer => customer.ID !== customerId);
   state.total = state.customerslist.length;
}
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchCustomerList.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchCustomerList.fulfilled, (state, action) => {
        state.customerslist = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchCustomerList.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.customerslist = [];
        state.total = 0;
      });
  },
});

export default customerSlice.reducer;
export const { removeCustomer } = customerSlice.actions;

export const customerState = (state: RootState) => ({
  customerslist: state.customerData.customerslist,
  isLoading: state.customerData.loading,
  error: state.customerData.error,
  total: state.customerData.total,
});

