/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'landing-cover': "url('storage/imgages/landing_cover.jpg')",
      },
      fontFamily: {
        sans: ['"Segoe UI"', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
      },
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

