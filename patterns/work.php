<?php
/**
 * Title: Work
 * Slug: rf-portfolio/work
 * Categories: featured, text
 * Description: Case study rows for selected projects.
 */
?>
<?php
// Set to true once the case study posts are published.
$show_case_links = false;
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

		<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"muted","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0">04 case studies</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"rfp-work-rows"} -->
	<div class="wp-block-group alignwide rfp-work-rows">

		<!-- wp:group {"tagName":"article","className":"rfp-work-row"} -->
		<article class="wp-block-group rfp-work-row">

			<!-- wp:group {"className":"rfp-work-row-image","layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-image">
<?php if ( $show_case_links ) : ?>
				<!-- wp:image {"linkDestination":"custom","href":"/case-studies/bitcoinchaser/","className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><a href="/case-studies/bitcoinchaser/"><img src="https://rossfindlay.dev/wp-content/uploads/2026/08/screenshot-of-bitcoinchaser-com__1200x900-1.jpg" alt="Screenshot of BitcoinChaser.com website"/></a></figure>
				<!-- /wp:image -->
<?php else : ?>
				<!-- wp:image {"className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><img src="https://rossfindlay.dev/wp-content/uploads/2026/08/screenshot-of-bitcoinchaser-com__1200x900-1.jpg" alt="Screenshot of BitcoinChaser.com website"/></figure>
				<!-- /wp:image -->
<?php endif; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-work-row-text","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-text">

				<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"muted","className":"rfp-work-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size rfp-work-eyebrow" style="text-transform:uppercase;letter-spacing:0.08em;margin-top:0;margin-bottom:0"><span style="color:var(--wp--preset--color--green);font-weight:600">01</span><span class="rfp-work-rule"></span>Client work</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h3 class="wp-block-heading has-xl-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">BitcoinChaser</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"steel","style":{"typography":{"fontSize":"18px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color" style="font-size:18px;line-height:1.55;margin-top:0;margin-bottom:0">Custom WordPress theme with a 20-block component library, 4 custom post types, and technical SEO built in.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"rfp-work-tags","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group rfp-work-tags">
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">WordPress</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">ACF Pro</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">Tailwind</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"rfp-work-actions","layout":{"type":"flex","flexWrap":"wrap","alignItems":"center"}} -->
				<div class="wp-block-group rfp-work-actions">
<?php if ( $show_case_links ) : ?>
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="margin-top:0;margin-bottom:0"><a class="rfp-work-cta" href="/case-studies/bitcoinchaser/">Read case study →</a></p>
					<!-- /wp:paragraph -->
<?php endif; ?>
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

		</article>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"article","className":"rfp-work-row"} -->
		<article class="wp-block-group rfp-work-row">

			<!-- wp:group {"className":"rfp-work-row-image","layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-image">
<?php if ( $show_case_links ) : ?>
				<!-- wp:image {"linkDestination":"custom","href":"/case-studies/tastes-smokey/","className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><a href="/case-studies/tastes-smokey/"><img src="https://rossfindlay.dev/wp-content/uploads/2026/08/tastes-smokey-whiskey-rating-website__1200x900.jpg" alt="Screenshot of the Tastes Smokey website"/></a></figure>
				<!-- /wp:image -->
<?php else : ?>
				<!-- wp:image {"className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><img src="https://rossfindlay.dev/wp-content/uploads/2026/08/tastes-smokey-whiskey-rating-website__1200x900.jpg" alt="Screenshot of the Tastes Smokey website"/></figure>
				<!-- /wp:image -->
<?php endif; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-work-row-text","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-text">

				<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"muted","className":"rfp-work-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size rfp-work-eyebrow" style="text-transform:uppercase;letter-spacing:0.08em;margin-top:0;margin-bottom:0"><span style="color:var(--wp--preset--color--green);font-weight:600">02</span><span class="rfp-work-rule"></span>Personal project</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h3 class="wp-block-heading has-xl-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">Tastes Smokey</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"steel","style":{"typography":{"fontSize":"18px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color" style="font-size:18px;line-height:1.55;margin-top:0;margin-bottom:0">A full-stack whiskey tasting tracker built with React, TypeScript, Express, and PostgreSQL.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"rfp-work-tags","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group rfp-work-tags">
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">React</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">TypeScript</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">Express</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">PostgreSQL</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"rfp-work-actions","layout":{"type":"flex","flexWrap":"wrap","alignItems":"center"}} -->
				<div class="wp-block-group rfp-work-actions">
<?php if ( $show_case_links ) : ?>
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="margin-top:0;margin-bottom:0"><a class="rfp-work-cta" href="/case-studies/tastes-smokey/">Read case study →</a></p>
					<!-- /wp:paragraph -->
<?php endif; ?>
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://whiskey-rho.vercel.app/" target="_blank">View site ↗</a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://github.com/FindRoss/whiskey" target="_blank">GitHub ↗</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</article>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"article","className":"rfp-work-row"} -->
		<article class="wp-block-group rfp-work-row">

			<!-- wp:group {"className":"rfp-work-row-image","layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-image">
<?php if ( $show_case_links ) : ?>
				<!-- wp:image {"linkDestination":"custom","href":"/case-studies/color-picker/","className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><a href="/case-studies/color-picker/"><img src="https://rossfindlay.dev/wp-content/uploads/2026/08/screenshot-react-colors__1200x900.png" alt="Screenshot of the colors portfolio project made with React."/></a></figure>
				<!-- /wp:image -->
<?php else : ?>
				<!-- wp:image {"className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><img src="https://rossfindlay.dev/wp-content/uploads/2026/08/screenshot-react-colors__1200x900.png" alt="Screenshot of the colors portfolio project made with React."/></figure>
				<!-- /wp:image -->
<?php endif; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-work-row-text","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-text">

				<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"muted","className":"rfp-work-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size rfp-work-eyebrow" style="text-transform:uppercase;letter-spacing:0.08em;margin-top:0;margin-bottom:0"><span style="color:var(--wp--preset--color--green);font-weight:600">03</span><span class="rfp-work-rule"></span>Personal project</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h3 class="wp-block-heading has-xl-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">Color Picker</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"steel","style":{"typography":{"fontSize":"18px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color" style="font-size:18px;line-height:1.55;margin-top:0;margin-bottom:0">A color palette manager built with React, Redux Toolkit, and TypeScript.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"rfp-work-tags","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group rfp-work-tags">
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">React</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">Redux Toolkit</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">TypeScript</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"rfp-work-actions","layout":{"type":"flex","flexWrap":"wrap","alignItems":"center"}} -->
				<div class="wp-block-group rfp-work-actions">
<?php if ( $show_case_links ) : ?>
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="margin-top:0;margin-bottom:0"><a class="rfp-work-cta" href="/case-studies/color-picker/">Read case study →</a></p>
					<!-- /wp:paragraph -->
<?php endif; ?>
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

		</article>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"article","className":"rfp-work-row"} -->
		<article class="wp-block-group rfp-work-row">

			<!-- wp:group {"className":"rfp-work-row-image","layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-image">
<?php if ( $show_case_links ) : ?>
				<!-- wp:image {"linkDestination":"custom","href":"/case-studies/banjo-chords/","className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><a href="/case-studies/banjo-chords/"><img src="https://rossfindlay.dev/wp-content/uploads/2026/10/banjo-chords-app__1200x900.jpg" alt="Screenshot of my Banjo chords website"/></a></figure>
				<!-- /wp:image -->
<?php else : ?>
				<!-- wp:image {"className":"rfp-work-image-card","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large rfp-work-image-card"><img src="https://rossfindlay.dev/wp-content/uploads/2026/10/banjo-chords-app__1200x900.jpg" alt="Screenshot of my Banjo chords website"/></figure>
				<!-- /wp:image -->
<?php endif; ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-work-row-text","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-work-row-text">

				<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","textColor":"muted","className":"rfp-work-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size rfp-work-eyebrow" style="text-transform:uppercase;letter-spacing:0.08em;margin-top:0;margin-bottom:0"><span style="color:var(--wp--preset--color--green);font-weight:600">04</span><span class="rfp-work-rule"></span>Personal project</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"xl","style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h3 class="wp-block-heading has-xl-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">Banjo Chords</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"steel","style":{"typography":{"fontSize":"18px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-steel-color has-text-color" style="font-size:18px;line-height:1.55;margin-top:0;margin-bottom:0">A banjo chord chart app built with React, TypeScript, and Vite, with fretboard diagrams and saved chord collections persisted in localStorage.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"rfp-work-tags","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group rfp-work-tags">
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">React</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">TypeScript</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"rfp-work-tag-pill","fontFamily":"mono","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">Vite</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"rfp-work-actions","layout":{"type":"flex","flexWrap":"wrap","alignItems":"center"}} -->
				<div class="wp-block-group rfp-work-actions">
<?php if ( $show_case_links ) : ?>
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="margin-top:0;margin-bottom:0"><a class="rfp-work-cta" href="/case-studies/banjo-chords/">Read case study →</a></p>
					<!-- /wp:paragraph -->
<?php endif; ?>
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://banjo-ruddy.vercel.app/" target="_blank">View site ↗</a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontFamily":"mono","fontSize":"sm","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="https://github.com/FindRoss/banjo" target="_blank">GitHub ↗</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</article>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
