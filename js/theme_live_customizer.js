/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update Logo.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.logo-text' ).html( to );
		} );
	} );
	
	
	// Banner Title.
	wp.customize( 'wpf_authority_banner_title', function( value ) {
		value.bind( function( to ) {
			$( '#imgbanner > h2' ).html( to );
		} );
	} );


	// Banner Title.
	wp.customize( 'wpf_authority_footer_text', function( value ) {
		value.bind( function( to ) {
			$( '.copyright > p' ).html( to );
		} );
	} );	
		
	
} )( jQuery );