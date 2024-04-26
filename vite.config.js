import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [vue()],
  build: {
    outDir: 'public/build',
    manifest: true,
    rollupOptions: {
      input: {
        main: './resources/js/app.js',
      },
    },
  },
});

