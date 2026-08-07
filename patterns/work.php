<?php 
/**
 * Title: Selected Work
 * Slug: rf-portfolio/work
 * Categories: featured, text
 * Description: Grid of selected project cards. 
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
	 	"align": "wide",
		"style":{"spacing":{"blockGap":"36px"}},
		"layout":{"type":"default"}
	} -->
	<div class="wp-block-group alignwide">

		<!-- wp:heading {
			"level":2,
			"fontSize":"xxl",
			"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em"}}
		} -->
		<h2 class="wp-block-heading has-xxl-font-size" style="font-weight:800;letter-spacing:-0.02em">Selected work.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {
			"fontSize":"md",
			"textColor":"muted",
			"style":{"spacing":{"margin":{"top":"16px","bottom":"0"}}}
		} -->
		<p class="has-muted-color has-text-color has-md-font-size" style="margin-top:16px;margin-bottom:0;max-width:660px">I've built everything from React front ends to full WordPress systems, for personal projects and client work alike.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:columns {
	 	"align":"wide",
	 	"style":{"spacing":{"blockGap":"32px","margin":{"top":"var:preset|spacing|lg"}}}} 
	-->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--lg)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"rfp-work-card","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-group rfp-work-card">
				<!-- wp:group {"className":"rfp-work-image"} -->
				<div class="wp-block-group rfp-work-image">
					<!-- wp:image {"sizeSlug":"large"} -->
						<figure class="wp-block-image size-large">
							<img src="http://localhost:10009/wp-content/uploads/2026/08/screenshot-react-colors__1200x900.png" alt="Describe the screenshot">
						</figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"rfp-work-tag","fontFamily":"mono","fontSize":"xs","style":{"typography":{"fontWeight":"600"}}} -->
					<p class="rfp-work-tag has-mono-font-family has-xs-font-size" style="font-weight:600">React</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|xs"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:700;letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--xs)">Color Picker</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"sm","textColor":"steel","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0">A color palette manager built with React, Redux Toolkit, and TypeScript.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px","margin":{"top":"var:preset|spacing|sm"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--sm)">
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://react-colors-v3.vercel.app" target="_blank">View site ↗</a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://github.com/FindRoss/react-colors" target="_blank">GitHub ↗</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"rfp-work-card","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-group rfp-work-card">
				<!-- wp:group {"className":"rfp-work-image"} -->
				<div class="wp-block-group rfp-work-image">
					<!-- wp:image {"sizeSlug":"large"} -->
						<figure class="wp-block-image size-large">
							<img src="http://localhost:10009/wp-content/uploads/2026/08/screenshot-of-bitcoinchaser-com__1200x900.jpg" alt="Screenshot of BitcoinChaser.com">
						</figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"rfp-work-tag","fontFamily":"mono","fontSize":"xs","style":{"typography":{"fontWeight":"600"}}} -->
					<p class="rfp-work-tag has-mono-font-family has-xs-font-size" style="font-weight:600">WP Child Theme</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|xs"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:700;letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--xs)">BitcoinChaser</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"sm","textColor":"steel","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0">Custom WordPress theme with a 20-block component library, 4 custom post types, and technical SEO built in.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px","margin":{"top":"var:preset|spacing|sm"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--sm)">
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://bitcoinchaser.com" target="_blank">View site ↗</a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://github.com/FindRoss/bs-theme" target="_blank">GitHub ↗</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"rfp-work-card","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-group rfp-work-card">
				<!-- wp:group {"className":"rfp-work-image"} -->
				<div class="wp-block-group rfp-work-image">
					<!-- wp:image {"sizeSlug":"large"} -->
					<figure class="wp-block-image size-large">
						<img src="http://localhost:10009/wp-content/uploads/2026/08/screenshot-react-colors__1200x900.png" alt="Describe the screenshot">
					</figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"rfp-work-tag","fontFamily":"mono","fontSize":"xs","style":{"typography":{"fontWeight":"600"}}} -->
					<p class="rfp-work-tag has-mono-font-family has-xs-font-size" style="font-weight:600">SEO Rebuild</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|xs"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:700;letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--xs)">Loam Journal</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"sm","textColor":"steel","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0">Technical SEO overhaul and Core Web Vitals fix for a publisher.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px","margin":{"top":"var:preset|spacing|sm"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--sm)">
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://example.com" target="_blank">View site ↗</a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://github.com/yourname/repo" target="_blank">GitHub ↗</a></p>
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