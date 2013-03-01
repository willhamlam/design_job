<?php wp_head(); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<!-- head & title -->
<head>
	<meta charset="UTF-8">
	<title>web7radio | Home Page</title>
</head>
<!-- end head & title -->

<!-- body -->
<body>

	<!-- bg-img -->
	<img class="bg_pic" src="<?php echo THEME_URL; ?>/assets/img/web7radio_HP.png" height="962" width="1499" alt="">

	<!-- header -->
	<div class="header">
		<div class="wrap">

			<!-- header-banner -->
			<div class="header-banner">
				<a href="<?php bloginfo('url');?>" title="logo"><img class="logo" src="<?php echo THEME_URL; ?>/assets/img/logo.png" alt=""></a>
				<h1 class="header-title">la web radio du 7e,<br>
				la radio par et pour les jeunes !</h1>
				<div class="header-buttons">
					<a href="#">INSCRIPTION</a>
					<a href="#" class="grey">CONNEXION</a>
				</div>
			</div>

			<!-- header-player -->
			<div class="header-player">
				<a class="header-player-pic" href="#"><img src="<?php echo THEME_URL; ?>/assets/img/header-player-pic1.jpg" height="131" width="137" alt=""></a>
				<a class="header-player-pic" href="#"><img src="<?php echo THEME_URL; ?>/assets/img/header-player-pic2.jpg" height="131" width="393" alt=""></a>
				<div class="header-player-wrap">
					<ul class="header-player-list">
						<li><a href="#">Programme passé</a></li>
						<li><a href="#">Programme en cours - L’Oeil à l’écoute</a></li>
						<li><a href="#">Programme à venir</a></li>
					</ul>
					<a href="#" class="header-player-button">Voir tous les programmes</a>
				</div>
			</div>

			<!-- header-nav -->
			<div class="header-nav">
				<div class="header-nav-banner">
					<!-- <ul class="header-nav-list">
						<li><a href="#">GRille des<br>programmes</a></li>
						<li><a href="#">émissions</a></li>
						<li><a href="#">devenez animateurs</a></li>
						<li><a href="#">Podcasts</a></li>
						<li><a href="#">news</a></li>
						<li><a href="#">agenda</a></li>
						<li><a href="#">Bons plans<br>/ sorties</a></li>
						<li><a href="#">conseils</a></li>
						<li><a href="#">Forums</a></li>
					</ul> -->
					<?php
						if(function_exists('wp_nav_menu')):
								wp_nav_menu(
										array(
										'menu' =>'primary_nav',
										'container'=>'',
										'depth' => 1,
										'menu_class'=> 'header-nav-list', )
								);
						else:
					?>
					<ul class="header-nav-list">
					<?php wp_list_pages('title_li=&depth=1'); ?>
					</ul>
				<?php
					endif;
				?>
					<form class="header-nav-search">
		        <input type="text" placeholder="Rechercher" required>
		        <button type="submit">Search</button>
    			</form>
				</div>
			</div>

		</div>
	</div>
	<!-- END header -->