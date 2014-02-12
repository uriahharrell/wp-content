<?php /*Template Name: Homepage*/ get_header(); ?>

<!-- Container for the soccer player background image -->
<section class="homepage">

	<!-- container for the  headline, sub-headline, find your match btn, and create your match btn-->
	<div class="row relative">
		<h1>MAKE GAMES HAPPEN</h1>

		<h2>Find the perfect match or create your own.</h2>

		<div class="btn-box wrap columns btn-box">
			<a class="columns find-btn" href="#">FIND YOUR MATCH</a>
			<a class="columns create-btn " href="#">CREATE YOUR MATCH</a>
		</div>
		
	</div>
</section>

<!-- How it works bar just below the homepage image -->
<section class="howitworks wrap">
	<p>- HOW IT WORKS -</p>
</section>

<!-- Images and text just below the "how it works" headline -->
<section class="howimages wrap">
	<div class="row">

		<!-- Profile text and image -->
		<div class="howprofile medium-3 columns">
			<p>MAKE A PROFILE</p>
			<img src="<?php bloginfo('template_directory'); ?>/css/images/profile_icon.png" alt="Profile Icon">
		</div>
		
		<!-- create a new section 6 columns wide so that I can get 1.5 col wide arrow icons -->
		<div class="medium-6 columns">

			<!-- arrow icon, hidden for small devices -->
			<img class="hide-for-small divide medium-3 columns" src="<?php bloginfo('template_directory'); ?>/css/images/arrows.png" alt="Arrows">

			<!-- search text and image -->
			<div class="howsearch medium-6 columns">
				<p>SEARCH FOR GAMES<br>OR MAKE YOUR OWN</p>
				<img src="<?php bloginfo('template_directory'); ?>/css/images/search_icon.png" alt="Hourglass Icon">
			</div>

			<!-- arrow icon, hidden for small devices -->
			<img class="hide-for-small divide medium-3 columns" src="<?php bloginfo('template_directory'); ?>/css/images/arrows.png" alt="Arrows">
		</div>
		
		<!-- play games text and image -->
		<div class="howgames medium-3 columns">
			<p>PLAY GAMES</p>
			<img src="<?php bloginfo('template_directory'); ?>/css/images/game_icon.png" alt="Soccerball Icon">
		</div>

	</div>
</section>

<?php get_footer(); ?>