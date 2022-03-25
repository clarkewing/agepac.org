const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    safelist: [
        {
            pattern: /bg-(blue|green|yellow|red)-50/,
        },
        {
            pattern: /text-(blue|green|yellow|red)-(400|700|800)/,
        },
    ],

    theme: {
        extend: {
            colors: {
                'universe': '#000A33',
                'dandelion-50': '#FDF5CF',
                'dandelion-100': '#FBEDA9',
                'dandelion-200': '#F8E483',
                'dandelion-300': '#F4DA5E',
                'dandelion-400': '#EFD03A',
                'dandelion-500': '#EAC517',
                'dandelion-600': '#C3A514',
                'dandelion-700': '#9D8512',
                'dandelion-800': '#77650F',
                'dandelion-900': '#52450C',
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
