import path from "path";
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwind from 'tailwindcss'
import autoprefixer from 'autoprefixer'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/scss/bootstrap.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: [
            {find: '~bootstrap', replacement: path.resolve(__dirname, 'node_modules/bootstrap')},
        ]
    },
    css: {
        postcss: {
            plugins: [
                tailwind,
                autoprefixer,
            ],
        },
    },
});
