/**
 * Date utility functions for the application
 */

/**
 * Get today's date in YYYY-MM-DD format (suitable for HTML date inputs)
 * @returns {string} Today's date in YYYY-MM-DD format
 */
export const getTodayDate = (): string => {
  const today = new Date();
  const year = today.getFullYear();
  const month = String(today.getMonth() + 1).padStart(2, '0');
  const day = String(today.getDate()).padStart(2, '0');
  return `${year}-${month}-${day}`;
};

/**
 * Get current month's first day in YYYY-MM-DD format
 * @returns {string} First day of current month in YYYY-MM-DD format
 */
export const getMonthStartDate = (): string => {
  const today = new Date();
  const year = today.getFullYear();
  const month = String(today.getMonth() + 1).padStart(2, '0');
  return `${year}-${month}-01`;
};

/**
 * Get current month's last day in YYYY-MM-DD format
 * @returns {string} Last day of current month in YYYY-MM-DD format
 */
export const getMonthEndDate = (): string => {
  const today = new Date();
  const year = today.getFullYear();
  const month = today.getMonth() + 1;
  const lastDay = new Date(year, month, 0).getDate();
  return `${year}-${String(month).padStart(2, '0')}-${String(lastDay).padStart(2, '0')}`;
};
