<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- a completer -->
  <!-- <meta name="description" content="">
       <meta name="author" content=""  > -->

	<!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?= $this->assetUrl('img/favicon/apple-icon-57x57.png') ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= $this->assetUrl('img/favicon/apple-icon-60x60.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= $this->assetUrl('img/favicon/apple-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= $this->assetUrl('img/favicon/apple-icon-76x76.png') ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= $this->assetUrl('img/favicon/apple-icon-114x114.png') ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= $this->assetUrl('img/favicon/apple-icon-120x120.png') ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= $this->assetUrl('img/favicon/apple-icon-144x144.png') ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= $this->assetUrl('img/favicon/apple-icon-152x152.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $this->assetUrl('img/favicon/apple-icon-180x180.png') ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= $this->assetUrl('img/favicon/android-icon-192x192.png')?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $this->assetUrl('img/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= $this->assetUrl('img/favicon/favicon-96x96.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $this->assetUrl('img/favicon/favicon-16x16.png') ?>">
  <link rel="manifest" href="<?= $this->assetUrl('img/favicon/manifest.json') ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

	<!-- Feuilles de style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
  <link rel="stylesheet" href="<?php echo $this->assetUrl("plc/css/calendar.css")?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/navbar.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/countdown.css') ?>">
  <link rel="stylesheet" href="<?= $this->assetUrl('css/carousel.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/form.css') ?>" >
  <link rel="stylesheet" href="<?= $this->assetUrl('css/cretour.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/footer.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- API reCaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Bouton de scrolling "retour en haut" de la page -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/scrollUp.js') ?>"></script>

	<!-- KONAMI CODE -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/konamiCode.js') ?>"></script>

	<!-- Compteur JS -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/compteur.js') ?>"></script>

	<!-- Countdown JS -->
    <script src="<?= $this->assetUrl('js/countdown/jquery.cookie.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/countdown/jquery.countdown.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/countdown/front.js') ?>"></script>
</head>
<body>
	<header>
		<?php include("header.php"); ?>
	</header>

	<main class="container-fluid">
		<?= $this->section('main_content') ?>
	</main>

	<footer class="footer-basic" >
		<?php	include("footer.php"); ?>
	</footer>

</body>
</html>
