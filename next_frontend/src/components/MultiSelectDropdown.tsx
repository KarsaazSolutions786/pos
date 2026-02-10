"use client";

import React, { useState, useRef, useEffect } from "react";
import { ChevronDownIcon, XMarkIcon } from "@heroicons/react/24/solid";

interface Option {
  id: number;
  label: string;
}

interface MultiSelectDropdownProps {
  options: Option[];
  selected: Option[];
  onChange: (selected: Option[]) => void;
}

export default function MultiSelectDropdown({
  options,
  selected,
  onChange,
}: MultiSelectDropdownProps) {
  const [isOpen, setIsOpen] = useState(false);
  const dropdownRef = useRef<HTMLDivElement>(null);

  // Close dropdown if clicked outside
  useEffect(() => {
    const handleClickOutside = (event: MouseEvent) => {
      if (dropdownRef.current && !dropdownRef.current.contains(event.target as Node)) {
        setIsOpen(false);
      }
    };
    document.addEventListener("mousedown", handleClickOutside);
    return () => document.removeEventListener("mousedown", handleClickOutside);
  }, []);

  const toggleOption = (option: Option) => {
    if (selected.find((item) => item.id === option.id)) {
      onChange(selected.filter((item) => item.id !== option.id));
    } else {
      onChange([...selected, option]);
    }
  };

  const removeOption = (option: Option) => {
    onChange(selected.filter((item) => item.id !== option.id));
  };

  return (
    <div className="relative w-72" ref={dropdownRef}>
      <div
        className="border rounded p-2 flex flex-wrap items-center cursor-pointer max-h-15 overflow-y-auto"
        onClick={() => setIsOpen(!isOpen)}
      >
        {selected.length === 0 && <span className="text-gray-400">Select options</span>}
        {selected.map((item) => (
          <span
            key={item.id}
            className="flex items-center bg-blue-100 text-blue-800 rounded-full px-2 py-1 mr-1 mb-1 text-sm"
          >
            {item.label}
            <XMarkIcon
              className="w-4 h-4 ml-1 cursor-pointer"
              onClick={(e) => {
                e.stopPropagation();
                removeOption(item);
              }}
            />
          </span>
        ))}
        <ChevronDownIcon className="w-5 h-5 ml-auto text-gray-500" />
      </div>

      {isOpen && (
        <div className="absolute z-20 mt-1 w-full bg-white border rounded shadow-lg max-h-60 overflow-auto">
          {options.map((option) => (
            <div
              key={option.id}
              className={`p-2 cursor-pointer hover:bg-blue-100 ${
                selected.find((item) => item.id === option.id) ? "bg-blue-50" : ""
              }`}
              onClick={() => toggleOption(option)}
            >
              {option.label}
            </div>
          ))}
        </div>
      )}
    </div>
  );
}