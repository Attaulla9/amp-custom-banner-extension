<?php
/*
Plugin Name: AMP Custom Banner Extension
Plugin URI: https://wordpress.org/plugins/accelerated-mobile-pages/
Description: Extension made for AMP for WP to add a custom banner after the post content.
Version: 1.0
Author:  Mohammed Kaludi
Author URI: http://ampforwp.com/ 
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('ampforwp_after_post_content','amp_custom_banner_extension_insert_banner');
function amp_custom_banner_extension_insert_banner() { ?>
	<div class="amp-custom-banner-after-post">
		<a href="https://ampforwp.com/extensions">
			<amp-img 
			 	src="https://ampforwp.com/wp-content/uploads/2016/12/amp-custom-banner.png"
			 	layout="responsive"
      			width="728"
      			height="90" 
      			alt="AMP Extension page">      				
      		</amp-img>
      	</a>
	</div>
	<?php 
}

add_action('amp_post_template_css', 'amp_custom_banner_extension_styling');
function amp_custom_banner_extension_styling() { ?>
	.amp-custom-banner-after-post {
		text-align: center
	}
<?php }