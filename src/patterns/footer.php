<?php
/**
 * Title: Footer
 * Slug: threenthreea/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 *
 * @package Three N Three A
 * @since Three N Three A 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-logo /-->

		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"100%"} -->
				<div class="wp-block-column" style="flex-basis:100%"><!-- wp:site-title {"level":2} /-->

				<!-- wp:site-tagline /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:spacer {"height":"var:preset|spacing|40","width":"0px"} -->
					<div style="height:var(--wp--preset--spacing--40);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'threenthreea' ); ?>","url":"#"} /-->

					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'threenthreea' ); ?>","url":"#"} /-->

					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'threenthreea' ); ?>","url":"#"} /-->

					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'threenthreea' ); ?>","url":"#"} /-->
				<!-- /wp:navigation -->

				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Events', 'threenthreea' ); ?>","url":"#"} /-->

					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Shop', 'threenthreea' ); ?>","url":"#"} /-->

					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Patterns', 'threenthreea' ); ?>","url":"#"} /-->

					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Themes', 'threenthreea' ); ?>","url":"#"} /-->
				<!-- /wp:navigation -->
			</div>
				<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
		<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Three N Three A', 'threenthreea' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php
				printf(
					/* translators: Designed with WordPress. %s: WordPress link. */
					esc_html__( 'Designed with %s', 'threenthreea' ),
					'<a href="' . esc_url( __( 'https://github.com/3n3a/wordpress-theme', 'threenthreea' ) ) . '" rel="nofollow">3n3a</a>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
