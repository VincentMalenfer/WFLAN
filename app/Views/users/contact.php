<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

<div class="container">
	<h1>Contact</h1>

	<!-- Affichage des messages d'erreurs et de success -->
	<?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>

	<form id="basicBootstrapForm" class="form-horizontal contactCss" action="<?= $this->url('traitementContact') ?>" method="POST">
		<fieldset>

			<!-- Champ nom -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon">Nom</span>
			      <input id="lastname" name="lastname" class="form-control" placeholder="Votre nom" type="text" >
			    </div>
				</div>
			</div>

			<!-- Champ prénom -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon">Prénom</span>
			      <input id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" type="text" >
					</div>
				</div>
			</div>

			<!-- Champ Email -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <div class="input-group">
			      <span class="input-group-addon">Email</span>
			      <input id="email" name="email" class="form-control" placeholder="Votre adresse email" type="email" >
			    </div>
				</div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
			  <div class="col-sm-offset-4 col-sm-4">
			    <textarea class="form-control" id="textarea" name="textarea" placeholder="Votre message"></textarea>
			  </div>
			</div>

			<!-- reCaptcha API -->
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<div class="col-md-6">
						<div class="g-recaptcha" name="recaptcha" data-sitekey="6LeprRQUAAAAANaL1d0A7ywc8Sl6ldhbmzrGZBH6"></div>
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

<?php
	 // on nettoie les données précédentes
	unset($_SESSION['inputs']);
	unset($_SESSION['success']);
	unset($_SESSION['errors']);
?>

<?php $this->stop('main_content') ?>
