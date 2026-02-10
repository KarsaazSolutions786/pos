"use client";

import { useState, useRef } from "react";
import { useRouter } from "next/navigation";
import { useAuth } from "@/contexts/AuthContext";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import BankGroupForm, { BankGroupData } from "@/components/BankGroupForm";
import { useTranslations } from "@/hooks/useTranslations";

export default function AddBankGroupPage() {
    const router = useRouter();
    const { user } = useAuth();
    const { t, isRTL } = useTranslations();
    const formRef = useRef<HTMLFormElement>(null);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState<string | null>(null);
    const [success, setSuccess] = useState(false);

    const handleSubmit = async (data: BankGroupData) => {
        console.log("Submitting Bank Group Data:", data);
        try {
            setLoading(true);
            setError(null);
            setSuccess(false);

            const formData = new FormData();
            formData.append("name", data.name);
            formData.append("Remarks", data.Remarks || "");
            formData.append("UserName", data.UserName || "");
            formData.append("Block", data.Block);
            formData.append("BUnit", data.BUnit || "");

            const response = await fetch(
                "/api/v1.php?table=psbankgroup&action=insert",
                {
                    method: "POST",
                    headers: {
                        "X-Auth-Token": user?.apiKey || "123",
                    },
                    body: formData,
                }
            );

            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);

            const responseText = await response.text();
            console.log("Raw Response:", responseText);
            const jsonMatch = responseText.match(/\{[\s\S]*\}$/);

            if (!jsonMatch) {
                if (responseText.includes("Duplicate entry")) {
                    throw new Error("Bank group with this name already exists.");
                }
                throw new Error("Invalid response format");
            }

            const result = JSON.parse(jsonMatch[0]);
            console.log("Parsed Result:", result);

            if (result.success) {
                setSuccess(true);
                setTimeout(() => router.push("/bank-groups"), 1500);
            } else {
                throw new Error(result.message || "Failed to save Bank group");
            }
        } catch (err) {
            console.error("Error saving Bank group:", err);
            setError(err instanceof Error ? err.message : "Failed to save Bank group");
        } finally {
            setLoading(false);
        }
    };

    return (
        <ProtectedRoute>
            <div className="flex h-screen bg-gray-50">
                <Sidebar />
                <div className="flex-1 flex flex-col overflow-hidden">
                    <header className="bg-white shadow-sm border-b border-gray-200">
                        <div className="flex justify-between items-center px-6 py-4">
                            <button
                                onClick={() => router.push("/bank-groups")}
                                className="bg-red-100 text-red-500 cursor-pointer px-4 py-2 rounded hover:bg-red-200"
                            >
                                {t("btn_back", "Back")}
                            </button>
                            <h1 className="text-2xl font-bold text-gray-900">
                                {t("page_title_add_bank_group", "Add New Bank Group")}
                            </h1>
                            <button
                                onClick={() => formRef.current?.requestSubmit()}
                                disabled={loading}
                                className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 disabled:opacity-50"
                            >
                                {loading ? t("btn_saving", "Saving...") : t("btn_save_bank_group", "Save Bank Group")}
                            </button>
                        </div>
                    </header>

                    <main className="flex-1 overflow-y-auto">
                        <div className="p-6">
                            {success && (
                                <div className="mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
                                    {t("msg_bank_group_saved", "Bank group saved successfully! Redirecting...")}
                                </div>
                            )}
                            {error && (
                                <div className="mb-6 p-4 bg-red-50 border border-red-200 rounded-md">
                                    {error}
                                </div>
                            )}
                            <BankGroupForm
                                mode="add"
                                onSubmit={handleSubmit}
                                submitLabel={loading ? t("btn_saving", "Saving...") : t("btn_save_bank_group", "Save Bank Group")}
                                formRef={formRef}
                            />
                        </div>
                    </main>
                </div>
            </div>
        </ProtectedRoute>
    );
}
