<?php
/**
 *  Make sure BuddyPress is loaded
 */
if ( !function_exists( 'bp_core_install' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'buddypress/bp-loader.php' ) )
		require_once ( WP_PLUGIN_DIR . '/buddypress/bp-loader.php' );
	else
		return;
}

/* 
 * Remove Email Address From Buddypress Message 
 */ 

function ibadan_remove_email_from_bp_private_messages($message){
	$replacement = "[Warning !: E-mail Address Has Been Removed Because Of Fraud ]";
	return preg_replace("/[^@\s]*@[^@\s]*\.[^@\s]*/", $replacement, $message);
	
}
add_filter('messages_message_subject_before_save', 'ibadan_remove_email_from_bp_private_messages');
add_filter('messages_message_content_before_save', 'ibadan_remove_email_from_bp_private_messages');

?>
