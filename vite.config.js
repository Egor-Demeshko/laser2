// vite.config.js
import { defineConfig } from 'vite'

export default defineConfig({
  build: {
    rollupOptions: {
      input: 'index.html',
      output: {
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
        entryFileNames: '[name].js',
      },
    },
  },
})
