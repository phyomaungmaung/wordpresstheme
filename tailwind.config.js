/** @type {import('tailwindcss').Config} */
important: true,
module.exports = {
  content: ['./*.php',
  './*/*.php',],
  theme: {
      colors:{
        'bg-color' : '#0f172a',
        'bg-button' : '#9f1239',
        'bg-button1' : '#3730a3',
        'font-color' : '#f1f5f9',
        'text-color' : '#7e22ce',
        'black' : '#1c1917',
        'div' : '#94a3b8',
      },
      fontFamily: {
        fot: ['Rajdhani', 'sans-serif'],
      },
    extend: {
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
