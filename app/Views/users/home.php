<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="carousel-1">
		<div class="carousel-inner" role="listbox">
			<?php foreach ($articles as $article): ?>
			<div class="item">
				<div class="jumbotron hero-nature carousel-hero">
					<h2 class="hero-title"><?= $article['title'] ?></h2>
					<p class="hero-subtitle"><?= $article['text'] ?></p>
					<p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lire l'article</a></p>
				</div>
			</div>
		<?php endforeach; ?>
			<div class="item">
				<div class="jumbotron hero-photography carousel-hero">
					<h2 class="hero-title"><?= $article['title'] ?></h2>
					<p class="hero-subtitle"><?= $article['text'] ?></p>
					<p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lire l'article</a></p>
				</div>
			</div>
			<div class="item">
				<div class="jumbotron hero-technology carousel-hero">
					<h2 class="hero-title"><?= $article['title'] ?></h2>
					<p class="hero-subtitle"><?= $article['text'] ?></p>
					<p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lire l'article</a></p>
				</div>
			</div>
		</div>
		<div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Pre</span></a>
				 <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Sui</span></a>
		</div>
		<ol class="carousel-indicators">
			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-1" data-slide-to="1"></li>
			<li data-target="#carousel-1" data-slide-to="2"></li>
		</ol>
	</div>

	<!-- CountDown prochain event -->
  <div id="countdown" class="countdown container">
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

	</section>
	<div class="audio">
    <audio id="myaudio" controls>
        <source src="<?= $this->assetUrl('audio/Konami.mp3') ?>" type="audio/mp3" />
            Your browser does not support the audio element.
    </audio>
</div>
<?php $this->stop('main_content') ?>
