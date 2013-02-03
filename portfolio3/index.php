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
			
			
<!--
			<section id="Derniere_realisations">
				<div class="conteneur">		
					<?php
						$page_id = 61;
						$page_data = get_page($page_id);
						$large_image_url = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page_id ), 'large');
						
						
						?>
							<h2><?php echo $page_data->post_title; ?></h2>
							<h3>Date&nbsp;: <?php echo $page_data->post_modified; ?></h3>
								<?php if( $large_image_url ) : ?>
									<span class="thumbnail"><a href="<?php echo $large_image_url[0]; ?>" class="lightBox"><?php echo get_the_post_thumbnail($page_data->ID, "last_thumbnails"); ?></a></span>
								<?php endif; ?>
								<span id="workDescription">
									<?php echo $page_data->post_content; ?>
								</span>
						<?php
						/* print_r($page_data); */
					?>
				</div>
				<div class="clear"></div>
			</section>
-->
			
			<section id="slideRealisations">
				<div class="conteneur">
					<h2>Réalisations</h2>
					<div class="clear"></div>
						<?php
							$args = array('post_type' => 'Travaux');
							$loop = new WP_query($args);
							//query_posts( 'posts_per_page=4' );
							
							while($loop->have_posts()) :
								$loop->the_post();
								
								?>
								<article class="lastCreation">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(array(250, 250)); ?>
										<div class="hovering">
											<div>
												<h3><?php the_title() ?></h3>
													<span class="moreInformations">Voir la fiche</span>
													<?php get_post_meta($loop->ID, 'URL', true); ?>
													<?php echo $loop->ID; ?>
											</div>
										</div>
									</a>
								</article>
								<?php
								 
							endwhile;
						?>		
				</div>
				<div class="clear"></div>
			</section>
			
   <?php get_footer(); ?>