import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

interface AccountData {
  id: string;
  Code: string;
  Name: string;
  AccType: string;
  GroupCode: string;
  UserName: string;
  Block: string;
  ParentAccountCode?: string;
  VirtualCode?: string;
  Remarks: string;
  CreateDate?: string;
  UpdateDate?: string;
  [key: string]: any;
}

interface AccountsState {
  accountsList: AccountData[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: AccountsState = {
  accountsList: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchAccounts = createAsyncThunk<
  { data: AccountData[]; total: number },
  string | undefined,
  { rejectValue: string }
>(
  "accounts/fetchAccounts",
  async (apiKey, thunkAPI) => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "pAccounts",
          action: "list",
        },
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data;

      if (result.success && result.data) {
        const formattedData: AccountData[] = result.data.map((account: any) => ({
          id: account.ID,
          AccSubCode: account.AccSubCode,
          Code: account.Code,
          Name: account.Name,
          AccType: account.AccType,
          GroupCode: account.GroupCode,
          AccountName: account.Name ,
          UserName: account.UserName || "N/A",
          Block: account.Block === "0" ? "No" : "Yes",
          ParentAccountCode: account.ParentAccountCode,
          VirtualCode: account.VirtualCode,
          Remarks: account.Remarks || "N/A",
          CreateDate: account.CreateDate,
          UpdateDate: account.UpdateDate,
        }));

        return { data: formattedData, total: result.total || formattedData.length };
      } else {
        return thunkAPI.rejectWithValue("No account data found");
      }
    } catch (error) {
      return thunkAPI.rejectWithValue("Network error");
    }
  }
);

const accountsSlice = createSlice({
  name: "accounts",
  initialState,
  reducers: {
    removeAccount: (state, action: PayloadAction<string>) => {
      const accountId = action.payload;
      state.accountsList = state.accountsList.filter(account => account.id !== accountId);
      state.total = state.accountsList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchAccounts.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchAccounts.fulfilled, (state, action) => {
        state.accountsList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchAccounts.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Failed to fetch accounts";
        state.accountsList = [];
        state.total = 0;
      });
  },
});

export default accountsSlice.reducer;
export const { removeAccount } = accountsSlice.actions;

export const selectAccountsState = (state: RootState) => ({
  accountsList: state.accountsData.accountsList,
  total: state.accountsData.total,
  isLoading: state.accountsData.loading,
  error: state.accountsData.error,
});
