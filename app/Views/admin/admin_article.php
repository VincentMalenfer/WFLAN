<?php $this->layout('layout', ['title' => 'Ajout Article']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajout Article</h2>

	<form action="<?= $this->url('admin_result') ?>" method="POST">
		<div class="form-group">
			<label for="title">Titre de l'article : </label>
			<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" >
		</div>

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
			<input type="checkbox" name="Other" value="Other" class="form-control" >
			<label for="autre"> Autres </label>
		</div>
	
		<div class="form-group">
			<label for="image">Image : </label>
			<input type="file" name="image" id="image" placeholder="Choisissez une image" class="	form-control" >
		</div>
	
		<div class="form-group">	
			<label for="autor">Auteur de l'article : </label>
			<input type="text" name="autor" id="autor" placeholder="Saisissez un auteur" class="	form-control" >
		</div>
		<div class="form-group">	
			<label for="image">Texte : </label>
		</div>
			<textarea name="texte" id="texte" cols="30" rows="10" class="form-control" ></textarea>

		<div class="form-group">
			<input type="submit" value="valid" class="form-control" >
		</div>
	</form>

	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>
