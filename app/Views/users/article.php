<?php $this->layout('layout', ['title' => 'Article']) ?>

<?php $this->start('main_content') ?>
	<h2>Article</h2>
	<p>Vous avez atteint la page d'article. Bravo.</p>

<?php  if (isset($article)): ?>

<div class="container-fluid">
	<article class="txtArticle col-xs-8 col-xs-offset-2">
		<h1><?= $article['title'] ?></h1>
		<img src="<?= $article['pictures'] ?>" alt="" class="img-responsive">
		<p><?= $article['text'] ?></p>
		<hr>
		<p class="infoArticle"></p>

		<small class="form-text text-muted">Par <?= $article['author'] ?>, le <?= $article['publishdate'] ?>.</small>
	</article>

	<!--Side Nav Bar -->
    <nav class="col-xs-2 bs-docs-sidebar sidebar-custom">
        <ul id="sidebar" class="nav nav-stacked fixed">
            <li>
                <a href="#GroupA">Group A</a>
                <ul class="nav nav-stacked">
                    <li><a href="#GroupASub1">Sub-Group 1</a></li>
                    <li><a href="#GroupASub2">Sub-Group 2</a></li>
                </ul>
            </li>
            <li>
                <a href="#GroupB">Group B</a>
                <ul class="nav nav-stacked">
                    <li><a href="#GroupBSub1">Sub-Group 1</a></li>
                    <li><a href="#GroupBSub2">Sub-Group 2</a></li>
                </ul>
            </li>
            <li>
                <a href="#GroupC">Group C</a>
                <ul class="nav nav-stacked">
                    <li><a href="#GroupCSub1">Sub-Group 1</a></li>
                    <li><a href="#GroupCSub2">Sub-Group 2</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<?php endif; ?>

<?php $this->stop('main_content') ?>
