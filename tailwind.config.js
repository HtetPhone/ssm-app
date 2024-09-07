/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors : {
            'black' : '#0f172a'
        },
        fontFamily : {
            'nerko' : 'Nerko One',
            'amsterdam' : 'New Amsterdam',
            'josefin' : "Josefin Sans"
        }
    },
  },
  plugins: [],
}

