const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
//postCss ).postCss('resources/css/app.css', 'public/css'
mix.js('resources/js/app.js', 'public/js', [
   
    require('tailwindcss'),
    require('autoprefixer'),
    
]);
mix.sass('resources/sass/app.scss', 'public/css', {
    implementation: require('node-sass')
});

mix.browserSync('http://test.test')