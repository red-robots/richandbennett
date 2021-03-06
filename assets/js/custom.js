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
	*	Responsive iFrames
	*
	------------------------------------*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	
	$all_oembed_videos.each(function() {
	
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	
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

	$('.question').click(function() {
		var $this = $(this);
		var $parent = $this.parent().parent('.row').eq(0);
		$this.next('.answer').slideToggle(500);
		$parent.toggleClass('close');
	});
	$('.row .fa').click(function() {
		var $this = $(this);
		var $parent = $this.parent('.row').eq(0);
		$parent.find('.question').next('.answer').slideToggle(500);
		$parent.toggleClass('close');
	});

	$('#masthead .box.dots, #masthead nav.menu img.dots').click(function(){
		var $menu = $('#masthead nav.menu');
		if($menu.hasClass('toggled')){
			$menu.removeClass('toggled');
		} else {
			$menu.addClass('toggled');
		}
	});
	$('#masthead .button-wrapper .button').click(function(){
		var $menu = $('#masthead >.wrapper >.col-2');
		if($menu.hasClass('toggled')){
			$menu.removeClass('toggled');
		} else {
			$menu.addClass('toggled');
		}
	});
});// END #####################################    END