
<?php $this->layout('layout', ['title' => 'Espace Admin']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajout Event</h2>

	<form action="<?= $this->url('admin_list_events') ?>" method="POST">
		<div class="form-group">
<!-- 	########################		DEBUT	NOM	 			########################	-->
			<label for="name">Nom de l'event : </label>
			<input type="text" name="name" id="name" placeholder="Saisissez le nom" class="form-control" >
		</div>
<!-- 	########################		FIN	NOM	 				########################	-->

<!-- 	########################		DEBUT	DATE	 		########################	-->
			<label for="date">Date de l'event : </label>
		<div class="form-group">
			<input type="date" name="date" id="date" class="form-control" >
			<label for="starcraft2">Starcraft 2 </label>
		</div>
<!-- 	########################		FIN	DATE				########################	-->

<!-- 	########################		DEBUT	LOCATION		########################	-->
		<div class="form-group">
			<label for="location">Location </label>
			<input type="text" name="location" class="form-control" >
		</div>
<!-- 	########################		FIN	LOCATION	 		########################	-->

<!-- 	########################		DEBUT	DESCRIPTION	 	########################	-->
		<div class="form-group">	
			<label for="desc">Description : </label>
			<textarea type="text" name="desc" id="desc" cols="30" rows="10" class="form-control" ></textarea>
		</div>
<!-- 	########################		FIN	DESCRIPTION	 		########################	-->

<!-- 	########################		DEBUT	CHECKBOX GAMES	########################	-->
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
			<label for="other"> Autres </label>
		</div>
<!-- 	########################		FIN		CHECKBOX GAMES	########################	-->

<!-- 	########################		DEBUT	SUBMIT			########################	-->
		<div class="form-group">
			<input type="submit" value="valid" class="form-control" >
		</div>
<!-- 	########################		FIN		SUBMIT	 		########################	-->
	</form>

	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>

