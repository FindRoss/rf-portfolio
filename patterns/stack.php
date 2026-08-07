<?php 
/**
 * Title: Tech Stack
 * Slug: rf-portfolio/stack
 * Categories: featured, text
 * Description: Full-bleed dark section listing the technical skill categories.
 */
?> 

<!-- wp:group {
    "anchor": "stack",
    "align":"full",
	"backgroundColor":"contrast",
	"textColor":"base",
	"className":"rfp-container",
	"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},
	"layout":{"type":"constrained"}
 } -->

 <div id="stack" class="wp-block-group alignfull rfp-container has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

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
		<h2 class="wp-block-heading has-xxl-font-size" style="font-weight:800;letter-spacing:-0.02em">My stack.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {
			"fontSize":"md",
			"textColor":"faint",
			"style":{"spacing":{"margin":{"top":"16px","bottom":"0"}}}
		} -->
		<p class="has-faint-color has-text-color has-md-font-size" style="margin-top:16px;margin-bottom:0;max-width:660px">I work across every layer of a website, from frontend and backend code to schema, analytics, and how it all gets deployed.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

    <!-- wp:columns {
	 	"align": "wide",
	 	"className":"rfp-stack-grid",
		"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|lg"}}}} 
	-->
	<div class="wp-block-columns rfp-stack-grid alignwide" style="margin-top:var(--wp--preset--spacing--lg)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontFamily":"mono","fontSize":"xs","textColor":"lime","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}} -->
			<p class="has-lime-color has-text-color has-mono-font-family has-xs-font-size" style="text-transform:uppercase;letter-spacing:0.08em;margin-bottom:var(--wp--preset--spacing--sm)">Frontend</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"blockGap":"12px"}}} -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li>Tailwind / SASS</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>JavaScript (ES6+)</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Typescript</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>React</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontFamily":"mono","fontSize":"xs","textColor":"lime","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}} -->
			<p class="has-lime-color has-text-color has-mono-font-family has-xs-font-size" style="text-transform:uppercase;letter-spacing:0.08em;margin-bottom:var(--wp--preset--spacing--sm)">CMS &amp; Backend</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"blockGap":"12px"}}} -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li>Custom WordPress Plugins</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Advanced Custom Fields Pro</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>WordPress REST API</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontFamily":"mono","fontSize":"xs","textColor":"lime","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}} -->
			<p class="has-lime-color has-text-color has-mono-font-family has-xs-font-size" style="text-transform:uppercase;letter-spacing:0.08em;margin-bottom:var(--wp--preset--spacing--sm)">Performance &amp; SEO</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"blockGap":"12px"}}} -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li>Core Web Vitals</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Technical SEO</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Schema &amp; Structured Data</li><!-- /wp:list-item -->
				 <!-- wp:list-item --><li>GA4, Search Console, &amp; Ahrefs</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->


		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"fontFamily":"mono","fontSize":"xs","textColor":"lime","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}} -->
			<p class="has-lime-color has-text-color has-mono-font-family has-xs-font-size" style="text-transform:uppercase;letter-spacing:0.08em;margin-bottom:var(--wp--preset--spacing--sm)">Infra &amp; Tooling</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"blockGap":"12px"}}} -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li>WP-CLI / Git</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Git</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Claude Code</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->