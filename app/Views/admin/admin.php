<?php $this->layout('layout', ['title' => 'Espace Admin']) ?>

<?php $this->start('main_content') ?>

	<h1>Espace Admin</h1>
	<p>Vous avez atteint la page de Espace Admin. Bravo.</p>

	<p>
		<a href="<?= $this->url('admin_article') ?>"> - Ajouter article</a>
	</p>
	<p>
		<a href="<?= $this->url('admin_event') ?>"> - Ajouter event</a>
	</p>

<?php $this->stop('main_content') ?>
