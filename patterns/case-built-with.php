<?php
/**
 * Title: Case Study — Built With
 * Slug: rf-portfolio/case-built-with
 * Categories: text
 * Description: Built With chapter — stacked heading above an icon-tile grid.
 */
?>

<!-- wp:group {
	"anchor":"built-with",
	"align":"full",
	"className":"rfp-container",
	"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},
	"layout":{"type":"constrained"}
} -->
<div id="built-with" class="wp-block-group alignfull rfp-container" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"fontFamily":"mono","textColor":"green","style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"12px"}}}} -->
		<p class="has-green-color has-text-color has-mono-font-family" style="font-size:14px;font-weight:600;margin-top:0;margin-bottom:12px">02</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"className":"rfp-case-h2","style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.25rem)","fontWeight":"800","letterSpacing":"-0.02em","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h2 class="wp-block-heading rfp-case-h2" style="font-size:clamp(2rem, 5vw, 3.25rem);font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">Built with<span style="color:var(--wp--preset--color--green)">.</span></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"className":"rfp-builtwith-grid","style":{"spacing":{"margin":{"top":"clamp(2rem, 4vw, 3rem)"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group rfp-builtwith-grid" style="margin-top:clamp(2rem, 4vw, 3rem)">

			<!-- wp:group {"className":"rfp-icon-tile","style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-icon-tile">
				<svg class="rfp-icon" width="56" height="56" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><title>WordPress</title><path d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"/></svg>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="font-size:18px;font-weight:700;margin-top:0;margin-bottom:0">WordPress</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color" style="font-size:14px;margin-top:0;margin-bottom:0">Theme &amp; plugin architecture</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-icon-tile","style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-icon-tile">
				<svg class="rfp-icon" width="56" height="56" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><title>PHP</title><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"/></svg>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="font-size:18px;font-weight:700;margin-top:0;margin-bottom:0">PHP</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color" style="font-size:14px;margin-top:0;margin-bottom:0">Core logic &amp; custom fields</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-icon-tile","style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-icon-tile">
				<svg class="rfp-icon" width="56" height="56" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><title>Tailwind CSS</title><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="font-size:18px;font-weight:700;margin-top:0;margin-bottom:0">Tailwind CSS</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color" style="font-size:14px;margin-top:0;margin-bottom:0">Utility-first styling</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-icon-tile","style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-icon-tile">
				<svg class="rfp-icon" width="56" height="56" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><title>JavaScript</title><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="font-size:18px;font-weight:700;margin-top:0;margin-bottom:0">JavaScript</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color" style="font-size:14px;margin-top:0;margin-bottom:0">Interactive behaviour</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-icon-tile","style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-icon-tile">
				<svg class="rfp-icon" width="56" height="56" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><title>Google Search Console</title><path d="M8.548 1.156L6.832 2.872v1.682h1.716zm0 3.398v.035H6.832v-.035H3.386L0 7.844v3.577h2.826V8.94c0-.525.429-.954.954-.954h16.476c.525 0 .954.43.954.954v2.48h2.754V7.844l-3.386-3.29H17.3v.035h-1.717v-.035zm7.035 0H17.3V2.872l-1.717-1.716zM8.679 1.188V2.84h6.773V1.188zm11.471 7.07a.834.834 0 00-.132.01l-.543.002c-5.216.014-10.432-.008-15.648.01-.435-.063-.794.436-.716.883v2.264h17.812c-.016-.888.045-1.782-.034-2.666-.104-.342-.427-.502-.739-.502zm-15.422.634a.689.698 0 01.689.698.689.698 0 01-.689.697.689.698 0 01-.688-.697.689.698 0 01.688-.698zm2.134 0a.689.698 0 01.689.698.689.698 0 01-.689.697.689.698 0 01-.688-.697.689.698 0 01.688-.698zM.036 11.645v9.156c0 1.05.858 1.908 1.907 1.908h.883V11.645zm21.174 0v11.064h.882c1.05 0 1.908-.858 1.908-1.908v-9.156zM4.057 13.133v6.85h6.137v-6.85zm13.243.021v3.777l-1.708.977-1.708-.977v-3.758a4.006 4.006 0 000 7.23v2.441h3.457v-2.442a4.006 4.006 0 00-.041-7.248zm-13.243 8.26v1.43h7.925v-1.43z"/></svg>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="font-size:18px;font-weight:700;margin-top:0;margin-bottom:0">Search Console</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color" style="font-size:14px;margin-top:0;margin-bottom:0">Indexing &amp; SEO monitoring</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"rfp-icon-tile","style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group rfp-icon-tile">
				<svg class="rfp-icon" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><title>ACF</title><rect width="18" height="7" x="3" y="3" rx="1"/><rect width="9" height="7" x="3" y="14" rx="1"/><rect width="5" height="7" x="16" y="14" rx="1"/></svg>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="font-size:18px;font-weight:700;margin-top:0;margin-bottom:0">ACF</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-muted-color has-text-color" style="font-size:14px;margin-top:0;margin-bottom:0">Structured content fields</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
