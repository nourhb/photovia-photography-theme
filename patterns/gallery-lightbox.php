<?php
/**
 * Title: Gallery with lightbox
 * Slug: photovia/gallery-lightbox
 * Categories: photovia
 * Description: Native gallery block wired to the theme lightbox script.
 *
 * @package Photovia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="photovia-badge photovia-badge--light">Click any image to enlarge</span></p>
	<!-- /wp:paragraph -->
	<!-- wp:gallery {"columns":3,"linkTo":"none","className":"photovia-lightbox-hint","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped photovia-lightbox-hint" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wedding-couple.jpg" alt="Bride and groom embracing outdoors"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portrait-session.jpg" alt="Studio portrait in soft light"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fashion-editorial.jpg" alt="Fashion editorial model"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/family-session.jpg" alt="Happy family in nature"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/engagement-couple.jpg" alt="Engaged couple at sunset"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/event-concert.jpg" alt="Concert crowd under stage lights"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wedding-details.jpg" alt="Wedding ring macro detail"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landscape-golden.jpg" alt="Golden hour mountain landscape"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-portrait.jpg" alt="Dramatic moody portrait"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
