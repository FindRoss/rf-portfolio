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
			"style":{
				"typography":{
					"fontSize":"var:preset|font-size|xxl",
					"fontWeight":"700",
					"letterSpacing":"-0.02em",
					"lineHeight":"1.05"
				}
			}
		} -->
		<h1>Ross Findlay</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {
			"style":{
				"typography":{"fontSize":"var:preset|font-size|lg"},
				"color":{"text":"var:preset|color|contrast"},
				"spacing":{"margin":{"top":"0"}}
			}
		} -->
		<p>Wordpress developer making things for the web.</p>
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
