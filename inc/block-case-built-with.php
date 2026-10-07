<?php

add_action( 'init', function () {
	register_block_type( 'rf-portfolio/case-built-with', [
		'title'           => 'Case Study Built With',
		'render_callback' => function () {
			if ( ! function_exists( 'get_field' ) ) {
				return '';
			}

			$tools = get_field( 'built_with' );

			if ( empty( $tools ) || ! is_array( $tools ) ) {
				return '';
			}

			$catalog = [
				'wordpress'  => [ 'WordPress', 'Theme & plugin architecture' ],
				'php'        => [ 'PHP', 'Core logic & custom fields' ],
				'tailwindcss' => [ 'Tailwind CSS', 'Utility-first styling' ],
				'javascript' => [ 'JavaScript', 'Interactive behaviour' ],
				'react'      => [ 'React', 'Component-driven interfaces' ],
				'typescript' => [ 'TypeScript', 'Typed, safer JavaScript' ],
				'postgresql' => [ 'PostgreSQL', 'Relational data storage' ],
				'acf'        => [ 'ACF', 'Structured content fields' ],
				'git'        => [ 'Git', 'Version control & deployment' ],
				'node'       => [ 'Node.js', 'Build tooling & server-side JS' ],
				'express'    => [ 'Express', 'Backend API & routing' ],
				'redux'      => [ 'Redux Toolkit', 'Predictable app state' ],
				'materialui' => [ 'Material UI', 'Ready-made React components' ],
				'vercel'     => [ 'Vercel', 'Hosting & deployment' ],
				'jwt'        => [ 'Authentication (JWT)', 'Secure token-based login' ],
			];

			$out = '<div class="rfp-builtwith-grid">';

			foreach ( $tools as $slug ) {
				if ( ! isset( $catalog[ $slug ] ) ) {
					continue;
				}

				$file = get_theme_file_path( "/assets/icons/{$slug}.svg" );
				if ( ! file_exists( $file ) ) {
					continue;
				}

				$svg = file_get_contents( $file );
				$svg = preg_replace_callback( '/<svg\b[^>]*>/s', function ( $m ) {
					$tag  = preg_replace( '/\s(width|height)="[^"]*"/', '', $m[0] );
					$attr = ' class="rfp-icon" width="56" height="56" aria-hidden="true"';
					if ( strpos( $tag, 'stroke="currentColor"' ) === false ) {
						$attr .= ' fill="currentColor"';
					}
					return preg_replace( '/^<svg/', '<svg' . $attr, $tag );
				}, $svg, 1 );

				$out .= sprintf(
					'<div class="rfp-icon-tile">%s<p class="rfp-icon-name">%s</p><p class="rfp-icon-desc">%s</p></div>',
					$svg,
					esc_html( $catalog[ $slug ][0] ),
					esc_html( $catalog[ $slug ][1] )
				);
			}

			return $out . '</div>';
		},
	] );
} );
