<?php 
/**
 * Title: About
 * Slug: rf-portfolio/about
 * Categories: featured, text
 * Description: Short bio section with light grey background
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
        "layout": {"type":"constrained", "contentSize":"900px"} 
    } --> 
    <div class="wp-block-group">
        
        <!-- wp:paragraph {
           "fontFamily": "mono",
           "fontSize": "sm",
           "textColor": "muted",
           "style": {"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}
        } --> 
        <p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size" style="text-transform:uppercase;letter-spacing:0.08em;margin-bottom:var(--wp--preset--spacing--sm)">About</p>
        <!-- /wp:paragraph --> 

        <!-- wp:paragraph {
            "fontSize": "xl", 
            "style": {"typography":{"fontWeight":"500","letterSpacing":"-0.01em","lineHeight":"1.4"},"spacing":{"margin":{"top":"0","bottom":"0"}}} 
        } --> 
        <p class="has-xl-font-size" style="font-weight:500;letter-spacing:-0.01em;line-height:1.4;margin-top:0;margin-bottom:0">I believe websites should be built to last. Every project is something I'm passing on to future developers, site admins, and stakeholders, so I try to leave it in a better position than I found it. I like building for the people who'll actually use what I make: authors, site admins, the business itself, not just shipping to a spec and moving on.</p>
		<!-- /wp:paragraph -->


    </div>
    <!-- /wp:group --> 


</div>
<!-- /wp:group -->
