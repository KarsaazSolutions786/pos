# Karsaaz POS - Authentication System

A modern Next.js application with a comprehensive user authentication system featuring role-based access control.

## Features

- 🔐 **User Authentication**: Secure login with username and password
- 👥 **Multi-Role System**: Three user roles with different access levels
  - **Super Admin**: Full system access and management
  - **Admin**: User and content management
  - **User**: Basic access and personal features
- 🛡️ **Protected Routes**: Automatic redirection for unauthorized access
- 💾 **Persistent Sessions**: Login state persists across browser sessions
- 🎨 **Modern UI**: Beautiful, responsive design with Tailwind CSS
- ⚡ **Fast Development**: Built with Next.js 15 and Turbopack

## Demo Credentials

Use these credentials to test different user roles:

| Role        | Username     | Password        |
| ----------- | ------------ | --------------- |
| Super Admin | `superadmin` | `superadmin123` |
| Admin       | `admin`      | `admin123`      |
| User        | `user`       | `user123`       |

## Getting Started

### Prerequisites

- Node.js 18+
- npm or yarn

### Installation

1. Clone the repository:

```bash
git clone <repository-url>
cd karsaazpos
```

2. Install dependencies:

```bash
npm install
```

3. Start the development server:

```bash
npm run dev
```

4. Open [http://localhost:3000](http://localhost:3000) in your browser

## Project Structure

```
src/
├── app/
│   ├── dashboard/          # Protected dashboard page
│   ├── layout.tsx         # Root layout with AuthProvider
│   ├── page.tsx           # Login page (root route)
│   └── globals.css        # Global styles
├── components/
│   ├── LoginForm.tsx      # Login form component
│   └── ProtectedRoute.tsx # Route protection component
├── contexts/
│   └── AuthContext.tsx    # Authentication context
└── types/
    └── auth.ts           # TypeScript type definitions
```

## Authentication Flow

1. **Login Page** (`/`): Users enter credentials
2. **Authentication**: System validates against mock user data
3. **Role-Based Redirect**: Users are redirected to dashboard based on role
4. **Dashboard** (`/dashboard`): Role-specific content and features
5. **Session Persistence**: Login state saved in localStorage

## Role Hierarchy

- **Super Admin** (Level 3): Full system access

  - System management
  - User administration
  - Analytics and monitoring
  - Advanced features

- **Admin** (Level 2): Management access

  - User management
  - Content management
  - Basic analytics

- **User** (Level 1): Basic access
  - Personal profile
  - Basic features
  - Limited functionality

## Security Features

- **Protected Routes**: Automatic redirection for unauthorized access
- **Role-Based Access**: Content and features filtered by user role
- **Session Management**: Secure session handling with localStorage
- **Input Validation**: Form validation and error handling

## Technologies Used

- **Next.js 15**: React framework with App Router
- **TypeScript**: Type-safe development
- **Tailwind CSS**: Utility-first CSS framework
- **React Context**: State management for authentication
- **Turbopack**: Fast development bundler

## Development

### Available Scripts

- `npm run dev` - Start development server with Turbopack
- `npm run build` - Build for production
- `npm run start` - Start production server
- `npm run lint` - Run ESLint

### Adding New Features

1. **New Protected Pages**: Wrap with `ProtectedRoute` component
2. **Role-Specific Content**: Use role hierarchy in components
3. **New User Roles**: Update types and context accordingly

## Customization

### Adding Real Authentication

Replace the mock authentication in `AuthContext.tsx` with:

- API calls to your backend
- JWT token management
- Secure password handling
- Database integration

### Styling

The application uses Tailwind CSS. Customize by:

- Modifying `tailwind.config.js`
- Adding custom CSS in `globals.css`
- Using Tailwind utility classes

## License

This project is licensed under the MIT License.
