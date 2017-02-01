<?php
	function disp_cookie(){
	?>
		<div id="cookie-container">
			<a id="x-close"><i class="fa fa-times" aria-hidden="true"></i></a>
			<div id="disclaimer-text">
				<p>We use cookies to give you the best online experience.</p>
				
				<p><?php echo get_option('cookie_disclaimer'); ?><p>
			</div>
			<button id="agree-close">Accept and Close</button>
		</div>
		
	<?
	}
	add_action('wp_footer','disp_cookie', 20 );
?>

