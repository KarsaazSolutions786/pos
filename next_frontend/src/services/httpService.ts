import axios from 'axios';



export const deleteData = async (
  table: string,
  editid1: string
): Promise<any> => {
    debugger;
  const url = `/api/v1.php?table=${table}&action=delete&editid1=${editid1}`;

  try {
    const response = await axios.post(url, {}, {
      headers: {
        'Content-Type': 'application/json',
        'X-Auth-Token': '123', 
      },
    });

    console.log('Delete Success:', response.data);
    return response.data;
  } catch (error: any) {
    if (axios.isAxiosError(error)) {
      if (error.response) {
        console.error('Server Error:', error.response.data);
        throw new Error(error.response.data.message || 'Server responded with error');
      } else if (error.request) {
        console.error(' No Response from server');
        throw new Error('No response from server');
      }
    }

    console.error(' Unexpected Error:', error.message);
    throw new Error('Unexpected error occurred');
  }
};


// utils/apiHelpers.ts
export const insertGroup = async (
  table: string,
  data: Record<string, string | Blob | null | undefined>,
  apiKey?: string
) => {
  debugger
  try {
    const formData = new FormData();
    Object.entries(data).forEach(([key, value]) => {
      if (value !== undefined && value !== null) {
        formData.append(key, value as string | Blob);
      }
    });

    const response = await fetch(`/api/v1.php?table=${table}&action=insert`, {
      method: "POST",
      headers: {
        "X-Auth-Token": apiKey || "123",
      },
      body: formData,
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const responseText = await response.text();
    console.log("Raw Response:", responseText);

    const jsonMatch = responseText.match(/\{[\s\S]*\}$/);
    if (!jsonMatch) {
      if (responseText.includes("Duplicate entry")) {
        throw new Error(
          `A record already exists. Please use a different code or let the system generate one.`
        );
      }
      throw new Error("Invalid response format");
    }

    const result = JSON.parse(jsonMatch[0]);
    if (!result.success) {
      throw new Error(result.message || "Failed to save record");
    }

    return result;
  } catch (err) {
    console.error(`Error saving record in ${table}:`, err);
    throw err;
  }
};

export const formatDate = (dateStr: string) => {
  if (!dateStr) return "N/A";
  const date = new Date(dateStr);
  return new Intl.DateTimeFormat("en-GB", {
    day: "2-digit",
    month: "short",
    year: "numeric",
  }).format(date);
};

// Example output: "01 Sep 2025"
