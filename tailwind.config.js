/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php'
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#558FE5',
        'secondary': '#FFFFFF',
        'background': '#F5F5F5',
        'text': '#373D43',
        'paragraph': '#596067',
        'hover': '#3471CC',
      },
      borderWidth: {
        's': '0.5px',
        'l': '1px',
      },
      height: {
        'coursel': '35rem',
      }
    },
  },
  plugins: [ ],
}
