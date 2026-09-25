/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                tsm: {
                    navy: "#0A2A5E",
                    blue: "#123F83",
                    yellow: "#F5B51B",
                    gold: "#D99A00",

                    dark: "#08111F",
                    surface: "#101B2C",

                    light: "#F5F7FA",
                    muted: "#667085",
                    border: "#E4E7EC",

                    white: "#FFFFFF",
                },
            },

            fontFamily: {
                heading: ["Barlow Condensed", "sans-serif"],
                sans: ["Inter", "sans-serif"],
            },

            boxShadow: {
                card: "0 10px 30px rgba(8, 17, 31, 0.08)",
                "card-hover": "0 18px 45px rgba(8, 17, 31, 0.14)",
            },

            borderRadius: {
                "2xl": "1.25rem",
                "3xl": "1.75rem",
            },

            letterSpacing: {
                wide2: "0.18em",
            },
        },
    },

    plugins: [],
};