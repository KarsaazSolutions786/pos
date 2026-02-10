import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

interface EmployeeState {
  employeelist: [];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState = {
  employeelist: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchEmployees = createAsyncThunk<
  { data: []; total: number },
  string | undefined,
  { rejectValue: string }
>("employees/fetchEmployees", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "pEmployee",
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formatted: [] = result.data.map((employee: any) => ({
        ...employee,
        Block: employee.Block === "0" ? "No" : "Yes",
      }));

      return { data: formatted, total: result.total || formatted.length };
    } else {
      return thunkAPI.rejectWithValue("No employee data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

const employeeSlice = createSlice({
  name: "employeelist",
  initialState,
  reducers: {
    removeEmployee: (state, action) => {
      const employeeId = action.payload;
      state.employeelist = state.employeelist.filter(
        (employee) => employee.ID !== employeeId
      );
      state.total = state.employeelist.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchEmployees.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchEmployees.fulfilled, (state, action) => {
        state.employeelist = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchEmployees.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.employeelist = [];
        state.total = 0;
      });
  },
});

export default employeeSlice.reducer;
export const { removeEmployee } = employeeSlice.actions;

export const employeeState = (state: RootState) => ({
  employeelist: state.employeeData.employeelist,
  isLoading: state.employeeData.loading,
  error: state.employeeData.error,
  total: state.employeeData.total,
});
