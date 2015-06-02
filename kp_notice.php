<?php

/**
 *
 * @link              kommpass.ch
 * @since             1.0.0
 * @package           kp_notice
 *
 * @wordpress-plugin
 * Plugin Name:       kommpass maintenance notice
 * Plugin URI:        kommpass.ch
 * Description:       Displays a maintenance message in the dashboard
 * Version:           1.0.0
 * Author:            Matthias Bloch
 * Author URI:        kommpass.ch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kpdc
 * Domain Path:       /languages
 */
 
 
function kp_notice_activation() {

	$date = date("F j, g:i a");
	update_option( 'kp_notice_date', $date );
}
register_activation_hook( __FILE__, 'kp_notice_activation' );


function admin_notice(){
echo '<div class="error">
   <p>This site is in maintenance mode since: <strong>'. get_option( 'kp_notice_date' ) .'</strong>. Please do not modify any content from this point on. Any changes will be overwritten!</p>    
</div>';    
}
add_action('admin_notices', 'admin_notice');




