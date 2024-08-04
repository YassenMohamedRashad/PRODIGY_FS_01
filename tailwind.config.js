/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            keyframes: {
                gradient: {
                    '0%, 100%': { opacity: 1 }, // Default opacity
                    '50%': { opacity: 0.5 }, // Adjusting opacity at midpoint
                }
            },
            animation: {
                'gradient-text': 'gradient 3s ease infinite'
            },
            fontFamily: {
                'Rubik': 'Rubik'
            },
        }
    },
    plugins: [
        require( 'flowbite/plugin' )
    ],
};
