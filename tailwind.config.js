/** @type {import('tailwindcss').Config} */
module.exports = {
  daisyui: {
    themes: [
      {
        sharelee: {
          "primary": "#ffde59",
          "secondary": "#67c574",
          "accent": "#6aace2",
          "neutral": "#efe9f4",
          "base-100": "#f8f4fa",
          "info": "#89D7E6",
          "success": "#32DC98",
          "warning": "#F9D348",
          "error": "#F27388",
        },
      },
      "synthwave",
    ],
  },
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
  ],
  theme: {
    extend: {
      fontFamily: {
        'Montserrat': ['Montserrat', 'sans-serif'],
        'Passions': ['Passions Conflict', 'cursive'],
        'Special': ['Special Elite', 'cursive'],
        'Nefelibata': ['Nefelibata Script', 'sans-serif'],
        'Dreamscape': ['Dreamscape', 'sans-serif'],
        'Scifi': ['Sci Fi Bronze', 'sans-serif']
      }
    },
  },
  plugins: [require("daisyui")],
}
