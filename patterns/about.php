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
        "layout": {"type": "flex", "flexWrap": "wrap", "verticalAlignment": "top"}
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

        <!-- wp:group {"className":"rfp-about-text","style":{"spacing":{"blockGap":"20px","padding":{"top":"20px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group rfp-about-text" style="padding-top:20px">

            <!-- wp:paragraph {"textColor":"graphite","style":{"typography":{"fontSize":"clamp(1.25rem, 2.4vw, 1.625rem)","fontWeight":"400","lineHeight":"1.65"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <p class="has-graphite-color has-text-color" style="font-size:clamp(1.25rem, 2.4vw, 1.625rem);font-weight:400;line-height:1.65;margin-top:0;margin-bottom:0">I’m an Edinburgh-based website manager and WordPress developer with 9 years of experience running websites end to end, from building and technical SEO to content and analytics.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"graphite","style":{"typography":{"fontSize":"clamp(1.25rem, 2.4vw, 1.625rem)","fontWeight":"400","lineHeight":"1.65"},"spacing":{"margin":{"bottom":"0"}}}} -->
            <p class="has-graphite-color has-text-color" style="font-size:clamp(1.25rem, 2.4vw, 1.625rem);font-weight:400;line-height:1.65;margin-bottom:0">I believe websites should be built to last. Every project is something I’m passing on to future developers, site admins and writers, so I try to leave it in a better position than I found it. I like building for the people who’ll actually use what I make: authors, site admins and the business itself, not just shipping to a spec and moving on.</p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
