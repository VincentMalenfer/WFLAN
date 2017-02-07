<?php $this->layout('layout', ['title' => 'sign_up']) ?>

<?php $this->start('main_content') ?>

<div class="container">
	<h2>Inscription</h2>
	<form class="form-horizontal">
		<fieldset>
			<legend>Formulaire d'inscription</legend>
			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="prependedtext"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Nom</span>
			      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Votre nom" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="firstname"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Prénom</span>
			      <input id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nickname"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Pseudo</span>
			      <input id="nickname" name="nickname" class="form-control" placeholder="Votre pseudo" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email"></label>
			  <div class="col-md-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Email</span>
			      <input id="email" name="email" class="form-control" placeholder="Votre adresse email" type="text" required>
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
			      <input id="password" name="password" class="form-control" placeholder="Votre mot de passe" type="password" required>
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

			<div class="form-group">
			  <label class="col-md-4 control-label" for="captchaOperation"></label>
			    <div class="col-md-4">
						<small class="help-block">Je ne suis pas un robot :</small>
						<div class="input-group">
							<span class="input-group-addon span-bold" id="captchaOperation"></span>
				      <input type="text" class="form-control" placeholder="Entrer le resultat de l'addition"name="captcha"
				          data-fv-callback="true"
				          data-fv-callback-callback="checkCaptcha"
				          data-fv-callback-message="Wrong answer" />
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


<!-- JS Securité antirobot -->

<script>
// Check the captcha
function checkCaptcha(value, validator, $field) {
    var items = $('#captchaOperation').html().split(' '),
        sum   = parseInt(items[0]) + parseInt(items[2]);
    return value == sum;
}

$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 100), '='].join(' '));

    $('#basicBootstrapForm').formValidation();
});
</script>

<?php $this->stop('main_content') ?>
