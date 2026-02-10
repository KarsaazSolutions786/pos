import React from "react";
import Button from "./Button";

interface SaveButtonProps {
  children?: React.ReactNode;
  onClick?: () => void;
  disabled?: boolean;
  size?: "sm" | "md" | "lg";
  className?: string;
}

const SaveButton: React.FC<SaveButtonProps> = ({
  children = "Save",
  onClick,
  disabled = false,
  size = "md",
  className = "",
}) => {
  const saveIcon = (
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
        d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"
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
      icon={saveIcon}
      iconPosition="left"
    >
      {children}
    </Button>
  );
};

export default SaveButton;
