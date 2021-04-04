const path = require('path');
const MiniCSSExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCssAssertsWebpackPlugin = require('optimize-css-assets-webpack-plugin');
const cssnano = require('cssnano');
const UglifyJs = require('uglifyjs-webpack-plugin');

const JS_DIR = path.resolve(__dirname, 'assets/js');
const IMG_DIR = path.resolve(__dirname, 'assets/img');
const OUTPUT_DIR = path.resolve(__dirname, 'build');

const entry = {
    main: JS_DIR + '/main.js',
};

const output = {
    path: OUTPUT_DIR,
    filename: 'js/[name].js',
};

const rules = [
    {
        test: /\.js$/,
        include: [JS_DIR],
        exclude: /node_modules/,
        use: 'babel-loader',
    },
    {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [MiniCSSExtractPlugin.loader, 'css-loader', 'sass-loader'],
    },
    {
        test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
        use: {
            loader: 'file-loader',
            options: {
                name: '[path][name].[ext]',
                publicPath:
                    process.env.NODE_ENV === 'production' ? '../' : '../../',
            },
        },
    },
];

const plugins = () => [
    new MiniCSSExtractPlugin({
        filename: 'css/[name].css',
    }),
];

module.exports = (env, argv) => ({
    entry,
    output,
    devtool: 'source-map',
    module: {
        rules,
    },
    optimization: {
        minimizer: [
            new OptimizeCssAssertsWebpackPlugin({
                cssProcessor: cssnano,
            }),
            new UglifyJs({
                cache: false,
                parallel: true,
                sourceMap: false,
            }),
        ],
    },
    plugins: plugins(argv),
    externals: {},
});
