/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.{blade.php,js,vue}",],
  theme: {
    fontFamily:{
        'nunito' : ['Nunito','sans-serif']
    },
    extend: {
        width:{
            '450px':'450px'
        },

    },
  },
  plugins: [],
}



