<?php
/**
 * Title: Services and packages
 * Slug: photovia/services-packages
 * Categories: photovia
 * Description: Three-column services grid for weddings, portraits and commercial work.
 *
 * @package Photovia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="photovia-badge photovia-badge--amber">Services</span></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
	<h2 class="wp-block-heading has-text-align-center">What I shoot</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#a8a29e"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#a8a29e">Three crafts, one obsession: images that feel like you.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column {"style":{"border":{"radius":"12px"},"color":{"background":"#1a1a1a"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column has-background" style="border-radius:12px;background-color:#1a1a1a;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<figure class="wp-block-image size-large" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wedding-couple.jpg" alt="Wedding couple" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h3 class="wp-block-heading">Weddings</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
			<p class="has-text-color" style="color:#a8a29e">Full-day documentary coverage, from getting ready to the last dance. Two photographers, sneak peeks in 48 hours.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#f59e0b"}}} -->
			<p class="has-text-color" style="color:#f59e0b;font-weight:700">From $1,900</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/pricing" style="color:#f59e0b;border-color:#f59e0b">See collections</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"border":{"radius":"12px"},"color":{"background":"#1a1a1a"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column has-background" style="border-radius:12px;background-color:#1a1a1a;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<figure class="wp-block-image size-large" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-session.jpg" alt="Portrait session" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h3 class="wp-block-heading">Portraits</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
			<p class="has-text-color" style="color:#a8a29e">Individuals, families, maternity and newborns. Relaxed direction, natural light, and images you'll frame for decades.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#f59e0b"}}} -->
			<p class="has-text-color" style="color:#f59e0b;font-weight:700">From $350</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/pricing" style="color:#f59e0b;border-color:#f59e0b">See collections</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"border":{"radius":"12px"},"color":{"background":"#1a1a1a"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column has-background" style="border-radius:12px;background-color:#1a1a1a;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<figure class="wp-block-image size-large" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion-editorial.jpg" alt="Commercial fashion shoot" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h3 class="wp-block-heading">Commercial</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
			<p class="has-text-color" style="color:#a8a29e">Editorial, branding and product photography that makes campaigns stop the scroll. Licensed for commercial use.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#f59e0b"}}} -->
			<p class="has-text-color" style="color:#f59e0b;font-weight:700">Custom quote</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact" style="color:#f59e0b;border-color:#f59e0b">Request quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
