$(function(){
	Modernizr.load([{
		test: Modernizr.cssgradients,
		nope: 'progress-polyfill.min.js'
	},{
		test: Modernizr.borderradius,
		nope: 'PIE.js'
	}])
	
	if(window.PIE){
		$('.rounded').each(function(){
			PIE.attach(this);
		});
	}
});