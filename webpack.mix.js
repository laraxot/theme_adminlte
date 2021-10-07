//https://github.com/Atnic/laravel-admin-lte/blob/develop/webpack.mix.js
//https://www.technig.com/adminlte-plus-laravel-5-integration/
//https://medium.com/@crydetaan/laravel-6-vuejs-adminlte-3-1e264db76809
//https://adminlte.io/blog/integrate-adminlte-with-laravel

let mix = require('laravel-mix');
//const path = require('path');
//https://dev.to/saymon/laravel-mix-rewrite-path-when-place-project-in-subfolder-2325
//https://dev.to/tefoh/laravel-scaffold-command-2lg
//https://dev.to/100r0bh/bulk-action-using-livewire-31i7
//https://dev.to/bdelespierre/domain-driven-design-aggregates-in-laravel-5ei8
//https://dev.to/hbgl/laravel-shorts-blade-component-gotcha-4pdo
//https://dev.to/snehalk/how-to-create-custom-command-in-laravel-8-f64




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

mix.setPublicPath('Resources/views/dist');

mix.js('Resources/js/admin-lte.js', 'Resources/views/dist/js')
    .sass('resources/sass/admin-lte.scss', 'Resources/views/dist/css');

/*    
mix.js('Resources/js/auth.js', 'Resources/views/dist/js')
    .sass('Resources/sass/auth.scss', 'Resources/views/dist/css');
*/

mix.extract([
    'admin-lte',
    'axios',
    'bootstrap-sass',
    'fastclick',
    'jquery',
    'jquery-slimscroll',
    'lodash',
    'vue',
] /*, 'public/js/vendor.js' */ /*, __dirname + '/Resources/views/dist' */ );

//mix.version();

mix.sourceMaps();


/* 

require('laravel-mix-polyfill');

mix.polyfill({
    enabled: true,
    useBuiltIns: "usage",
    //targets: { "firefox": "50", "ie": 11 }
    targets: "firefox 50, IE 11"
});
*/

var $from = './Resources/views/dist';
var $to = '../../../public_html/themes/AdminLTE/dist';
console.log('from :' + $from);
console.log('to :' + $to);

//UnhandledPromiseRejectionWarning: Error: ENOENT: no such file or directory, open 'F:\var\www\base_xxx\laravel\Themes\AdminLTE\Resources\views\dist\public_html\themes\AdminLTE\dist\admin-lte.css'
//Error: ENOENT: no such file or directory, open 'F:\Resources\views\dist\css\admin-lte.css'

//$res = mix.copyDirectory($from, $to);