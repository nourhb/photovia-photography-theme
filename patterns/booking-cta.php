<?php
/**
 * Title: Booking call to action
 * Slug: photovia/booking-cta
 * Categories: photovia
 * Description: Full-width booking CTA with pulsing button.
 *
 * @package Photovia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/engagement-couple.jpg","dimRatio":70,"overlayColor":"onyx","minHeight":420,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-onyx-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Engaged couple at sunset" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/engagement-couple.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#ffffff"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Your story deserves beautiful light.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#e7e2da"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e7e2da">Dates for 2026–2027 are filling fast. Let's plan something unforgettable.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"photovia-pulse","style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button photovia-pulse" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/contact">Check My Date</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#fbbf24"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#fbbf24;font-size:0.95rem">Replies within 24 hours · No-pressure consultation</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
