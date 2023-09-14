module.exports = {
  proxy: "http://localhost:8080",
  files: ["widgets/**/*.php", "dist/assets/*.css"],
  reloadDelay: 2000,
  injectChanges: true,
  watchEvents: ["change"],
};
