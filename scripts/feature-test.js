$(function(){
	Modernizr.load({
		test: Modernizr.cssgradients,
		nope: 'scripts/progress-polyfill.min.js'
	})
});