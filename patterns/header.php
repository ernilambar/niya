<?php
/**
 * Title: Header
 * Slug: niya/header
 * Categories: hidden
 * Keywords: header
 * Inserter: no
 *
 * @package Niya
 */

?>
<!-- wp:group {"className":"home-banner"} -->
<div class="wp-block-group home-banner"><!-- wp:cover {"url":"<?php echo esc_url( NIYA_URL . '/assets/images/banner.webp' ); ?>","dimRatio":50,"overlayColor":"base","contentPosition":"center center"} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( NIYA_URL . '/assets/images/banner.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:navigation {"textColor":"white","icon":"menu","overlayBackgroundColor":"black","overlayTextColor":"white","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Portfolio","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
<!-- wp:site-logo {"width":150,"shouldSyncIcon":true,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:site-title {"textAlign":"center"} /-->

<!-- wp:site-tagline {"textAlign":"center"} /-->
</div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
