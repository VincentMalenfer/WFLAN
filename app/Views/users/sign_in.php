<?php $this->layout('layout', ['title' => 'sign_in']) ?>

<?php $this->start('main_content') ?>
	<h2>Connexion</h2>
	<div class="container">
		<form class="row" action="index.html" method="post">
			<div class="form-group">
				<label for="email">Votre adresse email </label>
				<input type="email" name="email" >
			</div>
			<div class="form-group">
				<label for="password">Votre mot de passe </label>
				<input type="password" name="password" >
			</div>
			<div class="form-group">
				<input type="submit">
			</div>
		</form>
	</div>

<?php $this->stop('main_content') ?>
