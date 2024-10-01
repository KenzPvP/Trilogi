/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        gold: "#927900",
        blk: "#111013"
      },
      fontFamily: {
        raleway: ["Raleway", "sans-serif"]
      }
    },
  },
  plugins: [],
}
