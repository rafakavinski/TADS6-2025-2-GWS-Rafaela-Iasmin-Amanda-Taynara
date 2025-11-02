<?php
/**
 * Title: Banner
 * Slug: fashiongrove-trendy/banner
 * Categories: fashiongrove-trendy
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg","id":656,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":720,"contentPosition":"center center","tagName":"main","sizeSlug":"large","metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:720px"><img class="wp-block-cover__image-background wp-image-656 size-large" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"56px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}}} -->
<h2 class="wp-block-heading" style="font-size:56px;font-style:normal;font-weight:700;line-height:1.4"><?php echo esc_html__( 'Fashion That Inspires Confidence, Comfort, and Class', 'fashiongrove-trendy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,", 'fashiongrove-trendy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:button {"textColor":"base-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-2-color has-text-color has-link-color wp-element-button"><?php echo esc_html__( 'View Products', 'fashiongrove-trendy' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base-2","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-base-2-background-color has-text-color has-background has-link-color wp-element-button"><?php echo esc_html__( 'Contact Us', 'fashiongrove-trendy' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->