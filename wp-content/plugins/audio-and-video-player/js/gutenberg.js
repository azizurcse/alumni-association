( function( blocks, element ) {
	var el 					= element.createElement,
		InspectorControls  	= wp.blocks.InspectorControls,
		source 				= blocks.source;

	/* Plugin Category */
	blocks.getCategories().push({slug: 'cpmp', title: 'Audio and Video Player'});

	/* ICONS */
	const iconCPMP = el('img', { width: 20, height: 20, src:  "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAYAAACZ3F9/AAAABHNCSVQICAgIfAhkiAAAALtJREFUKJGdkqEOwjAURU+XKQQODYYvaB3hA3ATWCwSjyVBQ4KbJkFhEcyQYBBFkoAn2ReAADFUsy57GbCbPNHTd3Nvk6osy6ijEMAY85fbWqtCd9Bj+5PpHBsAAgee73wGuszcFKq6JadIQ68Lqz1c7nKymAjQasJsCKM+qKAi8eFBX5GGTgsm6yLPq75k4+YE8aF8L74R4JbCdAvXtMgbVVWXCSwSuUHJ6CfOd7JJrNo+mu/bnlTdv/oBMjtIIvcGqbAAAAAASUVORK5CYII=" } );

	/* Audio and Video Player Shortcode */
	blocks.registerBlockType( 'cpmp/audio-and-video-player', {
		title: 'Audio and Video Player',
		icon: iconCPMP,
		category: 'cpmp',
		supports: {
			customClassName	: false,
			className		: false,
			html			: false
		},
		attributes: {
			id : {
				type : 'int'
			}
		},

		edit: function( props ) {
			var focus 	  = props.focus,
				options   = [],
				id   	  = props.attributes.id,
				text	  = '';

			if(
				typeof id == 'undefined' &&
				typeof cpmp_insert_media_player != 'undefined' &&
				typeof cpmp_insert_media_player['tag'] != 'undefined'
			)
			{
				var html = '<span>'+cpmp_insert_media_player.tag+'</span>';
				id 	 = jQuery(html).find('input').val();
				text = jQuery(html).text();
			}

			return [
					!!focus &&
					el(
						InspectorControls,
						{key: 'cpmp-inspector'},
						[
							el('p', {key : 'cpmp-label'}, 'Select Player'),
							el('input',
								{
									key: 'cpmp-player',
									type: 'radio',
									checked: true,
									onChange: function(evt){
										props.setAttributes({id: evt.target.value});
										evt.preventDefault();
									},
									value : id
								}
							),
							el(
								'span',
								{
									key : 'cpmp-player-name'
								},
								text
							)
						]
					),
					el(
						'input',
						{
							key		: 'cpmp-shortcode',
							type	: 'text',
							style	: { width: '100%'},
							value	: (new wp.shortcode(
										{
											tag		:'codepeople-html5-media-player',
											attrs 	: {
												id : id
											},
											type 	: 'single'
										})).string(),
							onChange : function(evt){
										var sc = wp.shortcode.next('codepeople-html5-media-player', evt.target.value);
										if(sc)
										{
											var id = sc.shortcode.attrs.named[ 'id' ] || '';
											props.setAttributes({
												id : id
											});
										}
									}
						}
					)
				];
		},

		save: function( props ) {
			var attrs = {};
			if(typeof props.attributes.id != 'undefined') attrs['id'] = props.attributes.id;
			return (new wp.shortcode(
					{
						tag		:'codepeople-html5-media-player',
						attrs 	: attrs,
						type 	: 'single'
					})).string();
		}
	});
} )(
	window.wp.blocks,
	window.wp.element
);