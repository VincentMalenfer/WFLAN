<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

<div class="container">
	<h1>Contact</h1>
	<form class="form-horizontal">
		<fieldset>

		<!-- Prepended text-->
		<div class="form-group">
		  <div class="col-sm-offset-4 col-sm-4">
		    <div class="input-group">
		      <span class="input-group-addon">Nom</span>
		      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Votre nom" type="text" required>
		    </div>

		  </div>
		</div>

		<!-- Prepended text-->
		<div class="form-group">
		  <div class="col-sm-offset-4 col-sm-4">
		    <div class="input-group">
		      <span class="input-group-addon">Prénom</span>
		      <input id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" type="text" required>
		    </div>

		  </div>
		</div>

		<!-- Prepended text-->
		<div class="form-group">
		  <div class="col-sm-offset-4 col-sm-4">
		    <div class="input-group">
		      <span class="input-group-addon">Email</span>
		      <input id="email" name="email" class="form-control" placeholder="Votre adresse email" type="email" required>
		    </div>

		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <div class="col-sm-offset-4 col-sm-4">
		    <textarea class="form-control" id="textarea" name="textarea">Votre message</textarea>
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

<?php $this->stop('main_content') ?>
