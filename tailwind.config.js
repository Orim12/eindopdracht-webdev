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
        brand: '#123456', // Example brand color
        pixel: '#0A2239', // Custom color for Pixel Positions branding
        accent: '#F5B700', // Accent color
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
    },
  },
  plugins: [],
}
