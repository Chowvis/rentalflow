/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.{blade.php,js,vue}",
            // "./resources/dashboard/.blade.php",
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
            '300':'340px'
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



