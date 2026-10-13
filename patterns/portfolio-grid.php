<?php
/**
 * Title: Portfolio grid
 * Slug: photovia/portfolio-grid
 * Categories: photovia
 * Description: Even three-column portfolio grid with hover captions.
 *
 * @package Photovia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
	<h2 class="wp-block-heading has-text-align-center">Selected work</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#a8a29e"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#a8a29e">A glimpse of recent weddings, portraits and editorials.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wedding-couple.jpg" alt="Bride and groom embracing outdoors"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"photovia-caption"} -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Amelia &amp; James</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
					<p style="font-size:0.85rem">Wedding · Muskoka</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-session.jpg" alt="Studio portrait of a woman in soft light"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"photovia-caption"} -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Golden Hour Muse</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
					<p style="font-size:0.85rem">Portrait · Studio</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion-editorial.jpg" alt="Fashion editorial model in black suit"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"photovia-caption"} -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Noir Editorial</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
					<p style="font-size:0.85rem">Editorial · Toronto</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/family-session.jpg" alt="Happy family enjoying a moment in nature"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"photovia-caption"} -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">The Harper Family</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
					<p style="font-size:0.85rem">Family · High Park</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/engagement-couple.jpg" alt="Engaged couple at sunset"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"photovia-caption"} -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Sunset Vows</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
					<p style="font-size:0.85rem">Engagement · Scarborough Bluffs</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"photovia-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group photovia-card">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"photovia-lightbox-hint"} -->
				<figure class="wp-block-image size-large photovia-lightbox-hint"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event-concert.jpg" alt="Concert crowd under dramatic stage lights"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"photovia-caption"} -->
				<div class="wp-block-group photovia-caption">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Neon Nights Live</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}}} -->
					<p style="font-size:0.85rem">Event · Budweiser Stage</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
