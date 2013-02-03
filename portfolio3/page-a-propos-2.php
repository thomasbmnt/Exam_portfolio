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
			
			
			<section id="A_propos">
				<div class="conteneur">		
					<?php
						$page_id = 110;
						$page_data = get_page($page_id);
						
						
						?>
							<div class="photo">
								<?php echo get_the_post_thumbnail($page->ID, "medium"); ?>
							</div>
								
						<?php
							$args = array('post_type' => 'about');
							$loop = new WP_query($args);
							query_posts( 'orderby=date&order=ASC' );
							
							while($loop->have_posts()) :
								$loop->the_post();
								
								?>
								<h3><?php the_title(); ?></h3>
								<div><?php the_content(); ?></div>
								<?php
								 
							endwhile;
						?>
				</div>
				<div class="clear"></div>
			</section>
			
   <?php get_footer(); ?>