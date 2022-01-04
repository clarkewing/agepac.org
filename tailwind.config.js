const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                'universe': '#000A33',
                'dandelion': '#F4DA5E',
                'vermilion': '#F95A38',
                'tiara': '#D3DAD9',
                'wedgewood': '#4B8AA2',
                'shiraz': '#BB0A21',
                'blush': '#FFF9FB',
            },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
