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

mix.webpackConfig({
    resolve: {
        alias: {
            jquery: "jquery/src/jquery"
        }
    }
});

mix.js([
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/app.js',
    'node_modules/adminator/src/assets/scripts/index.js',
],'public/js/app.js');

mix.sass('resources/assets/sass/app.scss', 'public/css');

