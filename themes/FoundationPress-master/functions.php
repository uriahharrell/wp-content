<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php'); 

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Filter wp_nav_menu() to add profile link: If the user is signed in, a my profile link is added to the main nav menu
add_filter( 'wp_nav_menu_items', 'my_nav_menu_profile_link' );
function my_nav_menu_profile_link($menu) { 	
	if (!is_user_logged_in()) {
		$loginlink = '<li><a href="' . wp_login_url() . '">' . __('LOGIN') . '</a></li>';
		$menu = $menu . $loginlink;
		return $menu;
	} else {
		$profilelink = '<li><a href="' . bp_loggedin_user_domain( '/' ) . '">' . __('MY PROFILE') . '</a></li>';
		$menu = $menu . $profilelink;
		return $menu;
	}
}

//Remove the admin bar for all users
show_admin_bar(false);
?>

