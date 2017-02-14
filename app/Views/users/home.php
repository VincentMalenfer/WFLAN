<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="carousel-1">
	  <div class="carousel-inner" role="listbox">
			<?php
			$i = 0;
			// if (isset($articles)) {
			foreach ($articles as $article):
			?>
	    <div class="item <?php if ($i == 0) { echo 'active'; } ?>">
	        <div class="jumbotron hero-nature carousel-hero" id="bckgrnd-<?=$article['idarticles']?>">
					<style>
						#bckgrnd-<?=$article['idarticles']?>{
							background-image: url("<?= $this->assetUrl($article['pictures']) ?>");
						}
					</style>
					<section class="container">
	          <h2 class="hero-title"><?= $article['title'] ?></h2>
	          <p class="hero-subtitle"><?= $article['description']."..." ?></p>
	          <p><a class="btn btn-primary btn-lg hero-button" role="button" href="<?=$this->url('article_article', ['id' => $article['idarticles']])?>">Lire l'article</a></p>
					</section>
	        </div>
	    </div>
			<?php
			$i++;
			endforeach;
			// }
			?>

	  <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
	       <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
	  </div>
	  <ol class="carousel-indicators">
			<?php
			$i = 0;
			foreach ($articles as $article):
			?>
	    <li data-target="#carousel-1" data-slide-to="<?= $i ?>" class="<?php if ($i == 0) { echo 'active'; } ?>"></li>
			<?php
			$i++;
			endforeach;
			?>
	  </ol>
	</div>
</div>
	<!-- CountDown prochain event -->
  <!-- <div id="countdown" class="countdown container"> -->
		<!-- <h2>Prochain événement dans :</h2> -->
    <!-- <div class="row"> -->
      <!-- <div class="countdown-item col-sm-3 col-xs-6"> -->
        <!-- <div id="countdown-days" class="countdown-number">&nbsp;</div> -->
				<!-- <div class="countdown-label">jours</div> -->
			<!-- </div> -->
      <!-- <div class="countdown-item col-sm-3 col-xs-6"> -->
        <!-- <div id="countdown-hours" class="countdown-number">&nbsp;</div> -->
				<!-- <div class="countdown-label">heures</div> -->
      <!-- </div> -->
      <!-- <div class="countdown-item col-sm-3 col-xs-6"> -->
        <!-- <div id="countdown-minutes" class="countdown-number">&nbsp;</div> -->
				<!-- <div class="countdown-label">minutes</div> -->
      <!-- </div> -->
      <!-- <div class="countdown-item col-sm-3 col-xs-6"> -->
        <!-- <div id="countdown-seconds" class="countdown-number">&nbsp;</div> -->
				<!-- <div class="countdown-label">secondes</div> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->

	<div class="compteur" id="affichage"></div>

	<script type="text/javascript">
		$(function(){

		function CompteARebours()
		{
		var date_actuelle = new Date(); // On déclare la date d'aujourd'hui.

		var chrono = new Date(<?= $start['start']?>); // On déclare la date.
		var tps_restant = chrono.getTime() - date_actuelle.getTime(); // Temps restant en millisecondes
		//============ CONVERSIONS
		var s_restantes = tps_restant / 1000; // On convertit en secondes
		var i_restantes = s_restantes / 60;// On convertit en minutes
		var H_restantes = i_restantes / 60;// On convertit en heures
	 	var d_restants = H_restantes / 24;// On convertit en jours
		s_restantes = Math.floor(s_restantes % 60); // Secondesrestantes
		i_restantes = Math.floor(i_restantes % 60); // Minutes restantes
		H_restantes = Math.floor(H_restantes % 24); // Heures restantes
	 	d_restants = Math.floor(d_restants); // Jours restants

		var mois_fr = new Array('Janvier', 'Février', 'Mars', 'Avril',
		'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre',
		'Novembre', 'Décembre');

		var texte = '<h2>Prochain événement dans :</h2><div id="countdown" class="countdown container"><div class="row"><div class="countdown-item col-sm-3 col-xs-6"><div id="countdown-days" class="countdown-number">'+ d_restants+'</div><div class="countdown-label">jours</div></div><div class="countdown-item col-sm-3 col-xs-6"><div id="countdown-hours" class="countdown-number">'+H_restantes+'</div><div class="countdown-label">heures</div></div><div class="countdown-item col-sm-3 col-xs-6"><div id="countdown-minutes" class="countdown-number">'+i_restantes+'</div><div class="countdown-label">minutes</div></div><div class="countdown-item col-sm-3 col-xs-6"><div id="countdown-seconds" class="countdown-number">'+s_restantes+'</div><div class="countdown-label">secondes</div></div></div></div>';

		$("#affichage").html(texte);
		}
		setInterval(CompteARebours, 1000); // Rappel de la fonction toutes les 1000 millisecondes (toutes les secondes quoi !).
		});
	</script>

	<div class="audio">
    <audio id="myaudio" controls>
        <source src="<?= $this->assetUrl('audio/Konami.mp3') ?>" type="audio/mp3" />
            <!-- Your browser does not support the audio element. -->
						Votre navigateur ne supporte pas les éléments audio.
    </audio>

<?php $this->stop('main_content') ?>
