<?php $this->layout('layout', ['title' => 'sign_up']) ?>

<?php $this->start('main_content') ?>
	<h2>Inscription</h2>
	<p>Vous avez atteint la page d'inscription'.</p>
	<div class="container">
		<form class="row" action="index.html" method="post">
			<div class="form-group">
				<label for="lastname">Votre nom </label>
				<input type="text" name="lastname">
			</div>
			<div class="form-group">
				<label for="firstname">Votre prénom </label>
				<input type="text" name="firstname">
			</div>
			<div class="form-group">
				<label for="nickname">Votre pseudo </label>
				<input type="text" name="nickname" >
			</div>
			<div class="form-group">
				<label for="email">Votre adresse email </label>
				<input type="email" name="email" >
			</div>
			<div class="form-group">
				<label for="phone">Votre numéro de téléphone </label>
				<input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="phone">
				<small class="form-text text-muted">* n'est pas obligatoire</small>
			</div>
			<div class="form-group">
				<label for="birthdate">Votre date de naissance</label>
				<input type="date" name="birthdate">
			</div>
			<div class="form-group">
				<label for="password">Votre mot de passe </label>
				<input type="password" name="password" >
			</div>
			<div class="form-group">
				<label for="passwordConfirm">Confirmation de votre mot de passe </label>
				<input type="passwordConfirm" name="passwordConfirm" >
			</div>
			<div class="form-group">
				<textarea name="contactMessage" placeholder="Votre message..." style="width:auto"></textarea>
			</div>
			<div class="form-group">
				<input type="submit">
			</div>
		</form>
	</div>
<?php $this->stop('main_content') ?>
