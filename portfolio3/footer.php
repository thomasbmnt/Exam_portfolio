	<footer>
		<div class="conteneur">
			<aside id="footerLeft">
				<div id="reseauxSociaux">
					<h3>Réseaux sociaux</h3>
					<?php
						$args = array('post_type' => 'Sociaux');
						$loop = new WP_query($args);
						
						while($loop->have_posts()) :
							$loop->the_post();
							$socialLink = get_post_meta($post->ID, 'URL');
							
							?>
							<a href="<?php echo $socialLink[0]; ?>"><?php the_post_thumbnail(); ?> <?php the_title(); ?></a><br />
							<?php
						endwhile;
					?>
				</div>
				
				<div id="derniersArticles">
					
				</div>
			</aside>	
			<aside id="footerRight">
				<div id="lecturesEnCours">
				<h3>Lectures en cours</h3>
					<?php
						$args = array('post_type' => 'Books');
						$loop = new WP_query($args);
						
						while($loop->have_posts()) :
							$loop->the_post();
							$bookLink = get_post_meta($loop->post->ID, 'URL');
							
							?>
							<a href="<?php echo $bookLink[0]; ?>"><?php the_post_thumbnail(); ?> <?php the_title(); ?></a><br />
							<?php
						endwhile;
					?>								
				</div>	
				
				<div id="liensRecommandes">
				<h3>Liens recommandés</h3>
					<?php
						$args = array('post_type' => 'Liens');
						$loop = new WP_query($args);
						
						while($loop->have_posts()) :
							$loop->the_post();
							$bookLink = get_post_meta($loop->post->ID, 'URL');
							
							?>
							<a href="<?php echo $bookLink[0]; ?>"><?php the_post_thumbnail(); ?> <?php the_title(); ?></a><br />
							<?php
						endwhile;
					?>									
				</div>
			</aside>
		</div>
		<div class="clear"></div>
	</footer>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
    <script src='<?php bloginfo('stylesheet_directory'); ?>/js/example.js'></script>
	</body>
</html>