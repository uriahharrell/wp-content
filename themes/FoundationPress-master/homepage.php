<?php /*Template Name: Homepage*/ get_header(); ?>

<section class="homepage">
	<div class="row">
		<h1>MAKE GAMES HAPPEN</h1>

		<h2>Find the perfect match or create your own.</h2>

		<div class="btn-box wrap columns">
			<p class="find-btn columns">FIND YOUR MATCH</p>
			<p class="create-btn columns">CREATE YOUR MATCH</p>
		</div>
	</div>
</section>

<section class="howitworks wrap">
			<p>- HOW IT WORKS -</p>
</section>

<section class="howimages wrap">
	<div class="row">

		<div class="howprofile large-3 columns">
			<p>MAKE A PROFILE</p>
			<img src="<?php bloginfo('template_directory'); ?>/css/images/profile_icon.png" alt="Profile Icon">
		</div>
		
		<div class="large-6 columns">
			<img class="divide large-3 columns" src="<?php bloginfo('template_directory'); ?>/css/images/arrows.png" alt="Arrows">

			<div class="howsearch large-6 columns">
				<p>SEARCH FOR GAMES<br>OR MAKE YOUR OWN</p>
				<img src="<?php bloginfo('template_directory'); ?>/css/images/search_icon.png" alt="Hourglass Icon">
			</div>

			<img class="divide large-3 columns" src="<?php bloginfo('template_directory'); ?>/css/images/arrows.png" alt="Arrows">
		</div>

		<div class="howgames large-3 columns">
			<p>PLAY GAMES</p>
			<img src="<?php bloginfo('template_directory'); ?>/css/images/game_icon.png" alt="Soccerball Icon">
		</div>
	</div>
	
	
</section>

<?php get_footer(); ?>