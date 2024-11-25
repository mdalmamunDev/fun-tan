const path = require("path");

const mix = require('laravel-mix');

// Alias to use '@' for resources/js
mix.alias({
    '@': path.join(__dirname, 'resources/js')
});

// Backend Webpack configuration
mix.js('resources/vue-app/backend/js/app.js', 'public/vue-app/backend/js')
    .vue()
    .sass('resources/vue-app/backend/css/app.scss', 'public/vue-app/backend/css');

// Frontend Webpack configuration for JS
mix.js('resources/vue-app/frontend/items-app/items-app', 'public/vue-app/frontend/items-app/js').vue();

// Separate Tailwind CSS compilation
mix.postCss('resources/vue-app/utils/vendors/tailwind.css', 'public/vue-app/css', [
    require('tailwindcss'),
]);
