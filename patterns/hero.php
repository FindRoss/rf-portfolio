<?php
/**
 * Title: Hero
 * Slug: rf-portfolio/hero
 * Categories: featured, text
 * Description: Full-width hero section with name, tagline, and a call-to-action button.
 */
?>

<!-- wp:group {
	"align":"full",
	"style":{
		"spacing":{
			"padding":{
				"top":"var:preset|spacing|xxl",
				"bottom":"var:preset|spacing|xxl"
			}
		}
	},
	"layout":{"type":"constrained"}
} -->
<div class="wp-block-group alignfull">

	<!-- wp:group {
		"style":{"spacing":{"blockGap":"var:preset|spacing|md"}},
		"layout":{"type":"default"}
	} -->
	<div class="wp-block-group">

		<!-- wp:heading {
			"level":1,
			"fontSize": "xxl",
			"style":{
				"typography":{
					"fontWeight":"800",
					"letterSpacing":"-0.03em",
					"lineHeight":"1.25"
				}
			}
		} -->
		<h1 class="wp-block-heading has-xxl-font-size" style="font-weight:800;letter-spacing:-0.03em;line-height:1.25">WordPress,<br>built to <mark style="background-color:var(--wp--preset--color--lime);padding:0 10px">perform.</mark></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {
			"fontSize":"lg",
			"textColor":"graphite",
			"style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md"}}}
		} -->
		<p class="has-graphite-color has-text-color has-lg-font-size" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--md)">I architect custom WordPress themes and plugins for teams who care about speed, technical SEO, and code that doesn't fall apart at scale.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|sm"}}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {
				"style":{
					"color":{
						"background":"var:preset|color|accent",
						"text":"var:preset|color|base"
					}
				}
			} -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button" href="#work">See my work</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
