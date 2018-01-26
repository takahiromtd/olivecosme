/* global wpColorPickerL10n */
<<<<<<< HEAD
( function( $, undef ){

	var ColorPicker,
		// html stuff
		_before = '<a tabindex="0" class="wp-color-result" />',
		_after = '<div class="wp-picker-holder" />',
		_wrap = '<div class="wp-picker-container" />',
		_button = '<input type="button" class="button button-small hidden" />';

	// jQuery UI Widget constructor
=======
( function( $, undef ) {

	var ColorPicker,
		_before = '<button type="button" class="button wp-color-result" aria-expanded="false"><span class="wp-color-result-text"></span></button>',
		_after = '<div class="wp-picker-holder" />',
		_wrap = '<div class="wp-picker-container" />',
		_button = '<input type="button" class="button button-small" />',
		_wrappingLabel = '<label></label>',
		_wrappingLabelText = '<span class="screen-reader-text"></span>';

	/**
	 * @summary Creates a jQuery UI color picker.
	 *
	 * Creates a jQuery UI color picker that is used in the theme customizer.
	 *
	 * @since 3.5.0
	 */
>>>>>>> origin/master
	ColorPicker = {
		options: {
			defaultColor: false,
			change: false,
			clear: false,
			hide: true,
			palettes: true,
			width: 255,
			mode: 'hsv',
			type: 'full',
			slider: 'horizontal'
		},
<<<<<<< HEAD
=======
		/**
		 * @summary Creates a color picker that only allows you to adjust the hue.
		 *
		 * @since 3.5.0
		 *
		 * @access private
		 *
		 * @returns {void}
		 */
>>>>>>> origin/master
		_createHueOnly: function() {
			var self = this,
				el = self.element,
				color;

<<<<<<< HEAD
			// hide input
			el.hide();
			// max saturated color for hue to be obvious
			color = 'hsl(' + el.val() + ', 100, 50)';

=======
			el.hide();

			// Set the saturation to the maximum level.
			color = 'hsl(' + el.val() + ', 100, 50)';

			// Create an instance of the color picker, using the hsl mode.
>>>>>>> origin/master
			el.iris( {
				mode: 'hsl',
				type: 'hue',
				hide: false,
				color: color,
<<<<<<< HEAD
=======
				/**
				 * @summary Handles the onChange event if one has been defined in the options.
				 *
				 * @param {Event} event    The event that's being called.
				 * @param {HTMLElement} ui The HTMLElement containing the color picker.
				 *
				 * @returns {void}
				 */
>>>>>>> origin/master
				change: function( event, ui ) {
					if ( $.isFunction( self.options.change ) ) {
						self.options.change.call( this, event, ui );
					}
				},
				width: self.options.width,
				slider: self.options.slider
			} );
		},
<<<<<<< HEAD
		_create: function() {
			// bail early for unsupported Iris.
=======
		/**
		 * @summary Creates the color picker.
		 *
		 * Creates the color picker, sets default values, css classes and wraps it all in HTML.
		 *
		 * @since 3.5.0
		 *
		 * @access private
		 *
		 * @returns {void}
		 */
		_create: function() {
			// Return early if Iris support is missing.
>>>>>>> origin/master
			if ( ! $.support.iris ) {
				return;
			}

			var self = this,
				el = self.element;

<<<<<<< HEAD
			$.extend( self.options, el.data() );

			// hue-only gets created differently
=======
			// Override default options with options bound to the element.
			$.extend( self.options, el.data() );

			// Create a color picker which only allows adjustments to the hue.
>>>>>>> origin/master
			if ( self.options.type === 'hue' ) {
				return self._createHueOnly();
			}

<<<<<<< HEAD
			// keep close bound so it can be attached to a body listener
=======
			// Bind the close event.
>>>>>>> origin/master
			self.close = $.proxy( self.close, self );

			self.initialValue = el.val();

<<<<<<< HEAD
			// Set up HTML structure, hide things
			el.addClass( 'wp-color-picker' ).hide().wrap( _wrap );
			self.wrap = el.parent();
			self.toggler = $( _before ).insertBefore( el ).css( { backgroundColor: self.initialValue } ).attr( 'title', wpColorPickerL10n.pick ).attr( 'data-current', wpColorPickerL10n.current );
			self.pickerContainer = $( _after ).insertAfter( el );
			self.button = $( _button );

			if ( self.options.defaultColor ) {
				self.button.addClass( 'wp-picker-default' ).val( wpColorPickerL10n.defaultString );
			} else {
				self.button.addClass( 'wp-picker-clear' ).val( wpColorPickerL10n.clear );
			}

			el.wrap( '<span class="wp-picker-input-wrap" />' ).after(self.button);
=======
			// Add a CSS class to the input field.
			el.addClass( 'wp-color-picker' );

			/*
			 * Check if there's already a wrapping label, e.g. in the Customizer.
			 * If there's no label, add a default one to match the Customizer template.
			 */
			if ( ! el.parent( 'label' ).length ) {
				// Wrap the input field in the default label.
				el.wrap( _wrappingLabel );
				// Insert the default label text.
				self.wrappingLabelText = $( _wrappingLabelText )
					.insertBefore( el )
					.text( wpColorPickerL10n.defaultLabel );
			}

			/*
			 * At this point, either it's the standalone version or the Customizer
			 * one, we have a wrapping label to use as hook in the DOM, let's store it.
			 */
			self.wrappingLabel = el.parent();

			// Wrap the label in the main wrapper.
			self.wrappingLabel.wrap( _wrap );
			// Store a reference to the main wrapper.
			self.wrap = self.wrappingLabel.parent();
			// Set up the toggle button and insert it before the wrapping label.
			self.toggler = $( _before )
				.insertBefore( self.wrappingLabel )
				.css( { backgroundColor: self.initialValue } );
			// Set the toggle button span element text.
			self.toggler.find( '.wp-color-result-text' ).text( wpColorPickerL10n.pick );
			// Set up the Iris container and insert it after the wrapping label.
			self.pickerContainer = $( _after ).insertAfter( self.wrappingLabel );
			// Store a reference to the Clear/Default button.
			self.button = $( _button );

			// Set up the Clear/Default button.
			if ( self.options.defaultColor ) {
				self.button
					.addClass( 'wp-picker-default' )
					.val( wpColorPickerL10n.defaultString )
					.attr( 'aria-label', wpColorPickerL10n.defaultAriaLabel );
			} else {
				self.button
					.addClass( 'wp-picker-clear' )
					.val( wpColorPickerL10n.clear )
					.attr( 'aria-label', wpColorPickerL10n.clearAriaLabel );
			}

			// Wrap the wrapping label in its wrapper and append the Clear/Default button.
			self.wrappingLabel
				.wrap( '<span class="wp-picker-input-wrap hidden" />' )
				.after( self.button );

			/*
			 * The input wrapper now contains the label+input+Clear/Default button.
			 * Store a reference to the input wrapper: we'll use this to toggle
			 * the controls visibility.
			 */
			self.inputWrapper = el.closest( '.wp-picker-input-wrap' );
>>>>>>> origin/master

			el.iris( {
				target: self.pickerContainer,
				hide: self.options.hide,
				width: self.options.width,
				mode: self.options.mode,
				palettes: self.options.palettes,
<<<<<<< HEAD
				change: function( event, ui ) {
					self.toggler.css( { backgroundColor: ui.color.toString() } );
					// check for a custom cb
=======
				/**
				 * @summary Handles the onChange event if one has been defined in the options.
				 *
				 * Handles the onChange event if one has been defined in the options and additionally
				 * sets the background color for the toggler element.
				 *
				 * @since 3.5.0
				 *
				 * @param {Event} event    The event that's being called.
				 * @param {HTMLElement} ui The HTMLElement containing the color picker.
				 *
				 * @returns {void}
				 */
				change: function( event, ui ) {
					self.toggler.css( { backgroundColor: ui.color.toString() } );

>>>>>>> origin/master
					if ( $.isFunction( self.options.change ) ) {
						self.options.change.call( this, event, ui );
					}
				}
			} );

			el.val( self.initialValue );
			self._addListeners();
<<<<<<< HEAD
=======

			// Force the color picker to always be closed on initial load.
>>>>>>> origin/master
			if ( ! self.options.hide ) {
				self.toggler.click();
			}
		},
<<<<<<< HEAD
		_addListeners: function() {
			var self = this;

			// prevent any clicks inside this widget from leaking to the top and closing it
=======
		/**
		 * @summary Binds event listeners to the color picker.
		 *
		 * @since 3.5.0
		 *
		 * @access private
		 *
		 * @returns {void}
		 */
		_addListeners: function() {
			var self = this;

			/**
			 * @summary Prevent any clicks inside this widget from leaking to the top and closing it.
			 *
			 * @since 3.5.0
			 *
			 * @param {Event} event The event that's being called.
			 *
			 * @returs {void}
			 */
>>>>>>> origin/master
			self.wrap.on( 'click.wpcolorpicker', function( event ) {
				event.stopPropagation();
			});

<<<<<<< HEAD
=======
			/**
			 * @summary Open or close the color picker depending on the class.
			 *
			 * @since 3.5
			 */
>>>>>>> origin/master
			self.toggler.click( function(){
				if ( self.toggler.hasClass( 'wp-picker-open' ) ) {
					self.close();
				} else {
					self.open();
				}
			});

<<<<<<< HEAD
			self.element.change( function( event ) {
				var me = $( this ),
					val = me.val();
				// Empty = clear
				if ( val === '' || val === '#' ) {
					self.toggler.css( 'backgroundColor', '' );
					// fire clear callback if we have one
=======
			/**
			 * @summary Checks if value is empty when changing the color in the color picker.
			 *
			 * Checks if value is empty when changing the color in the color picker.
			 * If so, the background color is cleared.
			 *
			 * @since 3.5.0
			 *
			 * @param {Event} event The event that's being called.
			 *
			 * @returns {void}
			 */
			self.element.change( function( event ) {
				var me = $( this ),
					val = me.val();

				if ( val === '' || val === '#' ) {
					self.toggler.css( 'backgroundColor', '' );
					// Fire clear callback if we have one.
>>>>>>> origin/master
					if ( $.isFunction( self.options.clear ) ) {
						self.options.clear.call( this, event );
					}
				}
			});

<<<<<<< HEAD
			// open a keyboard-focused closed picker with space or enter
			self.toggler.on( 'keyup', function( event ) {
				if ( event.keyCode === 13 || event.keyCode === 32 ) {
					event.preventDefault();
					self.toggler.trigger( 'click' ).next().focus();
				}
			});

=======
			/**
			 * @summary Enables the user to clear or revert the color in the color picker.
			 *
			 * Enables the user to either clear the color in the color picker or revert back to the default color.
			 *
			 * @since 3.5.0
			 *
			 * @param {Event} event The event that's being called.
			 *
			 * @returns {void}
			 */
>>>>>>> origin/master
			self.button.click( function( event ) {
				var me = $( this );
				if ( me.hasClass( 'wp-picker-clear' ) ) {
					self.element.val( '' );
					self.toggler.css( 'backgroundColor', '' );
					if ( $.isFunction( self.options.clear ) ) {
						self.options.clear.call( this, event );
					}
				} else if ( me.hasClass( 'wp-picker-default' ) ) {
					self.element.val( self.options.defaultColor ).change();
				}
			});
		},
<<<<<<< HEAD
		open: function() {
			this.element.show().iris( 'toggle' ).focus();
			this.button.removeClass( 'hidden' );
			this.wrap.addClass( 'wp-picker-active' );
			this.toggler.addClass( 'wp-picker-open' );
			$( 'body' ).trigger( 'click.wpcolorpicker' ).on( 'click.wpcolorpicker', this.close );
		},
		close: function() {
			this.element.hide().iris( 'toggle' );
			this.button.addClass( 'hidden' );
			this.wrap.removeClass( 'wp-picker-active' );
			this.toggler.removeClass( 'wp-picker-open' );
			$( 'body' ).off( 'click.wpcolorpicker', this.close );
		},
		// $("#input").wpColorPicker('color') returns the current color
		// $("#input").wpColorPicker('color', '#bada55') to set
=======
		/**
		 * @summary Opens the color picker dialog.
		 *
		 * @since 3.5.0
		 *
		 * @returns {void}
		 */
		open: function() {
			this.element.iris( 'toggle' );
			this.inputWrapper.removeClass( 'hidden' );
			this.wrap.addClass( 'wp-picker-active' );
			this.toggler
				.addClass( 'wp-picker-open' )
				.attr( 'aria-expanded', 'true' );
			$( 'body' ).trigger( 'click.wpcolorpicker' ).on( 'click.wpcolorpicker', this.close );
		},
		/**
		 * @summary Closes the color picker dialog.
		 *
		 * @since 3.5.0
		 *
		 * @returns {void}
		 */
		close: function() {
			this.element.iris( 'toggle' );
			this.inputWrapper.addClass( 'hidden' );
			this.wrap.removeClass( 'wp-picker-active' );
			this.toggler
				.removeClass( 'wp-picker-open' )
				.attr( 'aria-expanded', 'false' );
			$( 'body' ).off( 'click.wpcolorpicker', this.close );
		},
		/**
		 * @summary Returns iris object or sets new color.
		 *
		 * Returns the iris object if no new color is provided. If a new color is provided, it sets the new color.
		 *
		 * @param newColor {string|*} The new color to use. Can be undefined.
		 *
		 * @since 3.5.0
		 *
		 * @returns {string} The element's color
		 */
>>>>>>> origin/master
		color: function( newColor ) {
			if ( newColor === undef ) {
				return this.element.iris( 'option', 'color' );
			}
			this.element.iris( 'option', 'color', newColor );
		},
<<<<<<< HEAD
		//$("#input").wpColorPicker('defaultColor') returns the current default color
		//$("#input").wpColorPicker('defaultColor', newDefaultColor) to set
=======
		/**
		 * @summary Returns iris object or sets new default color.
		 *
		 * Returns the iris object if no new default color is provided.
		 * If a new default color is provided, it sets the new default color.
		 *
		 * @param newDefaultColor {string|*} The new default color to use. Can be undefined.
		 *
		 * @since 3.5.0
		 *
		 * @returns {boolean|string} The element's color.
		 */
>>>>>>> origin/master
		defaultColor: function( newDefaultColor ) {
			if ( newDefaultColor === undef ) {
				return this.options.defaultColor;
			}

			this.options.defaultColor = newDefaultColor;
		}
	};

<<<<<<< HEAD
=======
	// Register the color picker as a widget.
>>>>>>> origin/master
	$.widget( 'wp.wpColorPicker', ColorPicker );
}( jQuery ) );
