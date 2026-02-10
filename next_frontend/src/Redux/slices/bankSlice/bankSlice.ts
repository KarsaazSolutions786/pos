import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

// Bank data ka interface
interface BankData {
  id: string;
  old_code: string;     // Bank Name
  bank_title: string;   // Branch Name
  account_no: string;   // Account Number
  business_id: string;  // IBAN
  group_id: string;     // Swift Code
  CreateDate?: string;
  UpdateDate?: string;
  [key: string]: any;
}

interface BanksState {
  banksList: BankData[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: BanksState = {
  banksList: [],
  total: 0,
  loading: false,
  error: null,
};

// ✅ Thunk for fetching banks
export const fetchBanks = createAsyncThunk<
  { data: BankData[]; total: number },
  string | undefined,
  { rejectValue: string }
>(
  "banks/fetchBanks",
  async (apiKey, thunkAPI) => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "pBank",
          action: "list",
        },
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data;

      if (result.success && result.data) {
        const formattedData: BankData[] = result.data.map((bank: any) => ({
          id: bank.id,
          old_code: bank.old_code,
          bank_name:bank.bank_name,
          account_title: bank.account_title,
          account_no: bank.account_no,
          business_id: bank.business_id,
          group_id: bank.group_id,
        }));

        return result;
      } else {
        return thunkAPI.rejectWithValue("No bank data found");
      }
    } catch (error) {
      return thunkAPI.rejectWithValue("Network error");
    }
  }
);

const bankSlice = createSlice({
  name: "banks",
  initialState,
  reducers: {
    removeBank: (state, action: PayloadAction<string>) => {
      const bankId = action.payload;
      state.banksList = state.banksList.filter(bank => bank.id !== bankId);
      state.total = state.banksList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchBanks.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchBanks.fulfilled, (state, action) => {
        state.banksList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchBanks.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Failed to fetch banks";
        state.banksList = [];
        state.total = 0;
      });
  },
});

export default bankSlice.reducer;
export const { removeBank } = bankSlice.actions;

export const selectBanks = (state: RootState) => state.banks;
