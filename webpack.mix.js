const mix = require('laravel-mix');
var $ = require( "jquery" );

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
mix.disableSuccessNotifications();
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/profile.scss', 'public/css')
    .sourceMaps();


mix.scripts(
    'node_modules/fullcalendar/main.min.js',

 'public/js/app.js');

 mix.scripts([
    'node_modules/fullcalendar/main.min.js',
    ],
 'public/js/app.js');

