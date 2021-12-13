// webpack.mix.js

let mix = require('laravel-mix');

mix.options({
    processCssUrls: false
})
    .js('src/app.js', './')
    .sass('src/app.sass', './app.css')
    .setPublicPath('./');