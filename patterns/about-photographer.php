<?php
/**
 * Title: About the photographer
 * Slug: photovia/about-photographer
 * Categories: photovia
 * Description: Photographer portrait with bio, signature style and credentials.
 *
 * @package Photovia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-soft-frame"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photographer-portrait.jpg" alt="Portrait of the photographer holding a camera"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:paragraph -->
			<p><span class="photovia-badge photovia-badge--amber">Meet your photographer</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">Hi, I'm Elena — I chase honest light.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
			<p class="has-text-color" style="color:#a8a29e">For over a decade I've photographed weddings, portraits and brands across Canada and beyond. My style is editorial yet intimate: real laughter, stolen glances, and the quiet in-between moments most people miss.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
			<p class="has-text-color" style="color:#a8a29e">When I'm not behind the camera you'll find me printing in the darkroom, scouting golden-hour locations, or teaching lighting workshops at the studio.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"typography":{"fontSize":"1rem"}}} -->
			<ul>
				<!-- wp:list-item -->
				<li>✓ WPPI award-winning wedding photographer</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✓ 400+ weddings &amp; sessions delivered</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✓ Published in 12 magazines &amp; blogs</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/about">My Full Story</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
