<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>

<div class="container">

  <!-- Affichage des messages d'erreurs et de success -->
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Vous êtes maintenant connecté !
  </div>
  <?php endif;?>

  <form class="form-signin" method="post" action="<?= $this->url('users_sign_in') ?>">
    <h1>Connexion</h1>
		<img src="<?= $this->assetUrl('img/loginlogo.png') ?>" alt="logo" class="img-responsive img-circle img-padding hidden-sm hidden-xs">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email"  autofocus>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Votre Mot de passe">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    <!-- <small class="help-block"><a href="#">j'ai oublié mon mot de passe</a></small> -->
  </form>
</div> <!-- /container -->

<?php
	 // on nettoie les données précédentes
	unset($_SESSION['inputs']);
	unset($_SESSION['success']);
	unset($_SESSION['errors']);
?>

<?php $this->stop('main_content') ?>
