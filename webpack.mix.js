//https://github.com/Atnic/laravel-admin-lte/blob/develop/webpack.mix.js
//https://www.technig.com/adminlte-plus-laravel-5-integration/
//https://medium.com/@crydetaan/laravel-6-vuejs-adminlte-3-1e264db76809
//https://adminlte.io/blog/integrate-adminlte-with-laravel

let mix = require('laravel-mix');




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

mix.autoload({
    jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
});

mix.js('Resources/js/admin-lte.js', 'public/js')
    .sass('resources/sass/admin-lte.scss', 'public/css');

mix.js('Resources/js/auth.js', 'public/js')
    .sass('Resources/sass/auth.scss', 'public/css');

mix.extract([
    'admin-lte',
    'axios',
    'bootstrap-sass',
    'fastclick',
    'jquery',
    'jquery-slimscroll',
    'lodash',
    'vue',
], 'public/js/vendor.js');

mix.version();

mix.setPublicPath('public');