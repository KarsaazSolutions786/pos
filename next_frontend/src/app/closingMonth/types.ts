import {
  Calendar,
  Eye,
  Lock,
  CheckCircle,
  AlertTriangle,
} from "lucide-react";
import { months } from "@/components/ClosingMonthForm";

// Re-export months for convenience
export { months };

// ─── Types ────────────────────────────────────────────────

export interface DryRunEntry {
  CodeD: number;
  GLTH_Code: number;
  TDate: string;
  AccountCode: number;
  AccountName: string;
  Amount: number;
  TStatus: string;
  TType: string;
  TBook: string;
  Narration: string;
}

export interface DryRunResult {
  ClosingCode: number;
  VYear: number;
  VMonth: number;
  Range: { start: string; end_exclusive: string };
  SalesTotals: { TotalAmount: number; TotalTransactions: number };
  ExpenseTotals: { TotalAmount: number; TotalTransactions: number };
  SalesEntries: DryRunEntry[];
  ExpenseEntries: DryRunEntry[];
}

export interface ClosingResult {
  ClosingCode: number;
  VYear: number;
  VMonth: number;
  MonthName: string;
  Range: { start: string; end_exclusive: string };
  SalesSignedSum: number;
  ExpenseSignedSum: number;
  Net: number;
  Posted: boolean;
  GLTH_ID?: number;
  VirtualCode?: string;
  ProfitLoss: { Status: string; Amount: number; TStatus?: string };
}

export interface RevertResult {
  ClosingCode: number;
  VYear: number;
  VMonth: number;
  MonthName: string;
  Reverted: boolean;
  DeletedGLTDEntries: number;
  DeletedGLTHCodes: number[];
}

export type WizardMode = "close" | "revert";

// ─── Wizard Step Definitions ──────────────────────────────

export const WIZARD_STEPS_CLOSE = [
  { id: 1, label: "Select Months", icon: Calendar },
  { id: 2, label: "Preview", icon: Eye },
  { id: 3, label: "Confirm & Close", icon: Lock },
  { id: 4, label: "Results", icon: CheckCircle },
] as const;

export const WIZARD_STEPS_REVERT = [
  { id: 1, label: "Select Months", icon: Calendar },
  { id: 2, label: "Confirm Revert", icon: AlertTriangle },
  { id: 3, label: "Results", icon: CheckCircle },
] as const;

// ─── Utilities ────────────────────────────────────────────

export const getMonthLabel = (vMonth: number) => {
  return months.find((m) => m.value === vMonth)?.label || `Month ${vMonth}`;
};

export const groupEntriesByAccount = (entries: DryRunEntry[]) => {
  const grouped: Record<string, { accountCode: number; entries: DryRunEntry[]; subtotal: number }> = {};
  for (const entry of entries) {
    const key = entry.AccountName || `Account ${entry.AccountCode}`;
    if (!grouped[key]) {
      grouped[key] = { accountCode: entry.AccountCode, entries: [], subtotal: 0 };
    }
    grouped[key].entries.push(entry);
    grouped[key].subtotal += entry.Amount;
  }
  return Object.entries(grouped).sort((a, b) => b[1].subtotal - a[1].subtotal);
};
