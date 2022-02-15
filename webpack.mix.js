
const mix = require('laravel-mix');

const local = require('./mix-local');

mix.setPublicPath('dist');

mix.autoload({
    jquery: ['$', 'window.jQuery']
});

if (local.proxy) {
    mix.browserSync({
        proxy: local.proxy,
        injectChanges: true,
        open: false,
        files: [
            'dist/**/*.{css,js}'
        ]
    });
}

mix.js('src/js/app.js', 'dist/')
    .sass('src/sass/app.scss', 'dist/');

if (mix.inProduction()) {
    mix.sourceMaps();
}
