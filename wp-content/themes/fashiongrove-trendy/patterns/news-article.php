<?php
/**
 * Title: News & Article
 * Slug: fashiongrove-trendy/news-article
 * Categories: fashiongrove-trendy
 * Keywords: news-article
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"articles","categories":["fashiongrove"],"patternName":"fashiongrove/news-article"},"className":"animated fadeInUp news-section","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeInUp news-section has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:24px;font-style:normal;font-weight:700"><?php echo esc_html__( 'News & Articles', 'fashiongrove-trendy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"100px"}},"backgroundColor":"contrast"} -->
<hr class="wp-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":23,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"isLink":true,"height":"250px","style":{"border":{"radius":"6px"}}} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"contrast-3"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"spacing":{"padding":{"right":"0","left":"0","bottom":"0"}}},"textColor":"heading-text-color","fontFamily":"body"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->