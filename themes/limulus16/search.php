<?php 
		get_header(); 
/*
		get_sidebar();*/
	?>
	<!-- Insert content here -->
		
		<section class="feed_container clearfix">

			<header class="feed_header clearfix no_480">

<!-- filters -->
			</header>

			<article class="search_page">
				<?php
					global $wp_query;
					$total_results = $wp_query->found_posts;
					$query_string  = $wp_query->query_vars['s'];

				?>
				
				<hr class="divider">


					<?php 
						if ( have_posts() ) { 
					?>
					<h1>
						<?php printf( _n( "%d Resultado para ", "%d Resultados para ", $total_results, 'limulus' ), $total_results ); ?>"
						<?php echo $query_string; ?>"
					</h1>

				<section class="feed_container post_feed_home clearfix all_other">

					<?php while(have_posts()):the_post(); ?>

					<article class="each_post <?php ?>"><!-- php echo 'numero_'.$count; -->
						<a href="<?php the_permalink(); ?>">
							<?php
									the_post_thumbnail('full'); //mediun_lim 	
							?>
							<h3><?php the_title(); ?></h3>
						</a>
					</article>

				<?php endwhile;?>
				
				</section>

				<section>
					<h1><?php } else{echo '<section class="fail">TU BÚSQUEDA <br> NO OBTUVO <br> NINGÚN <br> RESULTADO</section>'; ?></h1>
					<span class="volver"><a href="<?php echo site_url(); ?>">ir al inicio</a></span>
					<?php }; ?>

				</section>

				
				
				<hr class="divider">
				
			</article><!-- each_post -->
	
		</section><!-- feed_container -->
	
	<?php get_footer(); ?>