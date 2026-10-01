<?php

add_action( 'init', function () {
	register_block_type( 'rf-portfolio/case-links', [
		'render_callback' => function () {
			if ( ! function_exists( 'get_field' ) ) {
				return '';
			}

			$site_url   = get_field( 'website_link' );
			$github_url = get_field( 'github_link' );

			if ( ! $site_url && ! $github_url ) {
				return '';
			}

			$out = '<div class="rfp-case-links">';

			if ( $site_url ) {
				$out .= sprintf(
					'<a class="rfp-case-btn rfp-case-btn--filled" href="%s" target="_blank" rel="noopener">View site <span class="rfp-arrow">↗</span></a>',
					esc_url( $site_url )
				);
			}

			if ( $github_url ) {
				$out .= sprintf(
					'<a class="rfp-case-btn rfp-case-btn--outline" href="%s" target="_blank" rel="noopener">GitHub <span class="rfp-arrow">↗</span></a>',
					esc_url( $github_url )
				);
			}

			$out .= '</div>';

			return $out;
		},
	] );
} );
