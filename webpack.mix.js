//https://github.com/Atnic/laravel-admin-lte/blob/develop/webpack.mix.js
//https://www.technig.com/adminlte-plus-laravel-5-integration/
//https://medium.com/@crydetaan/laravel-6-vuejs-adminlte-3-1e264db76809
//https://adminlte.io/blog/integrate-adminlte-with-laravel

let mix = require('laravel-mix');
const path = require('path');
//https://dev.to/saymon/laravel-mix-rewrite-path-when-place-project-in-subfolder-2325
//https://dev.to/tefoh/laravel-scaffold-command-2lg
//https://dev.to/100r0bh/bulk-action-using-livewire-31i7
//https://dev.to/bdelespierre/domain-driven-design-aggregates-in-laravel-5ei8
//https://dev.to/hbgl/laravel-shorts-blade-component-gotcha-4pdo
//https://dev.to/snehalk/how-to-create-custom-command-in-laravel-8-f64


//https://www.freshconsulting.com/insights/blog/compiling-css-and-javascript-made-easy-with-laravel-mix/




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

require('laravel-mix-purgecss');

mix.autoload({
    //jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
    jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"],
    tether: ['Tether', 'windows.Tether'],
    //Popper: ['popper', 'Popper', 'popper.js'],
    //popper: ['Popper', 'popper.js'],
    //'popper.js/dist/umd/popper.js': ['Popper']
});

mix.setPublicPath('Resources/dist');

mix.js('Resources/js/app.js', 'Resources/dist/js'); //.vue();

mix.sass('Resources/sass/app.scss', 'Resources/dist/css');

mix.vue({
    version: 3
});

mix.purgeCss({
    enabled: false,
});

/*
mix.js('Resources/js/auth.js', 'Resources/dist/js')
    .sass('Resources/sass/auth.scss', 'Resources/dist/css');
*/
mix.extract();

//mix.version();

mix.sourceMaps();


mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve(__dirname, 'node_modules')
        ]
    },
    plugins: [
        // fix "process is not defined" error:
        // (do "npm install process" before running the build)
        //new webpack.ProvidePlugin({
        //    Vue: ['vue', 'default']
        //jQuery: 'jquery',
        //$: 'jquery'
        //}),

    ],
    //externals: {
    //    "vue": "Vue"
    //}
});


//*

require('laravel-mix-polyfill');

mix.polyfill({
    enabled: true,
    useBuiltIns: "usage",
    //targets: { "firefox": "50", "ie": 11 }
    targets: "firefox 50, IE 11"
});
//*/

var $from = './Resources/dist';
var $to = '../../../public_html/themes/AdminLTE/dist';
console.log('from :' + $from);
console.log('to :' + $to);

//UnhandledPromiseRejectionWarning: Error: ENOENT: no such file or directory, open 'F:\var\www\base_xxx\laravel\Themes\AdminLTE\Resources\views\dist\public_html\themes\AdminLTE\dist\admin-lte.css'
//Error: ENOENT: no such file or directory, open 'F:\Resources\views\dist\css\admin-lte.css'

mix.copyDirectory($from, $to);

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', '../../../public_html/webfonts');
