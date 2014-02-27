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

// create main navigation links
add_filter( 'wp_nav_menu_items', 'my_nav_menu_links' );
function my_nav_menu_links($menu) { 	

	$searchmatcheslink = '<li><a href="' . home_url() . '/matches">' . __('FIND MATCH') . '</a></li>';
	
	if (!is_user_logged_in()) {
		$creatematchlink = '<li><a href="' . wp_registration_url() . '">' . __('CREATE MATCH') . '</a></li>';
		$loginlink = '<li><a href="' . wp_login_url() . '">' . __('LOGIN') . '</a></li>';
		$menu = $menu . $loginlink;
	} else {
		$creatematchlink = '<li><a href="' . bp_loggedin_user_domain() . '/matches/my-events/?action=edit">' . __('CREATE MATCH') . '</a></li>';
		$profilelink = '<li><a href="' . bp_loggedin_user_domain() . '">' . __('MY PROFILE') . '</a></li>';
		$logoutlink = '<li><a href="' . wp_logout_url( home_url() ) . '">' . __('LOGOUT') . '</a></li>';
		$menu = $menu . $profilelink . $logoutlink;
	}

	$menu =  $searchmatcheslink . $creatematchlink . $menu;
	return $menu;
}

// create of-screen mobile
add_filter( 'wp_nav_menu_items', 'my_nav_menu_links_mobile',10,2 );
function my_nav_menu_links_mobile($menu,$args) { 	
	if (!is_user_logged_in() && $args->theme_location == 'top-bar-r') {
	} elseif (is_user_logged_in() && $args->theme_location == 'top-bar-r') {
		$settingslink = '<li><a href="' . bp_loggedin_user_domain() . '/settings">' . __('SETTINGS') . '</a></li>';
		$matcheslink = '<li><a href="' . bp_loggedin_user_domain() . '/matches">' . __('MATCHES') . '</a></li>';
		$friendslink = '<li><a href="' . bp_loggedin_user_domain() . '/friends">' . __('FRIENDS') . '</a></li>';
		$messageslink = '<li><a href="' . bp_loggedin_user_domain() . '/messages">' . __('MESSAGES') . '</a></li>';
		$notificationslink = '<li><a href="' . bp_loggedin_user_domain() . '/notifications">' . __('NOTIFICATIONS') . '</a></li>';
		$profilelink = '<li><a href="' . bp_loggedin_user_domain() . '/profile">' . __('PROFILE') . '</a></li>';
		$activitylink = '<li><a href="' . bp_loggedin_user_domain() . '/activity">' . __('ACTIVITY') . '</a></li>';
		$menu = $settingslink . $matcheslink . $friendslink . $messageslink . $notificationslink . $profilelink . $activitylink . $menu;
	}

	return $menu;
}



//Remove the admin bar for all users
show_admin_bar(false);

// Styling for the login page
function my_login_logo() { ?>
    <style type="text/css">
    	/*background color*/
    	body.login {
    		background: #fff;
		
		/*background of login box and logo*/
    	}
		body.login div#login {
			background: #234d68;
			width: 320px;
			padding-left: 20px;
			padding-right: 20px;
			height: 100%;
		}
		
		/*logo*/
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/css/images/header-logo.png);
            padding-bottom: 0px;
            height: 55px;
            width: 126px;
            background-size: 126px 55px;
        }
		
		/*login box background*/
        body.login div#login form#loginform {
        	background: #fff;
        }

		/*login btn*/
        body.login div#login form#loginform input#wp-submit {
        	background: #234D68;
        	border: none;
        	box-shadow: none;
        }

		/*login btn hover*/
        body.login div#login form#loginform input#wp-submit:hover {
        	background: #3c718e;
        }

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>

