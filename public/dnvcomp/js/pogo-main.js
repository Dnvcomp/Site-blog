$(document).ready(function () {

	$('#js-main-slider').pogoSlider({
		autoplay: true,
		autoplayTimeout: 6000,
		displayProgess: true,
		preserveTargetSize: false,
		targetWidth: 900,
		targetHeight: 300,
		responsive: false,
		pauseOnHover : false,
	}).data('plugin_pogoSlider');

	var transitionDemoOpts = {
		displayProgess: false,
		generateNav: false,
		generateButtons: false
	}

	$('#demo1').pogoSlider(transitionDemoOpts);
	$('#demo2').pogoSlider(transitionDemoOpts);
	$('#demo3').pogoSlider(transitionDemoOpts);
	$('#demo4').pogoSlider(transitionDemoOpts);
	$('#demo5').pogoSlider(transitionDemoOpts);
	$('#demo6').pogoSlider(transitionDemoOpts);
	$('#demo7').pogoSlider(transitionDemoOpts);
	$('#demo8').pogoSlider(transitionDemoOpts);
	$('#demo9').pogoSlider(transitionDemoOpts);
	$('#demo10').pogoSlider(transitionDemoOpts);
	$('#demo11').pogoSlider(transitionDemoOpts);
	$('#demo12').pogoSlider(transitionDemoOpts);

});