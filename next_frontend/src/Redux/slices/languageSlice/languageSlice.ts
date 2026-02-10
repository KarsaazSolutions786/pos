import { createSlice, createAsyncThunk, PayloadAction } from "@reduxjs/toolkit";
import { Language, TranslationMap, LanguageState } from "@/types/language";
import { RootState } from "../store";
import {
  saveLanguagePreference,
  getLanguagePreference,
} from "@/utils/languageStorage";

const initialState: LanguageState = {
  languages: [],
  currentLanguage: null,
  translations: {},
  isLoading: false,
  error: null,
};

// Fetch available languages
export const fetchLanguages = createAsyncThunk(
  "language/fetchLanguages",
  async () => {
    const response = await fetch("/custom_apis/get_languages.php");
    const data = await response.json();
    if (!data.success) throw new Error("Failed to fetch languages");
    return {
      languages: data.languages as Language[],
      selectedLanguageId: data.selected_language_id as number,
    };
  }
);

// Fetch translations for a specific language
export const fetchTranslations = createAsyncThunk(
  "language/fetchTranslations",
  async (languageId: number) => {
    const response = await fetch(
      `/custom_apis/get_translations.php?language_id=${languageId}`
    );
    const data = await response.json();
    if (!data.success) throw new Error("Failed to fetch translations");
    return {
      language: data.language as Language,
      translations: data.translations as TranslationMap,
    };
  }
);

const languageSlice = createSlice({
  name: "language",
  initialState,
  reducers: {},
  extraReducers: (builder) => {
    // fetchLanguages
    builder.addCase(fetchLanguages.pending, (state) => {
      state.isLoading = true;
      state.error = null;
    });
    builder.addCase(fetchLanguages.fulfilled, (state, action) => {
      state.languages = action.payload.languages;
      state.isLoading = false;
    });
    builder.addCase(fetchLanguages.rejected, (state, action) => {
      state.isLoading = false;
      state.error = action.error.message || "Failed to fetch languages";
    });

    // fetchTranslations
    builder.addCase(fetchTranslations.pending, (state) => {
      state.isLoading = true;
      state.error = null;
    });
    builder.addCase(fetchTranslations.fulfilled, (state, action) => {
      state.currentLanguage = action.payload.language;
      state.translations = action.payload.translations;
      state.isLoading = false;
      // Save preference
      if (action.payload.language?.id) {
        saveLanguagePreference(action.payload.language.id);
      }
    });
    builder.addCase(fetchTranslations.rejected, (state, action) => {
      state.isLoading = false;
      state.error = action.error.message || "Failed to fetch translations";
    });
  },
});

// Selectors
export const selectLanguageState = (state: RootState) => state.language;
export const selectTranslations = (state: RootState) =>
  state.language.translations;
export const selectCurrentLanguage = (state: RootState) =>
  state.language.currentLanguage;
export const selectLanguages = (state: RootState) => state.language.languages;
export const selectIsRTL = (state: RootState) =>
  state.language.currentLanguage?.direction === "rtl";

export default languageSlice.reducer;
