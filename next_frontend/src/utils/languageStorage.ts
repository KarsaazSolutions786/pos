const LANGUAGE_KEY = "karsaaz_language_id";

export function saveLanguagePreference(languageId: number): void {
  if (typeof window !== "undefined") {
    localStorage.setItem(LANGUAGE_KEY, String(languageId));
  }
}

export function getLanguagePreference(): number | null {
  if (typeof window !== "undefined") {
    const saved = localStorage.getItem(LANGUAGE_KEY);
    return saved ? parseInt(saved, 10) : null;
  }
  return null;
}

export function clearLanguagePreference(): void {
  if (typeof window !== "undefined") {
    localStorage.removeItem(LANGUAGE_KEY);
  }
}
