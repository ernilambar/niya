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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"className":"site-footer","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull site-footer" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">
	<?php
		printf(
			/* translators: %s: Copyright text. */
			esc_html__( 'Copyright © %s. All Rights Reserved.', 'niya' ),
			esc_attr( date_i18n( 'Y' ) )
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
