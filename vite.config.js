import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.scss',
            'resources/js/app.js',
            'resources/js/bootstrap.js',
        ]),
    ],
    resolve:{
        alias:{
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});
