var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.less('app.less', 'resources/assets/css/app.css');

    mix
        .styles([
            'css/app.css',
            'vendor/bootstrap/dist/css/bootstrap.min.css'
        ], 'public/css/app.min.css', 'resources/assets')
        .scripts([
            'vendor/jquery/dist/jquery.min.js',
            'vendor/bootstrap/dist/js/bootstrap.min.js',
            'js/helpers.js',
            'js/highcharts.js'
        ], 'public/js/app.min.js', 'resources/assets');
});
