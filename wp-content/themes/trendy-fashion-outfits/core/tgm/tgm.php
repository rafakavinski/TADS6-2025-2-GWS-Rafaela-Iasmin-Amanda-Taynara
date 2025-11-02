<?php

require get_template_directory() . '/core/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function trendy_fashion_outfits_register_recommended_plugins() {
	$plugins = array(
		array(
		    'name'             => __( 'WooCommerce', 'trendy-fashion-outfits' ),
		    'slug'             => 'woocommerce',
		    'source'           => '',
		    'required'         => false,
		    'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'trendy_fashion_outfits_register_recommended_plugins' );