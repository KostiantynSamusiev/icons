const webpack = require('webpack');
const path = require('path');
const miniCss = require('mini-css-extract-plugin');

const config = {
  entry: './src/script.js',
  output: {
    path: path.resolve(__dirname, 'assets/js'),
    filename: 'main.min.js',
    clean: true,
  },

  module: {
    rules: [{
        test: /\.js$/,
        use: 'babel-loader',
        exclude: /node_modules/
      },
      {
        test: /\.ts(x)?$/,
        loader: 'ts-loader',
        exclude: /node_modules/
      },
      {
        test: /\.(scss|css)$/,
        use: [
          miniCss.loader,
          {
            loader: 'css-loader',
            options: {
              url: false
            }
          },
          'sass-loader'
        ],
      },
    ]
  },
  resolve: {
    extensions: [
      '.tsx',
      '.ts',
      '.js'
    ]
  },
  plugins: [
    new miniCss({
      filename: '../css/main.css',
    }),
  ]
};

module.exports = config;