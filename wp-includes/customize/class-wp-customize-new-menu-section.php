<?php
/**
 * Customize API: WP_Customize_New_Menu_Section class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
<<<<<<< HEAD
=======
 * @deprecated 4.9.0 This file is no longer used as of the menu creation UX introduced in #40104.
>>>>>>> origin/master
 */

/**
 * Customize Menu Section Class
 *
<<<<<<< HEAD
 * Implements the new-menu-ui toggle button instead of a regular section.
 *
 * @since 4.3.0
=======
 * @since 4.3.0
 * @deprecated 4.9.0 This class is no longer used as of the menu creation UX introduced in #40104.
>>>>>>> origin/master
 *
 * @see WP_Customize_Section
 */
class WP_Customize_New_Menu_Section extends WP_Customize_Section {

	/**
	 * Control type.
	 *
	 * @since 4.3.0
<<<<<<< HEAD
	 * @access public
=======
>>>>>>> origin/master
	 * @var string
	 */
	public $type = 'new_menu';

	/**
<<<<<<< HEAD
	 * Render the section, and the controls that have been added to it.
	 *
	 * @since 4.3.0
	 * @access protected
=======
	 * Constructor.
	 *
	 * Any supplied $args override class property defaults.
	 *
	 * @since 4.9.0
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      An specific ID of the section.
	 * @param array                $args    Section arguments.
	 */
	public function __construct( WP_Customize_Manager $manager, $id, array $args = array() ) {
		_deprecated_file( basename( __FILE__ ), '4.9.0' ); // @todo Move this outside of class in 5.0, and remove its require_once() from class-wp-customize-section.php. See #42364.
		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Render the section, and the controls that have been added to it.
	 *
	 * @since 4.3.0
>>>>>>> origin/master
	 */
	protected function render() {
		?>
		<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="accordion-section-new-menu">
			<button type="button" class="button add-new-menu-item add-menu-toggle" aria-expanded="false">
				<?php echo esc_html( $this->title ); ?>
			</button>
			<ul class="new-menu-section-content"></ul>
		</li>
		<?php
	}
}
