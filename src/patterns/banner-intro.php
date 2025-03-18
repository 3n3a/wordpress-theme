<?php
/**
 * Title: Intro with left-aligned description
 * Slug: threenthreea/banner-intro
 * Categories: banner
 * Description: A large left-aligned heading with a brand name emphasized in bold.
 *
 * @package Three N Three A
 * @since Three N Three A 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"align":"wide","fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size">
		<?php
			printf(
				/* translators: %s is the brand name, e.g., 'Fleurs'. */
				esc_html_x( 'We\'re %s, our mission is to deliver exquisite flower arrangements that not only adorn living spaces but also inspire a deeper appreciation for natural beauty.', 'Pattern placeholder text.', 'threenthreea' ),
				'<strong>' . esc_html_x( 'Fleurs', 'Example brand name.', 'threenthreea' ) . '</strong>'
			);
			?>
	</h2>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
