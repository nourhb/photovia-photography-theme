<?php
/**
 * Title: Instagram strip
 * Slug: photovia/instagram-strip
 * Categories: photovia
 * Description: Six-image social strip mimicking an Instagram feed.
 *
 * @package Photovia
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#0a0a0a"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#0a0a0a;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
	<h2 class="wp-block-heading has-text-align-center">Follow along @photovia.studio</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#a8a29e"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#a8a29e">Daily frames, behind-the-scenes and booking announcements.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wedding-details.jpg" alt="Wedding detail"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/camera-gear.jpg" alt="Camera gear"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prints-wall.jpg" alt="Gallery wall of prints"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landscape-golden.jpg" alt="Golden landscape"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/studio-lights.jpg" alt="Studio lights"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photographer-work.jpg" alt="Photographer at work"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://instagram.com" style="color:#f59e0b;border-color:#f59e0b">Follow on Instagram</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
