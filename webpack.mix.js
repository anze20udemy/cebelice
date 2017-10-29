/**
 * Created by edwin on 3/26/17.
 */
const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
     .sass('resources/assets/sass/app.scss', 'public/css');



mix.styles([
//     'bower_resources/bootstrap/dist/css/bootstrap.css',
//     'bower_resources/fontawesome/css/font-awesome.css',
    'resources/assets/css/libs/blog-home.css',
    'resources/assets/css/libs/blog-post.css',
    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/css/libs/business-casual.css',
    'resources/assets/css/libs/main.css',
    'resources/assets/css/libs/font-awesome.css',
    'resources/assets/css/libs/metisMenu.css',
    // 'resources/assets/css/libs/sb-admin-2.css',
    // 'resources/assets/css/libs/timeline.css',
    'resources/assets/css/libs/sb-admin.css',
    'resources/assets/css/libs/shop-homepage.css',
    'resources/assets/css/libs/shop-item.css',
    // 'resources/assets/css/libs/style.css',
    // 'resources/assets/css/libs/styles'

], 'public/css/libs.css');

mix.scripts([
'bower_resources/jquery/dist/jquery.js',
   'bower_resources/bootstrap/dist/js/bootstrap.js',
   'bower_resources/Chart.js/dist/Chart.js',
    'bower_resources/metisMenu/dist/metisMenu.js',
    'resources/assets/js/libs/contact_me.js',
    'resources/assets/js/libs/jqBootstrapValidation.js',
    'resources/assets/js/sb-admin-2.js',
    'resources/assets/js/frontend.js',
    'resources/assets/js/libs/script.js',
    'resources/assets/js/libs/scripts.js'

], 'public/js/libs.js');