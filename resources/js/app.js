require('lightbox2/dist/js/lightbox.min');

$(document).ready(function(){
 	$('.dropdown-button').dropdown({
	coverTrigger:false,
	hover: false,	
});

	$('.slider').slider({
	indicators:false,
	height:650
});

	$('.sidenav').sidenav();

	$('select').formSelect();

	$('.materialboxed').materialbox();

	$('.scrollspy').scrollSpy();
});