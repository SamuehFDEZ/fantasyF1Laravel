const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/login.js', 'public/js');


mix.sass('resources/css/app.scss', 'public/css')
    .sass('resources/css/login.scss', 'public/css')
    .sass('resources/css/comoJugar.scss', 'public/css');


