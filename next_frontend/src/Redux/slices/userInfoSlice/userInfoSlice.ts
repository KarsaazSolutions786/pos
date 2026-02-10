import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

interface UserInfoData {
  id: string;
  userName: string;
  cellNo: string;
  email: string;
  loginUserName: string;
  password: string;
  passwordHint: string;
  groupCode: string;
  remarks: string;
  userType: string;
  isAccountActive: string;
  noOfAttempt: string;
  noOfWrongAttempt: string;
}

interface UserInfoState {
  userInfoList: UserInfoData[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: UserInfoState = {
  userInfoList: [],
  total: 0,
  loading: false,
  error: null,
};

export const fetchUserInfoList = createAsyncThunk<
  { data: UserInfoData[]; total: number },
  string | undefined,
  { rejectValue: string }
>("userInfo/fetch", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "umUserInfo",
        action: "list",
      },
      headers: {
        "X-Auth-Token": apiKey || "123",
        "Content-Type": "application/json",
      },
    });

    const result = response.data;

    if (result.success && result.data) {
      const formattedData: UserInfoData[] = result.data.map((item: any) => ({
        id: item.Code,
        userName: item.UserName || "N/A",
        cellNo: item.CellNo || "N/A",
        email: item.Email || "N/A",
        loginUserName: item.LoginUserName,
        password: "********",
        passwordHint: item.PasswordHint || "N/A",
        groupCode: item.GroupCode || "N/A",
        remarks: item.Remarks || "N/A",
        userType: item.UserType || "N/A",
        isAccountActive: item.isAccountActive === "1" ? "yes" : "no",
        noOfAttempt: item.NoOfAttempt,
        noOfWrongAttempt: item.NoOfWorngAttempt,
      }));

      return { data: formattedData, total: formattedData.length };
    } else {
      return thunkAPI.rejectWithValue("No user info data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

const userInfoSlice = createSlice({
  name: "userInfo",
  initialState,
  reducers: {
    removeUserInfo: (state, action) => {
      const id = action.payload;
      state.userInfoList = state.userInfoList.filter((item) => item.id !== id);
      state.total = state.userInfoList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchUserInfoList.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchUserInfoList.fulfilled, (state, action) => {
        state.userInfoList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchUserInfoList.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.userInfoList = [];
        state.total = 0;
      });
  },
});

export default userInfoSlice.reducer;
export const { removeUserInfo } = userInfoSlice.actions;

export const userInfoState = (state: RootState) => ({
  userInfoList: state.userInfoData.userInfoList,
  total: state.userInfoData.total,
  loading: state.userInfoData.loading,
  error: state.userInfoData.error,
});
