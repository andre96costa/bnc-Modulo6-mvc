import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/View/Components/*.php'
    ],
    theme: {
        safelist: [
            'bg-blue-100',
            'bg-blue-200',
            'bg-blue-300',
            'bg-blue-400',
            'bg-blue-500',
            'bg-blue-600',
            'bg-blue-700',
            'bg-blue-800',
            'bg-blue-900',
        ],
        extend: {
            colors: {
                blue: {
                    base: '#7988FD',
                    100: '#E4E8FE',
                    200: '#B1BFE4',
                    300: '#C9D1FE',
                    400: '#9AA6FD',
                    500: '#7988FD',
                    600: '#5865D9',
                    700: '#3C47B6',
                    800: '#262F92',
                    900: '#171D79',
                },
                gray: {
                    50: '#F9F9F9',
                    100: '#F2F2F2',
                    200: '#E8E8E8',
                    300: '#D8D8D8',
                    400: '#B4B4B4',
                    500: '#949494',
                    600: '#6C6C6C',
                    700: '#595959',
                    800: '#3A3A3A',
                    900: '#1A1A1A',
                },
                success: {
                    base: '#45BC38',
                    100: '#E7FBD8',
                    200: '#CAF8B2',
                    300: '#AAE97D',
                    400: '#A1EA87',
                    500: '#45BC38',
                    600: '#2BA128',
                    700: '#1C8723',
                    800: '#116D1F',
                    900: '#0A5A1C',
                },
                warning: {
                    base: '#FFD002',
                    100: '#FFF9CC',
                    200: '#FFF299',
                    300: '#FFE867',
                    400: '#FFDF41',
                    500: '#FFD002',
                    600: '#DBAE01',
                    700: '#B78E01',
                    800: '#937000',
                    900: '#7A5A00',
                },
                danger: {
                    base: '#FF5964',
                    100: '#FFE7DD',
                    200: '#FFCABC',
                    300: '#FFA69B',
                    400: '#FF8582',
                    500: '#FF5964',
                    600: '#DB4159',
                    700: '#B72C4E',
                    800: '#931C44',
                    900: '#7A113D',
                }
            },
            fontSize: {
                "title-1": ['68px', '74px'],
                "title-2": ['48px', '62px'],
                "title-3": ['36px', '46.8px'],
                "title-4": ['28px', '36.4px'],
                "title-5": ['16px', '20.8px'],
            },
            boxShadow: {
                hard: '0px 2px 4px rgba(0, 0, 0, 0.16)',
                regular: '0px 4px 23px rgba(0, 0, 0, 0.12);',
                medium: '0px 4px 22px rgba(0, 0, 0, 0.06)',
                big: '1px 5px 22px 4px rgba(0, 0, 0, 0.15)',
                card: '0px 7px 20px rgba(0, 0, 0, 0.08)',
                badge: '0px 2px 8px rgba(0, 0, 0, 0.08), 0px 20px 32px rgba(0, 0, 0, 0.24)',
            }
        },
    },
    plugins: [],
};
