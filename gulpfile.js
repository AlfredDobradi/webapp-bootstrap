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

elixir(function(mix) {
    mix.scripts([
        '../bower/angular/angular.min.js',
        '../bower/angular-aria/angular-aria.min.js',
        '../bower/angular-animate/angular-animate.min.js',
        '../bower/angular-material/angular-material.min.js'
    ], 'public/assets/js/vendor.js');

    mix.scripts([
        'controllers/WelcomeController.js',
        'bootstrap.js'
    ], 'public/assets/js/app.js');

    mix.styles([
        '../bower/angular-material/angular-material.min.css'
    ], 'public/assets/css/vendor.css');

    mix.less([
        'bootstrap.less'
    ], 'public/assets/css/app.css');

    mix.version([
        'assets/js/vendor.js',
        'assets/js/app.js',
        'assets/css/vendor.css',
        'assets/css/app.css'
    ]);
});
