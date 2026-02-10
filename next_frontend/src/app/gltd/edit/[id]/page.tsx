"use client";

import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import GLTDForm, { GLTDData } from "@/components/GLTDForm";
import { useRouter, useParams } from "next/navigation";
import { useEffect, useState, useRef } from "react";
import { UpdateButton } from "@/components/ui";

// Mock function to fetch data by id
const fetchGLTDById = async (id: string): Promise<GLTDData> => {
  // Replace with real API call
  return {
    code: "C01",
    codeD: "D01",
    bookCode: "B01",
    bookId: "BID01",
    virtualCode: "V01",
    status: "active",
    tDate: "2024-07-01",
    bUnit: "Unit1",
    tBook: "TBook1",
    tType: "TypeA",
    accountCode: "A01",
    billNo: "BILL01",
    chequeNo: "CHQ01",
    narration: "Sample narration",
    remarks: "Sample remarks",
    amount: "1000",
    storeCode: "S01",
    qty: "10",
    weight: "5",
    rate: "100",
    userName: "User1",
    createDate: "2024-07-01",
    createTime: "10:00",
    updateUser: "User1",
    updateDate: "2024-07-01",
    updateTime: "10:30",
    block: "no",
    productCode: "P01",
    productGroupCode: "PG01",
    unitCode: "U01",
  };
};

export default function GLTDEditPage() {
  const router = useRouter();
  const params = useParams();
  const id = params.id as string;
  const [initialData, setInitialData] = useState<GLTDData | null>(null);
  const [loading, setLoading] = useState(true);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    fetchGLTDById(id).then((data) => {
      setInitialData(data);
      setLoading(false);
    });
  }, [id]);

  const handleSubmit = (data: GLTDData) => {
    // Replace with real API call
    alert("GLTD updated successfully!");
    router.push("/gltd");
  };

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />
        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <h1 className="text-2xl font-bold text-gray-900">GLTD - Edit</h1>
              <UpdateButton onClick={() => formRef.current?.requestSubmit()}>
                Update GLTD
              </UpdateButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              {loading ? (
                <div>Loading...</div>
              ) : (
                <GLTDForm
                  mode="edit"
                  initialData={initialData || undefined}
                  onSubmit={handleSubmit}
                  submitLabel="Update GLTD"
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
