( function( window, document, settings ) {
	var src, ready, ii, tests;

	/*
	 * Create a canvas element for testing native browser support
	 * of emoji.
	 */
	var canvas = document.createElement( 'canvas' );
	var context = canvas.getContext && canvas.getContext( '2d' );

	/**
<<<<<<< HEAD
=======
	 * Check if two sets of Emoji characters render the same.
	 *
	 * @param set1 array Set of Emoji characters.
	 * @param set2 array Set of Emoji characters.
	 * @returns {boolean} True if the two sets render the same.
	 */
	function emojiSetsRenderIdentically( set1, set2 ) {
		var stringFromCharCode = String.fromCharCode;

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set1 ), 0, 0 );
		var rendered1 = canvas.toDataURL();

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set2 ), 0, 0 );
		var rendered2 = canvas.toDataURL();

		return rendered1 === rendered2;
	}

	/**
>>>>>>> origin/master
	 * Detect if the browser supports rendering emoji or flag emoji. Flag emoji are a single glyph
	 * made of two characters, so some browsers (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
<<<<<<< HEAD
	 * @param type {String} Whether to test for support of "flag" or "emoji4" emoji.
	 * @return {Boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var stringFromCharCode = String.fromCharCode,
			flag, flag2, technologist, technologist2;
=======
	 * @param type {String} Whether to test for support of "flag" or "emoji".
	 * @return {Boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var isIdentical;
>>>>>>> origin/master

		if ( ! context || ! context.fillText ) {
			return false;
		}

<<<<<<< HEAD
		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );

=======
>>>>>>> origin/master
		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		switch ( type ) {
			case 'flag':
				/*
<<<<<<< HEAD
				 * This works because the image will be one of three things:
				 * - Two empty squares, if the browser doesn't render emoji
				 * - Two squares with 'U' and 'N' in them, if the browser doesn't render flag emoji
				 * - The United Nations flag
				 *
				 * The first two will encode to small images (1-2KB data URLs), the third will encode
				 * to a larger image (4-5KB data URL).
				 */
				context.fillText( stringFromCharCode( 55356, 56826, 55356, 56819 ), 0, 0 );
				if ( canvas.toDataURL().length < 3000 ) {
					return false;
				}

				context.clearRect( 0, 0, canvas.width, canvas.height );

				/*
				 * Test for rainbow flag compatibility. As the rainbow flag was added out of sequence with
				 * the usual Unicode release cycle, some browsers support it, and some don't, even if their
				 * Unicode support is up to date.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (white flag emoji + rainbow emoji).
				 */
				context.fillText( stringFromCharCode( 55356, 57331, 65039, 8205, 55356, 57096 ), 0, 0 );
				flag = canvas.toDataURL();

				context.clearRect( 0, 0, canvas.width, canvas.height );

				context.fillText( stringFromCharCode( 55356, 57331, 55356, 57096 ), 0, 0 );
				flag2 = canvas.toDataURL();

				return flag !== flag2;
			case 'emoji4':
				/*
				 * Emoji 4 has the best technologists. So does WordPress!
				 *
				 * To test for support, try to render a new emoji (woman technologist: medium skin tone),
				 * then compare it to how it would look if the browser doesn't render it correctly
				 * (woman technologist: medium skin tone + personal computer).
				 */
				context.fillText( stringFromCharCode( 55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0 );
				technologist = canvas.toDataURL();

				context.clearRect( 0, 0, canvas.width, canvas.height );

				context.fillText( stringFromCharCode( 55357, 56425, 55356, 57341, 55357, 56507), 0, 0 );
				technologist2 = canvas.toDataURL();

				return technologist !== technologist2;
=======
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 55356, 56826, 55356, 56819 ],
					[ 55356, 56826, 8203, 55356, 56819 ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather an five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447 ],
					[ 55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447 ]
				);

				return ! isIdentical;
			case 'emoji':
				/*
				 * Emoji 5 has fairies of all genders.
				 *
				 * To test for support, try to render a new emoji (fairy, male), then compares
				 * it to how it would look if the browser doesn't render it correctly
				 * (fairy + male sign).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 55358, 56794, 8205, 9794, 65039 ],
					[ 55358, 56794, 8203, 9794, 65039 ]
				);
				return ! isIdentical;
>>>>>>> origin/master
		}

		return false;
	}

	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.defer = script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

<<<<<<< HEAD
	tests = Array( 'flag', 'emoji4' );
=======
	tests = Array( 'flag', 'emoji' );
>>>>>>> origin/master

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	for( ii = 0; ii < tests.length; ii++ ) {
		settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

		settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

		if ( 'flag' !== tests[ ii ] ) {
			settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
		}
	}

	settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	if ( ! settings.supports.everything ) {
		ready = function() {
			settings.readyCallback();
		};

		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
