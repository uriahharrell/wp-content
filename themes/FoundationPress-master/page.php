
<?php get_header(); ?>

	<div class="internal-body" role="main">
	

		<?php while (have_posts()) : the_post(); ?>
			<section class="internal-bg">
				
				<div class="row bg-grey">
					<?php the_content(); ?>
				</div>
				
			</section>
		<?php endwhile;?>

	</div>
	
		
<?php get_footer(); ?>