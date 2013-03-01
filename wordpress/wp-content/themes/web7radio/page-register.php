<?php
/*
Template Name: page-register.php
*/
?>
<?php app_require('include/tpl/header'); ?>
	<!-- main -->
	<div class="main">
		<div class="wrap">
			<div class="wrap-inner">

			<!-- content-col left -->
			<div class="content left">
				<div class="page-menu">
					<ul>
						<li class="page-menu-item"><a href="">Accueil ></a></li>
						<li class="page-menu-item"><a href="">Grille des programmes</a></li>
					</ul>
				</div>
				<div class="page-content">
					<div class="wrap-inner">
						<div class="page-nav">
							<h1 class="page-title">devenez animateur</h1>
							<div class="page-des">
							</div>
						</div>
						<div class="sign_up_content">
							<div class="sign_up_notice">
								<h1 class="sign_up_title">Les qualités attendues pour les postulants</h1>
								<p class="sign_up_announce">Equitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis. Nam quod de pietate dixistis, est quidem ista nostra existimatio, sed iudicium certe parentis; quid nos opinemur, audietis ex iuratis; quid parentes sentiant, lacrimae matris incredibilisque maeror, squalor patris et haec praesens maestitia, quam cernitis, luctusque declarat.</p>
							</div>
							<div class="sign_up_form">
								<div class="sign_up_form_basic">
									<div class="sign_up_sex">
										Civilité :
										<form class="sign_up_sex_form" action="">
											<input class="sex-option" type="radio" name="sex" value="mr"/>Mr.
											<input class="sex-option" type="radio" name="sex" value="mme"/>Mme.
											<input class="sex-option" type="radio" name="sex" value="mlle"/>Mlle.
										</form>
									</div>
									<form class="sign_up_basic_form" action="" id="contact_form">
											<input type="text" id="last-name" name="last-name" class="form_item require" placeholder="Votre nom">
											<input type="text" id="first-name" name="first-name" class="form_item require" placeholder="Votre prenom">
											<input type="text" id="email" name="email" class="form_item require" placeholder="Votre e-mail">	
									</form>
									<div class="sign_up_upload">
										<p class="upload_announce">Uploadez votre CV et votre lettre de motivation</p>
										<h2 class="upload_file">(PDF, Word)</h2>
										<a href="" class="upload_button">Choisissez un fichier</a>
										<h2 class="upload_notice">Aucun fichier sélectionné</h2>
										<a href="" class="sign_up_button">postuler</a>
									</div>
								</div>
								<div class="sign_up_form_detail">
									<textarea style="resize: none;" class="message_form" name="message" placeholder="Message" id="message" cols="30" rows="10"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- sidebar-col right -->
			<div class="sidebar right">

				<?php app_require('include/tpl/sidebar-ad_box') ?>

				<?php app_require('include/tpl/sidebar-fb_box') ?>
			</div>
		</div>

		<!-- ad-box -->
		<?php app_require('include/tpl/ad') ?>

		</div>
	</div>
	<!-- END main -->
<?php app_require('include/tpl/footer'); ?>
	