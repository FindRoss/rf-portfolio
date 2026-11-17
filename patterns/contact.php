<?php
/**
 * Title: Contact
 * Slug: rf-portfolio/contact
 * Categories: featured, text
 * Description: Full-width contact call-to-action with a button and email address.
 */
?>

<!-- wp:group {
    "anchor": "contact",
    "align": "full",
    "className": "rfp-container rfp-contact",
    "style": {
        "spacing": {"padding": {"top": "var:preset|spacing|xl", "bottom": "var:preset|spacing|xl"}}
    },
    "layout": {"type": "constrained"}
} -->
<div id="contact" class="wp-block-group alignfull rfp-container rfp-contact" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

    <!-- wp:group {
        "align": "wide",
        "style": {"spacing": {"blockGap": "clamp(2rem, 4vw, 3rem)"}},
        "layout": {"type": "flex", "flexWrap": "wrap", "justifyContent": "space-between"}
    } -->
    <div class="wp-block-group alignwide">

        <!-- wp:heading {
            "level": 2,
            "style": {"typography": {"fontSize": "clamp(2rem, 5vw, 3.25rem)", "fontWeight": "800", "letterSpacing": "-0.02em", "lineHeight": "1.1"}, "spacing": {"margin": {"top": "0", "bottom": "0"}}}
        } -->
        <h2 class="wp-block-heading" style="font-size:clamp(2rem, 5vw, 3.25rem);font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">Have a project or a role in mind?<br>I’d love to hear about it<span style="color:var(--wp--preset--color--green)">.</span></h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className": "rfp-contact-actions", "style": {"spacing": {"blockGap": "16px"}}, "layout": {"type": "flex", "orientation": "vertical", "justifyContent": "stretch"}} -->
        <div class="wp-block-group rfp-contact-actions">

            <!-- wp:buttons {"style": {"spacing": {"blockGap": "0"}}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style": {"border": {"radius": "100px"}, "spacing": {"padding": {"top": "18px", "bottom": "18px", "left": "32px", "right": "32px"}}, "typography": {"fontWeight": "600"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:rosspfindlay@gmail.com?subject=Let%27s%20Talk" style="border-radius:100px;padding-top:18px;padding-right:32px;padding-bottom:18px;padding-left:32px;font-weight:600">Get in touch</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:paragraph {"fontFamily": "mono", "style": {"typography": {"fontSize": "15px"}, "spacing": {"margin": {"top": "0", "bottom": "0"}}}} -->
            <p class="has-mono-font-family" style="font-size:15px;margin-top:0;margin-bottom:0"><a href="mailto:rosspfindlay@gmail.com?subject=Let%27s%20Talk">rosspfindlay@gmail.com</a></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
