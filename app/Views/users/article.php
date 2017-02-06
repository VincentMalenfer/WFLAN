<?php $this->layout('layout', ['title' => 'Article']) ?>

<?php $this->start('main_content') ?>
	<h2>Article</h2>
	<p>Vous avez atteint la page d'article. Bravo.</p>
	
	<figure>
		<img src="image.jpg" alt="" />
		<figcaption>Légende associée</figcaption>
	</figure>

	

<?php $this->stop('main_content') ?>
