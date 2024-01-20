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
            '475':'475px',
            '600':'600px'
        },
        height:{
            '475':'475px',
            '600':'600px'
        },
        scale:{
            '65':'0.6'
        }

    },
  },
  plugins: [],
}



