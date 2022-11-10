//https://github.com/Atnic/laravel-admin-lte/blob/develop/webpack.mix.js
//https://www.technig.com/adminlte-plus-laravel-5-integration/
//https://medium.com/@crydetaan/laravel-6-vuejs-adminlte-3-1e264db76809
//https://adminlte.io/blog/integrate-adminlte-with-laravel

let mix = require('laravel-mix');
<<<<<<< HEAD
const path = require('path');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
const path = require('path');
=======
<<<<<<< HEAD
<<<<<<< HEAD
const path = require('path');
=======
//const path = require('path');
>>>>>>> 31d6e3b (first)
=======
//const path = require('path');
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
const path = require('path');
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
require('laravel-mix-purgecss');

mix.autoload({
    //jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
    jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"],
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
mix.autoload({
    //jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
>>>>>>> 31d6e3b (first)
=======
mix.autoload({
    //jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
    tether: ['Tether', 'windows.Tether'],
    //Popper: ['popper', 'Popper', 'popper.js'],
    //popper: ['Popper', 'popper.js'],
    //'popper.js/dist/umd/popper.js': ['Popper']
});

mix.setPublicPath('Resources/dist');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
mix.js('Resources/js/app.js', 'Resources/dist/js'); //.vue();

mix.sass('Resources/sass/app.scss', 'Resources/dist/css');

mix.vue({
    version: 3
});

mix.purgeCss({
    enabled: false,
});

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
mix.js('Resources/js/app.js', 'Resources/dist/js').vue();

mix.sass('Resources/sass/app.scss', 'Resources/dist/css');

<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
/*
mix.js('Resources/js/auth.js', 'Resources/dist/js')
    .sass('Resources/sass/auth.scss', 'Resources/dist/css');
*/
<<<<<<< HEAD
mix.extract();
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a05b3ba1 (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
mix.extract();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 64fad46 (rebase)
mix.extract();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
mix.extract();
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")

=======
mix.extract();
/*
>>>>>>> 29587b0 (.)
=======

>>>>>>> 63c2c43 (up)
mix.extract([
    'admin-lte',
    'axios',
    //'bootstrap-sass',
    'bootstrap',
    'fastclick',
    'jquery',
    'jquery-slimscroll',
    'lodash',
    //'vue',
    'popper.js',
    'sweetalert2',
    'lodash',
    //'bootstrap-select',
    //'jasny-bootstrap',
    'moment',
    'nouislider',
<<<<<<< HEAD
<<<<<<< HEAD
] /*, 'public/js/vendor.js' */ /*, __dirname + '/Resources/dist' */ );
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)

<<<<<<< HEAD
<<<<<<< HEAD
=======
mix.extract();
/*
>>>>>>> 29587b0 (.)
=======

>>>>>>> 63c2c43 (up)
=======
mix.extract();
/*
>>>>>>> 8a5cc0b (.)
mix.extract([
    'admin-lte',
    'axios',
    //'bootstrap-sass',
    'bootstrap',
    'fastclick',
    'jquery',
    'jquery-slimscroll',
    'lodash',
    //'vue',
    'popper.js',
    'sweetalert2',
    'lodash',
    //'bootstrap-select',
    //'jasny-bootstrap',
    'moment',
    'nouislider',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
] /*, 'public/js/vendor.js' */ /*, __dirname + '/Resources/dist' */ );
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 4e5d3818 (rebase)

=======
>>>>>>> 8629e12 (rebase)
=======
] //, 'public/js/vendor.js' */ /*, __dirname + '/Resources/dist' 
);
*/
>>>>>>> 29587b0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f63434d (rebase)
=======
] /*, 'public/js/vendor.js' */ /*, __dirname + '/Resources/dist' */ );

>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
=======
] //, 'public/js/vendor.js' */ /*, __dirname + '/Resources/dist' 
);
*/
>>>>>>> 8a5cc0b (.)
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 8629e12 (rebase)
=======
>>>>>>> f63434d (rebase)
//mix.version();

mix.sourceMaps();


<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
/*
>>>>>>> 31d6e3b (first)
=======
/*
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)

require('laravel-mix-polyfill');

mix.polyfill({
    enabled: true,
    useBuiltIns: "usage",
    //targets: { "firefox": "50", "ie": 11 }
    targets: "firefox 50, IE 11"
});
<<<<<<< HEAD
//*/
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
//*/
=======
<<<<<<< HEAD
<<<<<<< HEAD
//*/
=======
*/
>>>>>>> 31d6e3b (first)
=======
*/
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
//*/
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)

var $from = './Resources/dist';
var $to = '../../../public_html/themes/AdminLTE/dist';
console.log('from :' + $from);
console.log('to :' + $to);

//UnhandledPromiseRejectionWarning: Error: ENOENT: no such file or directory, open 'F:\var\www\base_xxx\laravel\Themes\AdminLTE\Resources\views\dist\public_html\themes\AdminLTE\dist\admin-lte.css'
//Error: ENOENT: no such file or directory, open 'F:\Resources\views\dist\css\admin-lte.css'

mix.copyDirectory($from, $to);

<<<<<<< HEAD
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', '../../../public_html/webfonts');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', '../../../public_html/webfonts');
=======
<<<<<<< HEAD
<<<<<<< HEAD
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', '../../../public_html/webfonts');
=======
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', '../../../public_html/webfonts');
>>>>>>> 31d6e3b (first)
=======
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', '../../../public_html/webfonts');
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', '../../../public_html/webfonts');
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
