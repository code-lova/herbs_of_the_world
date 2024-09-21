import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class', // or 'media' if you want to use system settings
    theme: {
        fontSize: {
            xs: ['12px', '16px'],
            sm: ['14px', '20px'],
            base: ['16px', '17.5px'],
            lg: ['18px', '21.94px'],
            xl: ['20px', '24.38px'],
            '2xl': ['24px', '29.26px'],
            '3xl': ['28px', '50px'],
            '4xl': ['48px', '58px'],
            '6xl': ['68px', '78px'],
            '8xl': ['96px', '106px']
        },
        extend: {
            fontFamily: {
                palanquin: ['Palanquin', 'sans-serif'],
                montserrat: ['Montserrat', 'sans-serif'],
            },
            colors: {
                'secondry': "#080101",
                'primary': "#006600",
                "slate-gray": "#5f583d",
                "green-0": "#56ecb2",
            },
        },
    },

    plugins: [forms],
};
