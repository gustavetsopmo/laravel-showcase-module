const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './node_modules/tw-elements/dist/js/**/*.js',
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./Resources/views/**/*.blade.php",
        "./Resources/views/**/*.blade.php",
    ],
  theme: {
    extend: {
        fontFamily: {
            sans: ["Roboto", ...defaultTheme.fontFamily.sans],
        },
    },
    colors: {
        transparent: "transparent",
        current: "currentColor",
        black: colors.black,
        white: colors.white,
        red: colors.red,
        gray: colors.gray,
        emerald: colors.emerald,
        indigo: colors.indigo,
        yellow: colors.yellow,
        green: colors.green,
        slate: colors.slate,
        blue: {
            50: "#f5f5f7",
            100: "#ebebf0",
            200: "#ccccd9",
            300: "#adadc2",
            400: "#707094",
            500: "#333366",
            600: "#2e2e5c",
            700: "#26264d",
            800: "#1f1f3d",
            900: "#191932",
        },
        sky: {
            50: "#f5faff",
            100: "#ebf5ff",
            200: "#cce6ff",
            300: "#add6ff",
            400: "#70b8ff",
            500: "#3399ff",
            600: "#2e8ae6",
            700: "#2673bf",
            800: "#1f5c99",
            900: "#194b7d",
        },
    },
  },
  plugins: [require("@tailwindcss/forms"), require('tw-elements/dist/plugin')],

}
