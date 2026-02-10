"use client";

import { useAuth } from "@/contexts/AuthContext";
import { LogOut } from "lucide-react";

export default function Header() {
  const { user, logout } = useAuth();

  return (
    <header className="bg-white border-b border-gray-200 shadow-sm px-6 py-3 flex items-center justify-between">
      {/* Left side */}
      <h1 className="text-lg font-semibold text-gray-800">Karsaaz POS</h1>

      {/* Right side (user info) */}
      <div className="flex items-center space-x-4">
        <div className="flex items-center space-x-2">
          <div className="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-semibold">
            {user?.name?.charAt(0).toUpperCase() || "U"}
          </div>
          <span className="text-sm font-medium text-gray-700">
            {user?.name || "User"}
          </span>
        </div>

        {/* Logout button */}
        <button
          onClick={logout}
          className="flex items-center space-x-1 text-sm text-gray-600 hover:text-red-600 transition-colors"
        >
          <LogOut className="h-4 w-4" />
          <span>Logout</span>
        </button>
      </div>
    </header>
  );
}
