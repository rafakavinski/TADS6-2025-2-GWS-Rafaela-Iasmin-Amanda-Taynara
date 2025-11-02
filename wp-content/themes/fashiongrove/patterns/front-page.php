<?php
/**
 * Title: Front Page
 * Slug: fashiongrove/front-page
 * Categories: fashiongrove
 * Keywords: front-page
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:pattern {"slug":"fashiongrove/banner"} /-->
<?php
$pluginsList = get_option( 'active_plugins' );
$fashiongrove_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $fashiongrove_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:pattern {"slug":"fashiongrove/new-arrivals"} /-->
<?php } else { ?>
<!-- wp:pattern {"slug":"fashiongrove/static-products"} /-->
<?php } ?>
<?php if ( $results )  { ?>
<!-- wp:pattern {"slug":"fashiongrove/call-to-actions"} /-->
<?php } else { ?>
<!-- wp:pattern {"slug":"fashiongrove/call-to-actions-two"} /-->
<?php } ?>
<?php if ( $results )  { ?>
<!-- wp:pattern {"slug":"fashiongrove/featured-products"} /-->
<?php } else { ?>
<!-- wp:pattern {"slug":"fashiongrove/static-products"} /-->
<?php } ?>
<!-- wp:pattern {"slug":"fashiongrove/about"} /-->
<!-- wp:pattern {"slug":"fashiongrove/usp"} /-->
