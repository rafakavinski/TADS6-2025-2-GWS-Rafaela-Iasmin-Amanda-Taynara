<?php
/**
 * Title: Featured Products
 * Slug: fashiongrove/featured-products
 * Categories: fashiongrove
 * Keywords: featured-products
 */
?>
<!-- wp:group {"metadata":{"name":"Featured Products"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:42px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Men’s Trend & Trail', 'fashiongrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"100px"}},"backgroundColor":"contrast"} -->
<hr class="wp-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true},"tagName":"div","displayLayout":{"type":"flex","columns":5,"shrinkColumns":true},"queryContextIncludes":["collection"]} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"6px"}}} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"},"padding":{"top":"var:preset|spacing|20"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"typography":{"fontSize":"16px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"textColor":"contrast","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong><?php echo esc_html__( 'No results found', 'fashiongrove' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'You can try ', 'fashiongrove' ); ?><a class="wc-link-clear-any-filters" href="#"><?php echo esc_html__( 'clearing any filters', 'fashiongrove' ); ?></a> <?php echo esc_html__( 'or head to our', 'fashiongrove' ); ?> <a class="wc-link-stores-home" href="#"><?php echo esc_html__( "store's home", 'fashiongrove' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-collection-no-results -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"secondary","textColor":"base-2","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-2-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Check All Products', 'fashiongrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->