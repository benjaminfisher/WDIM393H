$(function(){
	Modernizr.load([{
			test: Modernizr.progressbar,
			nope: ['scripts/progress-polyfill.min.js', 'css/progress-polyfill.css'],
		},{
			test: Modernizr.details,
			nope: ['css/details.css','scripts/jquery.details.min.js', 'scripts/details_run.js']
		}
	]);
})