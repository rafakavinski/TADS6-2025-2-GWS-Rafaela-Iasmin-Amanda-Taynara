<?php
/**
 * @package Trendy Fashion Outfits
 */

function trendy_fashion_outfits_customizer_add_defaults( $default_options) {
	$defaults = array(
		'trendy_fashion_outfits_excerpt_length'    => 30,
	);
	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'trendy_fashion_outfits_customizer_defaults', 'trendy_fashion_outfits_customizer_add_defaults' );

function trendy_fashion_outfits_gtm( $option ) {
	$defaults = apply_filters( 'trendy_fashion_outfits_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'trendy_fashion_outfits_excerpt_length' ) ) :
	function trendy_fashion_outfits_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		$length	= trendy_fashion_outfits_gtm( 'trendy_fashion_outfits_excerpt_length' );

		return absint( $length );
	} 
endif;
add_filter( 'excerpt_length', 'trendy_fashion_outfits_excerpt_length', 999 );