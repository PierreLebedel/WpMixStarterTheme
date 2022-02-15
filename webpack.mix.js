
const mix = require('laravel-mix');

mix.sass('src/sass/app.scss', 'dist/')
    .js('src/js/app.js', 'dist')
    .sourceMaps();
