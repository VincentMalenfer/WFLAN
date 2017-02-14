<?php $this->layout('layout', ['title' => 'Article']) ?>
<?php $this->start('main_content') ?>

<?php  if (isset($article)): ?>
<div class="container-fluid">

  <article class="txtArticle col-xs-8 col-xs-offset-2">
    <h1><?= $article['title'] ?></h1>
    <div class="container">
      <img src="<?= $article['pictures'] ?>" alt="<?= $article['description_pictures'] ?>" class="img-responsive">
    </div>
    <p><?= $article['text'] ?></p>
    <hr>
    <p class="infoArticle"></p>
    <small class="form-text text-muted">Par <?= $article['author'] ?>, le <?= $article['publishdate'] ?>.</small>
    </article>

    <!--Sidebar -->
    <nav class="col-xs-2 bs-docs-sidebar sidebar-custom">
      <ul id="sidebar" class="nav nav-stacked fixed style="padding-bottom: 10px;"">
        <h3>Voir aussi : </h3>
        <li>
          <ul class="nav nav-stacked fixed">
          <?php foreach ($slidListArticles as $slidListArticle) {?>
            <li><a href="<?=$this->url('article_article',['id' => $slidListArticle['idarticles']])?>" class="sideCSS">
              <?= $slidListArticle['title'] ?> </a></li>
              <?php  } ?>
          </ul>
        </li>
        <a href="<?= $this->url('article_list_articles'); ?>" class="btn btn-default center-block">Retour à la liste des articles</a>
      </ul>
    </nav>
</div>
<?php endif; ?>


<?php $this->stop('main_content') ?>
