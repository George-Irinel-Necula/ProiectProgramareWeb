import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import fullReload from 'vite-plugin-full-reload'

export default defineConfig({
  plugins: [
    tailwindcss(),
    fullReload(['**/*.php']),
  ],
  base: '/',
  server: {
    watch: {
      usePolling: true,
      interval: 100,
    },
  },
  build: {
    rollupOptions: {
      output: {
        entryFileNames: 'assets/index.js',
        chunkFileNames: 'assets/[name]-[hash].js',
        assetFileNames: ({ name }) => {
          if (name && name.endsWith('.css')) return 'assets/index.css'
          return 'assets/[name]-[hash][extname]'
        },
      },
    },
    cssCodeSplit: true,
  },
})
