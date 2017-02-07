<?php $this->layout('layout', ['title' => 'sign_in']) ?>

<?php $this->start('main_content') ?>
<div class="container">
  <form class="form-signin" method="post" action="test.php">
    <h1>Connexion</h1>
		<img src="<?= $this->assetUrl('img/loginlogo.png') ?>" alt="" class="img-responsive img-circle img-padding hidden-sm hidden-xs">
    <label for="email">Email</label>
    <input type="email" id="email" class="form-control" placeholder="Votre adresse email" required autofocus>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" class="form-control" placeholder="Mot de passe" required>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Ce souvenir de moi
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
  </form>
</div> <!-- /container -->

<?php $this->stop('main_content') ?>
