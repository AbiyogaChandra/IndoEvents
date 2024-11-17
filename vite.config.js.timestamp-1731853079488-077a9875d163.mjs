// vite.config.js
import path from "path";
import { defineConfig } from "file:///C:/laragon/www/IndoEvents/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/IndoEvents/node_modules/laravel-vite-plugin/dist/index.js";
import tailwind from "file:///C:/laragon/www/IndoEvents/node_modules/tailwindcss/lib/index.js";
import autoprefixer from "file:///C:/laragon/www/IndoEvents/node_modules/autoprefixer/lib/autoprefixer.js";
var __vite_injected_original_dirname = "C:\\laragon\\www\\IndoEvents";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: ["resources/scss/app.scss", "resources/scss/bootstrap.scss", "resources/css/filament/admin/theme.css", "resources/js/app.js"],
      refresh: true
    })
  ],
  resolve: {
    alias: [
      { find: "~bootstrap", replacement: path.resolve(__vite_injected_original_dirname, "node_modules/bootstrap") }
    ]
  },
  css: {
    postcss: {
      plugins: [
        tailwind,
        autoprefixer
      ]
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxJbmRvRXZlbnRzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxJbmRvRXZlbnRzXFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9sYXJhZ29uL3d3dy9JbmRvRXZlbnRzL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHBhdGggZnJvbSBcInBhdGhcIjtcbmltcG9ydCB7IGRlZmluZUNvbmZpZyB9IGZyb20gJ3ZpdGUnO1xuaW1wb3J0IGxhcmF2ZWwgZnJvbSAnbGFyYXZlbC12aXRlLXBsdWdpbic7XG5pbXBvcnQgdGFpbHdpbmQgZnJvbSAndGFpbHdpbmRjc3MnXG5pbXBvcnQgYXV0b3ByZWZpeGVyIGZyb20gJ2F1dG9wcmVmaXhlcidcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFsncmVzb3VyY2VzL3Njc3MvYXBwLnNjc3MnLCAncmVzb3VyY2VzL3Njc3MvYm9vdHN0cmFwLnNjc3MnLCAncmVzb3VyY2VzL2Nzcy9maWxhbWVudC9hZG1pbi90aGVtZS5jc3MnLCAncmVzb3VyY2VzL2pzL2FwcC5qcyddLFxuICAgICAgICAgICAgcmVmcmVzaDogdHJ1ZSxcbiAgICAgICAgfSksXG4gICAgXSxcbiAgICByZXNvbHZlOiB7XG4gICAgICAgIGFsaWFzOiBbXG4gICAgICAgICAgICB7ZmluZDogJ35ib290c3RyYXAnLCByZXBsYWNlbWVudDogcGF0aC5yZXNvbHZlKF9fZGlybmFtZSwgJ25vZGVfbW9kdWxlcy9ib290c3RyYXAnKX0sXG4gICAgICAgIF1cbiAgICB9LFxuICAgIGNzczoge1xuICAgICAgICBwb3N0Y3NzOiB7XG4gICAgICAgICAgICBwbHVnaW5zOiBbXG4gICAgICAgICAgICAgICAgdGFpbHdpbmQsXG4gICAgICAgICAgICAgICAgYXV0b3ByZWZpeGVyLFxuICAgICAgICAgICAgXSxcbiAgICAgICAgfSxcbiAgICB9LFxufSk7XG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQXFRLE9BQU8sVUFBVTtBQUN0UixTQUFTLG9CQUFvQjtBQUM3QixPQUFPLGFBQWE7QUFDcEIsT0FBTyxjQUFjO0FBQ3JCLE9BQU8sa0JBQWtCO0FBSnpCLElBQU0sbUNBQW1DO0FBTXpDLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFNBQVM7QUFBQSxJQUNMLFFBQVE7QUFBQSxNQUNKLE9BQU8sQ0FBQywyQkFBMkIsaUNBQWlDLDBDQUEwQyxxQkFBcUI7QUFBQSxNQUNuSSxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsRUFDTDtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsT0FBTztBQUFBLE1BQ0gsRUFBQyxNQUFNLGNBQWMsYUFBYSxLQUFLLFFBQVEsa0NBQVcsd0JBQXdCLEVBQUM7QUFBQSxJQUN2RjtBQUFBLEVBQ0o7QUFBQSxFQUNBLEtBQUs7QUFBQSxJQUNELFNBQVM7QUFBQSxNQUNMLFNBQVM7QUFBQSxRQUNMO0FBQUEsUUFDQTtBQUFBLE1BQ0o7QUFBQSxJQUNKO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
