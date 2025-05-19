module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/preline/dist/*.js",
        "./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php",
    ],
    darkMode: "class", // Make sure dark mode is enabled (class-based for your case)
    purge: {
        enabled: process.env.NODE_ENV === "production", // Only purge in production
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
            "./node_modules/preline/dist/*.js",
            "./vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php",
        ],
    },
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/forms"), require("tailwindcss-motion")],
};
