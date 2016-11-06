console.log('ready');

jQuery( document ).ready(function() {
    jQuery('.carousel').carousel({interval: 3500});
	jQuery(".carousel-indicators li:first").addClass("active");
	jQuery(".carousel-inner .item:first").addClass("active");
});