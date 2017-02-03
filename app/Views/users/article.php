<?php $this->layout('layout', ['title' => 'Les articles']) ?>

<?php $this->start('main_content') ?>
<<<<<<< HEAD

<?php foreach ($articles as $article): ?>

<div class="container">
	<h1><?= $article['titre'] ?></h1>
	<article class="txtArticle">
		<img src="<?= $article['pictures'] ?>" alt="" class="img-responsive">
		<p></p>
	</article>
</div>
=======
	<h2>Article</h2>
	<p>Vous avez atteint la page d'article. Bravo.</p>
	
	<figure>
		<img src="image.jpg" alt="" />
		<figcaption>Légende associée</figcaption>
		
	</figure>

	
>>>>>>> origin/Thibauld

<?php $this->stop('main_content') ?>
