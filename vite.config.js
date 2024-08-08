import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin/admin.scss',
                'resources/css/site/site.scss',
                'resources/js/admin/admin.js',
                'resources/js/site/site.js'
            ],
            buildDirectory: 'assets',
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                entryFileNames: (chunkInfo) => {
                    if (chunkInfo.name.includes('css')) {
                        return 'css/[name].[hash].css';
                    }
                    return 'js/[name].[hash].js';
                },
                chunkFileNames: 'js/[name].[hash].js',
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name && assetInfo.name.endsWith('.css')) {
                        return 'css/[name].[hash].[ext]';
                    }
                    return '[ext]/[name].[hash].[ext]';
                },
            },
        },
    },
});
