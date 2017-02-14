""<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="carousel-1">
	  <div class="carousel-inner" role="listbox">
			<?php
			$i = 0;
			foreach ($articles as $article):
			?>
	    <div class="item <?php if ($i == 0) { echo 'active'; } ?>">
	        <div class="jumbotron hero-nature carousel-hero" id="bckgrnd-<?=$article['idarticles']?>">
					<style>
						#bckgrnd-<?=$article['idarticles']?>{
							background-image: url("<?= $article['pictures'] ?>");
						}
					</style>
					<section>
	          <h2 class="hero-title"><?= $article['title'] ?></h2>
	          <p class="hero-subtitle"><?= $article['description']."..." ?></p>
	          <p><a class="btn btn-primary btn-lg hero-button" role="button" href="<?=$this->url('article_article', ['id' => $article['idarticles']])?>">Lire l'article</a></p>
					</section>
	        </div>
	    </div>
			<?php
			$i++;
			endforeach;
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
	<!-- countdown-->
	<div id="countdown" class="countdown">
		<h2>Prochain événement dans :</h2>
		<div class="row">
			<div class="countdown-item col-sm-3 col-xs-6">
				<div id="countdown-days" class="countdown-number">&nbsp;</div>
				<div class="countdown-label">jours</div>
			</div>
			<div class="countdown-item col-sm-3 col-xs-6">
				<div id="countdown-hours" class="countdown-number">&nbsp;</div>
				<div class="countdown-label">heures</div>
			</div>
			<div class="countdown-item col-sm-3 col-xs-6">
				<div id="countdown-minutes" class="countdown-number">&nbsp;</div>
				<div class="countdown-label">minutes</div>
			</div>
			<div class="countdown-item col-sm-3 col-xs-6">
				<div id="countdown-seconds" class="countdown-number">&nbsp;</div>
				<div class="countdown-label">secondes</div>
			</div>
		</div>
	</div>

	<div class="audio">
    <audio id="myaudio" controls>
        <source src="<?= $this->assetUrl('audio/Konami.mp3') ?>" type="audio/mp3" />
            <!-- Your browser does not support the audio element. -->
						Votre navigateur ne supporte pas les éléments audio.
    </audio>

<?php $this->stop('main_content') ?>
