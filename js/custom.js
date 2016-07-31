/**	
	* Theme Name: WpF Authority
	* Theme Scripts
	* Author: WpFreeware
	* Author URI: http://wpfreeware.com/

	Custom JS
	
	1. WOW animation	
	2. Pushdown content area
	3. Hover dropdown menu
	
**/

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
// document.getElementById('moar').onclick = function() {
//   var section = document.createElement('section');
//   section.className = 'section--purple wow fadeInDown';
//   this.parentNode.insertBefore(section, this);
// };


/* ----------------------------------------------------------- */
/*  Pushdown content area if header image not exist
/* ----------------------------------------------------------- */ 


if (jQuery('#imgbanner').length > 0){  // return's true if element is present
   jQuery('#blogArchive').addClass('blogArchive_pushup');
}
else {
 jQuery('#blogArchive').addClass('blogArchive_pushdown');
}


/* ----------------------------------------------------------- */
/*  Hover dropdown menu
/* ----------------------------------------------------------- */ 
   
  jQuery('ul.nav li.dropdown').hover(function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });