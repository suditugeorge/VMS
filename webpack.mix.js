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

/*mix.js(['./resources/assets/client/js/core/bootstrap.min.js',
        './resources/assets/client/js/core/jquery.min.js',
        './resources/assets/client/js/core/popper.min.js'], '/client/js/core.js')
    .js(['./resources/assets/client/js/plugins/moment.min.js',
        './resources/assets/client/js/plugins/bootstrap-datetimepicker.js',
        './resources/assets/client/js/plugins/bootstrap-selectpicker.js',
        './resources/assets/client/js/plugins/bootstrap-switch.js',
        './resources/assets/client/js/plugins/bootstrap-tagsinput.js',
        './resources/assets/client/js/plugins/jasny-bootstrap.min.js',
        './resources/assets/client/js/plugins/nouislider.min.js'], '/client/js/plugins.js');*/

mix.sass('./resources/assets/client/scss/now-ui-kit.scss', 'public/client/css/core/core.css').version()
    .sass('./resources/assets/client/scss/tetravet-client.scss', 'public/client/css/core/tetravet.css').version();