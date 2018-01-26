<?php

/*
 * Autoloader
 */
<<<<<<< HEAD
require_once( TYPES_ABSPATH . '/library/toolset/autoloader/autoloader.php' );

$autoloader = Toolset_Autoloader::get_instance();

$autoloader->add_path( 'Toolset', TYPES_ABSPATH . '/library/toolset' );
=======
require_once( TYPES_ABSPATH . '/vendor/toolset/autoloader/autoloader.php' );

$autoloader = Toolset_Autoloader::get_instance();

$autoloader->add_path( 'Toolset', TYPES_ABSPATH . '/vendor/toolset' );
>>>>>>> origin/master


/*
 * Load old Types
 */
if( ! defined( 'WPCF_RELPATH' ) ) {
<<<<<<< HEAD
	define( 'WPCF_RELPATH', TYPES_RELPATH . '/library/toolset/types' );
}

if( ! defined( 'WPCF_EMBEDDED_TOOLSET_ABSPATH' ) ) {
	define( 'WPCF_EMBEDDED_TOOLSET_ABSPATH', TYPES_ABSPATH . '/library/toolset' );
}

if( ! defined( 'WPCF_EMBEDDED_TOOLSET_RELPATH') ) {
	define( 'WPCF_EMBEDDED_TOOLSET_RELPATH', TYPES_RELPATH . '/library/toolset' );
}

if( ! defined( 'WPTOOLSET_COMMON_PATH' ) ) {
	define( 'WPTOOLSET_COMMON_PATH', TYPES_ABSPATH . '/library/toolset/toolset-common' );
=======
	define( 'WPCF_RELPATH', TYPES_RELPATH . '/vendor/toolset/types' );
}

if( ! defined( 'WPCF_EMBEDDED_TOOLSET_ABSPATH' ) ) {
	define( 'WPCF_EMBEDDED_TOOLSET_ABSPATH', TYPES_ABSPATH . '/vendor/toolset' );
}

if( ! defined( 'WPCF_EMBEDDED_TOOLSET_RELPATH') ) {
	define( 'WPCF_EMBEDDED_TOOLSET_RELPATH', TYPES_RELPATH . '/vendor/toolset' );
}

if( ! defined( 'WPTOOLSET_COMMON_PATH' ) ) {
	define( 'WPTOOLSET_COMMON_PATH', TYPES_ABSPATH . '/vendor/toolset/toolset-common' );
>>>>>>> origin/master
}

if ( !defined( 'EDITOR_ADDON_RELPATH' ) ) {
	define( 'EDITOR_ADDON_RELPATH', WPCF_EMBEDDED_TOOLSET_RELPATH . '/toolset-common/visual-editor' );
}

// installer
<<<<<<< HEAD
$installer = TYPES_ABSPATH . '/library/otgs/installer/loader.php';
=======
$installer = TYPES_ABSPATH . '/vendor/otgs/installer/loader.php';
>>>>>>> origin/master
if ( file_exists( $installer ) ) {
	/** @noinspection PhpIncludeInspection */
	include_once $installer;
	if ( function_exists( 'WP_Installer_Setup' ) ) {
		WP_Installer_Setup(
			$wp_installer_instance,
			array(
				'plugins_install_tab' => '1',
				'repositories_include' => array('toolset', 'wpml')
			)
		);
	}
}


// Get new functions.php
require_once( dirname( __FILE__ ) . '/functions.php' );

// Initialize legacy code
<<<<<<< HEAD
require_once( dirname( __FILE__ ) . '/../library/toolset/types/wpcf.php' );
=======
require_once( dirname( __FILE__ ) . '/../vendor/toolset/types/wpcf.php' );
>>>>>>> origin/master

// Public API
require_once( dirname( __FILE__ ) . '/controllers/main.php' );

// Jumpstart new Types
Types_Main::initialize();