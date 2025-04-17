let mix = require('laravel-mix');
const path = require('path');

//require('laravel-mix-purgecss');
require('laravel-mix-polyfill');
var public_path = 'Resources/dist';

mix.js('Resources/js/app.js', 'js'); //.vue();
mix.sass('Resources/sass/app.scss', 'css');

mix.vue({ version: 3 });

//mix.setResourceRoot('../');
mix.setPublicPath(public_path);

mix.autoload({
	//jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
	jquery: [
		'$',
		'window.jQuery',
		'jQuery',
		'window.$',
		'jquery',
		'window.jquery',
	],
	tether: ['Tether', 'windows.Tether'],
	moment: 'moment', // only one
	//Popper: ['popper', 'Popper', 'popper.js'],
	//popper: ['Popper', 'popper.js'],
	//'popper.js/dist/umd/popper.js': ['Popper']
});

//mix.purgeCss({
//   enabled: false,
//});

mix.extract();

//mix.version();

mix.webpackConfig({
	resolve: {
		modules: [path.resolve(__dirname, 'node_modules')],
	},
});

mix.babelConfig({
	//presets: ["@babel/preset-env"],
	plugins: ['@babel/plugin-syntax-dynamic-import'],
});

mix.polyfill({
	enabled: true,
	useBuiltIns: 'usage',
	targets: { firefox: '50', ie: 11 },
});

//With File Versioning
//mix.version();
//Generate JavaScript source maps.
mix.sourceMaps();

var $from = './Resources/dist';

var $to = '../../../public_html/themes/AdminLTE/dist';
console.log('from :' + $from);
console.log('to :' + $to);

mix.copyDirectory($from, $to);

mix.copyDirectory(
	'node_modules/@fortawesome/fontawesome-free/webfonts',
	'../../../public_html/webfonts',
);
mix.copyDirectory('Resources/dist/fonts', '../../../public_html/fonts');
