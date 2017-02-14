<?php $this->layout('layout', ['title' => 'Les articles']) ?>

<?php $this->start('main_content') ?>
<?php  if (isset($articles)){ ?>
 <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Les Articles</h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- liste articles-->
        <?php foreach ($articles as $article): ?>
        <div class="row">
            <div class="col-md-7">
                <a href="<?=$this->url('article_article',['id' => $article['idarticles']])?>">
                    <img class="img-responsive" src="<?= $this->assetUrl($article['pictures']) ?>" alt="$article['decriptionPictures'] ">
                </a>
            </div>
            <div class="col-md-5">
                <h3> <?= $article['title'] ?> </h3>


                <p> <?= $article['description']."..." ?> </p>
                <a class="btn btn-primary" href="<?=$this->url('article_article', ['id' => $article['idarticles']])?>">lire l'article<span class="glyphicon glyphicon-chevron-right"></span></a>

                <!-- si le role de l'utilistateur est admin -->

            </div>
        </div>
        <!-- /.row -->
        <hr>
        <?php
            endforeach;
        ?>
    </div>

    <?php };
$this->stop('main_content');?>
