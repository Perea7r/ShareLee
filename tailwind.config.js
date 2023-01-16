/** @type {import('tailwindcss').Config} */
module.exports = {
    daisyui: {
        themes: [
          {
            sharelee: {
            "primary": "#e5d352",
            "secondary": "#4b7f52",
            "accent": "#2e5077",
            "neutral": "#c5d1eb",
            "base-100": "#efe9f4",
            "info": "#89D7E6",
            "success": "#32DC98",
            "warning": "#F9D348",
            "error": "#F27388",
            },
          },
        ],
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
