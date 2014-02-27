<?php 
/* Reorder profile tabs */
function bbg_change_profile_tab_order() {
global $bp;

$bp->bp_nav['profile']['position'] = 10;
$bp->bp_nav['activity']['position'] = 20;
$bp->bp_nav['notifications']['position'] = 30;
$bp->bp_nav['messages']['position'] = 40;
$bp->bp_nav['friends']['position'] = 50;
$bp->bp_nav['matches']['position'] = 60;
$bp->bp_nav['settings']['position'] = 70;
}
add_action( ‘bp_setup_nav’, ‘bbg_change_profile_tab_order’, 999 );

/* define the default Profile component */
define("BP_DEFAULT_COMPONENT","matches");

?>