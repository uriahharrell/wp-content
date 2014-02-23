<?php
global $EM_Event, $post;
$hours_format = em_get_hour_format();
$required = apply_filters('em_required_html','<i>*</i>');
?>
<div class="event-form-when" id="em-form-when">
	<p class="row">
		<div class="small-6 medium-4 columns em-date-range">
			<?php _e ( 'Start Date', 'dbem' ); ?>					
			<input class="em-date-start em-date-input-loc" type="text" />
			<input class="em-date-input" type="hidden" name="event_start_date" value="<?php echo $EM_Event->event_start_date ?>" />
		</div>
		<div class="small-6 medium-4 columns em-date-range">
			<?php _e('End Date','dbem'); ?>
			<input class="em-date-end em-date-input-loc" type="text" />
			<input class="em-date-input" type="hidden" name="event_end_date" value="<?php echo $EM_Event->event_end_date ?>" />
		</div>
	</p>
	<p class="em-time-range row">
		<div class="small-6 medium-4 columns">
			<span class="em-event-text"><?php _e('Start Time','dbem'); ?></span>
			<input id="start-time" class="em-time-input em-time-start" type="text" size="8" maxlength="8" name="event_start_time" value="<?php echo date( $hours_format, $EM_Event->start ); ?>" />
		</div>
		<div class="small-6 medium-4 columns">
			<?php _e('End','dbem'); ?>
			<input id="end-time" class="em-time-input em-time-end" type="text" size="8" maxlength="8" name="event_end_time" value="<?php echo date( $hours_format, $EM_Event->end ); ?>" />
		</div>
		
	</p>
	
</div>  
<?php if( false && get_option('dbem_recurrence_enabled') && $EM_Event->is_recurrence() ) : //in future, we could enable this and then offer a detach option alongside, which resets the recurrence id and removes the attachment to the recurrence set ?>
<input type="hidden" name="recurrence_id" value="<?php echo $EM_Event->recurrence_id; ?>" />
<?php endif;