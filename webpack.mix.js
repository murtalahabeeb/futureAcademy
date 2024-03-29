const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/index.js', 'public/asset/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/asset/css')
    .sass('resources/sass/index.scss', 'public/asset/css')
    .sass('resources/sass/training.scss', 'public/asset/css')
    .sass('resources/sass/aboutus.scss', 'public/asset/css')
    .sass('resources/sass/profile.scss', 'public/asset/css');
