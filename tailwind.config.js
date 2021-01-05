module.exports = {
  purge: [
    './storage/framework/Views/*.php',
    './resources/**/*.blade.php',
    './resource/**/*.js',
    './resource/**/*.css',
    './resource/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
