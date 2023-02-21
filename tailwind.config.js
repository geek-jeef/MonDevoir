const colors = require("tailwindcss/colors");
const {
    toRGB,
    withOpacityValue,
} = require("@left4code/tw-starter/dist/js/tailwind-config-helper");


module.exports = {
    mode: "jit",
    presets: [
        require('./vendor/geekjeef/wireui/tailwind.config.js'),
    ],
    content: [
        "./src/**/*.{php,html,js,jsx,ts,tsx,vue}",
        "./resources/**/*.{php,html,js,jsx,ts,tsx,vue}",
        "./node_modules/@left4code/tw-starter/**/*.js",

        "./vendor/geekjeef/livewire-wizard/resources/views/*.blade.php",
        './vendor/geekjeef/wireui/resources/**/*.blade.php',
        './vendor/geekjeef/wireui/ts/**/*.ts',
        './vendor/geekjeef/wireui/src/View/**/*.php',

        // ".//*.html",
    ],
    
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                rgb: toRGB(colors),
                primary: withOpacityValue("--color-primary"),
                secondary: withOpacityValue("--color-secondary"),
                success: withOpacityValue("--color-success"),
                info: withOpacityValue("--color-info"),
                warning: withOpacityValue("--color-warning"),
                pending: withOpacityValue("--color-pending"),
                danger: withOpacityValue("--color-danger"),
                light: withOpacityValue("--color-light"),
                dark: withOpacityValue("--color-dark"),
                slate: {
                    50: withOpacityValue("--color-slate-50"),
                    100: withOpacityValue("--color-slate-100"),
                    200: withOpacityValue("--color-slate-200"),
                    300: withOpacityValue("--color-slate-300"),
                    400: withOpacityValue("--color-slate-400"),
                    500: withOpacityValue("--color-slate-500"),
                    600: withOpacityValue("--color-slate-600"),
                    700: withOpacityValue("--color-slate-700"),
                    800: withOpacityValue("--color-slate-800"),
                    900: withOpacityValue("--color-slate-900"),
                },
                wire_primary: {
                    50: withOpacityValue("--color-wire_primary-50"),
                    100: withOpacityValue("--color-wire_primary-100"),
                    200: withOpacityValue("--color-wire_primary-200"),
                    300: withOpacityValue("--color-wire_primary-300"),
                    400: withOpacityValue("--color-wire_primary-400"),
                    500: withOpacityValue("--color-wire_primary-500"),
                    600: withOpacityValue("--color-wire_primary-600"),
                    700: withOpacityValue("--color-wire_primary-700"),
                    800: withOpacityValue("--color-wire_primary-800"),
                    900: withOpacityValue("--color-wire_primary-900"),
                },

                darkmode: {
                    50: withOpacityValue("--color-darkmode-50"),
                    100: withOpacityValue("--color-darkmode-100"),
                    200: withOpacityValue("--color-darkmode-200"),
                    300: withOpacityValue("--color-darkmode-300"),
                    400: withOpacityValue("--color-darkmode-400"),
                    500: withOpacityValue("--color-darkmode-500"),
                    600: withOpacityValue("--color-darkmode-600"),
                    700: withOpacityValue("--color-darkmode-700"),
                    800: withOpacityValue("--color-darkmode-800"),
                    900: withOpacityValue("--color-darkmode-900"),
                }
            },
            fontFamily: {
                roboto: ["Roboto"],
                amnesty: ["TradeGothic LT"],
            },
            container: {
                center: true,
            },
            maxWidth: {
                "1/4": "25%",
                "1/2": "50%",
                "3/4": "75%",
            },
            fontSize: {
                small: ['10px', '13px'],
            },
            strokeWidth: {
                0.5: 0.5,
                1.5: 1.5,
                2.5: 2.5,
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'), 
        ],
    variants: {
        extend: {
            boxShadow: ["dark"],
        },
    },
};
