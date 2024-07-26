/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      display: 'Oswald, ui-serif', // Adds a new `font-display` class
      width: () => ({
        'half': '49%',
        'registration': '57%'
      }),
      colors: {
         whitesmoke: '#FCFBFA',
         lightseagreen: '#17cab5'
      },
      fontSize: {
        'xxs': '10px', 
        'xxxs': '9px',
      },
    },
  },
  plugins: [],
}

