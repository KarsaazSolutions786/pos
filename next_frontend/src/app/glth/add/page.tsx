"use client";

import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";
import GltHForm, { GltHData } from "@/components/GltHForm";
import { useRouter } from "next/navigation";
import { useRef } from "react";
import { SaveButton } from "@/components/ui";

export default function GltHAddPage() {
  const router = useRouter();
  const formRef = useRef<HTMLFormElement>(null);

  const handleSubmit = (data: GltHData) => {
    // Here you can add API call to save data
    alert("Glt H data saved successfully!");
    router.push("/glth");
  };

  const handleSaveClick = () => {
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
              <h1 className="text-2xl font-bold text-gray-900">
                Glt H - Add New
              </h1>
              <SaveButton onClick={() => formRef.current?.requestSubmit()}>
                Save GltH
              </SaveButton>
            </div>
          </header>
          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <GltHForm
                mode="add"
                onSubmit={handleSubmit}
                submitLabel="Save Glt H"
                formRef={formRef as React.RefObject<HTMLFormElement>}
              />
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
