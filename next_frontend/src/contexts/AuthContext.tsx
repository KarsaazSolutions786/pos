"use client";

import React, { createContext, useContext, useState, useEffect } from "react";
import { User, LoginCredentials, AuthContextType } from "@/types/auth";
import { Provider } from "react-redux";
import store from "@/Redux/slices/store";
import {
  fetchLanguages,
  fetchTranslations,
} from "@/Redux/slices/languageSlice/languageSlice";
import { getLanguagePreference } from "@/utils/languageStorage";

const AuthContext = createContext<AuthContextType | undefined>(undefined);

function LanguageInitializer() {
  useEffect(() => {
    const initLanguages = async () => {
      try {
        const result = await store.dispatch(fetchLanguages()).unwrap();
        const savedLangId = getLanguagePreference();
        const langId = savedLangId || result.selectedLanguageId || 1;
        await store.dispatch(fetchTranslations(langId));
      } catch (error) {
        console.error("Failed to initialize languages:", error);
      }
    };
    initLanguages();
  }, []);

  return null;
}

export function AuthProvider({ children }: { children: React.ReactNode }) {
  const [user, setUser] = useState<User | null>(null);
  const [isLoading, setIsLoading] = useState(true);

  useEffect(() => {
    // Check if user is logged in from localStorage
    const savedUser = localStorage.getItem("user");
    if (savedUser) {
      setUser(JSON.parse(savedUser));
    }
    setIsLoading(false);
  }, []);

  const login = async (credentials: LoginCredentials): Promise<boolean> => {
    setIsLoading(true);

    try {
      const response = await fetch("/custom_apis/login.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          username: credentials.username,
          password: credentials.password,
        }),
      });

      if (!response.ok) {
        throw new Error("Login failed");
      }

      const result = await response.json();

      if (result.success) {
        const userData: User = {
          id: result.user.Code,
          username: result.user.LoginUserName,
          role: result.user.UserType || "user",
          name: result.user.LoginUserName,
          apiKey: result.user.api_key,
          email: result.user.Email,
          cellNo: result.user.CellNo,
        };

        setUser(userData);
        localStorage.setItem("user", JSON.stringify(userData));
        setIsLoading(false);
        return true;
      } else {
        throw new Error(result.message || "Login failed");
      }
    } catch (error) {
      console.error("Login error:", error);
      setIsLoading(false);
      return false;
    }
  };

  const logout = () => {
    setUser(null);
    localStorage.removeItem("user");
  };

  return (
    <Provider store={store}>
      <LanguageInitializer />
      <AuthContext.Provider value={{ user, login, logout, isLoading }}>
        {children}
      </AuthContext.Provider>
    </Provider>
  );
}

export function useAuth() {
  const context = useContext(AuthContext);
  if (context === undefined) {
    throw new Error("useAuth must be used within an AuthProvider");
  }
  return context;
}
