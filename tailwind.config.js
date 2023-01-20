/** @type {import('tailwindcss').Config} */
module.exports = {
    daisyui: {
        themes: [
          {
            sharelee: {
            "primary": "#d8c322",
            "secondary": "#67c574",
            "accent": "#2e5077",
            "neutral": "#efe9f4",
            "base-100": "#f8f4fa",
            "info": "#89D7E6",
            "success": "#32DC98",
            "warning": "#F9D348",
            "error": "#F27388",
            },
          },
          "cupcake"],
    },
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
  ],
  theme: {
    extend: {
        fontFamily: {
            'Montserrat' : ['Montserrat', 'sans-serif'],
            'Passions' : ['Passions Conflict', 'cursive'],
            'Special' : ['Special Elite', 'cursive']
        }
    },
  },
  plugins: [require("daisyui")],
}
