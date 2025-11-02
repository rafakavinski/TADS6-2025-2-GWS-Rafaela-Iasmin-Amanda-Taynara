<?php
 /**
  * Title: Archive Product
  * Slug: fashiongrove-trendy/archive-product
  * Inserter: no
  */
?>
<!-- wp:cover {"overlayColor":"base-2","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"px","isDark":false,"tagName":"section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"1px","color":"var:preset|color|contrast"},"bottom":{"width":"1px","color":"var:preset|color|contrast"},"left":{"width":"1px","color":"var:preset|color|contrast"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-cover is-light" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-top:0;margin-bottom:0;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-base-2-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"left","showPrefix":false,"align":"wide","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

<!-- wp:woocommerce/breadcrumbs /--></div></section>
<!-- /wp:cover -->
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-accent-7-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"25px","left":"25px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:25px;padding-left:25px"><!-- wp:woocommerce/store-notices /-->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:group {"className":"alignwide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/product-results-count {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":"4","minimumColumnWidth":null},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"height":"300px"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}},"border":{"radius":"6px"}}} /-->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"8px"} -->
<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>
    <?php echo esc_html__( 'No products were found matching your selection.', 'fashiongrove-trendy' ); ?>  </p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"33px"} -->
<div style="height:33px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->