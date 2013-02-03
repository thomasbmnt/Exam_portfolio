<?php get_header(); ?>

<?php 
	if( isset($_POST['envoyer']) ) : 
		$error = "";
		$admin_email = get_option('admin_email');
		
		$headers = 'From: ' . $_POST['email'] . "\r\n" .
		'Reply-To: ' . $_POST['email'] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
		if( empty($_POST['email']) ) {
			$error .= "Le champs email ne peut être vide <br />";
		} else {
			if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL))
				$error .= "L'adresse email saisie n'est pas valide <br />";			
		}
			
		if( empty($_POST['nom']) )
			$error .= "Le champs nom ne peut être vide <br />";
			
		if( empty($_POST['message']) )
			$error .= "Le champs message ne peut être vide <br />";
		
			
		if( empty($error) ) :
			if(! mail($admin_email, "Message de " . htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['message'])))
			{
				$error = "Impossible d'envoyer l'email. Merci d'essayer à nouveau plus tard";
			}
		endif;
				
	endif; 
?>

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
			
			<section id="contact">
				<form id="Contact" action="<?php echo get_permalink( $post->ID ); ?>" method="POST">
					<fieldset>
						<legend>
							<?php if( have_posts() ) : ?>
								<?php while(have_posts()) : the_post(); ?>
									<div class="content"><?php the_content(); ?></div>
					
								<?php endwhile; ?>
							<?php endif; ?>
						</legend>
						
						<p class="error">
							<?php echo $error; ?>
						</p>
						
						<label for="Email">Email</label>
						<input required type="email" name="email" id="Email" <?php if( $_POST['email'] ) : echo 'value="' .$_POST['email']. '"'; endif; ?> />
						
						<label for="nom">Nom</label>
						<input required type="text" name="nom" id="nom" <?php if( $_POST['nom'] ) : echo 'value="' .$_POST['nom']. '"'; endif; ?> />
						
						<label for="message">Message</label>
						<textarea required id="message" name="message" cols="15" rows="6"><?php if( $_POST['message'] ) : echo $_POST['message']; endif; ?></textarea>
						
						<input type="submit" value="Envoyer" name="envoyer" id="envoyer" />
					</fieldset>
				</form>
				
				
			<section id="informationsPerso">
				<!-- Begin Contact Section -->
				<section id="contact-details">
				<div class="header_2">
				<h2><span itemprop="name">Thomas Beaumont</span></h2>
				<h3><span itemprop="jobTitle">Web Developer / Designer</span></h3>
				<!-- Begin PostalAddress Schema -->
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<ul class="info_1">
				<li class="address"><span itemprop="streetAddress">Rue de Loncin 77</span>, <span itemprop="addressLocality">Awans</span>, <span itemprop="postalCode"<4340</span> <span itemprop="addressCountry">Belgique</span></li>
				</ul>
				</div>
				<!-- End PostalAddress Schema -->
				<ul class="info_2">
				<li class="phone"><a itemprop="telephone" href="tel:+32497387090">+32 497 38 70 90</a></li>
				<li class="email"><a href="mailto:thomasbmnt@gmail.com" itemprop="email">thomasbmnt@gmail.com</a></li>
				</ul>
				</div>

				</section>
				<!-- End Contact Section -->
			</section>
				
			</section>
			
			

			
   <?php get_footer(); ?>