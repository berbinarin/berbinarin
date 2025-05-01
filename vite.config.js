import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                'resources/css/landing/arteri-detail.css',
                'resources/css/landing/arteri.css',
                'resources/css/landing/karir.css',
                'resources/css/landing/keluarga-berbinar.css',
                'resources/js/app.js',
                'resources/js/landing/arteri.js',
                'resources/js/landing/karir.js',
                ],
            refresh: true,
        }),
    ],
});
