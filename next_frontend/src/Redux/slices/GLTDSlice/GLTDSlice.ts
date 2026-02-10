import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";
import axios from "axios";
import { RootState } from "../store";

interface GLTDState {
  gltdList: any[];
  total: number;
  loading: boolean;
  error: string | null;
}

const initialState: GLTDState = {
  gltdList: [],
  total: 0,
  loading: false,
  error: null,
};

// Thunk to fetch GLTD list
export const fetchGLTDList = createAsyncThunk<
  { data: any[]; total: number },
  string | undefined,
  { rejectValue: string }
>("gltd/fetchGLTDList", async (apiKey, thunkAPI) => {
  try {
    const response = await axios.get("/api/v1.php", {
      params: {
        table: "GLTD", // 👈 yahan GLTD table ka naam pass ho raha hai
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
        ...item,
        // 👇 yahan agar kisi field ka formatting karni ho to kar sakte ho
        Amount: parseFloat(item.Amount || 0),
        TDate: item.TDate ? new Date(item.TDate).toLocaleDateString() : "N/A",
      }));

      return { data: formatted, total: result.total || formatted.length };
    } else {
      return thunkAPI.rejectWithValue("No GLTD data found");
    }
  } catch (error) {
    return thunkAPI.rejectWithValue("Network error");
  }
});

const gltdSlice = createSlice({
  name: "gltd",
  initialState,
  reducers: {
    removeGLTD: (state, action) => {
      const recordId = action.payload;
      state.gltdList = state.gltdList.filter((rec) => rec.ID !== recordId);
      state.total = state.gltdList.length;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(fetchGLTDList.pending, (state) => {
        state.loading = true;
        state.error = null;
      })
      .addCase(fetchGLTDList.fulfilled, (state, action) => {
        state.gltdList = action.payload.data;
        state.total = action.payload.total;
        state.loading = false;
      })
      .addCase(fetchGLTDList.rejected, (state, action) => {
        state.loading = false;
        state.error = action.payload || "Something went wrong";
        state.gltdList = [];
        state.total = 0;
      });
  },
});

export default gltdSlice.reducer;
export const { removeGLTD } = gltdSlice.actions;

export const gltdState = (state: RootState) => ({
  gltdList: state.gltdData.gltdList,
  isLoading: state.gltdData.loading,
  error: state.gltdData.error,
  total: state.gltdData.total,
});
