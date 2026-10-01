<?php
/**
 * Title: About
 * Slug: rf-portfolio/about
 * Categories: featured, text
 * Description: Bio section with light grey background, wide two-column layout.
 */
?>

<!-- wp:group {
    "anchor": "about",
    "align": "full",
    "backgroundColor": "subtle",
    "className": "rfp-container",
    "style": {
        "spacing": {
            "margin": {"top": "0"},
            "padding": {"top": "var:preset|spacing|xl", "bottom": "var:preset|spacing|xl"}
        }
    },
    "layout": {"type": "constrained"}
} -->

<div id="about" class="wp-block-group alignfull rfp-container has-subtle-background-color has-background" style="margin-top: 0; padding-top: var(--wp--preset--spacing--xl); padding-bottom: var(--wp--preset--spacing--xl)">

    <!-- wp:group {
        "align": "wide",
        "className": "rfp-about-row",
        "style": {"spacing": {"blockGap": "clamp(2rem, 6vw, 6rem)"}},
        "layout": {"type": "flex", "flexWrap": "wrap", "alignItems": "flex-start"}
    } -->
    <div class="wp-block-group rfp-about-row alignwide">

        <!-- wp:heading {
            "level": 2,
            "fontSize": "xxl",
            "className": "rfp-about-heading",
            "style": {"typography": {"fontWeight": "800", "letterSpacing": "-0.02em", "lineHeight": "1.1"}, "spacing": {"margin": {"top": "0", "bottom": "0"}}}
        } -->
        <h2 class="wp-block-heading has-xxl-font-size rfp-about-heading" style="font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">About<span style="color:var(--wp--preset--color--green)">.</span></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {
            "textColor": "graphite",
            "className": "rfp-about-text",
            "style": {"typography":{"fontSize":"clamp(1.25rem, 2.4vw, 1.625rem)","fontWeight":"400","lineHeight":"1.65"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"12px"}}}
        } -->
        <p class="has-graphite-color has-text-color rfp-about-text" style="font-size:clamp(1.25rem, 2.4vw, 1.625rem);font-weight:400;line-height:1.65;margin-top:0;margin-bottom:0;padding-top:12px">I believe websites should be built to last. Every project is something I'm passing on to future developers, site admins, and stakeholders, so I try to leave it in a better position than I found it. I like building for the people who'll actually use what I make: authors, site admins, the business itself, not just shipping to a spec and moving on.</p>
		<!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
