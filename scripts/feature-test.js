$(function(){
	Modernizr.load([{
			test: Modernizr.progressbar,
			nope: 'scripts/progress-polyfill.min.js',
			callback: function(url, result, key){
				if(!result);
			}
		},{
			test: Modernizr.details,
			nope: ['css/details.css', 'scripts/jquery.details.min.js'],
			complete: function() {$('details').details()}
		}
	]);
})

