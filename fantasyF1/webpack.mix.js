const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets/js')
    .js('resources/js/login.js', 'public/assets/js');


mix.sass('resources/css/app.scss', 'public/assets/css')
    .sass('resources/css/login.scss', 'public/assets/css')
    .sass('resources/css/comoJugar.scss', 'public/assets/css')
    .sass('resources/css/premios.scss', 'public/assets/css')
    .sass('resources/css/constructor.scss', 'public/assets/css');

