<?php
/**
 * Trendy Fashion Outfits: Block Patterns
 *
 * @since Trendy Fashion Outfits 1.0
 */

function trendy_fashion_outfits_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'trendy-fashion-outfits' => array( 'label' => __( 'Trendy Fashion Outfits', 'trendy-fashion-outfits' ) )
	);
	$block_pattern_categories = apply_filters( 'trendy_fashion_outfits_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'trendy_fashion_outfits_register_block_patterns', 9 );