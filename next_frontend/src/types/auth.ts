export type UserRole = 'super-admin' | 'admin' | 'user';

export interface User {
  id: string;
  username: string;
  role: string;
  name: string;
  apiKey?: string;
  email?: string | null;
  cellNo?: string;
}

export interface LoginCredentials {
  username: string;
  password: string;
}

export interface AuthContextType {
  user: User | null;
  login: (credentials: LoginCredentials) => Promise<boolean>;
  logout: () => void;
  isLoading: boolean;
} 