"use client";

import { useEffect } from "react";
import { useSelector } from "react-redux";
import { selectCurrentLanguage } from "@/Redux/slices/languageSlice/languageSlice";

export function LanguageDirectionUpdater() {
  const currentLanguage = useSelector(selectCurrentLanguage);

  useEffect(() => {
    if (currentLanguage) {
      document.documentElement.lang = currentLanguage.lang_code;
      document.documentElement.dir = currentLanguage.direction;
    }
  }, [currentLanguage]);

  return null;
}
