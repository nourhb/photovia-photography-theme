<?php
/**
 * Title: Full-bleed gallery hero
 * Slug: photovia/hero-gallery
 * Categories: photovia
 * Description: Full-bleed cover hero with a dramatic portrait, headline and booking call-to-action buttons.
 *
 * @package Photovia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-portrait.jpg","dimRatio":55,"overlayColor":"onyx","minHeight":92,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:92vh"><span aria-hidden="true" class="wp-block-cover__background has-onyx-background-color has-background-dim-55 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Dramatic moody portrait photograph" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-portrait.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><span class="photovia-badge photovia-badge--amber photovia-pulse">📷 Now booking 2026–2027</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Moments that outlive memory.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#e7e2da"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e7e2da;font-size:1.25rem">Wedding, portrait &amp; editorial photography with a cinematic eye — based in Toronto, shooting everywhere.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/contact">Book Your Session</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/portfolio" style="color:#ffffff;border-color:#ffffff">View Portfolio</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#fbbf24"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#fbbf24;font-size:0.95rem">★ 5.0 from 180+ couples &amp; clients &nbsp;·&nbsp; 400+ shoots delivered &nbsp;·&nbsp; Featured in 12 publications</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
