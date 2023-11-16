import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // sourcemap: false,
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/error.css','resources/js/app.js', 
            'resources/css/material-kit.css'],
            refresh: true,
        }),
    ],
});