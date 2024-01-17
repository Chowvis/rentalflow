/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.{blade.php,js,vue}",],
  theme: {
    fontFamily:{
        'nunito' : ['Nunito','sans-serif'],
        'roboto' : ['roboto','sans'],
    },
    extend: {
        width:{
            '475':'475px'
        },

    },
  },
  plugins: [],
}



