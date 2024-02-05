import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({
    plugins: [
        react(),
        laravel({
            input: [
                'resources/js/app.jsx',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: [
            {
                find: '@pages',
                replacement: path.resolve(__dirname, "resources/js/pages"),
            },
            {
                find: '@components',
                replacement: path.resolve(__dirname, "resources/js/components"),
            },
        ],
    },
});
