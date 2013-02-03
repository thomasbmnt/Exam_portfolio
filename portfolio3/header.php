<!DOCTYPE html>
  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-BE" lang="fr-BE">
	<head>
		
		<!-- moteur de recherche -->
		<meta 	name="Author" content="Thomas Beaumont" /> 
		<meta 	name="Keywords" content="Thomas, Beaumont, site web" />
		<meta 	name="Description" content="Site web de thomas beaumont" /> 
		
		<!-- protocol http -->
		<meta 	http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="viewport" content="width=device-width">

		<title>Portfolio de Thomas Beaumont</title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" title="Normal" />
		<link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
		<!-- <link rel="stylesheet" type="text/css" href="css/print.css" media="print" title="Normal" /> -->
		
		<!-- icone apparaissant a cote du nom du site, p. ex bookmark 
		<link 	rel="shortcut icon"  type="images/x-icon" 	href="favicon.ico" />  -->
		
		<!-- <script type="text/javascript" src="./js/jquery-1.8.2.js"></script> -->
		<!-- <script type="text/javascript" src="./js/monFichier.js"></script> -->
		 <!--
		 	Version longue : 
		  <script>
		     $(document).ready(function(){
		       $("#email").click(function(event){
		         alert("As you can see, the link no longer took you to jquery.com");
		         event.preventDefault();
		       });
		     });
		   </script> -->
		
	</head>
	<body> 
	
			<header id="top">
				<div class="conteneur">
					<h1><a href="<?php bloginfo("home"); ?>/index.php">Bienvenue sur le portfolio de Thomas Beaumont !</a></h1>
					
					<nav>
							<?php $defaults = array(
								'theme_location'  => '',
								'menu'            => '', 
								'container'       => 'ul', 
								'container_class' => 'group', 
								'container_id'    => 'nav_effect',
								'menu_class'      => 'group', 
								'menu_id'         => 'nav_effect',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							); ?>
							<?php wp_nav_menu( $defaults ); ?>
<!--
							<li class="current_page"><a href="#Accueil">Accueil</a></li>
							<li><a href="#Derniere_realisations">Présentation</a></li>
							<li><a href="#Creations">Créations</a></li>
							<li><a href="#Contact">Contact</a></li>
-->
					</nav>
				</div>
			</header>