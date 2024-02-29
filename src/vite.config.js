/// <reference types="vitest" />
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import checker from 'vite-plugin-checker';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/ts/app.ts'],
            refresh: true,
        }),
        vue(),
        checker({
            typescript: true,
            vueTsc: true,
            lintCommand: "eslint --fix 'resources/ts/**/*.{ts,vue}'",
        }),
    ],
    test: {
        include: ['tests/ts/**/*.{test,spec}.{js,mjs,cjs,ts,mts,cts,jsx,tsx}'],
    },
});
