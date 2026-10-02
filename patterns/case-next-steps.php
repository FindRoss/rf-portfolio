<?php
/**
 * Title: Case Study — Next Steps
 * Slug: rf-portfolio/case-next-steps
 * Categories: text
 * Description: Next steps chapter — split layout, heading on the left, dashed-marker to-do list on the right.
 */
?>

<!-- wp:group {"anchor":"next-steps","align":"full","className":"rfp-container","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div id="next-steps" class="wp-block-group alignfull rfp-container" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

	<!-- wp:group {"align":"wide","className":"rfp-split-row","style":{"spacing":{"blockGap":"clamp(2rem, 6vw, 6rem)"}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"flex-start"}} -->
	<div class="wp-block-group rfp-split-row alignwide">

		<!-- wp:group {"className":"rfp-split-heading","layout":{"type":"default"}} -->
		<div class="wp-block-group rfp-split-heading">

			<!-- wp:paragraph {"fontFamily":"mono","textColor":"green","style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"12px"}}}} -->
			<p class="has-green-color has-text-color has-mono-font-family" style="font-size:14px;font-weight:600;margin-top:0;margin-bottom:12px">06</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.25rem)","fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h2 class="wp-block-heading" style="font-size:clamp(2rem, 5vw, 3.25rem);font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">Next steps<span style="color:var(--wp--preset--color--green)">.</span></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"rfp-split-text rfp-split-text--list","layout":{"type":"default"}} -->
		<div class="wp-block-group rfp-split-text rfp-split-text--list">

			<!-- wp:list {"className":"rfp-next-list"} -->
			<ul class="wp-block-list rfp-next-list">
				<!-- wp:list-item -->
				<li>Add a second project to the case study library.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Write up the build process as a short article.</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Add schema markup for each case study.</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
