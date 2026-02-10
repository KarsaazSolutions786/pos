/** @type {import('next').NextConfig} */
const nextConfig = {
  eslint: {
    // ⚠️ This lets production builds pass even if ESLint errors exist
    ignoreDuringBuilds: true,
  },
  typescript: {
    // ⛔️ Do NOT fail production builds on TS errors
    ignoreBuildErrors: true,
  },
  async rewrites() {
    const backendUrl = process.env.BACKEND_URL || 'http://karsaaz_php:80';
    return [
      {
        source: '/api/v1.php',
        destination: `${backendUrl}/api/v1.php`,
      },
      {
        source: '/custom_apis/:path*',
        destination: `${backendUrl}/custom_apis/:path*`,
      },
    ];
  },

  async headers() {
    return [
      {
        source: '/api/v1.php',
        headers: [
          { key: 'Access-Control-Allow-Origin', value: '*' },
          { key: 'Access-Control-Allow-Methods', value: 'GET,HEAD,POST,OPTIONS' },
          { key: 'Access-Control-Allow-Headers', value: 'Content-Type, X-Auth-Token' },
        ],
      },
      {
        source: '/custom_apis/:path*',
        headers: [
          { key: 'Access-Control-Allow-Origin', value: '*' },
          { key: 'Access-Control-Allow-Methods', value: 'GET,HEAD,POST,OPTIONS' },
          { key: 'Access-Control-Allow-Headers', value: 'Content-Type, X-Auth-Token' },
        ],
      },
    ];
  },
};

export default nextConfig;
