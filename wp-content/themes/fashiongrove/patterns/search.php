<?php
 /**
  * Title: Search
  * Slug: fashiongrove/search
  * Inserter: no
  */
?>
<!-- wp:cover {"overlayColor":"base-2","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"1px","color":"var:preset|color|contrast"},"bottom":{"width":"1px","color":"var:preset|color|contrast"},"left":{"width":"1px","color":"var:preset|color|contrast"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-top:0;margin-bottom:0;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-base-2-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"search","textAlign":"left","level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"24px"},"spacing":{"margin":{"bottom":"0"}}}} /--></div></div>
<!-- /wp:cover -->
 <!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-accent-7-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":37,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"post-block","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group post-block has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10)"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6"},"spacing":{"padding":{"top":"0"}}}} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":10} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"48px"} -->
<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php echo esc_html__( 'No posts found', 'fashiongrove' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-left:var(--wp--preset--spacing--30);flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->