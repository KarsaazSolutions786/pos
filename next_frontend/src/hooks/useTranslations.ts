"use client";

import { useSelector } from "react-redux";
import {
  selectTranslations,
  selectCurrentLanguage,
  selectIsRTL,
} from "@/Redux/slices/languageSlice/languageSlice";

export function useTranslations() {
  const translations = useSelector(selectTranslations);
  const currentLanguage = useSelector(selectCurrentLanguage);
  const isRTL = useSelector(selectIsRTL);

  const t = (key: string, fallback?: string): string => {
    return translations[key] || fallback || key;
  };

  return { t, currentLanguage, isRTL, translations };
}
