(function ($) {
	
	/* ----------------------------------------------------------- */
	/*  WOW animation
	/* ----------------------------------------------------------- */
	wow = new WOW(
				  {
					animateClass: 'animated',
					offset:       100
				  }
				);
	wow.init();

	/* ----------------------------------------------------------- */
	/*  Pushdown content area if header image not exist
	/* ----------------------------------------------------------- */ 
	
	
	if ($('#imgbanner').length > 0){  // return's true if element is present
	   	$('#blogArchive').addClass('blogArchive_pushup');
	}
	else {
	 	$('#blogArchive').addClass('blogArchive_pushdown');
	}


	/* ----------------------------------------------------------- */
	/*  Hover dropdown menu
	/* ----------------------------------------------------------- */ 
	   
	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
	});
	    
}(jQuery));	    