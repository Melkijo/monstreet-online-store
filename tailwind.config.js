/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': 'Encode Sans Expanded',

            },

        },
    },
    plugins: [require("daisyui")],

    daisyui: {
        themes: false,
        darkTheme: "light"
    }
}

