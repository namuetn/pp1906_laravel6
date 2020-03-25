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
   .sass('resources/sass/app.scss', 'public/css')
   .js('resources/js/ajax_update_delete_orders.js', 'public/js')
   .js('resources/js/add_to_cart.js', 'public/js')
   .js('resources/js/ajax_category.js', 'public/js')
   .js('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js')
   .copyDirectory('resources/views/theme/wish/','public/theme/');
