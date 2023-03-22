const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                textAppearence: {
                  '0%': { transform: 'translate(50px)' },
                  '100%': { transform: 'translate(0)' },
                },
                moveFromRight: {
                    '0%': { transform: 'translate(50px)', opacity: .3 },
                    '100%': { transform: 'translate(0)', opacity: 1 },
                },
                moveFromLeft: {
                    '0%': { transform: 'translate(-50px)', opacity: .3 },
                    '100%': { transform: 'translate(0)', opacity: 1 },
                },
            },
            animation: {
                textAppearenceFirst: 'textAppearence 1.5s ease-in-out',
                textAppearenceSecond: 'textAppearence 2s ease-in-out',
                textAppearenceThird: 'textAppearence 3s ease-in-out',
                moveFromRight: 'moveFromRight 1s ease-in-out',
                moveFromLeft: 'moveFromLeft 1s ease-in-out'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
