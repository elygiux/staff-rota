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
        ], 'public/css/landing.min.css', 'resources/assets')
        .scripts([
            'jquery/dist/jquery.min.js',
            'bootstrap/dist/js/bootstrap.min.js'
        ], 'public/js/app.min.js', 'resources/assets/vendor');
});
