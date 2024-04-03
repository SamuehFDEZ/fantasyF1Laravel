import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
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
            ],
            refresh: true,
        }),
    ],
});
