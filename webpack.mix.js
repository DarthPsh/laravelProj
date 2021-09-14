const mix = require('laravel-mix');
let SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

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

mix.options({
    postCss: [
        require('autoprefixer'),
    ],
});

//front
mix.js('resources/assets/front/js/app.js', 'public/assets/front/js')
    .vue()
    .webpackConfig({
        output: {
            publicPath: '/',
            filename: '[name].js',
            chunkFilename: 'assets/front/js/[name].[chunkhash].chunk.js'
        },
    })
    .sourceMaps()
    .version();

mix.sass('resources/assets/front/scss/style.scss', 'public/assets/front/css');
mix.copyDirectory('resources/assets/front/img', 'public/assets/front/img');
mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts');
mix.copyDirectory('resources/assets/front/pdf', 'public/assets/front/pdf');
mix.copyDirectory('resources/assets/front/media', 'public/assets/front/media');

mix.webpackConfig({
    plugins: [
        new SVGSpritemapPlugin('resources/assets/front/svg-icons/*.svg', {
            output: {
                filename: 'assets/front/img/sprite.svg',
                chunk: {
                    keep: true
                },
                svgo: {
                    plugins: [
                        {removeTitle: true},
                        {removeComments: true},
                        {removeDimensions: true},
                        {removeUselessStrokeAndFill: true},
                        {removeStyleElement: true}
                    ]},
            },

            sprite: {
                prefix: 'icon-',
            },
        })
    ]
});

if (mix.inProduction()) {
    mix.version();
}
