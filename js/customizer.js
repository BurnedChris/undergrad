/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			console.log(to);
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	// Custom Footer Text Background Color
		wp.customize( 'footer_text_textbox', function( value ) {
			value.bind( function( to ) {
				$( '.site-info' ).text( to );
			} );
		} );


	// Custom Header Background Color
	wp.customize( 'header_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-header' ).css( {
				'background-color': to
			});
		} );
	} );
	// Custom footer Background Color
	wp.customize( 'footer_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( {
				'background-color': to
			});
		} );
	} );
	wp.customize( 'footer_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( {
				'background-color': to
			});
		} );
	} );
	// Custom Layout Options
	wp.customize( 'layout_setting', function( value ) {
		value.bind( function( to ) {
			$( '#page' ).removeClass( 'no-sidebar sidebar-left sidebar-right' );
			$( '#page' ).addClass( to );
		} );
	} );

	// Custom Layout Options
	wp.customize( 'width_setting', function( value ) {
		value.bind( function( to ) {
			$( '.site-content' ).removeClass( 'fixed fluid' );
			$( '.site-content' ).addClass( to );
		} );
	} );

} )( jQuery );
