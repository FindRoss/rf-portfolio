( function ( blocks, element, blockEditor, serverSideRender ) {
	var el = element.createElement;

	[
		[ 'rf-portfolio/case-links', 'Case Study Links' ],
		[ 'rf-portfolio/case-built-with', 'Case Study Built With' ],
		[ 'rf-portfolio/case-next', 'Next Case Study' ],
	].forEach( function ( block ) {
		blocks.registerBlockType( block[ 0 ], {
			apiVersion: 3,
			title: block[ 1 ],
			category: 'design',
			edit: function ( props ) {
				return el(
					'div',
					blockEditor.useBlockProps(),
					el( serverSideRender, { block: block[ 0 ], attributes: props.attributes } )
				);
			},
			save: function () {
				return null;
			},
		} );
	} );
} )( window.wp.blocks, window.wp.element, window.wp.blockEditor, window.wp.serverSideRender );
