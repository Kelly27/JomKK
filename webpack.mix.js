let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.browserSync('localhost:8000');

mix.sass('resources/views/layout.scss', 'public/css')
    .sass('resources/views/home/home.scss', 'public/css', {
        includePaths: ['resources/views']})
    .sass('resources/views/blog/blog.scss', 'public/css',{
        includePaths: ['resources/views']})
    .sass('resources/views/about/about.scss', 'public/css',{
        includePaths: ['resources/views']})
    .sass('resources/views/tnc/tnc.scss', 'public/css',{
        includePaths: ['resources/views']})
    .sass('resources/views/directory/directory.scss', 'public/css',{
        includePaths: ['resources/views']})
    .sass('resources/views/search/search.scss', 'public/css',{
        includePaths: ['resources/views']});