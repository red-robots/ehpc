/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		prevText: '<i class="fa fa-chevron-circle-left"></i>',
		nextText: '<i class="fa fa-chevron-circle-right"></i>',
		smoothHeight: true,
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

	$('.n-one').hover(function(){
		$('.n-one').css({
			filter: 'url(#dropshadow)'
		});
	}, function(){
		$('.n-one').css({
			filter: ''
		});
	});
	$('.n-two').hover(function(){
		$('.n-two').css({
			filter: 'url(#dropshadow)'
		});
	}, function(){
		$('.n-two').css({
			filter: ''
		});
	});
	$('.n-three').hover(function(){
		$('.n-three').css({
			filter: 'url(#dropshadow)'
		});
	}, function(){
		$('.n-three').css({
			filter: ''
		});
	});
	$('.n-four').hover(function(){
		$('.n-four').css({
			filter: 'url(#dropshadow)'
		});
	}, function(){
		$('.n-four').css({
			filter: ''
		});
	});
});// END #####################################    END