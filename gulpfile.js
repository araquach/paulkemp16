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
    mix.sass([
        'app.scss'
    ], 'public/css/app.css');
    
    mix.styles([
        'mobile.css'
    ], 'public/css/mob.css');
     
    mix.scripts([
        'jquery.js',
        'feedback-feed.js',
        'feedback-feed-ind.js',
        'mobile-nav.js'
    ], 'public/scripts/jquery.js')
     
    .scripts([
        'mootools_core.js',
        'mootools-more.js'
    ],  'public/scripts/mootools.js')
     
    .scripts([
        'modernizr.js',
        'selectivizr-min.js'
    ], 'public/scripts/modernizr.js');
    
    mix.version([
        'public/css/app.css',
        'public/css/mob.css'
    ]);
});
