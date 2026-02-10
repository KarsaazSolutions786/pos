import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

// ✅ Har record ka structure
interface BankGroup {
  ID: string;
  Name: string;
  Block: string; // "Yes" | "No"
  // agar aur fields aati hain API se to yahan add kar lo
}

// ✅ Slice ka state
interface BankGroupState {
  bankgrouplist: BankGroup[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: BankGroupState = {
  bankgrouplist: [],
  total: 0,
  loading: false,
  error: null,
};

// ✅ Async thunk to fetch bank groups
export const fetchBankGroups = createAsyncThunk<
  { data: BankGroup[]; total: number },
  string | undefined,
  { rejectValue: string }
>("bankgroups/fetchBankGroups", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "psbankgroup", // 👈 tumhara table name
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formatted: BankGroup[] = result.data.map((group: any) => ({
        ...group,
        Block: group.Block === "0" ? "No" : "Yes",
      }));

      return { data: formatted, total: result.total || formatted.length };
    } else {
      return thunkAPI.rejectWithValue("No bank group data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

// ✅ Slice
const bankGroupSlice = createSlice({
  name: "bankgrouplist",
  initialState,
  reducers: {
    removeBankGroup: (state, action) => {
      const groupId = action.payload;
      state.bankgrouplist = state.bankgrouplist.filter(
        (group) => group.ID !== groupId
      );
      state.total = state.bankgrouplist.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchBankGroups.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchBankGroups.fulfilled, (state, action) => {
        state.bankgrouplist = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchBankGroups.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.bankgrouplist = [];
        state.total = 0;
      });
  },
});

export default bankGroupSlice.reducer;
export const { removeBankGroup } = bankGroupSlice.actions;

// ✅ Selector
export const bankGroupState = (state: RootState) => ({
  bankgrouplist: state.bankGroupData.bankgrouplist,
  isLoading: state.bankGroupData.loading,
  error: state.bankGroupData.error,
  total: state.bankGroupData.total,
});
