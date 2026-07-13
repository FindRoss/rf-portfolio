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

		<!-- wp:buttons {"style": {"spacing":{"blockGap: "16px", "margin": {"top":"var:preset|spacing|sm"}}}} -->
		<div class="wp-block-buttons">

			<!-- wp:button {
				"fontSize":"base",
				"style": {
				"border": {"radius":"100px"},
				"spacing": {"padding": {"top":"18px","bottom":"18px","left":"32px","right":"32px"}},
				"typography":{"fontWeight":"600"}
				} 
		} -->

		<div class="wp-block-button">
			<a href="#work" class="wp-block-button__link has-base-font-size wp-element-button" style="border-radius:100px;padding-top:18px;padding-right:32px;padding-bottom:18px;padding-left:32px;font-weight:600">See my work</a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {
		"fontSize":"base",
		"textColor":"contrast",
		"style":{ 
			"color":{"background":"transparent"},
			"border":{"color":"var:preset|color|contrast","width":"2px","style":"solid","radius":"100px"},
			"spacing":{"padding":{"top":"18px","bottom":"18px","left":"32px","right":"32px"}},
			"typography":{"fontWeight":"600"}
			}
		} -->
		<div class="wp-block-button">
			<a class="wp-block-button__link has-contrast-color has-text-color has-background has-base-font-size wp-element-button" href="#contact" style="border-radius:100px;border-color:var(--wp--preset--color--contrast);border-width:2px;border-style:solid;background-color:transparent;padding-top:18px;padding-right:32px;padding-bottom:18px;padding-left:32px;font-weight:600">Get in touch</a>
		</div>
		<!-- /wp:button -->

		</div>
		<!-- /wp:buttons -->


	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
