<?php
	if ( ! defined( 'ABSPATH' ) ) exit;

	add_action( 'admin_menu', 'cookie_disclaimer' ); 
	function cookie_disclaimer() {

	add_menu_page( 

			'Cookie Disclaimer', 
			'Cookie Disclaimer', 
			'manage_options', 
			'cookie_disclaimer', 
			'cookie_disclaimer_option', 
			'dashicons-admin-site',
			51

			);
	}
	
	add_action( 'admin_init', 'add_disclaimer_setting' );
	function add_disclaimer_setting(){

		register_setting( 'cookie_disclaimer', 'cookie_disclaimer_desktop');
		register_setting( 'cookie_disclaimer', 'cookie_disclaimer_mobile');
		register_setting( 'cookie_disclaimer', 'cookie_disclaimer_country');
	}
	
	function cookie_disclaimer_option() {

		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		echo '<div class="wrap">';
		?>

		<form method="post" action ="options.php">

			<?php 

				$desktop = get_option('cookie_disclaimer_desktop');
				$mobile = get_option('cookie_disclaimer_mobile');
				$country = get_option('cookie_disclaimer_country');

				settings_fields( 'cookie_disclaimer' );
				do_settings_sections( 'cookie_disclaimer' );

			?>

			<h3>Please enter Disclaimer text for Desktops and Tablets</h3>
			<textarea style="width: 60%;height:350px;" maxlength="300" name="cookie_disclaimer_desktop"><?php echo $desktop ?></textarea>

			<h3>Please enter Disclaimer text for mobile devices</h3>
			<textarea style="width: 60%;height:350px;" maxlength="300" name="cookie_disclaimer_mobile"><?php echo $mobile ?></textarea>

			<?php submit_button(); ?>
		</form>

		<?
		echo '</div>';
	}
?>