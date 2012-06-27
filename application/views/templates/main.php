<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<base href="<?php echo base_url(); ?>">
	<title><?php if(isset($title) AND $title != '') echo $title.' | '; echo config_item('site_name'); ?></title>
	<meta name="description" content="Le site de l'Institut Biblique Baptiste Libre, une école supérieure de Théologie. L'IBBL est un centre de formation pastorale et biblique se trouvant à Limay dans les Yvelines. Nos professeurs sont tous des pasteurs ou missionaires oeuvrant en France et à l'étranger.">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.5.3.min.js"></script>
</head>
<body>
	<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header>
		<a href="<?php echo base_url(); ?>"><img src="img/logo.jpg" alt="logo" id="logo"></a>
		<div id="entete"></div>
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
<?php $this->load->view($view.'_view'); ?>
		</div>
	</div>
	<footer>
		<p>Etablissement Privé d'Enseignement Supérieur de Théologie - Académie de Versailles Loi du 12/07/1876; Art.3 - © IBBL <?php echo date('Y'); ?></p>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

	<!-- scripts concatenated and minified via build script -->
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<!-- end scripts -->
</body>
</html><?php
/* End of file main.php */
/* Location: ./application/views/templates/main.php */