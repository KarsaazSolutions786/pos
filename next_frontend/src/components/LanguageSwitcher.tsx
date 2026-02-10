"use client";

import React, { useState, useRef, useEffect } from "react";
import { useSelector, useDispatch } from "react-redux";
import {
  selectLanguages,
  selectCurrentLanguage,
  fetchTranslations,
} from "@/Redux/slices/languageSlice/languageSlice";
import { Globe } from "lucide-react";

export default function LanguageSwitcher() {
  const languages = useSelector(selectLanguages);
  const currentLanguage = useSelector(selectCurrentLanguage);
  const dispatch = useDispatch();
  const [isOpen, setIsOpen] = useState(false);
  const dropdownRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    function handleClickOutside(event: MouseEvent) {
      if (
        dropdownRef.current &&
        !dropdownRef.current.contains(event.target as Node)
      ) {
        setIsOpen(false);
      }
    }
    document.addEventListener("mousedown", handleClickOutside);
    return () => document.removeEventListener("mousedown", handleClickOutside);
  }, []);

  const handleLanguageChange = (languageId: number) => {
    dispatch(fetchTranslations(languageId) as any);
    setIsOpen(false);
  };

  if (!languages.length) return null;

  return (
    <div className="relative" ref={dropdownRef}>
      <button
        onClick={() => setIsOpen(!isOpen)}
        className="flex items-center space-x-2 px-3 py-2 rounded-lg text-sm text-gray-300 hover:text-white hover:bg-gray-700 transition-all duration-200"
      >
        <Globe className="h-4 w-4" />
        <span className="font-medium">
          {currentLanguage?.name || "Language"}
        </span>
        <span className="text-xs">{isOpen ? "▲" : "▼"}</span>
      </button>

      {isOpen && (
        <div className="absolute left-0 mt-1 w-44 bg-gray-700 border border-gray-600 rounded-lg shadow-xl z-50 overflow-hidden">
          {languages.map((lang) => (
            <button
              key={lang.id}
              onClick={() => handleLanguageChange(lang.id)}
              className={`w-full text-left px-4 py-2.5 text-sm flex items-center justify-between transition-colors ${
                currentLanguage?.id === lang.id
                  ? "bg-blue-600 text-white"
                  : "text-gray-300 hover:bg-gray-600 hover:text-white"
              }`}
            >
              <span className="font-medium">{lang.name}</span>
              <span className="text-xs opacity-70 uppercase">
                {lang.lang_code}
              </span>
            </button>
          ))}
        </div>
      )}
    </div>
  );
}
