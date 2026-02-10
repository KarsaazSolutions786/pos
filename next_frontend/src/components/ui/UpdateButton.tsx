import React from "react";
import Button from "./Button";

interface UpdateButtonProps {
  children?: React.ReactNode;
  onClick?: () => void;
  disabled?: boolean;
  size?: "sm" | "md" | "lg";
  className?: string;
}

const UpdateButton: React.FC<UpdateButtonProps> = ({
  children = "Update",
  onClick,
  disabled = false,
  size = "md",
  className = "",
}) => {
  const updateIcon = (
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
        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
      />
    </svg>
  );

  return (
    <Button
      type="submit"
      variant="success"
      size={size}
      disabled={disabled}
      onClick={onClick}
      className={className}
      icon={updateIcon}
      iconPosition="left"
    >
      {children}
    </Button>
  );
};

export default UpdateButton;
