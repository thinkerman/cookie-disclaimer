<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	function cookie_disclaimer() {
		add_menu_page( 
			'Cookie Disclaimer', 
			'Cookie Disclaimer', 
			'manage_options', 
			'cookie_disclaimer', 
			'cookie_disclaimer_option', 
			'dashicons-admin-site'
			);
	}
	add_action( 'admin_menu', 'cookie_disclaimer' );

	add_action( 'admin_init', 'add_disclaimer_setting' );
	function add_disclaimer_setting(){
		register_setting( 'cookie_disclaimer', 'cookie_disclaimer_desktop','varchar');
		register_setting( 'cookie_disclaimer', 'cookie_disclaimer_mobile', 'varchar' );
	}

	function cookie_disclaimer_option() {

		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		echo '<div class="wrap">';
		?>

		<form method="post" action ="options.php">
			<?php settings_fields( 'cookie_disclaimer' ); ?>
			<?php do_settings_sections( 'cookie_disclaimer' ); ?>
			<h3>Please enter Disclaimer text for Desktops and Tablets</h3>
			<textarea style="width: 60%;" maxlength="300" name="cookie_disclaimer_desktop"><?php echo get_option('cookie_disclaimer_desktop'); ?></textarea>

			<h3>Please enter Disclaimer text for mobile devices</h3>
			<textarea style="width: 60%;" maxlength="300" name="cookie_disclaimer_mobile"><?php echo get_option('cookie_disclaimer_mobile'); ?></textarea>
			<?php submit_button(); ?>
		</form>

		<?
		echo '</div>';
	}
?>