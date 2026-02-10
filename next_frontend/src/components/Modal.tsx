import React from 'react'

const Modal = ({ isOpen, onClose, children }) => {
    if (!isOpen) return null;

    return (
        <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/90 bg-opacity-50">
            <div className="bg-white rounded-lg shadow-lg max-w-[90%] max-h-[90%] overflow-y-auto relative p-4 w-full">
                <button
                    className="absolute top-3 right-3 text-gray-500 hover:text-black"
                    onClick={onClose}
                >
                    ✕
                </button>
                {children}
            </div>
        </div>
    );
};

export default Modal;

