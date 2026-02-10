import React, { useState } from "react";
import { SaveButton, UpdateButton } from "./ui";

export interface ClosingMonthData {
  vMonth: string;
  vYear: string;
  Status: string;
}

interface ClosingMonthFormProps {
  mode: "add" | "edit";
  initialData?: Partial<ClosingMonthData>;
  onSubmit: (data: ClosingMonthData) => void;
  submitLabel?: string;
  formRef?: React.RefObject<HTMLFormElement>;
}

export const months = [
  { value: 1, label: "January" },
  { value: 2, label: "February" },
  { value: 3, label: "March" },
  { value: 4, label: "April" },
  { value: 5, label: "May" },
  { value: 6, label: "June" },
  { value: 7, label: "July" },
  { value: 8, label: "August" },
  { value: 9, label: "September" },
  { value: 10, label: "October" },
  { value: 11, label: "November" },
  { value: 12, label: "December" },
];


const ClosingMonthForm: React.FC<ClosingMonthFormProps> = ({
  mode,
  initialData,
  onSubmit,
  submitLabel,
  formRef,
}) => {
  const defaultData: ClosingMonthData = {
    vMonth: "",
    vYear: "",
    Status: "Open",
  };

  const [formData, setFormData] = useState<ClosingMonthData>({
    ...defaultData,
    ...initialData,
  });

  const handleChange = (field: keyof ClosingMonthData, value: string) => {
    setFormData((prev) => ({
      ...prev,
      [field]: value,
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!formData.vMonth || !formData.vYear || !formData.Status) {
      alert("Please fill all fields");
      return;
    }
    onSubmit(formData);
  };

  return (
    <form ref={formRef} onSubmit={handleSubmit} className="space-y-6">
      <div className="bg-white rounded-lg shadow p-6">
        <h2 className="text-lg font-semibold text-gray-900 mb-6 border-b pb-2">
          Closing Month Info
        </h2>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          {/* Month */}
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Month
            </label>
<select
  value={String(formData.vMonth)}
  onChange={(e) => handleChange("vMonth", e.target.value)}
  className="w-full border rounded px-3 py-2"
  required
>
  <option value="">Select Month</option>
  {months.map((m) => (
    <option key={m.value} value={String(m.value)}>
      {m.label}
    </option>
  ))}
</select>

          </div>

          {/* Year */}
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Year
            </label>
            <input
              type="number"
              value={formData.vYear}
              onChange={(e) => handleChange("vYear", e.target.value)}
              placeholder="e.g., 2025"
              className="w-full border rounded px-3 py-2"
              required
            />
          </div>

          {/* Status */}
          <div>
            <label className="block text-sm font-medium text-gray-800 mb-2">
              Status
            </label>
            <select
              value={formData.Status}
              onChange={(e) => handleChange("Status", e.target.value)}
              className="w-full border rounded px-3 py-2"
              required
            >
              <option value="Open">Open</option>
              <option value="Closed">Closed</option>
            </select>
          </div>
        </div>
      </div>

      <div>
        {mode === "edit" ? (
          <UpdateButton onClick={() => formRef?.current?.requestSubmit()}>
            {submitLabel || "Update Closing Month"}
          </UpdateButton>
        ) : (
          <SaveButton onClick={() => formRef?.current?.requestSubmit()}>
            {submitLabel || "Save Closing Month"}
          </SaveButton>
        )}
      </div>
    </form>
  );
};

export default ClosingMonthForm;
