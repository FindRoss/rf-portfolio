<?php

function rfp_work_query() {
	return get_posts( [
		'post_type'      => 'case_study',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => 'date',
		'order'          => 'ASC',
	] );
}

add_action( 'init', function () {
	register_block_type( 'rf-portfolio/work-count', [
		'title'           => 'Work Count',
		'render_callback' => function () {
			$n = count( rfp_work_query() );

			return sprintf(
				'<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0">%02d case %s</p>',
				$n,
				$n === 1 ? 'study' : 'studies'
			);
		},
	] );

	register_block_type( 'rf-portfolio/work-rows', [
		'title'           => 'Work Rows',
		'render_callback' => function () {
			$posts = rfp_work_query();

			if ( ! $posts ) {
				return '';
			}

			$catalog = function_exists( 'rfp_tool_catalog' ) ? rfp_tool_catalog() : [];
			$out     = '<div class="wp-block-group alignwide rfp-work-rows">';

			foreach ( $posts as $i => $post ) {
				$url   = get_permalink( $post );
				$title = get_the_title( $post );
				$thumb = get_the_post_thumbnail( $post, 'large' );

				$site   = function_exists( 'get_field' ) ? get_field( 'website_link', $post->ID ) : '';
				$github = function_exists( 'get_field' ) ? get_field( 'github_link', $post->ID ) : '';
				$tools  = function_exists( 'get_field' ) ? get_field( 'built_with', $post->ID ) : [];

				$out .= '<article class="wp-block-group rfp-work-row">';

				$out .= '<div class="wp-block-group rfp-work-row-image">';
				if ( $thumb ) {
					$out .= sprintf(
						'<figure class="wp-block-image size-large rfp-work-image-card"><a href="%s">%s</a></figure>',
						esc_url( $url ),
						$thumb
					);
				}
				$out .= '</div>';

				$out .= '<div class="wp-block-group rfp-work-row-text">';

				$out .= sprintf(
					'<p class="has-muted-color has-text-color has-mono-font-family has-sm-font-size rfp-work-eyebrow" style="text-transform:uppercase;letter-spacing:0.08em;margin-top:0;margin-bottom:0"><span style="color:var(--wp--preset--color--green);font-weight:600">%02d</span></p>',
					$i + 1
				);

				$out .= sprintf(
					'<h3 class="wp-block-heading has-xl-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1.1;margin-top:0;margin-bottom:0">%s</h3>',
					esc_html( $title )
				);

				$excerpt = get_the_excerpt( $post );
				if ( $excerpt ) {
					$out .= sprintf(
						'<p class="has-steel-color has-text-color" style="font-size:18px;line-height:1.55;margin-top:0;margin-bottom:0">%s</p>',
						esc_html( $excerpt )
					);
				}

				if ( is_array( $tools ) && $tools ) {
					$out .= '<div class="wp-block-group rfp-work-tags is-layout-flex">';
					foreach ( array_slice( $tools, 0, 4 ) as $slug ) {
						if ( isset( $catalog[ $slug ] ) ) {
							$out .= sprintf(
								'<p class="has-mono-font-family rfp-work-tag-pill" style="margin-top:0;margin-bottom:0">%s</p>',
								esc_html( $catalog[ $slug ][0] )
							);
						}
					}
					$out .= '</div>';
				}

				$out .= '<div class="wp-block-group rfp-work-actions is-layout-flex">';
				$out .= sprintf(
					'<p style="margin-top:0;margin-bottom:0"><a class="rfp-work-cta" href="%s">Read case study →</a></p>',
					esc_url( $url )
				);
				if ( $site ) {
					$out .= sprintf(
						'<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="%s" target="_blank" rel="noopener">View site ↗</a></p>',
						esc_url( $site )
					);
				}
				if ( $github ) {
					$out .= sprintf(
						'<p class="has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0"><a href="%s" target="_blank" rel="noopener">GitHub ↗</a></p>',
						esc_url( $github )
					);
				}
				$out .= '</div>';

				$out .= '</div></article>';
			}

			return $out . '</div>';
		},
	] );
} );
