<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	function disp_cookie(){
	
	?>
		<div id="cookie-container">
			<a id="x-close"><i class="fa fa-times" aria-hidden="true"></i></a>
			<br>
			<div id="disclaimer-text">
				<p>We use cookies to give you the best online experience.</p>
				<p id="desktop-text"><?php echo get_option('cookie_disclaimer_desktop'); ?><p>
				<p id="mobile-text"><?php echo get_option('cookie_disclaimer_mobile'); ?><p>
			</div>
			<button id="agree-close" title="Accept Privacy agreement">Accept and Close</button>
		</div>
		
	<?

	}
	add_action('wp_footer','disp_cookie', 100 );
?>

