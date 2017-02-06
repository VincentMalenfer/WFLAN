
<?php $this->layout('layout', ['title' => 'Les articles']) ?>

<?php $this->start('main_content') ?>

<?php #  if (isset($articles)){ ?>
 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Les Articles
                    <small>Vous avez atteint la page des Articles. Bravo.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- liste articles-->
        <?php foreach ($articles as $article): ?>
        <div class="row">
            <div class="col-md-7">
                <a href="<?=$this->url('users_article',['id' => $article['idarticles']])?>">
                    <img class="img-responsive" src="<?= $article['pictures'] ?>" alt="$article['decriptionPictures'] ">
                </a>
            </div>
            <div class="col-md-5">
                <h3> <?= $article['title'] ?> </h3>

                <p> <?= $article['description'] ?> </p>
                <a class="btn btn-primary" href="<?=$this->url('users_article', ['id' => $article['idarticles']])?>">aller sur l article <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <?php
            endforeach;
        ?>


      <!-- creer  decriptionPictures  description dans la table articles-->




    </div>


	<?php # }; ?>
<?php $this->stop('main_content');?>
