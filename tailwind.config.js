import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                footerBg: "#120F0F",
                headerBg: "#120F0F",
            },
        },
    },

    plugins: [forms, require("daisyui"), require("flowbite/plugin")],
    daisyui: {
        themes: [
            {
                oxygen: {
                    primary: "#003fff",
                    secondary: "#3b00ff",
                    accent: "#007196",
                    neutral: "#00101c",
                    "base-100": "#fcfcfc",
                    info: "#008ccc",
                    success: "#40a800",
                    warning: "#ffa200",
                    error: "#dc2626",
                },
            },
            "light",
            "dark",
            "aqua",
            "cupcake",
            "retro",
        ], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "dark", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: "*", // The element that receives theme color CSS variables
    },
};

