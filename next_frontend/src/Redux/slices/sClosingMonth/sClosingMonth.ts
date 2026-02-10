import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

// --- Type for Closing Month
interface ClosingMonthData {
  Code: string;
  VMonth: number;
  VYear: number;
  CloseStatus: string;
  DefaultMonth?: boolean;
  UserName?: string;
  CreateDate?: string;
  UpdateDate?: string;
  [key: string]: any;
}

// --- State
interface ClosingMonthState {
  closingMonthsList: ClosingMonthData[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: ClosingMonthState = {
  closingMonthsList: [],
  total: 0,
  loading: false,
  error: null,
};

// --- Thunk to fetch closing months
export const fetchClosingMonths = createAsyncThunk<
  { data: ClosingMonthData[]; total: number },
  string | undefined,
  { rejectValue: string }
>(
  "closingMonth/fetchClosingMonths",
  async (apiKey, thunkAPI) => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "sClosingMonth",
          action: "list",
        },
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data;

      if (result.success && result.data) {
        const formattedData: ClosingMonthData[] = result.data.map((item: any) => ({
          Code: item.Code,
          VMonth: item.VMonth,
          VYear: item.VYear,
          CloseStatus: item.CloseStatus,
          DefaultMonth: item.DefaultMonth,
          UserName: item.UserName || "N/A",
          CreateDate: item.CreateDate,
          UpdateDate: item.UpdateDate,
        }));

        return { data: formattedData, total: result.total || formattedData.length };
      } else {
        return thunkAPI.rejectWithValue("No closing month data found");
      }
    } catch (error) {
      return thunkAPI.rejectWithValue("Network error");
    }
  }
);

// --- Slice
const closingMonthSlice = createSlice({
  name: "closingMonth",
  initialState,
  reducers: {
    removeClosingMonth: (state, action: PayloadAction<string>) => {
      const code = action.payload;
      state.closingMonthsList = state.closingMonthsList.filter(item => item.Code !== code);
      state.total = state.closingMonthsList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchClosingMonths.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchClosingMonths.fulfilled, (state, action) => {
        state.closingMonthsList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchClosingMonths.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Failed to fetch closing months";
        state.closingMonthsList = [];
        state.total = 0;
      });
  },
});

export default closingMonthSlice.reducer;
export const { removeClosingMonth } = closingMonthSlice.actions;

export const selectClosingMonthState = (state: RootState) => ({
  closingMonthsList: state.closingMonthData.closingMonthsList,
  total: state.closingMonthData.total,
  isLoading: state.closingMonthData.loading,
  error: state.closingMonthData.error,
});
