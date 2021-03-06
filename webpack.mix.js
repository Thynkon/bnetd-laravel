const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/formatBytes.js', 'public/js')
    .js('resources/js/custom_chart.js', 'public/js')
    .js('resources/js/dropdown.js', 'public/js')
    .js('resources/js/notification.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [tailwindcss('./tailwind.config.js')]
    })

if (mix.inProduction()) {
    mix.version()
}
