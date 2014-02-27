<?php get_header(); ?>

	<div class="internal-body" role="main">
	

		<?php while (have_posts()) : the_post(); ?>
			<section class="internal-bg">
				
				<div id="item-nav">
					<div class="item-list-tabs no-ajax tabnav tabnav2 cf" id="object-nav" role="navigation">
						<ul>
							<?php bp_get_displayed_user_nav(); ?>
						</ul>
					</div>
				</div><!-- #item-nav -->

				<div class="row bg-grey">
					<?php the_content(); ?>
				</div>
				
			</section>
		<?php endwhile;?>

	</div>
	
		
<?php get_footer(); ?>