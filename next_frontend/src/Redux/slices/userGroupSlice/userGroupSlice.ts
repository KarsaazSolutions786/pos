import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

interface UserGroup {
  ID: string;
  name: string;
  remarks: string;
  block: string;
  BUnit: string;
  UserName: string;
}

interface UserGroupState {
  userGroupList: UserGroup[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: UserGroupState = {
  userGroupList: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchUserGroups = createAsyncThunk<
  { data: UserGroup[]; total: number },
  string | undefined,
  { rejectValue: string }
>("userGroups/fetch", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "psUserGroup",
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formatted = result.data.map((item: any) => ({
        ID: item.ID,
        name: item.Name,
        remarks: item.Remarks || "",
        block: item.Block === "1" ? "yes" : "no",
        BUnit: item.BUnit,
        UserName: item.UserName,
      }));

      return { data: formatted, total: formatted.length };
    } else {
      return thunkAPI.rejectWithValue("No user group data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

const userGroupSlice = createSlice({
  name: "userGroups",
  initialState,
  reducers: {
    removeUserGroup: (state, action) => {
      const id = action.payload;
      state.userGroupList = state.userGroupList.filter((item) => item.ID !== id);
      state.total = state.userGroupList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchUserGroups.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchUserGroups.fulfilled, (state, action) => {
        state.userGroupList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchUserGroups.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.userGroupList = [];
        state.total = 0;
      });
  },
});

export default userGroupSlice.reducer;
export const { removeUserGroup } = userGroupSlice.actions;

export const userGroupState = (state: RootState) => ({
  userGroupList: state.userGroupData.userGroupList,
  total: state.userGroupData.total,
  loading: state.userGroupData.loading,
  error: state.userGroupData.error,
});
