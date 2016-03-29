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

				<section class="search_container clearfix">
					
					<?php 
						if ( have_posts() ) { 
					?>
								<h1><?php printf( _n( "%d Resultado para ", "%d Resultados para ", $total_results, 'limulus' ), $total_results ); ?>"<?php echo $query_string; ?>"</h1>
				<section class="cols">
					<?php
							while ( have_posts() ) { 
								the_post(); 
					?>

					<article class="each_post clearfix">   <!--each_search_result-->
						<a href="<?php the_permalink(); ?>">
							<?php 
								if( has_post_thumbnail() ) {
									the_post_thumbnail();
								}else{ 
							?>
	
						 	<?php echo "<img src='".THEMEPATH."/images/no_image.png' /> ";
						} 
						?>
						<div class="info_container">

							<h3>
								<?php the_title(); ?>
								<span>
									<?php the_author(); ?>
								</span>
							</h3>
							
						</div><!-- info_container -->
						</a>
					</article><!-- each_serarch_result -->
					
						<h1><?php } } else { echo  '<section class="fail">TU BÚSQUEDA <br> NO OBTUVO <br> NINGÚN <br>RESULTADO</section>';}?>
							<span class="volver"><a href="<?php echo site_url(); ?>">ir al inicio</a></span>
						</h1>
						
					
				</section>

				</section>
				
				<hr class="divider">
				
			</article><!-- each_post -->
	
		</section><!-- feed_container -->
	
	<?php get_footer(); ?>