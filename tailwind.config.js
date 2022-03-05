module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "2rem",
        },
        extend: {
            colors: {
                dark: "#141618",
                primary: {
                    DEFAULT: "#3184E1",
                },
                accent: {
                    DEFAULT: "#ED4362",
                },
                light: {
                    DEFAULT: "#FAFAFA",
                },
                gr: {
                    DEFAULT: "#D2D7EA",
                    dark: "#8289A5",
                },
            },
        },
    },
    plugins: [],
};
