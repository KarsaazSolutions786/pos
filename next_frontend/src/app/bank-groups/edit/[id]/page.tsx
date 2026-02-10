"use client";

import { useState, useEffect, useRef } from "react";
import { useRouter, useParams } from "next/navigation";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import { useAuth } from "@/contexts/AuthContext";
import BankGroupForm, { BankGroupData } from "@/components/BankGroupForm";
import { useTranslations } from "@/hooks/useTranslations";

export default function EditBankGroupPage() {
    const router = useRouter();
    const params = useParams();
    const id = params?.id && typeof params.id === "string" ? params.id : null;
    const { t, isRTL } = useTranslations();
    console.log("🚀 ~ EditBankGroupPage ~ id:", id, params)

    const { user } = useAuth();
    const formRef = useRef<HTMLFormElement>(null);

    const [bankGroup, setBankGroup] = useState<BankGroupData | null>(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);
    const [updateLoading, setUpdateLoading] = useState(false);
    const [updateError, setUpdateError] = useState<string | null>(null);
    const [updateSuccess, setUpdateSuccess] = useState(false);

    // Fetch bank group data
    useEffect(() => {
        const fetchBankGroup = async () => {
            debugger
            if (!id) {
                setError("Invalid bank group ID");
                setLoading(false);
                return;
            }

            try {
                setLoading(true);
                setError(null);

                const response = await fetch(
                    `/api/v1.php?table=psbankgroup&action=view&editid1=${id}`,
                    {
                        headers: {
                            "X-Auth-Token": user?.apiKey || "123",
                        },
                    }
                );

                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);

                const responseText = await response.text();
                const jsonMatch = responseText.match(/\{[\s\S]*\}$/);
                if (!jsonMatch) throw new Error("Invalid response format");

                const result = JSON.parse(jsonMatch[0]);

                if (result.success && result.data) {
                    const convertedData = {
                        ID: result.data.id,
                        name: result.data.name,
                        remarks: result.data.Remarks || "",
                        block: result.data.Block,
                        BUnit: result.data.BUnit,
                        UserName: result.data.UserName,
                    };
                    setBankGroup(convertedData);
                } else {
                    throw new Error(result.message || "Failed to fetch bank group");
                }
            } catch (err) {
                setError(err instanceof Error ? err.message : "Failed to fetch bank group");
            } finally {
                setLoading(false);
            }
        };

        fetchBankGroup();
    }, [id, user?.apiKey]);

    const handleSubmit = async (data) => {
        if (!id) {
            setUpdateError("Invalid bank group ID");
            return;
        }

        try {
            setUpdateLoading(true);
            setUpdateError(null);
            setUpdateSuccess(false);

            const formData = new FormData();
            formData.append("BUnit", data.BUnit || "");
            formData.append("name", data.name);
            formData.append("Remarks", data.remarks || "");
            formData.append("UserName", data.UserName || "");
            formData.append("Block", data.block);

            const response = await fetch(
                `/api/v1.php?table=psBankGroup&action=update&editid1=${id}`,
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
            const jsonMatch = responseText.match(/\{[\s\S]*\}$/);
            if (!jsonMatch) throw new Error("Invalid response format");

            const result = JSON.parse(jsonMatch[0]);

            if (result.success) {
                setUpdateSuccess(true);
                setTimeout(() => {
                    router.push("/bank-groups");
                }, 1500);
            } else {
                throw new Error(result.message || "Failed to update bank group");
            }
        } catch (err) {
            setUpdateError(err instanceof Error ? err.message : "Failed to update bank group");
        } finally {
            setUpdateLoading(false);
        }
    };

    if (!id) {
        return (
            <ProtectedRoute>
                <div className="flex h-screen bg-gray-50">
                    <Sidebar />
                    <div className="flex-1 flex items-center justify-center">
                        <div className="text-center">
                            <p className="text-red-600 text-xl mb-4">{t("invalid_bank_group_id", "Invalid Bank Group ID")}</p>
                            <button
                                onClick={() => router.push("/bank-groups")}
                                className="px-4 py-2 bg-blue-600 text-white rounded-md"
                            >
                                {t("btn_back", "Back")}
                            </button>
                        </div>
                    </div>
                </div>
            </ProtectedRoute>
        );
    }

    if (loading) return <LoadingPlaceholder text={t("loading_bank_group", "Loading bank group...")} />;
    if (error) return <ErrorPlaceholder text={error} backPath="/bank-groups" />;
    if (!bankGroup) return <ErrorPlaceholder text={t("bank_group_not_found", "Bank group not found")} backPath="/bank-groups" />;

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
                            <h1 className="text-2xl font-bold text-gray-900">{t("page_title_edit_bank_group", "Edit Bank Group")}</h1>
                            <button
                                onClick={() => formRef.current?.requestSubmit()}
                                disabled={updateLoading}
                                className="px-4 py-2 bg-blue-600 text-white rounded-md disabled:opacity-50"
                            >
                                {updateLoading ? t("btn_updating", "Updating...") : t("btn_update_bank_group", "Update Bank Group")}
                            </button>
                        </div>
                    </header>
                    <main className="flex-1 overflow-y-auto p-6">
                        {updateSuccess && (
                            <div className="mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
                                <p className="text-green-800">{t("msg_bank_group_updated", "Bank group updated successfully! Redirecting...")}</p>
                            </div>
                        )}
                        {updateError && (
                            <div className="mb-6 p-4 bg-red-50 border border-red-200 rounded-md">
                                <p className="text-red-800">{updateError}</p>
                            </div>
                        )}
                        <BankGroupForm
                            mode="edit"
                            initialData={bankGroup}
                            onSubmit={handleSubmit}
                            submitLabel={updateLoading ? t("btn_updating", "Updating...") : t("btn_update_bank_group", "Update Bank Group")}
                            formRef={formRef}
                        />
                    </main>
                </div>
            </div>
        </ProtectedRoute>
    );
}

// Optional reusable components for loading and error
function LoadingPlaceholder({ text }: { text: string }) {
    return (
        <ProtectedRoute>
            <div className="flex h-screen items-center justify-center">
                <div className="text-center">
                    <div className="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mx-auto"></div>
                    <p className="mt-4 text-gray-600">{text}</p>
                </div>
            </div>
        </ProtectedRoute>
    );
}

function ErrorPlaceholder({ text, backPath }: { text: string; backPath: string }) {
    const router = useRouter();
    return (
        <ProtectedRoute>
            <div className="flex h-screen items-center justify-center">
                <div className="text-center">
                    <p className="text-red-600 text-xl mb-4">{text}</p>
                    <button
                        onClick={() => router.push(backPath)}
                        className="px-4 py-2 bg-blue-600 text-white rounded-md"
                    >
                        Back {/* Static fallback in sub-component */}
                    </button>
                </div>
            </div>
        </ProtectedRoute>
    );
}
