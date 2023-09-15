<?php
/**
 * Title: Footer
 * Slug: niya/footer
 * Categories: hidden
 * Keywords: footer
 * Inserter: no
 *
 * @package Niya
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"medium"} /-->

<!-- wp:site-tagline /-->

<!-- wp:social-links {"customIconColor":"#606060","iconColorValue":"#606060","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->

<!-- wp:social-link {"url":"https://www.tiktok.com/","service":"tiktok"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'About', 'niya' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Team', 'niya' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'History', 'niya' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Careers', 'niya' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'Privacy', 'niya' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Privacy Policy', 'niya' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Terms & Conditions', 'niya' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact Us', 'niya' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'Resources', 'niya' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
	<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Knowledgebase', 'niya' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Help Center', 'niya' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Documentation', 'niya' ); ?>","url":"#"} /-->
	<!-- /wp:navigation -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:1px;padding-top:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">
	<?php
		printf(
			/* translators: %s: Copyright text. */
			esc_html__( 'Copyright © %s. All Rights Reserved.', 'niya' ),
			esc_attr( date_i18n( 'Y' ) )
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
