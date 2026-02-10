import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

export interface EmployeeGroupData {
  ID: string;
  name: string;
  remarks: string;
  block: string;
  BUnit: string;
  UserName: string;
}

interface EmployeeGroupApiResponse {
  ID: string;
  Name: string;
  Remarks?: string;
  Block: string;
  BUnit: string;
  UserName: string;
}

interface EmployeeGroupState {
  employeeGroupsList: EmployeeGroupData[];
  loading: boolean;
  error: string | null;
}

const initialState: EmployeeGroupState = {
  employeeGroupsList: [],
  loading: false,
  error: null,
};

export const fetchEmployeeGroups = createAsyncThunk<
  EmployeeGroupData[],
  string | undefined,
  { rejectValue: string }
>("employeeGroups/fetchEmployeeGroups", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "psEmployeeGroup",
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formattedData: EmployeeGroupData[] = result.data.map(
        (item: EmployeeGroupApiResponse) => ({
          ID: item.ID,
          name: item.Name,
          remarks: item.Remarks || "",
          block: item.Block === "1" ? "yes" : "no",
          BUnit: item.BUnit,
          UserName: item.UserName,
        })
      );

      return formattedData;
    } else {
      return thunkAPI.rejectWithValue("No employee group data found");
    }
  } catch {
    return thunkAPI.rejectWithValue("Failed to fetch employee groups");
  }
});

const employeeGroupSlice = createSlice({
  name: "employeeGroups",
  initialState,
  reducers: {
    removeEmployeeGroup: (state, action: PayloadAction<string>) => {
      state.employeeGroupsList = state.employeeGroupsList.filter(
        (item) => item.ID !== action.payload
      );
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchEmployeeGroups.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchEmployeeGroups.fulfilled, (state, action: PayloadAction<EmployeeGroupData[]>) => {
        state.employeeGroupsList = action.payload;
        state.loading = false;
      })
      .addCase(fetchEmployeeGroups.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Failed to fetch employee groups";
        state.employeeGroupsList = [];
      });
  },
});

export const { removeEmployeeGroup } = employeeGroupSlice.actions;

export default employeeGroupSlice.reducer;

export const selectEmployeeGroupsState = (state: RootState) => ({
  employeeGroupsList: state.employeeGroupData.employeeGroupsList,
  isLoading: state.employeeGroupData.loading,
  error: state.employeeGroupData.error,
});
