/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Open Sans', 'sans-serif'],
                //serif: ['Merriweather', 'serif'],
            },
            colors: {
                'bg-main': "#FDFDFF",
                'bg-card': '#FFFFFF',
            }
        },
    },
    plugins: [],
}