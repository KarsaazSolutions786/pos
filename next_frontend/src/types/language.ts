export interface Language {
  id: number;
  name: string;
  direction: "ltr" | "rtl";
  active: number;
  lang_code: string;
  icon: string;
}

export interface TranslationMap {
  [key: string]: string;
}

export interface LanguageState {
  languages: Language[];
  currentLanguage: Language | null;
  translations: TranslationMap;
  isLoading: boolean;
  error: string | null;
}
