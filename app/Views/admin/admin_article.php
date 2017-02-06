

<?php $this->layout('layout', ['title' => 'Ajout Article']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajout Article</h2>

	<form action="<?= $this->url('admin_list_articles') ?>" method="POST">
		<div class="form-group">

<!-- 	########################		DEBUT	TITRE	 			########################	-->
			<label for="title">Titre de l'article : </label>
			<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" >
		</div>
<!-- 	########################		FIN		TITRE	 			########################	-->

<!-- 	########################		DEBUT	PUBLISHDATE	 		########################	-->
		<div class="form-group">
			<label for="publishdate">Date de l'article : </label>
			<input type="date" name="publishdate" id="publishdate" placeholder="Saisissez le titre" class="form-control" >
		</div>
<!-- 	########################		FIN		PUBLISHDATE	 		########################	-->

<!-- 	########################		DEBUT	CHECKBOX GAMES		########################	-->
		<label for="game">game(s) : </label>
		<div class="form-group">
			<input type="checkbox" name="starcraft2" value="1" class="form-control" >
			<label for="starcraft2">Starcraft 2 </label>
		</div>

		<div class="form-group">
			<input type="checkbox" name="dota2" value="2" class="form-control" >
			<label for="dota2">Dota 2 </label>
		</div>

		<div class="form-group">
			<input type="checkbox" name="csGo" value="3" class="form-control" >
			<label for="csGo"> CS : GO </label>
		</div>
	
		<div class="form-group">
			<input type="checkbox" name="other" value="4" class="form-control" >
			<label for="autre"> Autres </label>
		</div>
<!-- 	########################		FIN		CHECKBOX GAMES	 	########################	-->
	
<!-- 	########################		DEBUT	PICTURES	 		########################	-->
		<div class="form-group">
			<label for="image">Image : </label>
			<input type="file" name="picture" id="picture" placeholder="Choisissez une image" class="	form-control" >
		</div>
<!-- 	########################		FIN		PICTURES			########################	-->

<!-- 	########################		DEBUT	AUTOR	 			########################	-->
		<div class="form-group">	
			<label for="autor">Auteur de l'article : </label>
			<input type="text" name="autor" id="autor" placeholder="Saisissez un auteur" class="	form-control" >
		</div>
<!-- 	########################		FIN		AUTOR	 			########################	-->

<!-- 	########################		DEBUT	TEXTE	 			########################	-->
		<div class="form-group">	
			<label for="image">Texte : </label>
		</div>
			<textarea name="text" id="text" cols="30" rows="10" class="form-control" ></textarea>
<!-- 	########################		FIN		TEXTE	 			########################	-->

<!-- 	########################		DEBUT	SUBMIT				########################	-->
		<div class="form-group">
			<input type="submit" value="valid" class="form-control" >
		</div>
<!-- 	########################		FIN		SUBMIT	 			########################	-->
	</form>

	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>

