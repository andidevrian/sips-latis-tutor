import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        cors: {
            origin: '*',  // Replace with your actual Ngrok URL
            methods: ['GET', 'POST', 'PUT', 'DELETE'],    // Allow specific HTTP methods
            allowedHeaders: ['Content-Type', 'Authorization'],  // Add any other headers you need
            credentials: true,                             // Allow cookies if needed
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
