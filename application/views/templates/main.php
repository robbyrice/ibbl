<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<base href="<?php echo base_url(); ?>">
	<title><?php if(isset($title) AND $title != '') echo $title.' | '; echo config_item('site_name'); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.5.3.min.js"></script>
</head>
<body>
	<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header>
		<img alt="logo" src="img/logo.jpg" />
		<nav>
			<ul>
				<li><a href="">Présentation</a></li>
				<li><a href="">Académique</a></li>
				<li><a href="">Conférences</a></li>
				<li><a href="">Podcasts</a></li>
				<li><a href="">Infos</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</nav>
	</header>
	<div role="main">
		<aside class="sidebar">
			<ul>
				<li>infos
					<ul>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</li>
				<li>liens utiles
					<ul>
						<li><a href="">Suivez-nous sur Facebook</a></li>
						<li><a href="">lettre de nouvelles</a></li>
						<li><a href="">podcasts</a></li>
						<li><a href="">catalogue</a></li>
						<li><a href="">calendrier</a></li>
					</ul>
				</li>
			</ul>
		</aside>
		<div class="main_content">
<?php $this->load->view($view.'_view'); ?>
		</div>
	</div>
	<footer>
		<p>Etablissement Privé d'Enseignement Supérieur de Théologie - Académie de Versailles Loi du 12/07/1876; Art.3</p>
		<p>© IBBL <?php echo date('Y'); ?></p>
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