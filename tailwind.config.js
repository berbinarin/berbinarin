/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "poppins": ["Poppins", "sans-serif"],
        "plusJakartaSans": ["Plus Jakarta Sans", "sans-serif"],
      },
      backgroundImage: {
        'primary-linear': 'linear-gradient(249deg, #3986A3 0%, #0087C9 100%)',
      },
      colors: {
        "primary": "#3986a3",
        "primary-alt": "#75badb",
        "disabled": "#70787D",
        "blur-bg": "#EAF8FF",
        "blur-bg-2": "#C7F8FF",
        "card-box": "#F7F7F7",
      }
    },
  },
  plugins: [],
}

