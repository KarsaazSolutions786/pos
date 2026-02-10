"use client";

import { useState } from "react";
import ProtectedRoute from "@/components/ProtectedRoute";
import Sidebar from "@/components/Sidebar";

interface PsAccountSubGroupData {
  cofAccCode: string;
  name: string;
  remarks: string;
  nameInUrdu: string;
  remarksInUrdu: string;
  createPcName: string;
  createPCUser: string;
  createLoc: string;
  createDevice: string;
  updatePcUser: string;
  updatePcName: string;
  updateLoc: string;
  updateDevice: string;
  totalUpdate: string;
  block: string;
  lock: string;
  hide: string;
  bookmark: string;
  bmStatus: string;
  bmIconId: string;
  bmRowId: string;
  dbRowId: string;
  eCol1: string;
  eCol2: string;
}

export default function PsAccountSubGroupPage() {
  const [formData, setFormData] = useState<PsAccountSubGroupData>({
    cofAccCode: "",
    name: "",
    remarks: "",
    nameInUrdu: "",
    remarksInUrdu: "",
    createPcName: "",
    createPCUser: "",
    createLoc: "",
    createDevice: "",
    updatePcUser: "",
    updatePcName: "",
    updateLoc: "",
    updateDevice: "",
    totalUpdate: "",
    block: "",
    lock: "",
    hide: "",
    bookmark: "",
    bmStatus: "",
    bmIconId: "",
    bmRowId: "",
    dbRowId: "",
    eCol1: "",
    eCol2: "",
  });

  const handleInputChange = (
    field: keyof PsAccountSubGroupData,
    value: string
  ) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    console.log("Ps Account Sub Group Form Data:", formData);
    // Here you can add API call to save data
    alert("Ps Account Sub Group data saved successfully!");
  };

  return (
    <ProtectedRoute>
      <div className="flex h-screen bg-gray-50">
        <Sidebar />

        <div className="flex-1 flex flex-col overflow-hidden">
          {/* Header */}
          <header className="bg-white shadow-sm border-b border-gray-200">
            <div className="flex justify-between items-center px-6 py-4">
              <div className="flex items-center">
                <h1 className="text-2xl font-bold text-gray-900">
                  Ps Account Sub Group - Add New
                </h1>
              </div>
            </div>
          </header>

          {/* Main Content */}
          <main className="flex-1 overflow-y-auto">
            <div className="p-6">
              <form onSubmit={handleSubmit} className="space-y-8">
                {/* Basic Information Section */}
                <div className="bg-white rounded-lg shadow p-6">
                  <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
                    Basic Information
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Cof Acc Code <span className="text-red-500">*</span>
                      </label>
                      <input
                        type="text"
                        required
                        value={formData.cofAccCode}
                        onChange={(e) =>
                          handleInputChange("cofAccCode", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Name <span className="text-red-500">*</span>
                      </label>
                      <input
                        type="text"
                        required
                        value={formData.name}
                        onChange={(e) =>
                          handleInputChange("name", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Name In Urdu
                      </label>
                      <input
                        type="text"
                        value={formData.nameInUrdu}
                        onChange={(e) =>
                          handleInputChange("nameInUrdu", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>
                  </div>

                  <div className="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Remarks
                      </label>
                      <textarea
                        value={formData.remarks}
                        onChange={(e) =>
                          handleInputChange("remarks", e.target.value)
                        }
                        rows={3}
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Remarks In Urdu
                      </label>
                      <textarea
                        value={formData.remarksInUrdu}
                        onChange={(e) =>
                          handleInputChange("remarksInUrdu", e.target.value)
                        }
                        rows={3}
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>
                  </div>
                </div>

                {/* Create Information Section */}
                <div className="bg-white rounded-lg shadow p-6">
                  <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
                    Create Information
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Create Pc Name
                      </label>
                      <input
                        type="text"
                        value={formData.createPcName}
                        onChange={(e) =>
                          handleInputChange("createPcName", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Create PC User
                      </label>
                      <input
                        type="text"
                        value={formData.createPCUser}
                        onChange={(e) =>
                          handleInputChange("createPCUser", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Create Loc
                      </label>
                      <input
                        type="text"
                        value={formData.createLoc}
                        onChange={(e) =>
                          handleInputChange("createLoc", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Create Device
                      </label>
                      <input
                        type="text"
                        value={formData.createDevice}
                        onChange={(e) =>
                          handleInputChange("createDevice", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>
                  </div>
                </div>

                {/* Update Information Section */}
                <div className="bg-white rounded-lg shadow p-6">
                  <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
                    Update Information
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Update Pc User
                      </label>
                      <input
                        type="text"
                        value={formData.updatePcUser}
                        onChange={(e) =>
                          handleInputChange("updatePcUser", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Update Pc Name
                      </label>
                      <input
                        type="text"
                        value={formData.updatePcName}
                        onChange={(e) =>
                          handleInputChange("updatePcName", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Update Loc
                      </label>
                      <input
                        type="text"
                        value={formData.updateLoc}
                        onChange={(e) =>
                          handleInputChange("updateLoc", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Update Device
                      </label>
                      <input
                        type="text"
                        value={formData.updateDevice}
                        onChange={(e) =>
                          handleInputChange("updateDevice", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Total Update
                      </label>
                      <input
                        type="number"
                        min="0"
                        value={formData.totalUpdate}
                        onChange={(e) =>
                          handleInputChange("totalUpdate", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>
                  </div>
                </div>

                {/* Status Information Section */}
                <div className="bg-white rounded-lg shadow p-6">
                  <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
                    Status Information
                  </h2>
                  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Block
                      </label>
                      <select
                        value={formData.block}
                        onChange={(e) =>
                          handleInputChange("block", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select Block</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Lock
                      </label>
                      <select
                        value={formData.lock}
                        onChange={(e) =>
                          handleInputChange("lock", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select Lock</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Hide
                      </label>
                      <select
                        value={formData.hide}
                        onChange={(e) =>
                          handleInputChange("hide", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select Hide</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Bookmark
                      </label>
                      <select
                        value={formData.bookmark}
                        onChange={(e) =>
                          handleInputChange("bookmark", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      >
                        <option value="">Select Bookmark</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        BM Status
                      </label>
                      <input
                        type="text"
                        value={formData.bmStatus}
                        onChange={(e) =>
                          handleInputChange("bmStatus", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        BM Icon ID
                      </label>
                      <input
                        type="text"
                        value={formData.bmIconId}
                        onChange={(e) =>
                          handleInputChange("bmIconId", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        BM Row ID
                      </label>
                      <input
                        type="text"
                        value={formData.bmRowId}
                        onChange={(e) =>
                          handleInputChange("bmRowId", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        DB Row ID
                      </label>
                      <input
                        type="text"
                        value={formData.dbRowId}
                        onChange={(e) =>
                          handleInputChange("dbRowId", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        E Col 1
                      </label>
                      <input
                        type="text"
                        value={formData.eCol1}
                        onChange={(e) =>
                          handleInputChange("eCol1", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>

                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        E Col 2
                      </label>
                      <input
                        type="text"
                        value={formData.eCol2}
                        onChange={(e) =>
                          handleInputChange("eCol2", e.target.value)
                        }
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      />
                    </div>
                  </div>
                </div>

                {/* Submit Button */}
                <div className="flex justify-end">
                  <button
                    type="submit"
                    className="px-8 py-3 bg-green-600 text-white rounded-md hover:bg-green-700 font-medium"
                  >
                    Save Account Sub Group
                  </button>
                </div>
              </form>
            </div>
          </main>
        </div>
      </div>
    </ProtectedRoute>
  );
}
