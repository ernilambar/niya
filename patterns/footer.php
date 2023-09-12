<?php
/**
 * Title: Footer
 * Slug: niya/footer
 * Categories: niya
 * Keywords: footer
 *
 * @package Niya
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"var:preset|spacing|small"},"margin":{"top":"0px","bottom":"0px"}},"border":{"top":{"color":"#ffffff21","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"backgroundColor":"senary","textColor":"white","className":"site-footer","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull site-footer has-white-color has-senary-background-color has-text-color has-background" style="border-top-color:#ffffff21;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center"} -->
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
