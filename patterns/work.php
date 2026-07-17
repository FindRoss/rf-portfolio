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
			"fontFamily":"mono",
			"fontSize":"sm",
			"textColor":"muted",
			"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}
		} -->
		<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;max-width:340px">I need to write something here about the different things I have created with different tools, including with React and WordPress.</p>
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
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"faint","align":"center"} -->
					<p class="has-faint-color has-text-color has-mono-font-family has-sm-font-size has-text-align-center">Project screenshot</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag","fontFamily":"mono","fontSize":"xs","style":{"typography":{"fontWeight":"600"}}} -->
					<p class="rfp-work-tag has-mono-font-family has-xs-font-size" style="font-weight:600">Headless</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|xs"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:700;letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--xs)">Northbound Studio</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"sm","textColor":"steel","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0">Custom WPGraphQL + Next.js rebuild cutting load times by 60%.</p>
				<!-- /wp:paragraph -->
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
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"faint","align":"center"} -->
					<p class="has-faint-color has-text-color has-mono-font-family has-sm-font-size has-text-align-center">Project screenshot</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag","fontFamily":"mono","fontSize":"xs","style":{"typography":{"fontWeight":"600"}}} -->
					<p class="rfp-work-tag has-mono-font-family has-xs-font-size" style="font-weight:600">Custom Plugin</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|xs"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:700;letter-spacing:-0.01em;margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--xs)">Ferro &amp; Co.</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"sm","textColor":"steel","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color has-sm-font-size" style="margin-top:0;margin-bottom:0">Bespoke booking system built as a WordPress plugin from scratch.</p>
				<!-- /wp:paragraph -->
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
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"faint","align":"center"} -->
					<p class="has-faint-color has-text-color has-mono-font-family has-sm-font-size has-text-align-center">Project screenshot</p>
					<!-- /wp:paragraph -->
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
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->