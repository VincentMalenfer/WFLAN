<?php $this->layout('layout', ['title' => 'sign_up']) ?>

<?php $this->start('main_content') ?>

<div class="container">
	<h2>Inscription</h2>
	<form class="form-horizontal" method="POST" action="<?= $this->url('users_sign_up_form') ?>">
		<fieldset>
			<legend>Formulaire d'inscription</legend>
			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Nom</span>
			      <input id="lastname" name="lastname" class="form-control" placeholder="Votre nom" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Prénom</span>
			      <input id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Pseudo</span>
			      <input id="nickname" name="nickname" class="form-control" placeholder="Votre pseudo" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Email</span>
			      <input id="email" name="email" class="form-control" placeholder="Votre adresse email" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Date de naissance</span>
			      <input id="birthdate" name="birthdate" class="form-control" type="date" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Téléphone</span>
			      <input id="phonenumber" name="phonenumber" class="form-control" placeholder="Votre numéro de mobile" type="tel">
			    </div>
			    <small class="help-block">* n'est pas obligatoire</small>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">Mot de passe</span>
			      <input id="password" name="password" class="form-control" placeholder="Votre mot de passe" type="password" required>
			    </div>
			  </div>
			</div>

			<!-- Prepended text-->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon span-bold">confirmation MdP</span>
			      <input id="passwordConfirm" name="passwordConfirm" class="form-control" placeholder="Votre mot de passe" type="password" required>
			    </div>
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
			  </div>
			</div>
		</fieldset>
	</form>
</div>

<!-- <script type="text/javascript">
  var checkMdp;//on déclare
  window.onload = function() {
    var mdp = document.getElementById("password"),
    mdp2 = document.getElementById("passwordConfirm");
    checkMdp = function checkMdp() {//redonner un nom est optionnel. C'est juste que je préfère
        if (password.value !== passwordConfirm.value) {
            var msg = document.createTextNode("Confirmation du mot de passe invalide");
            document.getElementById("mdperror").appendChild(msg);
        }
    }
	};

</script> -->

<?php $this->stop('main_content') ?>
