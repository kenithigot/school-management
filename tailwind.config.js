export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './node_modules/preline/dist/*.js',
  ],
  purge: false,
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms', 'tailwindcss-motion'),
  ],
}