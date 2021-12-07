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

//  mix.styles([
//     'resources/js/style2.css',
//     // 'resources/js/lightbox.css',
//     // 'resources/js/lightbox.min.css'
// ], 'public/css/moonbase.css');

// mix.styles('resources/css/lightbox.css', 'public/css/moonbase2.css')
mix.styles('resources/css/style2.css', 'public/css/moonbase.css')
//mix.styles('resources/css/lightbox.min.css', 'public/css/moonbase3.css')
mix.js('resources/js/bootstrap.js', 'public/js/moonbase.js')
mix.js('resources/js/script.js', 'public/js/moonbase2.js')


mix.copyDirectory('resources/images', 'public/images');