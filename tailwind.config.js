import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import("tailwindcss").Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/tw-elements/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                arial: ["Arial", ...defaultTheme.fontFamily.sans],
            },
            screens: {
                md2: "1087px",
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
        require("tw-elements/plugin.cjs")
    ],
};
