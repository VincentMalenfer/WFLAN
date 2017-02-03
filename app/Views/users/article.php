<?php $this->layout('layout', ['title' => 'Les articles']) ?>

<?php $this->start('main_content') ?>

<?php  if (isset($article)): ?>

<div class="container">
	<h1><?= $article['title'] ?></h1>
	<article class="txtArticle">
		<img src="<?= $article['pictures'] ?>" alt="" class="img-responsive">
		<p><?= $article['text'] ?></p>
		<hr>
		<p class="infoArticle"></p>
		<small class="form-text text-muted">Par <?= $article['autor'] ?>, le <?= $article['publishdate'] ?>.</small>
	</article>
</div>

<?php endif; ?>

<?php $this->stop('main_content') ?>
