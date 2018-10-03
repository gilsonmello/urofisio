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

/*mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');*/



mix.options({
    processCssUrls: false
});


mix.babel([
    'public/themes/health/js/jquery-3.3.1.min.js',
    'public/themes/health/styles/bootstrap4/popper.js',
    'public/themes/health/styles/bootstrap4/bootstrap.min.js',
    'public/themes/health/plugins/OwlCarousel2-2.2.1/owl.carousel.js',
    'public/themes/health/plugins/easing/easing.js',
    'public/themes/health/plugins/parallax-js-master/parallax.min.js',
    'public/plugins/unitegallery-master/dist/js/unitegallery.min.js',
    'public/plugins/unitegallery-master/dist/themes/tiles/ug-theme-tiles.js',
    'public/themes/health/js/custom.js',
    'resources/js/custom.js'
], 'public/js/main.js').version();

mix.styles([
    'public/themes/health/styles/bootstrap4/bootstrap.min.css',
    'public/themes/health/plugins/font-awesome-4.7.0/css/font-awesome.min.css',
    'public/themes/health/plugins/OwlCarousel2-2.2.1/owl.carousel.css',
    'public/themes/health/plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
    'public/themes/health/plugins/OwlCarousel2-2.2.1/animate.css',
    'public/plugins/unitegallery-master/dist/css/unite-gallery.css',
    'public/themes/health/styles/main_styles.css',
    'public/themes/health/styles/responsive.css',
    'resources/css/custom.css'
], 'public/css/main.css').version();


