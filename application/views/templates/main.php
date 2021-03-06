<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<base href="<?php echo base_url(); ?>">
	<title><?php if(isset($title) && trim($title) !== '') echo $title.' | '; echo mb_strtoupper(config_item('site_name')); ?></title>
	<meta name="description" content="Le site de l'Institut Biblique Baptiste Libre, une école supérieure de Théologie. L'IBBL est un centre de formation pastorale et biblique se trouvant à Limay dans les Yvelines. Nos professeurs sont tous des pasteurs ou missionaires oeuvrant en France et à l'étranger.">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/app.css">
	<script src="js/vendor/modernizr.foundation.js"></script>
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

	<header>
		<a href=""><img src="img/logo.jpg" alt="logo" id="logo"></a>
		<img src="img/image2.jpg" alt="" id="entete">
		<nav>
			<ul>
				<li><a href="">Présentation</a>
					<ul>
						<li><a href="">Historique</a></li>
						<li><a href="">Le Campus</a></li>
						<li><a href="">Les Professeurs</a></li>
						<li><a href="">Le Personnel</a></li>
						<li><a href="">Les Partenaires</a></li>
						<li><a href="">Position Doctrinale</a></li>
						<li><a href="">Nos objectifs</a></li>
					</ul>
				</li>
				<li><a href="">Académique</a>
					<ul>
						<li><a href="">Programmmes</a></li>
						<li><a href="">Cours</a></li>
						<li><a href="">Tarifs</a></li>
						<li><a href="">Admission</a></li>
						<li><a href="">Demande de dossier</a></li>
						<li><a href="">Visa Etudiants</a></li>
						<li><a href="">Sécurité Sociale</a></li>
					</ul>
				</li>
				<li><a href="">Conférences</a>
					<ul>
						<li><a href="">Vérité dans l'Amour</a></li>
						<li><a href="">Portes Ouvertes</a></li>
						<li><a href="">Séminaires</a></li>
					</ul>
				</li>
				<li><a href="">Podcasts</a></li>
				<li><a href="">Infos</a>
					<ul>
						<li><a href="">Lettre de Prières</a></li>
						<li><a href="">Evènements</a></li>
					</ul>
				</li>
				<li><a href="">Contact</a></li>
			</ul>
		</nav>
	</header>
	<div id="main" role="main">
		<aside class="sidebar">
			<ul>
				<li>
					<fieldset>
						<legend>infos</legend>
						<ul>
							<li><a href=""><img src="img/vda2012inv.jpg" alt="Invitation VDA"></a></li>
							<!--<li><a href=""><img src="img/fblike.jpg" alt="Facebook"></a></li>-->
							<!--<li><a href=""><img src="img/news.jpg" alt="Lettre de nouvelles"></a></li>-->
						</ul>
					</fieldset>
				</li>
				<li>
					<fieldset>
						<legend>liens utiles</legend>
						<ul>
							<li><a href="https://www.facebook.com/pages/Institut-Biblique-Baptiste-Libre-Ibbl/240811165966673"><img src="img/fb.jpg" alt="Facebook">Suivez-nous sur Facebook</a></li>
							<li><a href=""><img src="img/newsletter.jpg" alt="">lettre de nouvelles</a></li>
							<li><a href=""><img src="img/podcast.jpg" alt="">podcasts</a></li>
							<li><a href=""><img src="img/catalogue.jpg" alt="">catalogue</a></li>
							<li><a href=""><img src="img/calendar.jpg" alt="">calendrier</a></li>
						</ul>
					</fieldset>
				</li>
			</ul>
		</aside>
		<div id="content">
<?php if(isset($view) && trim($view) !== '') $this->load->view($view.'_view'); ?>
		</div>
	</div>
	<footer>
		<p>Etablissement Privé d'Enseignement Supérieur de Théologie - Académie de Versailles Loi du 12/07/1876; Art.3 - © IBBL <?php echo date('Y'); ?></p>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

	<!-- scripts concatenated and minified via build script -->
	<script src="js/jquery.foundation.accordion.js"></script>
	<script src="js/jquery.foundation.alerts.js"></script>
	<script src="js/jquery.foundation.buttons.js"></script>
	<script src="js/jquery.foundation.forms.js"></script>
	<script src="js/jquery.foundation.mediaQueryToggle.js"></script>
	<script src="js/jquery.foundation.navigation.js"></script>
	<script src="js/jquery.foundation.orbit.js"></script>
	<script src="js/jquery.foundation.reveal.js"></script>
	<script src="js/jquery.foundation.tabs.js"></script>
	<script src="js/jquery.foundation.tooltips.js"></script>
	<script src="js/jquery.placeholder.js"></script>
	<script src="js/app.js"></script>
	<!-- end scripts -->
</body>
</html><?php
/* End of file main.php */
/* Location: ./application/views/templates/main.php */