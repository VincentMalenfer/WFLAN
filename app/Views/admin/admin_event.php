<?php $this->layout('layout', ['title' => 'Espace Admin']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajout Event</h2>

	<form action="<?= $this->url('admin_result') ?>" method="POST">
		<div class="form-group">
			<label for="title">Titre de l'event : </label>
			<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" >
		</div>

		<div class="form-group">	
			<label for="image">Texte : </label>
			<textarea name="texte" id="texte" cols="30" rows="10" class="form-control" ></textarea>
		</div>

	<!-- 	DEBUT	CHECKBOX	 -->
			<label for="game">game(s) : </label>
		<div class="form-group">
			<input type="checkbox" name="starcraft2" value="starcraft2" class="form-control" >
			<label for="starcraft2">Starcraft 2 </label>
		</div>

		<div class="form-group">
			<input type="checkbox" name="dota2" value="dota2" class="form-control" >
			<label for="dota2">Dota 2 </label>
		</div>

		<div class="form-group">
			<input type="checkbox" name="csGo" value="csGo" class="form-control" >
			<label for="csGo"> CS : GO </label>
		</div>
	
		<div class="form-group">
			<input type="checkbox" name="other" value="other" class="form-control" >
			<label for="autre"> Autres </label>
		</div>
	<!-- 	FIN	CHECKBOX	 -->

		<div class="form-group">
			<label for="date"> Date </label>
			<input type="date" name="date" value="date" class="form-control" >
		</div>

		<div class="form-group">
			<label for="location"> Location </label>
			<input type="text" name="location" class="form-control" >
		</div>

		<div class="form-group">
			<input type="submit" value="valid" class="form-control" >
		</div>
	</form>

	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>
