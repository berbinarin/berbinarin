/** @type {import("tailwindcss").Config} */
import forms from "@tailwindcss/forms";
import plugin from "tailwindcss/plugin.js";
import typography from "@tailwindcss/typography";
import scrollbarhide from "tailwind-scrollbar-hide";

const Myclass = plugin(function ({ addUtilities }) {
  addUtilities({
    ".my-rotate-y-180": {
      transform: "rotateY(180deg)",
    },
    ".preserve-3d": {
      transformStyle: "preserve-3d",
    },
    ".perspective": {
      perspective: "1000px",
    },
  });
});

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
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
    fontFamily: {
      inter: ["Inter", "serif"],
    },
    extend: {
      screens: {
        xs: "470px", // Tambahkan breakpoint kustom
        "3xl": "1440px", // 4k
      },
      boxShadow: {
        "benefit-icon": "0px 0px 15px 0px #0000001A",
        "primary-light": "0px 5px 15px 0px #3986A333",
        magang: "0px 0px 15px 0px #F7B23B4D",
        subdivisi: "0px 0px 15px 0px #15323D",
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
        plusJakartaSans: ["Plus Jakarta Sans", "sans-serif"],
        inter: ["Inter"],
      },
      backgroundImage: {
        "primary-linear": "linear-gradient(249deg, #3986A3 0%, #0087C9 100%)",
      },
      colors: {
        primary: "#3986a3",
        "primary-alt": "#75badb",
        disabled: "#70787D",
        "blur-bg": "#EAF8FF",
        "blur-bg-2": "#C7F8FF",
        "blur-black": "rgba(0, 0, 0, 0.54)",
        "card-box": "#F7F7F7",
        remote: "#9E9E9E",
        viewdata: "#3B82F6",
        "editdata-dashboardBtn": "#E9B306",
        "deletedata-dashboardBtn": "#EF4444",
      },
      opacity: {
        54: ".54",
      },
      listStyleImage: {
        checkmark: 'url("/assets/images/landing/asset-kelas/berbinar-plus/list.png")',
      },
    },
  },
  plugins: [forms, Myclass, typography, scrollbarhide],
};
