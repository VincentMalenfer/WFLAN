<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
	<h2>Contact</h2>
	<p>Vous avez atteint la page de contact.</p>
	<div class="container">
		<form class="row" action="index.html" method="post">
			<div class="form-group">
				<input type="text" name="lastname" placeholder="votre nom">
			</div>
			<div class="form-group">
				<input type="text" name="firstname" placeholder="votre prénom">
			</div>
			<div class="form-group">
				<input type="text" name="nickname" placeholder="votre pseudo">
			</div>
			<div class="form-group">
				<input type="email" name="email" placeholder="votre adresse email">
			</div>
			<div class="form-group">
				<textarea name="contactMessage" placeholder="Votre message... "rows="8" cols="80"></textarea>
			</div>
			<div class="form-group">
				<input type="submit">
			</div>
		</form>
	</div>


<?php $this->stop('main_content') ?>
