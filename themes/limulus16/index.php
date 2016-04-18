	<?php get_header(); ?>
	<!-- Reticula principal (home) -->

		

		<section class="feed_container post_feed_home clearfix">

			
			<?php 
				$count = 0; 
				wp_reset_postdata(); if ( have_posts() ) : while ( have_posts() ) :
				$count ++;
				the_post(); 
			?>
				
				<?php if($count == 3) echo '<section class="mid_posts clearfix">'; ?>
				
				<article class="each_post <?php echo 'numero_'.$count; ?>">
					<a href="<?php the_permalink(); ?>">
						<?php
							if($count > 5){
								the_post_thumbnail('medium_lim', array( )); //mediun_lim 
							} else {
								the_post_thumbnail('big_lim', array( )); //big_lim
							}
						?>
						<h3><?php the_title(); ?></h3>
					</a>
				</article>
				
				<?php if($count == 5) echo '</section><section class="all_other">'; ?>

			<?php endwhile; endif; ?>
			</section><!-- all_other -->
			
			<div class="clearfix"></div>

			
			
		</section><!-- feed_container -->



	<?php get_footer(); ?>