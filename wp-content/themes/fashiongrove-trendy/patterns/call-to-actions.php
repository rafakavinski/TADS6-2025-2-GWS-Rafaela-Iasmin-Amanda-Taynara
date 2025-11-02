<?php
/**
 * Title: Call to Actions
 * Slug: fashiongrove-trendy/call-to-actions
 * Categories: fashiongrove-trendy
 * Keywords: call-to-actions
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cta.jpg","id":345,"dimRatio":80,"customOverlayColor":"#3a2202","isUserOverlayColor":true,"focalPoint":{"x":0.13,"y":0.55},"minHeight":450,"metadata":{"name":"CTA"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);min-height:450px"><img class="wp-block-cover__image-background wp-image-345" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cta.jpg" style="object-position:13% 55%" data-object-fit="cover" data-object-position="13% 55%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#3a2202"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:24px;font-style:normal;font-weight:700"><?php echo esc_html__( ' Up To', 'fashiongrove-trendy' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"> <?php echo esc_html__( '25%', 'fashiongrove-trendy' ); ?> </mark> <?php echo esc_html__( ' OFF', 'fashiongrove-trendy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"100px"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"backgroundColor":"contrast","textColor":"base-2"} -->
<p class="has-base-2-color has-contrast-background-color has-text-color has-background has-link-color"> <?php echo esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit nulla urna lacus neque magnis diam inceptos, nunc primis venenatis semper cubilia fringilla magna massa nibh id facilisi lectus egestas. ', 'fashiongrove-trendy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"secondary","textColor":"base-2","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-2-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)"> <?php echo esc_html__( 'Shop Now', 'fashiongrove-trendy' ); ?> </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":3,"pages":4,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"8px"}}} -->
<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"var:preset|spacing|20"},"padding":{"top":"0","bottom":"0"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->