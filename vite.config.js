import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: 'localhost', // Forza l'uso di localhost invece di [::1]
        port: 5173, // Porta di default di Vite
        hmr: {
            host: 'localhost', // Host per Hot Module Replacement
        },
    },
});
