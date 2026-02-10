import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";

export const fetchBunitID = createAsyncThunk(
  "bunit/fetchBunitID",
  async (apiKey: string | undefined, { rejectWithValue }) => {
    try {
      const response = await fetch(`/api/v1.php?table=pBU&action=list`, {
        method: "GET",
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      if (!response.ok) {
        throw new Error("Failed to fetch Business Units");
      }

      const result = await response.json();
      console.log("🚀 ~ fetchBunitID ~ result:", result);

      if (result.success && result.data) {
        return result.data.map((account: any) => ({
          value: account.Code,
          label: account.Name,
        }));
      } else {
        return rejectWithValue("No Business Unit data found");
      }
    } catch (error: any) {
      return rejectWithValue(error.message || "Unknown error occurred");
    }
  }
);

interface BunitState {
  bunitID: { value: string; label: string }[];
  loading: boolean;
  error: string | null;
}

const initialState: BunitState = {
  bunitID: [],
  loading: false,
  error: null,
};

const bunitSlice = createSlice({
  name: "bunit",
  initialState,
  reducers: {},
  extraReducers: (builder) => {
    builder
      .addCase(fetchBunitID.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchBunitID.fulfilled, (state, action) => {
        state.loading = false;
        state.bunitID = action.payload;
      })
      .addCase(fetchBunitID.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload as string;
      });
  },
});

export const selectBunitID = (state: any) => state.bunit.bunitID;
export const selectBunitLoading = (state: any) => state.bunit.loading;
export const selectBunitError = (state: any) => state.bunit.error;

export default bunitSlice.reducer;
