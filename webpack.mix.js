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

mix.js([
    'resources/assets/js/app.js',
    'resources/assets/js/vendor/slick/slick.min.js',
    'resources/assets/js/vendor/wow/wow.min.js',
    'resources/assets/js/vendor/animsition/animsition.min.js',
    'resources/assets/js/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
    'resources/assets/js/vendor/counter-up/jquery.waypoints.min.js',
    'resources/assets/js/vendor/counter-up/jquery.counterup.min.js',
    'resources/assets/js/vendor/circle-progress/circle-progress.min.js',
    'resources/assets/js/vendor/perfect-scrollbar/perfect-scrollbar.min.js',
    'resources/assets/js/vendor/chartjs/Chart.bundle.min.js',
    'resources/assets/js/vendor/select2/select2.min.js',
    'resources/assets/js/main.js',
    'resources/assets/js/vendor/jasny-bootstrap-3.1.3-dist/jasny-bootstrap/js/jasny-bootstrap.js',
    'resources/assets/js/vendor/DataTables/DataTables-1.10.18/js/jquery.dataTables.js',
    'resources/assets/js/vendor/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.js',


    'resources/assets/js/script.js'
], 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.minify('public/js/app.js')
    .minify('public/css/app.css');
