import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  build: {
    outDir: "../../public/build-showcase",
    emptyOutDir: true,
    manifest: true,
  },
  plugins: [
    laravel({
      publicDirectory: "../../public",
      buildDirectory: "../../public/build-showcase",
      input: __dirname + "/Resources/assets/js/app.js",
      refresh: true,
    }),
  ],
});
