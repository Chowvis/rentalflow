/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/views/**/*.{blade.php,js,vue}",
            "./resources/views/dashboard/.blade.php",
            ],
  theme: {
    fontFamily:{
        'nunito' : ['Nunito','sans-serif'],
        'roboto' : ['roboto','sans'],
    },
    extend: {
        width:{
            '475':'475px',
            '600':'600px',
            '300':'340px',
            '570':'570px',
        },
        height:{
            '475':'475px',
            '600':'600px',
            '570':'570px',
        },
        scale:{
            '65':'0.6'
        }

    },
  },
  plugins: [],
}



