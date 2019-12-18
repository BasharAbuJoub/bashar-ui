const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .tailwind();

mix.browserSync({
    proxy: 'localhost:80',
    notify: false,
});
