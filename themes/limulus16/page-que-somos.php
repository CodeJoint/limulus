	<?php get_header(); ?>


	<!-- Insert content here -->

		<section class="feed_container clearfix">

			<article class="single_post que_somos mobile_accordion">

				<h1><?php _e('Qué somos', 'limulus'); ?></h1>
					
				
				<section id="sobre_limulus" class="clearfix">
					<h3 class=""><?php _e('Sobre Límulus', 'limulus'); ?></h3>
					<?php
					$args = array(
					    'post_type' => 'attachment',
					    'numberposts' => null,
					    'post_status' => null,
					    'post_parent' => get_ID_by_slug('que-somos/sobre-limulus'),
					    'exclude'     => get_post_thumbnail_id()
					);
					$attachments = get_posts( $args );
					?>
					<section class="gallery clearfix">
						

						<section class="cycle-slideshow slider_qs">
					<?php
						if ($attachments) {
						    foreach ($attachments as $attachment) {
						    	$link_array = wp_get_attachment_image_src($attachment->ID, 'full');
						    	$link = $link_array[0];
						        echo "<img class='gallery_view' src='".$link."' alt=''>";
						    }
						}
					?>
						</section>
						<!-- <div class="clearfix"></div> -->
					</section>

					<article class="qsomos">

						<?php
						wp_reset_postdata();
							$subpage = get_page_by_path( 'que-somos/sobre-limulus' );

							echo     apply_filters('the_content', $subpage->post_content);

						?>

					</article>
				</section><!-- sobre_limulus -->

					

				
				<section id="quienes_somos" class="clearfix">
					<h3 ><?php _e('Quiénes somos', 'limulus'); ?></h3>
					<div class="socios clearfix">

						<img class="gallery_view" src="http://localhost/limulus/wp-content/uploads/2014/02/IMG_6625w-806x536.jpg" alt="">
						<div class="socio">
							<h4>Andrea Ruy Sánchez</h4>
							<span><a target="_blank" href="http://andrearuy.com">andrearuy.com</a></span>
							<span><a target="_blank" href="http://twitter.com/andrearuy">@andrearuy</a></span>
						</div>
						<div class="socio">
							<h4>Priscila Vanneuville</h4>
							<span><a target="_blank" href="http://prisci.la">prisci.la</a></span>
							<span><a target="_blank" href="http://palabraslugar.tumblr.com">palabraslugar.tumblr</a></span>
						</div>
					</div>


				</section><!-- quienes_somos -->
	
				<section id="agradecimientos">

					<article>

					<h3 class=""><?php _e('Agradecimientos', 'limulus'); ?></h3>

						<?php
						wp_reset_postdata();
							$subpage = get_page_by_path( 'que-somos/agradecimientos' );

							echo     apply_filters('the_content', $subpage->post_content);

						?>

					</article>
					<section class="cont">
						<h3 class="contactanos"><?php _e('CONTÁCTANOS', 'limulus'); ?></h3>
						<span class="mail-cont"><a href="mailto:hola@limulus.mx">hola@limulus.mx</a></span>
					</section>
				</section>
				
				</section><!-- nuestros_aliados -->

			</article><!-- each_post -->
			
		</section><!-- feed_container -->

	<?php get_footer(); ?>