<?php 
global $bp, $EM_Notices;
echo $EM_Notices; 
?>

<div class="small-12 large-6 columns">
<?php
/* WARNING! This file may change in the near future as we intend to add features to BuddyPress - 2012-02-14 */


if( user_can($bp->displayed_user->id,'edit_events') ){
	?>
	<h4><?php _e('Matches ' . bp_get_displayed_user_fullname() . '  Posted', 'dbem'); ?></h4>
	<?php
	$events = EM_Events::get(array('owner'=>$bp->displayed_user->id));
	if( count($events) > 0 ){
		$args = array(
			'format_header' => get_option('dbem_bp_events_list_format_header'),
			'format' => get_option('dbem_bp_events_list_format'),
			'format_footer' => get_option('dbem_bp_events_list_format_footer'),
			'owner' => $bp->displayed_user->id
		);
		echo EM_Events::output($events);
	}else{
		?>
		<p><?php _e('No matches posted by this user at this time.', 'dbem'); ?>.
		<?php if( get_current_user_id() == $bp->displayed_user->id ): ?> 
		<a href="<?php echo $bp->events->link . 'my-events/edit/'; ?>"><?php _e('Add Match','dbem'); ?></a>
		<?php endif; ?>
		</p>
		<?php
	}
}
?>
</div>

<div class="small-12 large-6 columns">
<h4><?php _e('Matches ' . bp_get_displayed_user_fullname() . '\'s Attending', 'dbem'); ?></h4>
<?php
$EM_Person = new EM_Person( $bp->displayed_user->id );
$EM_Bookings = $EM_Person->get_bookings();
if(count($EM_Bookings->bookings) > 0){
	//Get events here in one query to speed things up
	$event_ids = array();
	foreach($EM_Bookings as $EM_Booking){
		$event_ids[] = $EM_Booking->event_id;
	}
	echo EM_Events::output(array('event'=>$event_ids));
}else{
	?>
	<p><?php _e('Not currently scheduled to attend any matches.','dbem'); ?></p>
	<?php
} ?>
</div>