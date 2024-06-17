import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/liga.scss',
                'resources/css/miEquipo.scss',
                'resources/css/constructor.scss',
                'resources/css/premios.scss',
                'resources/css/comoJugar.scss',
                'resources/css/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/login.scss',
                'resources/css/login.css',
                'resources/js/login.js',
                'resources/js/constructor.js',
                'resources/js/miEquipo.js',
                'resources/js/liga.js',
                'resources/js/subscribe.js',
                'resources/js/script.js',
                'resources/js/ipConfig.js',
                'resources/css/registrar.scss'

            ],
            refresh: true,
        }),
    ],
});
