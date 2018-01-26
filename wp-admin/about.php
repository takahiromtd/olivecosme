<?php
/**
 * About This Version administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

<<<<<<< HEAD
if ( ! wp_is_mobile() ) {
	wp_enqueue_style( 'wp-mediaelement' );
	wp_enqueue_script( 'wp-mediaelement' );
	wp_localize_script( 'mediaelement', '_wpmejsSettings', array(
		'pluginPath'        => includes_url( 'js/mediaelement/', 'relative' ),
		'pauseOtherPlayers' => '',
	) );
}

$video_url = 'https://videopress.com/embed/AHz0Ca46?hd=true';
$lang_code = str_replace( '_', '-', get_user_locale() );
list( $lang_code ) = explode( '-', $lang_code );
if ( 'en' !== $lang_code ) {
	$video_url = add_query_arg( 'defaultLangCode', $lang_code, $video_url );
}
=======
wp_enqueue_script( 'underscore' );
>>>>>>> origin/master

$title = __( 'About' );

list( $display_version ) = explode( '-', get_bloginfo( 'version' ) );

include( ABSPATH . 'wp-admin/admin-header.php' );
?>
<<<<<<< HEAD
	<div class="wrap about-wrap">
		<h1><?php printf( __( 'Welcome to WordPress&nbsp;%s' ), $display_version ); ?></h1>

		<p class="about-text"><?php printf( __( 'Thank you for updating to the latest version! WordPress %s helps you get your site set up the way you want it.' ), $display_version ); ?></p>
=======
	<div class="wrap about-wrap full-width-layout">
		<h1><?php printf( __( 'Welcome to WordPress&nbsp;%s' ), $display_version ); ?></h1>

		<p class="about-text"><?php printf( __( 'Thank you for updating to the latest version! WordPress %s will smooth your design workflow and keep you safe from coding errors.' ), $display_version ); ?></p>
>>>>>>> origin/master
		<div class="wp-badge"><?php printf( __( 'Version %s' ), $display_version ); ?></div>

		<h2 class="nav-tab-wrapper wp-clearfix">
			<a href="about.php" class="nav-tab nav-tab-active"><?php _e( 'What&#8217;s New' ); ?></a>
			<a href="credits.php" class="nav-tab"><?php _e( 'Credits' ); ?></a>
			<a href="freedoms.php" class="nav-tab"><?php _e( 'Freedoms' ); ?></a>
<<<<<<< HEAD
=======
			<a href="privacy.php" class="nav-tab"><?php _e( 'Privacy' ); ?></a>
>>>>>>> origin/master
		</h2>

		<div class="changelog point-releases">
			<h3><?php _e( 'Maintenance and Security Releases' ); ?></h3>
<<<<<<< HEAD
			<p><?php printf( _n( '<strong>Version %1$s</strong> addressed %2$s bug.',
					'<strong>Version %1$s</strong> addressed %2$s bugs.', 47 ), '4.7.4', number_format_i18n( 47 ) ); ?>
				<?php printf( __( 'For more information, see <a href="%s">the release notes</a>.' ), 'https://codex.wordpress.org/Version_4.7.4' ); ?>
			</p>
			<p><?php printf( _n( '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
					'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.', 39 ), '4.7.3', number_format_i18n( 39 ) ); ?>
				<?php printf( __( 'For more information, see <a href="%s">the release notes</a>.' ), 'https://codex.wordpress.org/Version_4.7.3' ); ?>
			</p>
			<p><?php printf( __( '<strong>Version %s</strong> addressed some security issues.' ), '4.7.2' ); ?>
				<?php printf( __( 'For more information, see <a href="%s">the release notes</a>.' ), 'https://codex.wordpress.org/Version_4.7.2' ); ?>
			</p>
			<p><?php printf( _n( '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
					'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.', 62 ), '4.7.1', number_format_i18n( 62 ) ); ?>
				<?php printf( __( 'For more information, see <a href="%s">the release notes</a>.' ), 'https://codex.wordpress.org/Version_4.7.1' ); ?>
			</p>
		</div>

		<div class="headline-feature feature-video">
			<iframe width="1050" height="591" src="<?php echo esc_url( $video_url ); ?>" frameborder="0" allowfullscreen></iframe>
			<script src="https://videopress.com/videopress-iframe.js"></script>
		</div>

		<hr />

		<div class="feature-section one-col">
			<h2><?php _e( 'Presenting Twenty Seventeen' ); ?></h2>
			<p class="lead-description"><?php _e( 'A brand new default theme brings your site to life with immersive featured images and video headers.' ); ?></p>
			<picture>
				<source media="(min-width: 450px)" srcset="https://s.w.org/images/core/4.7/twenty-seventeen-1600.jpg?v2 1600w, https://s.w.org/images/core/4.7/twenty-seventeen-493.jpg?v2 493w, https://s.w.org/images/core/4.7/twenty-seventeen-663.jpg?v2 663w, https://s.w.org/images/core/4.7/twenty-seventeen-804.jpg?v2 804w, https://s.w.org/images/core/4.7/twenty-seventeen-928.jpg?v2 928w, https://s.w.org/images/core/4.7/twenty-seventeen-1058.jpg?v2 1058w, https://s.w.org/images/core/4.7/twenty-seventeen-1173.jpg?v2 1173w, https://s.w.org/images/core/4.7/twenty-seventeen-1299.jpg?v2 1299w, https://s.w.org/images/core/4.7/twenty-seventeen-1410.jpg?v2 1410w, https://s.w.org/images/core/4.7/twenty-seventeen-1513.jpg?v2 1513w, https://s.w.org/images/core/4.7/twenty-seventeen-1595.jpg?v2 1595w" sizes="(max-width: 500px) calc(100vw - 40px), (max-width: 782px) calc(100vw - 70px), (max-width: 959px) calc(100vw - 116px), (max-width: 1290px) calc(100vw - 240px), 1050px">
				<source srcset="https://s.w.org/images/core/4.7/twenty-seventeen-mobile-564.jpg?v2 564w, https://s.w.org/images/core/4.7/twenty-seventeen-mobile-280.jpg?v2 280w, https://s.w.org/images/core/4.7/twenty-seventeen-mobile-372.jpg?v2 372w, https://s.w.org/images/core/4.7/twenty-seventeen-mobile-454.jpg?v2 454w, https://s.w.org/images/core/4.7/twenty-seventeen-mobile-541.jpg?v2 541w" sizes="calc(100vw - 40px)">
				<img src="https://s.w.org/images/core/4.7/twenty-seventeen-1600.jpg?v2" srcset="https://s.w.org/images/core/4.7/twenty-seventeen-1600.jpg?v2 1600w, https://s.w.org/images/core/4.7/twenty-seventeen-280.jpg?v2 280w, https://s.w.org/images/core/4.7/twenty-seventeen-493.jpg?v2 493w, https://s.w.org/images/core/4.7/twenty-seventeen-663.jpg?v2 663w, https://s.w.org/images/core/4.7/twenty-seventeen-804.jpg?v2 804w, https://s.w.org/images/core/4.7/twenty-seventeen-928.jpg?v2 928w, https://s.w.org/images/core/4.7/twenty-seventeen-1058.jpg?v2 1058w, https://s.w.org/images/core/4.7/twenty-seventeen-1173.jpg?v2 1173w, https://s.w.org/images/core/4.7/twenty-seventeen-1299.jpg?v2 1299w, https://s.w.org/images/core/4.7/twenty-seventeen-1410.jpg?v2 1410w, https://s.w.org/images/core/4.7/twenty-seventeen-1513.jpg?v2 1513w, https://s.w.org/images/core/4.7/twenty-seventeen-1595.jpg?v2 1595w" sizes="(max-width: 500px) calc(100vw - 40px), (max-width: 782px) calc(100vw - 70px), (max-width: 959px) calc(100vw - 116px), (max-width: 1290px) calc(100vw - 240px), 1050px" alt="" />
			</picture>
			<p><?php _e( 'Twenty Seventeen focuses on business sites and features a customizable front page with multiple sections. Personalize it with widgets, navigation, social menus, a logo, custom colors, and more. Our default theme for 2017 works great in many languages, on any device, and for a wide range of users.' ); ?></p>
		</div>

		<hr />

		<div class="feature-section one-col">
			<h2><?php _e( 'Your Site, Your Way' ); ?></h2>
			<p class="lead-description"><?php _e( 'WordPress 4.7 adds new features to the customizer to help take you through the initial setup of a theme, with non-destructive live previews of all your changes in one uninterrupted workflow.' ); ?></p>
		</div>

		<div class="feature-section two-col">
			<div class="col">
				<h3><?php _e( 'Theme Starter Content' ); ?></h3>
				<p><?php _e( 'To help give you a solid base to build from, individual themes can provide starter content that appears when you go to customize your brand new site. This can range from placing a business information widget in the best location to providing a sample menu with social icon links to a static front page complete with beautiful images. Don&#8217;t worry - nothing new will appear on the live site until you&#8217;re ready to save and publish your initial theme setup.' ); ?></p>
			</div>
			<div class="col">
				<?php
				echo wp_video_shortcode( array(
					'mp4'      => 'https://s.w.org/images/core/4.7/starter-content-v1.mp4',
					'poster'   => 'https://s.w.org/images/core/4.7/starter-content.jpg?v2',
					'width'    => 1140,
					'height'   => 624,
					// 'class'    => 'wp-video-shortcode feature-video',
				) );
				?>
			</div>
		</div>

		<div class="feature-section two-col">
			<div class="col">
				<h3><?php _e( 'Edit Shortcuts' ); ?></h3>
				<?php
				echo wp_video_shortcode( array(
					'mp4'      => 'https://s.w.org/images/core/4.7/edit-shortcuts-v1.mp4',
					'poster'   => 'https://s.w.org/images/core/4.7/edit-shortcuts.jpg?v2',
					'width'    => 2520,
					'height'   => 1454,
					// 'class'    => 'wp-video-shortcode feature-video',
				) );
				?>
				<p><?php _e( 'Visible icons appear to show you which parts of your site can be customized while live previewing. Click on a shortcut and get straight to editing. Paired with starter content, getting started with customizing your site is faster than ever.' );?></p>
			</div>
			<div class="col">
				<h3><?php _e( 'Video Headers' ); ?></h3>
				<?php
				echo wp_video_shortcode( array(
					'mp4'      => 'https://s.w.org/images/core/4.7/header-video-v1.mp4',
					'poster'   => 'https://s.w.org/images/core/4.7/header-video.jpg?v2',
					'width'    => 2520,
					'height'   => 1454,
					// 'class'    => 'wp-video-shortcode feature-video',
				) );
				?>
				<p><?php _e( 'Sometimes a big atmospheric video as a moving header image is just what you need to showcase your wares; go ahead and try it out with Twenty Seventeen. Need some video inspiration? Try searching for sites with video headers available for download and use.' ); ?></p>
			</div>
		</div>

		<div class="feature-section two-col">
			<div class="col">
				<h3><?php _e( 'Smoother Menu Building' ); ?></h3>
				<img src="https://s.w.org/images/core/4.7/nav-menus-760.jpg?v2" srcset="https://s.w.org/images/core/4.7/nav-menus-760.jpg?v2 760w, https://s.w.org/images/core/4.7/nav-menus-280.jpg?v2 280w, https://s.w.org/images/core/4.7/nav-menus-536.jpg?v2 536w, https://s.w.org/images/core/4.7/nav-menus-745.jpg?v2 745w" sizes="(max-width: 500px) calc(100vw - 40px), (max-width: 781px) calc((100vw - 70px) * .466), (max-width: 959px) calc((100vw - 116px) * .469), (max-width: 1290px) calc((100vw - 240px) * .472), 496px" alt="" />
				<p><?php _e( 'Many menus for sites contain links to the pages of your site, but what happens when you don&#8217;t have any pages yet? Now you can add new pages while building menus instead of leaving the customizer and abandoning your changes. Once you&#8217;ve published your customizations, you&#8217;ll have new pages ready for you to fill with content.' );?></p>
			</div>
			<div class="col">
				<h3><?php _e( 'Custom CSS' ); ?></h3>
				<img src="https://s.w.org/images/core/4.7/css-760.jpg?v2" srcset="https://s.w.org/images/core/4.7/css-760.jpg?v2 760w, https://s.w.org/images/core/4.7/css-280.jpg?v2 280w, https://s.w.org/images/core/4.7/css-547.jpg?v2 547w" sizes="(max-width: 500px) calc(100vw - 40px), (max-width: 781px) calc((100vw - 70px) * .466), (max-width: 959px) calc((100vw - 116px) * .469), (max-width: 1290px) calc((100vw - 240px) * .472), 496px" alt="" />
				<p><?php _e( 'Sometimes you just need a few visual tweaks to make your site perfect. WordPress 4.7 allows you to add custom CSS and instantly see how your changes affect your site. The live preview allows you to work quickly without page refreshes slowing you down.' ); ?></p>
			</div>
		</div>

		<hr />

		<div class="feature-section no-heading two-col">
			<div class="col">
				<h3><?php _e( 'PDF Thumbnail Previews' ); ?></h3>
				<img src="https://s.w.org/images/core/4.7/pdf-760.jpg?v2" srcset="https://s.w.org/images/core/4.7/pdf-760.jpg?v2 760w, https://s.w.org/images/core/4.7/pdf-280.jpg?v2 280w, https://s.w.org/images/core/4.7/pdf-412.jpg?v2 412w, https://s.w.org/images/core/4.7/pdf-516.jpg?v2 516w, https://s.w.org/images/core/4.7/pdf-615.jpg?v2 615w, https://s.w.org/images/core/4.7/pdf-716.jpg?v2 716w" sizes="(max-width: 500px) calc(100vw - 40px), (max-width: 781px) calc((100vw - 70px) * .466), (max-width: 959px) calc((100vw - 116px) * .469), (max-width: 1290px) calc((100vw - 240px) * .472), 496px" alt="" />
				<p><?php _e( 'Managing your document collection is easier with WordPress 4.7. Uploading PDFs will generate thumbnail images so you can more easily distinguish between all your documents.' ); ?></p>
			</div>
			<div class="col">
				<h3><?php _e( 'Dashboard in your language' ); ?></h3>
				<img src="https://s.w.org/images/core/4.7/language-760.jpg?v2" srcset="https://s.w.org/images/core/4.7/language-760.jpg?v2 760w, https://s.w.org/images/core/4.7/language-280.jpg?v2 280w, https://s.w.org/images/core/4.7/language-568.jpg?v2 568w" sizes="(max-width: 500px) calc(100vw - 40px), (max-width: 781px) calc((100vw - 70px) * .466), (max-width: 959px) calc((100vw - 116px) * .469), (max-width: 1290px) calc((100vw - 240px) * .472), 496px" alt="" />
				<p><?php _e( 'Just because your site is in one language doesn&#8217;t mean that everybody helping manage it prefers that language for their admin. Add more languages to your site and a user language option will show up in your user&#8217;s profiles.' );?></p>
			</div>
		</div>

		<hr />

		<div class="rest-api feature-section one-col">
			<h2><?php _e( 'Introducing REST API Content Endpoints' ); ?></h2>
			<p class="lead-description"><?php _e( 'WordPress 4.7 comes with REST API endpoints for posts, comments, terms, users, meta, and settings.' ); ?></p>
			<img src="https://s.w.org/images/core/4.7/api-1559.jpg?v2" srcset="https://s.w.org/images/core/4.7/api-2100.jpg?v2 2100w, https://s.w.org/images/core/4.7/api-280.jpg?v2 280w, https://s.w.org/images/core/4.7/api-1034.jpg?v2 1034w, https://s.w.org/images/core/4.7/api-1559.jpg?v2 1559w, https://s.w.org/images/core/4.7/api-2032.jpg?v2 2032w" sizes="(max-width: 500px) calc(100vw - 40px), (max-width: 782px) calc(100vw - 70px), (max-width: 959px) calc(100vw - 116px), (max-width: 1290px) calc(100vw - 240px), 1050px" alt="" />
			<p><?php
				printf(
					/* translators: %s: https://developer.wordpress.org/rest-api/  */
					__( 'Content endpoints provide machine-readable external access to your WordPress site with a clear, standards-driven interface, paving the way for new and innovative methods of interacting with sites through plugins, themes, apps, and beyond. Ready to get started with development? <a href="%s">Check out the REST API reference.</a>' ),
					'https://developer.wordpress.org/rest-api/reference/'
				);
			?></p>
=======
			<p>
				<?php
				printf(
					/* translators: 1: WordPress version number, 2: plural number of bugs. */
					_n(
						'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
						'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.',
						22
					),
					'4.9.2',
					number_format_i18n( 22 )
				);
				?>
				<?php
				/* translators: %s: Codex URL */
				printf( __( 'For more information, see <a href="%s">the release notes</a>.' ), 'https://codex.wordpress.org/Version_4.9.2' );
				?>
			</p>
			<p>
				<?php
				printf(
					/* translators: 1: WordPress version number, 2: plural number of bugs. */
					_n(
						'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
						'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.',
						11
					),
					'4.9.1',
					number_format_i18n( 11 )
				);
				?>
				<?php
				/* translators: %s: Codex URL */
				printf( __( 'For more information, see <a href="%s">the release notes</a>.' ), 'https://codex.wordpress.org/Version_4.9.1' );
				?>
			</p>
		</div>

		<div class="feature-section one-col">
			<div class="col">
				<h2>
					<?php
						printf(
							/* translators: %s: party popper emoji */
							__( 'Major Customizer Improvements, Code Error Checking, and More! %s' ),
							'&#x1F389'
						);
					?>
				</h2>
				<p><?php _e( 'Welcome to an improved Customizer workflow with design drafts, locking, scheduling, and preview links. What&#8217;s more, code syntax highlighting and error checking will make for a clean and smooth site building experience. Finally, if all that wasn&#8217;t pretty great, we&#8217;ve got a great new Gallery widget and improvements to theme browsing and switching.' ); ?></p>
			</div>
		</div>

		<div class="inline-svg full-width">
			<picture>
				<source media="(max-width: 500px)" srcset="<?php echo 'https://s.w.org/images/core/4.9/banner-mobile.svg'; ?>">
				<img src="https://s.w.org/images/core/4.9/banner.svg" alt="">
			</picture>
		</div>

		<div class="floating-header-section">
			<div class="section-header">
				<h2><?php _e( 'Customizer Workflow Improved' ); ?></h2>
			</div>

			<div class="section-content">
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/draft-and-schedule.svg" alt="">
					</div>
					<h3><?php _e( 'Draft and Schedule Site Design Customizations' ); ?></h3>
					<p><?php _e( 'Yes, you read that right. Just like you can draft and revise posts and schedule them to go live on the date and time you choose, you can now tinker with your site&#8217;s design and schedule those design changes to go live as you please.' ); ?></p>
				</div>
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/design-preview-links.svg" alt="">
					</div>
					<h3><?php _e( 'Collaborate with Design Preview Links' ); ?></h3>
					<p><?php _e( 'Need to get some feedback on proposed site design changes? WordPress 4.9 gives you a preview link you can send to your team and customers so that you can collect and integrate feedback before you schedule the changes to go live. Can we say collaboration&#43;&#43;?' ); ?></p>
				</div>
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/locking.svg" alt="">
					</div>
					<h3><?php _e( 'Design Locking To Guard Your Changes' ); ?></h3>
					<p><?php _e( 'Ever encounter a scenario where two designers walk into a project and designer A overrides designer B&#8217;s beautiful changes? WordPress 4.9&#8217;s design lock feature (similar to post locking) secures your draft design so that no one can make changes to it or erase all your hard work.' );?></p>
				</div>
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/prompt.svg" alt="">
					</div>
					<h3><?php _e( 'A Prompt to Protect Your Work' ); ?></h3>
					<p><?php _e( 'Were you lured away from your desk before you saved your new draft design? Fear not, when you return, WordPress 4.9 will politely ask whether or not you&#8217;d like to save your unsaved changes.' ); ?></p>
				</div>
			</div>
		</div>

		<div class="floating-header-section">
			<div class="section-header">
				<h2><?php _e( 'Coding Enhancements' ); ?></h2>
			</div>

			<div class="section-content">
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/syntax-highlighting.svg" alt="">
					</div>
					<h3><?php _e( 'Syntax Highlighting and Error Checking? Yes, Please!' ); ?></h3>
					<p><?php _e( 'You&#8217;ve got a display problem but can&#8217;t quite figure out exactly what went wrong in the CSS you lovingly wrote. With syntax highlighting and error checking for CSS editing and the Custom HTML widget introduced in WordPress 4.8.1, you&#8217;ll pinpoint coding errors quickly. Practically guaranteed to help you scan code more easily and suss out and fix code errors quickly.' ); ?></p>
				</div>
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/sandbox.svg" alt="">
					</div>
					<h3><?php _e( 'Sandbox for Safety' ); ?></h3>
					<p><?php _e( 'The dreaded white screen. You&#8217;ll avoid it when working on themes and plugin code because WordPress 4.9 will warn you about saving an error. You&#8217;ll sleep better at night.' ); ?></p>
				</div>
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/warning.svg" alt="">
					</div>
					<h3><?php _e( 'Warning: Potential Danger Ahead!' ); ?></h3>
					<p><?php _e( 'When you edit themes and plugins directly, WordPress 4.9 will politely warn you that this is a dangerous practice. It will recommend that you backup your files before saving, so they don&#8217;t get overwritten by the next update. Take the safe route: your future self will thank you. Your team and customers will thank you.' );?></p>
				</div>
			</div>
		</div>

		<div class="floating-header-section">
			<div class="section-header">
				<h2><?php _e( 'Even More Widget Updates' ); ?></h2>
			</div>

			<div class="section-content">
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/gallery-widget.svg" alt="">
					</div>
					<h3><?php _e( 'The New Gallery Widget' ); ?></h3>
					<p><?php _e( 'An incremental improvement to the media changes hatched in WordPress 4.8, you can now add a gallery via widget. Yes!' ); ?></p>
				</div>
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/media-button.svg" alt="">
					</div>
					<h3><?php _e( 'Press a Button, Add Media' ); ?></h3>
					<p><?php _e( 'Want to add media to your text widget? Embed images, video, and audio directly into the widget along with your text, with our simple but useful Add Media button. Woo!' ); ?></p>
				</div>
			</div>
		</div>

		<div class="floating-header-section">
			<div class="section-header">
				<h2><?php _e( 'Site Building Improvements' ); ?></h2>
			</div>

			<div class="section-content">
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/theme-switching.svg" alt="">
					</div>
					<h3><?php _e( 'More Reliable Theme Switching' ); ?></h3>
					<p><?php _e( 'When you switch themes, widgets sometimes think they can just up and move location. Improvements in WordPress 4.9 offer more persistent menu and widget placement when you decide it&#8217;s time for a new theme. Additionally, you can preview installed themes or download, install, and preview new themes right. Nothing says handy like being able to preview before you deploy. ' ); ?></p>
				</div>
				<div class="section-item">
					<div class="inline-svg">
						<img src="https://s.w.org/images/core/4.9/menu-flow.svg" alt="">
					</div>
					<h3><?php _e( 'Better Menu Instructions = Less Confusion' ); ?></h3>
					<p><?php _e( 'Were you confused by the steps to create a new menu? Perhaps no longer! We&#8217;ve ironed out the UX for a smoother menu creation process. Newly updated copy will guide you.' ); ?></p>
				</div>
			</div>
		</div>

		<div class="inline-svg">
			<picture>
				<source media="(max-width: 500px)" srcset="<?php echo 'https://s.w.org/images/core/4.9/gutenberg-mobile.svg'; ?>">
				<img src="https://s.w.org/images/core/4.9/gutenberg.svg" alt="">
			</picture>
		</div>

		<div class="feature-section">
			<h2>
				<?php
					printf(
						/* translators: %s: handshake emoji */
						__( 'Lend a Hand with Gutenberg %s' ),
						'&#x1F91D'
					);
				?>
			</h2>
			<p><?php printf(
				__( 'WordPress is working on a new way to create and control your content and we&#8217;d love to have your help. Interested in being an <a href="%s">early tester</a> or getting involved with the Gutenberg project? <a href="%s">Contribute on GitHub</a>.' ),
				__( 'https://wordpress.org/plugins/gutenberg/' ),
				'https://github.com/WordPress/gutenberg' ); ?></p>
>>>>>>> origin/master
		</div>

		<hr />

		<div class="changelog">
			<h2><?php
				printf(
					/* translators: %s: smiling face with smiling eyes emoji */
<<<<<<< HEAD
					__( 'Even More Developer Happiness %s' ),
=======
					__( 'Developer Happiness %s' ),
>>>>>>> origin/master
					'&#x1F60A'
				);
			?></h2>

<<<<<<< HEAD
			<div class="under-the-hood three-col">
				<div class="col">
					<h3><a href="https://make.wordpress.org/core/2016/11/03/post-type-templates-in-4-7/"><?php _e( 'Post Type Templates' ); ?></a></h3>
					<p><?php _e( 'By opening up the page template functionality to all post types, theme developers have even more flexibility with the WordPress template hierarchy.' ); ?></p>
				</div>
				<div class="col">
					<h3><?php _e( 'More Theme API Goodies' ); ?></h3>
					<p><?php
						printf(
							/* translators: %s: https://make.wordpress.org/core/2016/09/09/new-functions-hooks-and-behaviour-for-theme-developers-in-wordpress-4-7/  */
							__( 'WordPress 4.7 includes <a href="%s">new functions, hooks, and behavior</a> for theme developers.' ),
							'https://make.wordpress.org/core/2016/09/09/new-functions-hooks-and-behaviour-for-theme-developers-in-wordpress-4-7/'
=======
			<div class="under-the-hood two-col">
				<div class="col">
					<h3><a href="https://make.wordpress.org/core/2017/11/01/improvements-to-the-customize-js-api-in-4-9/"><?php _e( 'Customizer JS API Improvements' ); ?></a></h3>
					<p><?php
						printf(
							/* translators: %s: https://make.wordpress.org/core/2017/11/01/improvements-to-the-customize-js-api-in-4-9/  */
							__( 'We&#8217;ve made numerous improvements to the Customizer JS API in WordPress 4.9, eliminating many pain points and making it just as easy to work with as the PHP API. There are also new base control templates, a date/time control, and section/panel/global notifications to name a few. <a href="%s">Check out the full list.</a>' ),
							'https://make.wordpress.org/core/2017/11/01/improvements-to-the-customize-js-api-in-4-9/'
>>>>>>> origin/master
						);
					?></p>
				</div>
				<div class="col">
<<<<<<< HEAD
					<h3><a href="https://make.wordpress.org/core/2016/10/04/custom-bulk-actions/"><?php _e( 'Custom Bulk Actions' ); ?></a></h3>
					<p><?php _e( 'List tables, now with more than bulk edit and delete.' ); ?></p>
				</div>
			</div>

			<div class="under-the-hood three-col">
				<div class="col">
					<h3><a href="https://make.wordpress.org/core/2016/09/08/wp_hook-next-generation-actions-and-filters/"><code>WP_Hook</code></a></h3>
					<p><?php
						printf(
							/* translators: %s: https://make.wordpress.org/core/2016/09/08/wp_hook-next-generation-actions-and-filters/  */
							__( 'The code that lies beneath actions and filters has been overhauled and modernized, fixing bugs along the way.' ),
							'https://make.wordpress.org/core/2016/09/08/wp_hook-next-generation-actions-and-filters/'
						);
					?></p>
				</div>
				<div class="col">
					<h3><?php _e( 'Settings Registration API' ); ?></h3>
					<p><?php
						printf(
							/* translators: 1: register_setting(), 2: https://make.wordpress.org/core/2016/10/26/registering-your-settings-in-wordpress-4-7/ */
							__( '%1$s <a href="%2$s">has been enhanced</a> to include type, description, and REST API visibility.' ),
							'<code>register_setting()</code>',
							'https://make.wordpress.org/core/2016/10/26/registering-your-settings-in-wordpress-4-7/'
						);
					?></p>
				</div>
				<div class="col">
					<h3><a href="https://make.wordpress.org/core/2016/10/12/customize-changesets-technical-design-decisions/"><?php _e( 'Customize Changesets' ); ?></a></h3>
					<p><?php _e( 'Customize changesets make changes in the customizer persistent, like autosave drafts. They also make exciting new features like starter content possible.' ); ?></p>
				</div>
			</div>

=======
					<h3><a href="https://make.wordpress.org/core/2017/10/22/code-editing-improvements-in-wordpress-4-9/"><?php _e( 'CodeMirror available for use in your themes and plugins' ); ?></a></h3>
					<p><?php _e( 'We&#8217;ve introduced a new code editing library, CodeMirror, for use within core. Use it to improve any code writing or editing experiences within your plugins, like CSS or JavaScript include fields.' ); ?></p>
				</div>
				<div class="col">
					<h3><a href="https://make.wordpress.org/core/2017/10/30/mediaelement-upgrades-in-wordpress-4-9/"><?php _e( 'MediaElement.js upgraded to 4.2.6' ); ?></a></h3>
					<p><?php _e( 'WordPress 4.9 includes an upgraded version of MediaElement.js, which removes dependencies on jQuery, improves accessibility, modernizes the UI, and fixes many bugs.' ); ?></p>
				</div>
				<div class="col">
					<h3><a href="https://make.wordpress.org/core/2017/10/15/improvements-for-roles-and-capabilities-in-4-9/"><?php _e( 'Improvements to Roles and Capabilities' ); ?></a></h3>
					<p><?php _e( 'New capabilities have been introduced that allow granular management of plugins and translation files. In addition, the site switching process in multisite has been fine-tuned to update the available roles and capabilities in a more reliable and coherent way.' ); ?></p>
				</div>
			</div>
>>>>>>> origin/master
		</div>

		<hr />

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? _e( 'Return to Updates' ) : _e( 'Return to Dashboard &rarr; Updates' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? _e( 'Go to Dashboard &rarr; Home' ) : _e( 'Go to Dashboard' ); ?></a>
		</div>
<<<<<<< HEAD

	</div>
=======
	</div>

	<script>
		(function( $ ) {
			$( function() {
				var $window = $( window );
				var $adminbar = $( '#wpadminbar' );
				var $sections = $( '.floating-header-section' );
				var offset = 0;

				// Account for Admin bar.
				if ( $adminbar.length ) {
					offset += $adminbar.height();
				}

				function setup() {
					$sections.each( function( i, section ) {
						var $section = $( section );
						// If the title is long, switch the layout
						var $title = $section.find( 'h2' );
						if ( $title.innerWidth() > 300 ) {
							$section.addClass( 'has-long-title' );
						}
					} );
				}

				var adjustScrollPosition = _.throttle( function adjustScrollPosition() {
					$sections.each( function( i, section ) {
						var $section = $( section );
						var $header = $section.find( 'h2' );
						var width = $header.innerWidth();
						var height = $header.innerHeight();

						if ( $section.hasClass( 'has-long-title' ) ) {
							return;
						}

						var sectionStart = $section.offset().top - offset;
						var sectionEnd = sectionStart + $section.innerHeight();
						var scrollPos = $window.scrollTop();

						// If we're scrolled into a section, stick the header
						if ( scrollPos >= sectionStart && scrollPos < sectionEnd - height ) {
							$header.css( {
								position: 'fixed',
								top: offset + 'px',
								bottom: 'auto',
								width: width + 'px'
							} );
						// If we're at the end of the section, stick the header to the bottom
						} else if ( scrollPos >= sectionEnd - height && scrollPos < sectionEnd ) {
							$header.css( {
								position: 'absolute',
								top: 'auto',
								bottom: 0,
								width: width + 'px'
							} );
						// Unstick the header
						} else {
							$header.css( {
								position: 'static',
								top: 'auto',
								bottom: 'auto',
								width: 'auto'
							} );
						}
					} );
				}, 100 );

				function enableFixedHeaders() {
					if ( $window.width() > 782 ) {
						setup();
						adjustScrollPosition();
						$window.on( 'scroll', adjustScrollPosition );
					} else {
						$window.off( 'scroll', adjustScrollPosition );
						$sections.find( '.section-header' )
							.css( {
								width: 'auto'
							} );
						$sections.find( 'h2' )
							.css( {
								position: 'static',
								top: 'auto',
								bottom: 'auto',
								width: 'auto'
							} );
					}
				}
				$( window ).resize( enableFixedHeaders );
				enableFixedHeaders();
			} );
		})( jQuery );
	</script>

>>>>>>> origin/master
<?php

include( ABSPATH . 'wp-admin/admin-footer.php' );

// These are strings we may use to describe maintenance/security releases, where we aim for no new strings.
return;

__( 'Maintenance Release' );
__( 'Maintenance Releases' );

__( 'Security Release' );
__( 'Security Releases' );

__( 'Maintenance and Security Release' );
__( 'Maintenance and Security Releases' );

/* translators: %s: WordPress version number */
__( '<strong>Version %s</strong> addressed one security issue.' );
/* translators: %s: WordPress version number */
__( '<strong>Version %s</strong> addressed some security issues.' );

/* translators: 1: WordPress version number, 2: plural number of bugs. */
_n_noop( '<strong>Version %1$s</strong> addressed %2$s bug.',
         '<strong>Version %1$s</strong> addressed %2$s bugs.' );

/* translators: 1: WordPress version number, 2: plural number of bugs. Singular security issue. */
_n_noop( '<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bug.',
         '<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bugs.' );

/* translators: 1: WordPress version number, 2: plural number of bugs. More than one security issue. */
_n_noop( '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
         '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.' );

/* translators: %s: Codex URL */
__( 'For more information, see <a href="%s">the release notes</a>.' );
