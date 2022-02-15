
const mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.autoload({
    jquery: ['$', 'window.jQuery']
});

try {
    var local = require('./mix-local');

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

} catch (ex) {
    console.log("Missing mix-local.json file");
}

mix.js('src/js/app.js', 'dist/');
mix.sass('src/sass/app.scss', 'dist/');

if (mix.inProduction()) {
    mix.sourceMaps();
}