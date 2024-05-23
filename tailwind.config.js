/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        borderWidth: {
            DEFAULT: "1px",
            0: "0",
            2: "2px",
            3: "3px",
            4: "4px",
            6: "6px",
            8: "8px",
        },
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                plusJakartaSans: ["Plus Jakarta Sans", "sans-serif"],
            },
            backgroundImage: {
                "primary-linear":
                    "linear-gradient(249deg, #3986A3 0%, #0087C9 100%)",
            },
            colors: {
                primary: "#3986a3",
                "primary-alt": "#75badb",
                disabled: "#70787D",
                "blur-bg": "#EAF8FF",
                "blur-bg-2": "#C7F8FF",
                "blur-black": "rgba(0, 0, 0, 0.54)",
                "card-box": "#F7F7F7",
            },
            opacity: {
                54: ".54",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
