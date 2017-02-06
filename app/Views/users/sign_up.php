<?php $this->layout('layout', ['title' => 'sign_up']) ?>

<?php $this->start('main_content') ?>

	<div class="container">
		<h2>Inscription</h2>
		<form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Formulaire d'inscription</legend>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="prependedtext"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Nom</span>
			      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="votre nom" type="text" required>
			    </div>

			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="firstname"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Prénom</span>
			      <input id="firstname" name="firstname" class="form-control" placeholder="votre prénom" type="text" required>
			    </div>

			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nickname"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Pseudo</span>
			      <input id="nickname" name="nickname" class="form-control" placeholder="votre pseudo" type="text" required>
			    </div>

			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Email</span>
			      <input id="email" name="email" class="form-control" placeholder="votre adresse email" type="text" required>
			    </div>

			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="birthdate"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Date de naissance</span>
			      <input id="birthdate" name="birthdate" class="form-control" type="date" required>
			    </div>

			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="phonenumber"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Téléphone</span>
			      <input id="phonenumber" name="phonenumber" class="form-control" placeholder="Votre numéro de mobile" type="tel">
			    </div>
			    <small class="help-block">* n'est pas obligatoire</small>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Mot de passe</span>
			      <input id="password" name="password" class="form-control" placeholder="votre mot de passe" type="password" required>
			    </div>

			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="passwordConfirm"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">confirmation MdP</span>
			      <input id="passwordConfirm" name="passwordConfirm" class="form-control" placeholder="Votre mot de passe" type="password" required>
			    </div>

			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="envoyer"></label>
			  <div class="col-md-4">
			    <button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
			  </div>
			</div>

			</fieldset>
			</form>

	</div>
<?php $this->stop('main_content') ?>
