/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/css/**/*.css"
  ],
  theme: {
    extend: {
      colors: {
        pixel: '#0A2239', // Custom color for Pixel Positions branding
        accent: '#F5B700', // Accent color
        brand: '#0A2239', // Use pixel as the main brand color for consistency
        muted: '#F4F7FA', // Light background for cards/sections
        dark: '#1A1A1A', // For dark text or backgrounds
      },
      fontFamily: {
        sans: [
          'Hanken Grotesk',
          'Instrument Sans',
          'ui-sans-serif',
          'system-ui',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji',
        ],
      },
      borderRadius: {
        xl: '1.25rem',
        lg: '0.75rem',
        DEFAULT: '0.5rem',
      },
      boxShadow: {
        card: '0 2px 16px 0 rgba(10,34,57,0.08)',
      },
    },
  },
  plugins: [],
}
