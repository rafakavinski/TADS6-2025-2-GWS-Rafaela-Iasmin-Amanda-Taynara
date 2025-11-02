<?php
 /**
  * Title: Woo Sidebar
  * Slug: fashiongrove/woo-sidebar
  * Categories: fashiongrove
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Featured', 'fashiongrove' ); ?> <strong><?php echo esc_html__( 'Category', 'fashiongrove' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/featured-category {"editMode":false,"categoryId":29,"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}}} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop now', 'fashiongrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Filter by', 'fashiongrove' ); ?> <strong><?php echo esc_html__( 'price', 'fashiongrove' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Product', 'fashiongrove' ); ?> <strong><?php echo esc_html__( 'Categories', 'fashiongrove' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Product', 'fashiongrove' ); ?> <strong><?php echo esc_html__( 'Gallery', 'fashiongrove' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":3,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"6px","left":"6px"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped"><!-- wp:image {"id":2660,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-2660"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2660,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-2660"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2660,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-2.jpg" alt="" class="wp-image-2660"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2660,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-1.jpg" alt="" class="wp-image-2660"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":1027,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-1027"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2660,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-2.jpg" alt="" class="wp-image-2660"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2660,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" alt="" class="wp-image-2660"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2660,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner-1.jpg" alt="" class="wp-image-2660"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->