<?php
/**
 * Title: Header
 * Slug: fashiongrove/header
 * Categories: header, fashiongrove
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Top Bar"},"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-text-align-center has-base-2-color has-text-color has-link-color"><em><?php echo esc_html__( 'Sale is on! 25% off sitewide using GROVE25 at checkout', 'fashiongrove' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
 <!-- wp:group {"metadata":{"name":"Main Header"},"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"base-2","borderColor":"contrast","layout":{"type":"default"}} -->
<div id="sticky-header" class="wp-block-group has-border-color has-contrast-border-color has-base-2-background-color has-background" style="border-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"backgroundColor":"secondary","textColor":"base-2","layout":{"type":"constrained","contentSize":"250px"}} -->
<div class="wp-block-group has-base-2-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"24px"}},"textColor":"base-2"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"contrast","style":{"spacing":{"blockGap":"35px"},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}}} /-->

<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|contrast","width":"1px"},"top":[],"right":[],"bottom":[]},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--contrast);border-left-width:1px"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|20","right":"0"}}}} /-->

<!-- wp:woocommerce/mini-cart {"priceColor":{"color":"#111111","name":"Contrast","slug":"contrast","class":"has-contrast-price-color"},"iconColor":{"color":"#c300d6","name":"Secondary","slug":"secondary","class":"has-secondary-product-count-color"},"productCountColor":{"color":"#c300d6","name":"Secondary","slug":"secondary","class":"has-secondary-product-count-color"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->