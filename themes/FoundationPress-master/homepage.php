<?php /*Template Name: Homepage*/ get_header(); ?>

<section class="homepage">
	<div class="row relative">
		<h1>MAKE GAMES HAPPEN</h1>

		<h2>Find the perfect match or create your own.</h2>

		<div class="btn-box wrap columns btn-box">
			<a class="columns find-btn" href="#">FIND YOUR MATCH</a>
			<a class="columns create-btn " href="#">CREATE YOUR MATCH</a>
		</div>
	</div>
</section>

<section class="howitworks wrap">
	<p>- HOW IT WORKS -</p>
</section>

<section class="howimages wrap">
	<div class="row">

		<div class="howprofile medium-3 columns">
			<p>MAKE A PROFILE</p>
			<img src="<?php bloginfo('template_directory'); ?>/css/images/profile_icon.png" alt="Profile Icon">
		</div>
		
		<div class="medium-6 columns">
			<img class="hide-for-small divide medium-3 columns" src="<?php bloginfo('template_directory'); ?>/css/images/arrows.png" alt="Arrows">

			<div class="howsearch medium-6 columns">
				<p>SEARCH FOR GAMES<br>OR MAKE YOUR OWN</p>
				<img src="<?php bloginfo('template_directory'); ?>/css/images/search_icon.png" alt="Hourglass Icon">
			</div>

			<img class="hide-for-small divide medium-3 columns" src="<?php bloginfo('template_directory'); ?>/css/images/arrows.png" alt="Arrows">
		</div>

		<div class="howgames medium-3 columns">
			<p>PLAY GAMES</p>
			<img src="<?php bloginfo('template_directory'); ?>/css/images/game_icon.png" alt="Soccerball Icon">
		</div>
	</div>
	
	
</section>

<?php get_footer(); ?>