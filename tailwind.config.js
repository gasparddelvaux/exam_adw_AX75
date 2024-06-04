module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                'gray-222': "#222",
                'gray-7c': "#7c7c7c",
                'gray-title': "#222222cc",
            }
        },
    },
    plugins: [require("flowbite/plugin")],
};
