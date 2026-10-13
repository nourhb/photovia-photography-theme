<?php
/**
 * Title: Portfolio masonry
 * Slug: photovia/portfolio-masonry
 * Categories: photovia
 * Description: Full-width masonry-style portfolio with varied image sizes.
 *
 * @package Photovia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="photovia-badge photovia-badge--amber">Portfolio</span></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
	<h2 class="wp-block-heading has-text-align-center">Stories in frames</h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wedding-details.jpg" alt="Wedding rings macro detail"/></figure>
				<!-- /wp:image -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">The Details</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"photovia-card","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landscape-golden.jpg" alt="Golden hour mountain landscape"/></figure>
				<!-- /wp:image -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Golden Silence</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photographer-work.jpg" alt="Photographer at work during a shoot"/></figure>
				<!-- /wp:image -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Behind the Scenes</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"photovia-card","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prints-wall.jpg" alt="Framed fine-art prints on a gallery wall"/></figure>
				<!-- /wp:image -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Fine-Art Prints</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/camera-gear.jpg" alt="Camera gear closeup"/></figure>
				<!-- /wp:image -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">The Craft</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"photovia-card","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/studio-lights.jpg" alt="Studio softbox lighting setup"/></figure>
				<!-- /wp:image -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Studio Light</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/portfolio" style="color:#f59e0b;border-color:#f59e0b">Explore Full Portfolio</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
