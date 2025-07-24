/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            // Default font set to TikTok Sans + fallback
            fontFamily: {
                caveat: ["Caveat", "cursive"],
                rubik: ["Rubik", "sans-serif"],
            },

            fontSize: {
                h1: "40px", // 40px
                h2: "32px", // 32px
                h3: "28px", // 24px
                para: "18px", // 16px
            },
        },
    },
    plugins: [],
};
