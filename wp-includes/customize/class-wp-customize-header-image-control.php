<?php
/**
 * Customize API: WP_Customize_Header_Image_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */

/**
 * Customize Header Image Control class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Image_Control
 */
class WP_Customize_Header_Image_Control extends WP_Customize_Image_Control {
	public $type = 'header';
	public $uploaded_headers;
	public $default_headers;

	/**
	 * Constructor.
	 *
	 * @since 3.4.0
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 */
	public function __construct( $manager ) {
		parent::__construct( $manager, 'header_image', array(
			'label'    => __( 'Header Image' ),
			'settings' => array(
				'default' => 'header_image',
				'data'    => 'header_image_data',
			),
			'section'  => 'header_image',
			'removed'  => 'remove-header',
			'get_url'  => 'get_header_image',
		) );

	}

	/**
<<<<<<< HEAD
	 * @access public
=======
>>>>>>> origin/master
	 */
	public function enqueue() {
		wp_enqueue_media();
		wp_enqueue_script( 'customize-views' );

		$this->prepare_control();

		wp_localize_script( 'customize-views', '_wpCustomizeHeader', array(
			'data' => array(
				'width' => absint( get_theme_support( 'custom-header', 'width' ) ),
				'height' => absint( get_theme_support( 'custom-header', 'height' ) ),
				'flex-width' => absint( get_theme_support( 'custom-header', 'flex-width' ) ),
				'flex-height' => absint( get_theme_support( 'custom-header', 'flex-height' ) ),
				'currentImgSrc' => $this->get_current_image_src(),
			),
			'nonces' => array(
				'add' => wp_create_nonce( 'header-add' ),
				'remove' => wp_create_nonce( 'header-remove' ),
			),
			'uploads' => $this->uploaded_headers,
			'defaults' => $this->default_headers
		) );

		parent::enqueue();
	}

	/**
	 *
	 * @global Custom_Image_Header $custom_image_header
	 */
	public function prepare_control() {
		global $custom_image_header;
		if ( empty( $custom_image_header ) ) {
			return;
		}

<<<<<<< HEAD
=======
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'print_header_image_template' ) );

>>>>>>> origin/master
		// Process default headers and uploaded headers.
		$custom_image_header->process_default_headers();
		$this->default_headers = $custom_image_header->get_default_header_images();
		$this->uploaded_headers = $custom_image_header->get_uploaded_header_images();
	}

	/**
<<<<<<< HEAD
	 * @access public
=======
>>>>>>> origin/master
	 */
	public function print_header_image_template() {
		?>
		<script type="text/template" id="tmpl-header-choice">
			<# if (data.random) { #>
			<button type="button" class="button display-options random">
				<span class="dashicons dashicons-randomize dice"></span>
				<# if ( data.type === 'uploaded' ) { #>
					<?php _e( 'Randomize uploaded headers' ); ?>
				<# } else if ( data.type === 'default' ) { #>
					<?php _e( 'Randomize suggested headers' ); ?>
				<# } #>
			</button>

			<# } else { #>

			<button type="button" class="choice thumbnail"
				data-customize-image-value="{{{data.header.url}}}"
				data-customize-header-image-data="{{JSON.stringify(data.header)}}">
				<span class="screen-reader-text"><?php _e( 'Set image' ); ?></span>
				<img src="{{{data.header.thumbnail_url}}}" alt="{{{data.header.alt_text || data.header.description}}}">
			</button>

			<# if ( data.type === 'uploaded' ) { #>
				<button type="button" class="dashicons dashicons-no close"><span class="screen-reader-text"><?php _e( 'Remove image' ); ?></span></button>
			<# } #>

			<# } #>
		</script>

		<script type="text/template" id="tmpl-header-current">
			<# if (data.choice) { #>
				<# if (data.random) { #>

			<div class="placeholder">
				<span class="dashicons dashicons-randomize dice"></span>
				<# if ( data.type === 'uploaded' ) { #>
					<?php _e( 'Randomizing uploaded headers' ); ?>
				<# } else if ( data.type === 'default' ) { #>
					<?php _e( 'Randomizing suggested headers' ); ?>
				<# } #>
			</div>

				<# } else { #>

			<img src="{{{data.header.thumbnail_url}}}" alt="{{{data.header.alt_text || data.header.description}}}" />

				<# } #>
			<# } else { #>

			<div class="placeholder">
				<?php _e( 'No image set' ); ?>
			</div>

			<# } #>
		</script>
		<?php
	}

	/**
	 * @return string|void
	 */
	public function get_current_image_src() {
		$src = $this->value();
		if ( isset( $this->get_url ) ) {
			$src = call_user_func( $this->get_url, $src );
			return $src;
		}
	}

	/**
<<<<<<< HEAD
	 * @access public
	 */
	public function render_content() {
		$this->print_header_image_template();
=======
	 */
	public function render_content() {
>>>>>>> origin/master
		$visibility = $this->get_current_image_src() ? '' : ' style="display:none" ';
		$width = absint( get_theme_support( 'custom-header', 'width' ) );
		$height = absint( get_theme_support( 'custom-header', 'height' ) );
		?>
		<div class="customize-control-content">
			<?php if ( current_theme_supports( 'custom-header', 'video' ) ) {
				echo '<span class="customize-control-title">' . $this->label . '</span>';
			} ?>
			<div class="customize-control-notifications-container"></div>
			<p class="customizer-section-intro customize-control-description">
				<?php
				if ( current_theme_supports( 'custom-header', 'video' ) ) {
<<<<<<< HEAD
					_e( 'While you can crop images to your liking after clicking <strong>Add new image</strong>, we recommend matching the size of your video.' );
				} elseif ( $width && $height ) {
					/* translators: %s: header size in pixels */
					printf( __( 'While you can crop images to your liking after clicking <strong>Add new image</strong>, your theme recommends a header size of %s pixels.' ),
=======
					_e( 'Click &#8220;Add new image&#8221; to upload an image file from your computer. Your theme works best with an image that matches the size of your video &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' );
				} elseif ( $width && $height ) {
					/* translators: %s: header size in pixels */
					printf( __( 'Click &#8220;Add new image&#8221; to upload an image file from your computer. Your theme works best with an image with a header size of %s pixels &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' ),
>>>>>>> origin/master
						sprintf( '<strong>%s &times; %s</strong>', $width, $height )
					);
				} elseif ( $width ) {
					/* translators: %s: header width in pixels */
<<<<<<< HEAD
					printf( __( 'While you can crop images to your liking after clicking <strong>Add new image</strong>, your theme recommends a header width of %s pixels.' ),
=======
					printf( __( 'Click &#8220;Add new image&#8221; to upload an image file from your computer. Your theme works best with an image with a header width of %s pixels &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' ),
>>>>>>> origin/master
						sprintf( '<strong>%s</strong>', $width )
					);
				} else {
					/* translators: %s: header height in pixels */
<<<<<<< HEAD
					printf( __( 'While you can crop images to your liking after clicking <strong>Add new image</strong>, your theme recommends a header height of %s pixels.' ),
=======
					printf( __( 'Click &#8220;Add new image&#8221; to upload an image file from your computer. Your theme works best with an image with a header height of %s pixels &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' ),
>>>>>>> origin/master
						sprintf( '<strong>%s</strong>', $height )
					);
				}
				?>
			</p>
			<div class="current">
				<label for="header_image-button">
					<span class="customize-control-title">
						<?php _e( 'Current header' ); ?>
					</span>
				</label>
				<div class="container">
				</div>
			</div>
			<div class="actions">
				<?php if ( current_user_can( 'upload_files' ) ): ?>
				<button type="button"<?php echo $visibility; ?> class="button remove" aria-label="<?php esc_attr_e( 'Hide header image' ); ?>"><?php _e( 'Hide image' ); ?></button>
<<<<<<< HEAD
				<button type="button" class="button new" id="header_image-button"  aria-label="<?php esc_attr_e( 'Add new header image' ); ?>"><?php _e( 'Add new image' ); ?></button>
				<div style="clear:both"></div>
=======
				<button type="button" class="button new" id="header_image-button" aria-label="<?php esc_attr_e( 'Add new header image' ); ?>"><?php _e( 'Add new image' ); ?></button>
>>>>>>> origin/master
				<?php endif; ?>
			</div>
			<div class="choices">
				<span class="customize-control-title header-previously-uploaded">
					<?php _ex( 'Previously uploaded', 'custom headers' ); ?>
				</span>
				<div class="uploaded">
					<div class="list">
					</div>
				</div>
				<span class="customize-control-title header-default">
					<?php _ex( 'Suggested', 'custom headers' ); ?>
				</span>
				<div class="default">
					<div class="list">
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
