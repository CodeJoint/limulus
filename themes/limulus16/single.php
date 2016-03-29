	<?php get_header();

	the_post();?>
	<!-- Insert content here -->

		

		<section class="feed_container clearfix">
			<article class="single_post">

				<!-- <?php the_post_thumbnail( ); ?> -->
				<div class="tags_single clearfix">
					<?php the_tags('', ' '); ?>
				</div>
				
				<h1><?php the_title(); ?></h1>
				

				<section class="main_content">

					<?php the_content(); ?>

				
					<div class="addthis_custom_sharing"></div>

					<?php
					if(qtrans_getLanguage() == 'en'){
						$footnote = get_post_meta( $post->ID, '_piedepag_metabox_en', true );
					}else{
						$footnote = get_post_meta( $post->ID, '_piedepag_metabox', true );
					}; ?>



					<?php if ( $footnote ) : ?>


					
						<footer class="footnote">
							<?php echo wpautop( $footnote ); ?>
						</footer>
					<?php endif; ?>
					<!-- <section class="socialplug">
				<div class="tw">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.2016.limulus.mx" data-dnt="true">Tweet</a>
				</div>
				<div class="fb-like fb" data-href="https://www.2016.limulus.mx" data-width="62" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true">
				</div>
					</section> -->

				</section>

				<section class="mas_posts">
					<h4 class=""><?php _e('Artículos relacionados', 'limulus'); ?></h4>

				<section class="relacionados">	
				<?php

					// Get related posts

					$args=array(
						'cat' => $cat,
						'order' =>'DESC',
						'orderby' => 'rand',
						'post__not_in' => array($post->ID),
						'posts_per_page'=>4,
						'ignore_sticky_posts'=>1
						);

					$related_posts = get_posts( $args );

				foreach ($related_posts as $related) : ?>
					<article class="each_post">
						<a href="<?php echo get_permalink( $related->ID ); ?>">
							<?php echo get_the_post_thumbnail( $related->ID, 'medium_lim' ); ?>
							<h3><?php echo qtrans_use(qtrans_getLanguage(), $related->post_title, false); ?></h3>
						</a>
					</article><!-- each_post -->
			<?php endforeach; ?>
				</section>
				</section>


			</article><!--single_post -->

		</section><!-- feed_container -->
		

	<?php get_footer(); ?>