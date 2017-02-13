<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="carousel-1">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<?php foreach ($articles as $article):?>
					<div class="jumbotron hero-nature carousel-hero">
						<div class="fill" style="background-image:url('<?= $article['pictures'] ?>');"></div>
						<h2 class="hero-title"><?= $article['title'] ?></h2>
						<p class="hero-subtitle"><?= $article['description']."..." ?></p>
						<p><a class="btn btn-primary btn-lg hero-button" role="button" href="<?=$this->url('article_article', ['id' => $article['idarticles']])?>">Lire l'article</a></p>
					</div>
			</div>

			 <div class="item">
				<div class="jumbotron hero-photography carousel-hero">
					<h2 class="hero-title">Hero Photography</h2>
					<p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
				</div>
			</div>
			<div class="item">
				<div class="jumbotron hero-technology carousel-hero">
					<h2 class="hero-title">Hero Technology</h2>
					<p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
				</div>
			</div>
		</div>
<?php endforeach;?>
		<div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
				 <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
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
            <!-- Your browser does not support the audio element. -->
						Votre navigateur ne supporte pas les éléments audio.
    </audio>
</div>
<?php $this->stop('main_content') ?>
