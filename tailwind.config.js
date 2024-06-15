/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage:{
        'hero-pattern': "url('/storage/app/public/images/bg_index.jpg')",
      },
      display: 'Oswald, ui-serif', // Adds a new `font-display` class
      width: () => ({
        'comments': '57%',
      }),
      colors: {
         whitesmoke: '#FCFBFA'
      }
    },
  },
  plugins: [],
}

