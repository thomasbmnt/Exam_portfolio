<?php get_header(); ?>
		
			
			<section id="Accueil">
				<div class="conteneur">
					<?php
						$page_id = 91;
						$page_data = get_page($page_id);
						

						echo $page_data->post_content; ?>
						<?php
						/* print_r($page_data); */
					?>
				</div>
				<hr id="decorativeLine">
			</section>
			
			<section id="singleWork">
				<div class="conteneur">
					<?php while (have_posts()) : the_post(); ?>
							<article <?php post_class(); ?>>
								<h2><?php the_title(); ?></h2>
								<h3><?php _e("Posté par "); ?> <?php the_author(); ?> <?php _e("le"); ?> <?php echo get_the_date(); ?></h3>
								<div><?php the_post_thumbnail(array("300", "300")); ?></div>
								<div class="content">
									
								</div>
								<hr />
							</article>

					<?php endwhile; ?>
				</div>
			</section>
			
   <?php get_footer(); ?>