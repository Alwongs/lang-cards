const mix = require('laravel-mix');

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
    .sass('resources/sass/site/app.scss', 'public/css/site')
    .sass('resources/sass/admin/app.scss', 'public/css/admin')
    .sass('resources/sass/auth/app.scss', 'public/css/auth')
    .postCss('resources/css/app.css', 'public/css/auth', [
        // require('tailwindcss'),
        require('autoprefixer'),
    ]);
