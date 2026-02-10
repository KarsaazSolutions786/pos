import React, { useState, useRef, useEffect } from "react";
import { createPortal } from "react-dom";

export interface DropdownOption {
  value: string;
  label: string;
  phone?: string;
  code?: string;
  address?: string;
  contactName?: string;
  saleMenCode?: string;
  [key: string]: string | undefined; // More type-safe approach
}

interface SearchableDropdownProps {
  label: string;
  value: string;
  options: DropdownOption[];
  onChange: (value: string) => void;
  placeholder?: string;
  searchPlaceholder?: string;
  addButtonPath?: string;
  addButtonTitle?: string;
  onAddClick?: () => void;
  required?: boolean;
  disabled?: boolean;
  className?: string;
  preventAutoSelect?: boolean; // New prop to prevent auto-selection
  defaultOpen?: boolean; // New prop to keep dropdown open by default
}

const SearchableDropdown: React.FC<SearchableDropdownProps> = ({
  label,
  value,
  options,
  onChange,
  placeholder = "Select option",
  searchPlaceholder = "Search...",
  addButtonPath,
  addButtonTitle = "Add",
  onAddClick,
  required = false,
  disabled = false,
  className = "",
  preventAutoSelect = false, // Default to false to maintain existing behavior
  defaultOpen = false, // Default to false to maintain existing behavior
}) => {
  const [dropdownOpen, setDropdownOpen] = useState(defaultOpen);
  const [search, setSearch] = useState("");
  const [selectedIndex, setSelectedIndex] = useState(-1);
  const searchInputRef = useRef<HTMLInputElement>(null);
  const dropdownRef = useRef<HTMLDivElement>(null);
  const buttonRef = useRef<HTMLButtonElement>(null);
  const portalRef = useRef<HTMLDivElement | null>(null);
  const [portalStyle, setPortalStyle] = useState<React.CSSProperties>({});

  // Auto-select first option if no value is selected and options exist
  useEffect(() => {
    // Only auto-select if preventAutoSelect is false and no value is set
    if (!preventAutoSelect && !value && options.length > 0) {
      onChange(options[0].value);
    }
  }, [value, options, onChange, preventAutoSelect]);

  // Filter options based on search
  const filteredOptions = options.filter(
    (option) =>
      option.label?.toLowerCase().includes(search.toLowerCase()) ||
      (option.phone &&
        option.phone.toLowerCase().includes(search.toLowerCase()))
  );

  // Get selected option label
  const selectedOption = options.find((option) => option.value === value);

  // Handle click outside to close dropdown
  useEffect(() => {
    const handleClickOutside = (event: MouseEvent) => {
      const target = event.target as Node;
      const clickedOutsideDropdown = dropdownRef.current && !dropdownRef.current.contains(target);
      const clickedOutsidePortal = portalRef.current && !portalRef.current.contains(target);
      // if portal is used, check portal; otherwise check dropdownRef
      if ((portalRef.current && clickedOutsidePortal) || (!portalRef.current && clickedOutsideDropdown)) {
        setDropdownOpen(false);
        setSearch("");
      }
    };

    document.addEventListener("mousedown", handleClickOutside);
    return () => {
      document.removeEventListener("mousedown", handleClickOutside);
    };
  }, []);

  // Focus search input when dropdown opens
  useEffect(() => {
    if (dropdownOpen && searchInputRef.current) {
      setTimeout(() => searchInputRef.current?.focus(), 100);
    }
    // when dropdown opens, compute portal position based on button
    if (dropdownOpen && buttonRef.current) {
      const rect = buttonRef.current.getBoundingClientRect();
      setPortalStyle({
        position: "absolute",
        top: rect.bottom + window.scrollY,
        left: rect.left + window.scrollX,
        width: rect.width,
        zIndex: 9999,
      });
    }
  }, [dropdownOpen]);

  // Handle keyboard navigation
  const handleKeyDown = (e: React.KeyboardEvent) => {
    if (!dropdownOpen) return;

    switch (e.key) {
      case "Tab":
        e.preventDefault();
        if (filteredOptions.length > 0) {
          setSelectedIndex(0); // Focus on first item
        }
        break;
      case "ArrowDown":
        e.preventDefault();
        setSelectedIndex((prev) =>
          prev < filteredOptions.length - 1 ? prev + 1 : 0
        );
        break;
      case "ArrowUp":
        e.preventDefault();
        setSelectedIndex((prev) =>
          prev > 0 ? prev - 1 : filteredOptions.length - 1
        );
        break;
      case "Enter":
        e.preventDefault();
        if (filteredOptions.length === 1) {
          // Auto-select if only one option is found
          handleOptionClick(filteredOptions[0].value);
        } else if (
          selectedIndex >= 0 &&
          selectedIndex < filteredOptions.length
        ) {
          // Select the highlighted option
          handleOptionClick(filteredOptions[selectedIndex].value);
        }
        break;
      case "Escape":
        setDropdownOpen(false);
        setSearch("");
        setSelectedIndex(-1);
        break;
    }
  };

  // Reset selected index when search changes
  useEffect(() => {
    setSelectedIndex(-1);
  }, [search]);

  const handleOptionClick = (optionValue: string) => {
    onChange(optionValue);
    setDropdownOpen(false);
    setSearch("");
    setSelectedIndex(-1);
  };

  const handleAddClick = () => {
    if (onAddClick) {
      onAddClick(); // Call the modal handler
      setDropdownOpen(false); // Close dropdown when opening modal
    }
  };

  return (
    <div className={`relative ${className}`} ref={dropdownRef}>
      <label className="block text-sm font-semibold text-gray-800">
        {label} {required && <span className="text-red-500">*</span>}
      </label>
      <button
        type="button"
        disabled={disabled}
        className={`w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-left bg-white ${
          disabled ? "bg-gray-100 cursor-not-allowed" : "hover:border-gray-400"
        }`}
        ref={buttonRef}
        onClick={() => {
          if (!disabled) {
            setDropdownOpen((open) => !open);
          }
        }}
        onKeyDown={handleKeyDown}
      >
        <span className={selectedOption ? "text-gray-900" : "text-gray-500"}>
          {selectedOption?.label || placeholder}
        </span>
        <span className="float-right">▼</span>
      </button>

      {dropdownOpen &&
        // render dropdown as a portal so it won't be clipped by parent overflow
        createPortal(
          <div
            ref={portalRef as any}
            style={portalStyle}
            className="bg-white border border-gray-300 rounded-md shadow-lg"
          >
            <div className="p-2 flex items-center gap-2">
              <input
                ref={searchInputRef}
                type="text"
                className="w-full px-2 py-1 border border-gray-200 rounded focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder={searchPlaceholder}
                value={search}
                onChange={(e) => setSearch(e.target.value)}
                onKeyDown={handleKeyDown}
              />
              {(addButtonPath || onAddClick) && (
                <button
                  type="button"
                  className="ml-1 px-2 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 transition-colors whitespace-nowrap"
                  title={addButtonTitle}
                  onClick={handleAddClick}
                >
                  {addButtonTitle}
                </button>
              )}
            </div>
            <ul className="max-h-48 overflow-y-auto">
              {filteredOptions.length === 0 && (
                <li className="px-4 py-2 text-gray-400 text-center">No options found</li>
              )}
              {filteredOptions.map((option, index) => (
                <li
                  key={index}
                  className={`px-4 py-2 cursor-pointer transition-colors ${
                    value === option.value
                      ? "bg-blue-50 font-semibold"
                      : index === selectedIndex
                      ? "bg-blue-100"
                      : "hover:bg-blue-100"
                  }`}
                  onClick={() => handleOptionClick(option.value)}
                >
                  <div className="flex justify-between">
                    <span>{option.label}</span>
                    {option.phone && <span className="text-gray-500 text-sm">{option.phone}</span>}
                  </div>
                </li>
              ))}
            </ul>
          </div>,
          // attach to body
          document.body
        )}
    </div>
  );
};

export default SearchableDropdown;
