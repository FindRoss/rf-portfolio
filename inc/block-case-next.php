<?php

add_action( 'init', function () {
	register_block_type( 'rf-portfolio/case-next', [
		'render_callback' => function () {
			$ids = get_posts( [
				'post_type'      => 'case_study',
				'posts_per_page' => -1,
				'orderby'        => 'date',
				'order'          => 'ASC',
				'fields'         => 'ids',
			] );

			$current = get_queried_object_id();
			$index   = array_search( $current, $ids, true );

			if ( $index === false || count( $ids ) < 2 ) {
				return '';
			}

			$next  = $ids[ ( $index + 1 ) % count( $ids ) ];
			$thumb = get_the_post_thumbnail( $next, 'large' );

			return sprintf(
				'<a class="rfp-next-case alignfull" href="%s"><div class="rfp-next-case-inner"><div><p class="rfp-next-case-label">Next case study</p><p class="rfp-next-case-title">%s&nbsp;<span>&rarr;</span></p></div>%s</div></a>',
				esc_url( get_permalink( $next ) ),
				esc_html( get_the_title( $next ) ),
				$thumb ? '<div class="rfp-next-case-thumb"><div class="rfp-next-case-shot">' . $thumb . '</div></div>' : ''
			);
		},
	] );
} );
