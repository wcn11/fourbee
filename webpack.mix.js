const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js/index.js").sass(
    "resources/sass/studio/app.scss",
    "public/css/index.css"
);

// mix.js("resources/js/studio/app.js", "public/studio.js").sass(
//     "resources/sass/studio/app.scss",
//     "public/studio.css"
// );
