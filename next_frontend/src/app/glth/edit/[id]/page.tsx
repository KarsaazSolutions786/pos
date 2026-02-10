"use client";

import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import GltHForm, { GltHData } from "@/components/GltHForm";
import { useRouter, useParams } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import { UpdateButton } from "@/components/ui";

// Mock function to fetch data by id
const fetchGltHById = async (id: string): Promise<GltHData> => {
  // Replace with real API call
  return {
    code: "GH01",
    bookCode: "BK01",
    virtualCode: "VC01",
    tBook: "TB01",
    tType: "TypeA",
    tDate: "2024-07-01",
    bUnit: "Unit1",
    status: "active",
    remarks: "Sample remarks",
    userName: "User1",
    createDate: "2024-07-01",
    createTime: "10:00",
    updateUser: "User1",
    updateDate: "2024-07-01",
    updateTime: "10:30",
    block: "no",
    lock: "no",
    totalAmount: "1000",
  };
};

export default function GltHEditPage() {
  const router = useRouter();
  const params = useParams();
  const id = params.id as string;
  const [initialData, setInitialData] = useState<GltHData | null>(null);
  const [loading, setLoading] = useState(true);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    fetchGltHById(id).then((data) => {
      setInitialData(data);
      setLoading(false);
    });
  }, [id]);

  const handleSubmit = (data: GltHData) => {
    // Replace with real API call
    alert("Glt H updated successfully!");
    router.push("/glth");
  };

  const handleUpdateClick = () => {
    if (formRef.current) {
      formRef.current.requestSubmit();
    }
  };

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">Glt H - Edit</h1>
              <UpdateButton onClick={() => formRef.current?.requestSubmit()}>
                Update GltH
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {loading ? (
                <div>Loading...</div>
              ) : (
                <GltHForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel="Update Glt H"
                  formRef={formRef as React.RefObject<HTMLFormElement>}
                />
              )}
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
