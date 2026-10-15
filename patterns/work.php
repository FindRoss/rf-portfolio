<?php
/**
 * Title: Work
 * Slug: rf-portfolio/work
 * Categories: featured, text
 * Description: Case study rows for selected projects.
 */
?>

<!-- wp:group {
    "anchor": "work",
    "align": "full",
    "className": "rfp-container",
    "style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},
	"layout":{"type":"constrained"}
} -->

<div id="work" class="wp-block-group alignfull rfp-container" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

	<!-- wp:group {
		"align":"wide",
		"style":{"spacing":{"blockGap":"24px","margin":{"bottom":"clamp(3rem, 6vw, 5rem)"}}},
		"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}
	} -->
	<div class="wp-block-group alignwide" style="margin-bottom:clamp(3rem, 6vw, 5rem)">

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"fontSize":"xxl","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"}}} -->
			<h2 class="wp-block-heading has-xxl-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1.1">Work<span style="color:var(--wp--preset--color--green)">.</span></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"md","textColor":"muted","style":{"spacing":{"margin":{"top":"16px","bottom":"0"}}}} -->
			<p class="has-muted-color has-text-color has-md-font-size" style="margin-top:16px;margin-bottom:0;max-width:660px">I've built everything from React front ends to full WordPress systems, for personal projects and client work alike.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:rf-portfolio/work-count /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:rf-portfolio/work-rows /-->

</div>
<!-- /wp:group -->
