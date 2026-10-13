<?php
/**
 * Title: Contact information
 * Slug: photovia/contact-info
 * Categories: photovia
 * Description: Two-column contact info with booking form placeholder and studio details.
 *
 * @package Photovia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">Send an inquiry</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
			<p class="has-text-color" style="color:#a8a29e">Share your date, venue and vision — the more detail, the better the plan.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"border":{"radius":"12px"},"color":{"background":"#1a1a1a"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group has-background" style="border-radius:12px;background-color:#1a1a1a;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
				<p class="has-text-color" style="color:#a8a29e">[ Add your contact form plugin shortcode here — e.g. Contact Form 7 or WPForms — and it will appear in this card. ]</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@photovia.studio">Email Instead</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h3 class="wp-block-heading">Studio details</h3>
			<!-- /wp:heading -->
			<!-- wp:list -->
			<ul>
				<!-- wp:list-item -->
				<li>📍 418 Queen Street West, Toronto, ON M5V 2A9</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>📞 +1 (416) 555-0188</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✉️ hello@photovia.studio</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>🕘 Tue–Sat · 10:00 AM – 6:00 PM</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50)">Response promise</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#a8a29e"}}} -->
			<p class="has-text-color" style="color:#a8a29e">Every inquiry gets a personal reply within 24 hours — usually much faster. For urgent dates, call the studio directly.</p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image size-large" style="margin-top:var(--wp--preset--spacing--40)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/studio-lights.jpg" alt="Photovia studio lighting setup" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
