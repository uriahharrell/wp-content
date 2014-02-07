<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

 get_header(); ?>

<div class="bg-img large-12 columns">
	<div class="large-8 large-offset-1 columns">
		<h1>MAKE GAMES HAPPEN</h1>
		<h2>Find your prefect match, or create your own.</h2>
		<div class="btn-box">
			<div class="find-btn large-5 columns">
				<h3>FIND YOUR MATCH</h3>
			</div>
			<div class="create-btn large-5 columns">
				<h3>CREATE YOUR OWN</h3>
			</div>
		</div>
	</div>
</div>

<div class="how large-12 columns">
	<h3>- HOW IT WORKS -</h3>
</div>

<div class="how-imgs large-12 columns">
	<div class="row">
		<div class="profile-img large-2 large-offset-1 columns">
			<img src="wp-content/themes/matchfc/_/inc/images/profile_icon.png" alt"">
			<h4>MAKE A PROFILE</h4>
		</div>
		<div class="arrows large-2 columns">
			<img src="wp-content/themes/matchfc/_/inc/images/arrows.png" alt"">
		</div>
		<div class="search-img large-2 columns">
			<img src="wp-content/themes/matchfc/_/inc/images/search_icon.png" alt"">
			<h4>SEARCH FOR GAMES <br> OR MAKE YOUR OWN</h4>
		</div>
		<div class="arrows large-2 columns">
			<img src="wp-content/themes/matchfc/_/inc/images/arrows.png" alt"">
		</div>
		<div class="game-img large-2 columns">
			<img src="wp-content/themes/matchfc/_/inc/images/game_icon.png" alt"">
			<h4>PLAY GAMES</h4>
		</div>
		<div class="large-1 columns"></div>
	</div>
</div>


 <!-- This is the default body content that came with the blank theme.  It can probably be deleted, But I want to wait to make sure.

 	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php posted_on(); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<footer class="postmetadata">
				<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
				<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> |
				<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
			</footer>

		</article>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

 dont know whether we will be using the sidebar on the front-page...
<?php get_sidebar(); ?>  -->

<?php get_footer(); ?>
