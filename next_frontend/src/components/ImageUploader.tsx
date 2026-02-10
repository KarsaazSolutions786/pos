import React, { useState, useRef, useEffect } from "react";

interface ImageUploaderProps {
  // Initial image (for edit mode)
  initialImage?: string;

  // Callback when image changes
  onChange: (file: File | undefined) => void;

  // Optional custom classes
  className?: string;

  // Maximum file size (default 5MB)
  maxSizeInMB?: number;

  // Optional label
  label?: string;
}

const ImageUploader: React.FC<ImageUploaderProps> = ({
  initialImage,
  onChange,
  className,
  maxSizeInMB = 2,
  label = "Upload Image",
}) => {
  // State to manage the current image (preview or initial)
  const [currentImage, setCurrentImage] = useState<string | undefined>(
    initialImage
  );

  // Ref for file input
  const fileInputRef = useRef<HTMLInputElement>(null);

  // Handle file selection
  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    debugger
    const file = e.target.files?.[0];

    if (file) {
      // Validate file type
      const allowedTypes = ["image/png", "image/jpeg", "image/jpg"];

      // Validate file size
      const maxSizeInBytes = maxSizeInMB * 1024 * 1024;

      if (!allowedTypes.includes(file.type)) {
        alert(`Please upload only PNG or JPEG/JPG images.`);
        e.target.value = "";
        return;
      }

      if (file.size > maxSizeInBytes) {
        alert(`Image size should be less than ${maxSizeInMB}MB.`);
        e.target.value = "";
        return;
      }

      // Create image preview
      const reader = new FileReader();
      reader.onloadend = () => {
        setCurrentImage(reader.result as string);
        onChange(file);
      };
      reader.readAsDataURL(file);
    }
  };

  // Handle image removal
  const handleImageRemove = () => {
    // Clear the image state
    setCurrentImage(undefined);

    // Clear the file input if ref exists
    if (fileInputRef.current) {
      fileInputRef.current.value = "";
    }

    // Call onChange with undefined
    onChange(undefined);
  };


  useEffect(() => {
  
  if (initialImage && !currentImage) {
    setCurrentImage(initialImage);
  }
}, [initialImage]);

  return (
    <div className={`w-full ${className}`}>
      <label className="block text-sm font-medium text-gray-800 mb-2">
        {label}
      </label>
      <div className="flex items-center space-x-4">
        <input
          ref={fileInputRef}
          type="file"
          accept=".png,.jpg,.jpeg,image/png,image/jpeg"
          onChange={handleFileChange}
          className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        />

        {currentImage && (
          <div className="col-span-2 mt-4 w-full relative">
            <div className="border-2 border-gray-300 rounded-lg overflow-hidden shadow-md">
              <img
                src={currentImage}
                alt="Preview"
                className="w-full h-64 object-fill"
              />
            </div>
            <button
              type="button"
              onClick={handleImageRemove}
              className="absolute top-2 right-2 bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-red-600 transition-colors"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        )}
      </div>
    </div>
  );
};

export default ImageUploader;
