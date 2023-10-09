import { defineConfig } from "vite";
import path from "path";

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [],
  build: {
    outDir: "dist",
    rollupOptions: {
      input: {
        mainJS: path.resolve(__dirname, "assets/js/main.js"),
        mainCss: path.resolve(__dirname, "assets/css/main.css"),
      },
    },
  },
});
