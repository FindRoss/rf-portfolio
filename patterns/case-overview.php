<?php
/**
 * Title: Case Study — Overview
 * Slug: rf-portfolio/case-overview
 * Categories: text
 * Description: Overview chapter — split layout, heading/number on the left, body copy on the right.
 */
?>

<!-- wp:group {
	"anchor":"overview",
	"align":"full",
	"className":"rfp-container",
	"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},
	"layout":{"type":"constrained"}
} -->
<div id="overview" class="wp-block-group alignfull rfp-container" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

	<!-- wp:group {
		"align":"wide",
		"className":"rfp-split-row",
		"style":{"spacing":{"blockGap":"clamp(2rem, 6vw, 6rem)"}},
		"layout":{"type":"flex","flexWrap":"wrap","alignItems":"flex-start"}
	} -->
	<div class="wp-block-group rfp-split-row alignwide">

		<!-- wp:group {"className":"rfp-split-heading","layout":{"type":"default"}} -->
		<div class="wp-block-group rfp-split-heading">

			<!-- wp:paragraph {"fontFamily":"mono","textColor":"green","style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"12px"}}}} -->
			<p class="has-green-color has-text-color has-mono-font-family" style="font-size:14px;font-weight:600;margin-top:0;margin-bottom:12px">01</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.25rem)","fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h2 class="wp-block-heading" style="font-size:clamp(2rem, 5vw, 3.25rem);font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">Overview<span style="color:var(--wp--preset--color--green)">.</span></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"rfp-split-text","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group rfp-split-text">

			<!-- wp:paragraph {"textColor":"graphite","style":{"typography":{"fontSize":"clamp(1.125rem, 2vw, 1.3rem)","lineHeight":"1.65"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-graphite-color has-text-color" style="font-size:clamp(1.125rem, 2vw, 1.3rem);line-height:1.65;margin-top:0;margin-bottom:0">Write the first paragraph of your overview here — what the project was, who it was for, and the core problem you were solving.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"graphite","style":{"typography":{"fontSize":"clamp(1.125rem, 2vw, 1.3rem)","lineHeight":"1.65"},"spacing":{"margin":{"bottom":"0"}}}} -->
			<p class="has-graphite-color has-text-color" style="font-size:clamp(1.125rem, 2vw, 1.3rem);line-height:1.65;margin-bottom:0">Add a second paragraph if needed — your approach, or what made this project interesting to work on.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
