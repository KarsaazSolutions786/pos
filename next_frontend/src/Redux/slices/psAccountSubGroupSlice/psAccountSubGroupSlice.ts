import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

// -------------------- Types --------------------
interface PsAccountSubGroup {
  value: string;
  label: string;
}

interface PsAccountSubGroupState {
  accountSubGroups: PsAccountSubGroup[];
  loading: boolean;
  error: string | null;
}

// -------------------- Initial State --------------------
const initialState: PsAccountSubGroupState = {
  accountSubGroups: [],
  loading: false,
  error: null,
};

// -------------------- Async Thunk --------------------
export const fetchPsAccountSubGroup = createAsyncThunk<
  PsAccountSubGroup[],              // return type
  string | undefined,              // argument type (apiKey)
  { rejectValue: string }          // reject value type
>(
  "psAccountSubGroup/fetch",
  async (apiKey, thunkAPI) => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "psAccountSubGroup",
          action: "list",
        },
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data;

      if (result.success && result.data) {
        return result.data.map((account: any) => ({
          value: account.Code,
          label: account.Name,
        }));
      } else {
        return thunkAPI.rejectWithValue("No product group data found");
      }
    } catch (error: any) {
      return thunkAPI.rejectWithValue(
        error.response?.data?.message || "Network error"
      );
    }
  }
);

// -------------------- Slice --------------------
const psAccountSubGroupSlice = createSlice({
  name: "psAccountSubGroup",
  initialState,
  reducers: {},
  extraReducers: (builder) => {
    builder
      .addCase(fetchPsAccountSubGroup.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchPsAccountSubGroup.fulfilled, (state, action) => {
        state.accountSubGroups = action.payload;
        state.loading = false;
      })
      .addCase(fetchPsAccountSubGroup.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Failed to fetch product groups";
        state.accountSubGroups = [];
      });
  },
});

export default psAccountSubGroupSlice.reducer;

// -------------------- Selector --------------------
export const selectPsAccountSubGroup = (state: RootState) => ({
  accountSubGroups: state.psAccountSubGroup.accountSubGroups,
  loading: state.psAccountSubGroup.loading,
  error: state.psAccountSubGroup.error,
});
