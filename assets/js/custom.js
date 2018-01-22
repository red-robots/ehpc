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
			transform: 'translateX(-15%) translateY(-30%) scale(1.3)',
			transition: '1s all'
		});
	}, function(){
		$('.n-one').css({
			transform: ''
		});
	});
	$('.n-two').hover(function(){
		$('.n-two').css({

		})
	}, function(){
		$('.n-two').css({
			transform: ''
		});

	});
	$('.n-three').hover(function(){
		$('.n-three').css({

		})
	}, function(){
		$('.n-three').css({
			transform: ''
		});

	});
	$('.n-four').hover(function(){
		$('.n-four').css({

		})
	}, function(){
		$('.n-four').css({
			transform: ''
		});

	});

});// END #####################################    END