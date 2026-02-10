import React from "react";
import Button from "./Button";

interface LoginButtonProps {
  children?: React.ReactNode;
  onClick?: () => void;
  disabled?: boolean;
  size?: "sm" | "md" | "lg";
  className?: string;
  isLoading?: boolean;
}

const LoginButton: React.FC<LoginButtonProps> = ({
  children = "Sign in",
  onClick,
  disabled = false,
  size = "md",
  className = "",
  isLoading = false,
}) => {
  const loginIcon = (
    <svg
      className="w-5 h-5"
      fill="none"
      stroke="currentColor"
      viewBox="0 0 24 24"
    >
      <path
        strokeLinecap="round"
        strokeLinejoin="round"
        strokeWidth={2}
        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
      />
    </svg>
  );

  const loadingIcon = (
    <svg
      className="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
    >
      <circle
        className="opacity-25"
        cx="12"
        cy="12"
        r="10"
        stroke="currentColor"
        strokeWidth="4"
      ></circle>
      <path
        className="opacity-75"
        fill="currentColor"
        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
      ></path>
    </svg>
  );

  return (
    <Button
      type="submit"
      variant="primary"
      size={size}
      disabled={disabled || isLoading}
      onClick={onClick}
      className={className}
      icon={isLoading ? loadingIcon : loginIcon}
      iconPosition="left"
    >
      {isLoading ? "Signing in..." : children}
    </Button>
  );
};

export default LoginButton;
