import defaultTheme from 'tailwindcss/defaultTheme';

export default {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        screens: {
            'xs': '475px',
            ...defaultTheme.screens,
        },
    },
    plugins: [],
}