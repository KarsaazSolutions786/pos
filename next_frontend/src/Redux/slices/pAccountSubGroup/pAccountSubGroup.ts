import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

// ✅ Interface for Subgroup
interface SubgroupData {
  id: string;
  Code: string;
  Name: string;
  CoaCode: string;
  GroupCode: string;
  Remarks?: string;
  CreateDate?: string;
  UpdateDate?: string;
  [key: string]: any;
}

interface SubgroupState {
  subgroupList: SubgroupData[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: SubgroupState = {
  subgroupList: [],
  total: 0,
  loading: false,
  error: null,
};

// ✅ Thunk for fetching subgroups
export const fetchSubgroups = createAsyncThunk<
  { data: SubgroupData[]; total: number },
  string | undefined,
  { rejectValue: string }
>(
  "subgroups/fetchSubgroups",
  async (apiKey, thunkAPI) => {
    try {
      const response = await axios.get("/api/v1.php", {
        params: {
          table: "psaccountsubgroup_list", // 👈 table name
          action: "list",
        },
        headers: {
          "X-Auth-Token": apiKey || "123",
          "Content-Type": "application/json",
        },
      });

      const result = response.data;

      if (result.success && result.data) {
        const formattedData: SubgroupData[] = result.data.map((sub: any) => ({
          id: sub.id,
          Code: sub.Code,
          Name: sub.Name,
          CoaCode: sub.CoaCode,
          GroupCode: sub.GroupCode,
          Remarks: sub.Remarks,
          CreateDate: sub.CreateDate,
          UpdateDate: sub.UpdateDate,
        }));

        return { data: formattedData, total: formattedData.length };
      } else {
        return thunkAPI.rejectWithValue("No subgroup data found");
      }
    } catch (error) {
      return thunkAPI.rejectWithValue("Network error");
    }
  }
);

const subgroupSlice = createSlice({
  name: "subgroups",
  initialState,
  reducers: {
    removeSubgroup: (state, action: PayloadAction<string>) => {
      const subgroupId = action.payload;
      state.subgroupList = state.subgroupList.filter(
        (sub) => sub.id !== subgroupId
      );
      state.total = state.subgroupList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchSubgroups.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchSubgroups.fulfilled, (state, action) => {
        state.subgroupList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchSubgroups.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Failed to fetch subgroups";
        state.subgroupList = [];
        state.total = 0;
      });
  },
});

export default subgroupSlice.reducer;
export const { removeSubgroup } = subgroupSlice.actions;

export const selectSubgroups = (state: RootState) => state.subgroups;
