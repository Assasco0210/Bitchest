const mix = require('laravel-mix');

mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .webpackConfig({
       module: {
           rules: [
               {
                   test: /\.jsx?$/,
                   exclude: /node_modules/,
                   use: [
                       {
                           loader: 'babel-loader',
                           options: mix.config.babel()
                       }
                   ]
               }
           ]
       },
       resolve: {
           extensions: ['*', '.js', '.jsx'],
       },
   });
