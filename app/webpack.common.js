const path = require('path');

const { VueLoaderPlugin } = require('vue-loader');
const output = path.join(__dirname, '/admin/js/dist');

module.exports = {
	mode: 'development',
	entry: {
		'gists-snippet-bundle': './src/index.js'
	},
	output: {
		path: output,
		filename: './[name].js',
	},
	module: {
		rules: [
			{
				test: /\.vue$/,
				exclude: /node_modules/,
				loader: 'vue-loader',
			}
		]
	},
	plugins: [
		new VueLoaderPlugin(),
	]
}
