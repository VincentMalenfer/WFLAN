<?php $this->layout('layout', ['title' => 'admin Article']) ?>

<?php $this->start('main_content') ?>
<ul class="nav nav-tabs">

  <li class="active"><a data-toggle="tab" href="<?= $this->url('admin_add_article')?>">ajouter un article</a></li>
  <li><a data-toggle="tab" href="<?=$this->url('users_list_articles')?>">liste d'articles(modification supression)</a></li>
  
</ul>

<div class="tab-content">

<div id="addArticle" class="tab-pane fade in active">
	<?= $this->url('admin_article') ?>
</div>
<div id="listeArticles" class="tab-pane fade">
  <?= $this->url('list_articles') ?>
</div>



	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>