<?php
/**
 * Customize API: WP_Customize_New_Menu_Control class
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
 * Customize control class for new menus.
 *
 * @since 4.3.0
<<<<<<< HEAD
=======
 * @deprecated 4.9.0 This class is no longer used as of the menu creation UX introduced in #40104.
>>>>>>> origin/master
 *
 * @see WP_Customize_Control
 */
class WP_Customize_New_Menu_Control extends WP_Customize_Control {

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
	 * Render the control's content.
	 *
	 * @since 4.3.0
	 * @access public
=======
	 * Constructor.
	 *
	 * @since 4.9.0
	 *
	 * @param WP_Customize_Manager $manager Manager.
	 * @param string               $id      ID.
	 * @param array                $args    Args.
	 */
	public function __construct( WP_Customize_Manager $manager, $id, array $args = array() ) {
		_deprecated_file( basename( __FILE__ ), '4.9.0' ); // @todo Move this outside of class in 5.0, and remove its require_once() from class-wp-customize-control.php. See #42364.
		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Render the control's content.
	 *
	 * @since 4.3.0
>>>>>>> origin/master
	 */
	public function render_content() {
		?>
		<button type="button" class="button button-primary" id="create-new-menu-submit"><?php _e( 'Create Menu' ); ?></button>
		<span class="spinner"></span>
		<?php
	}
}
