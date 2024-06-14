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
        nunito: ["Nunito", "sans-serif"],
    },
      colors: {
        custom: {
          'bg': 'linear-gradient(243deg, #EEF2F5 8.59%, #E7F5FF 83.61%)',
          'bg-input': '#E6F6FF',
          'black': '#333',
          'grey': '#919394',
          'blue': '#66C2FF',
          'red':'#FF6565',
          'white': '#EEF2F5',
          'hover': '#5BA9DC'
        },
      }
    },
  },
  plugins: [],
}

