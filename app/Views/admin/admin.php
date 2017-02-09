<?php $this->layout('layout', ['title' => 'Espace Admin']) ?>

<?php $this->start('main_content') ?>

<div class="admin">
<!-- ########## 	DEBUT CONTAINER 	########## -->
	<div class="container">
		<h1>Espace Admin</h1>

		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#AddArticle"> Ajouter article</a></li>
		  <li><a data-toggle="tab" href="#AddEvent"> Ajouter event</a></li>
		</ul>

		<div class="tab-content">
		  	<div id="AddArticle" class="tab-pane fade in active">

				<h2>Article</h2>
				<form class="form-horizontal" action="<?= $this->url('users_list_articles') ?>" method="POST">
					<fieldset>
			<!-- 	########################		DEBUT	TITRE	 			########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="title">Titre de l'article : </label>
									<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		TITRE	 			########################	-->

			<!-- 	########################		DEBUT	PUBLISHDATE	 		########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="publishdate">Date de l'article : </label>
									<input type="date" name="publishdate" id="publishdate" placeholder="Saisissez le titre" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		PUBLISHDATE	 		########################	-->

			<!-- 	########################		DEBUT	CHECKBOX GAMES		########################	-->
						<div class="form-group">
						  	<label class="col-sm-offset-4 col-sm-4" for="checkboxes">jeu(x) : </label>
						  	<div class="col-sm-offset-4 col-sm-4">
						  	  	<label class="checkbox-inline" for="checkboxes-0">
						  	  	  	<input type="checkbox" name="starcraft2" id="checkboxes-0" value="1">
						  	  	 	starcraft2
						  	  	</label>
						  	  	<label class="checkbox-inline" for="checkboxes-1">
						  	  	  	<input type="checkbox" name="dota2" id="checkboxes-1" value="2">
						  	  	  	dota2
						  	  	</label>
						  	  	<label class="checkbox-inline" for="checkboxes-2">
						  	  	  	<input type="checkbox" name="csGo" id="checkboxes-2" value="3">
						  	  	  	csGo
						  	  	</label>
						  	  	<label class="checkbox-inline" for="checkboxes-3">
						  	  	  	<input type="checkbox" name="other" id="checkboxes-3" value="4">
						  	  	  	other
						  	  	</label>
						  	</div>
						</div>
			<!-- 	########################		FIN		CHECKBOX GAMES	 	########################	-->
					
			<!-- 	########################		DEBUT	PICTURES	 		########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="image">Image : </label>
									<input type="file" name="picture" id="picture" placeholder="Choisissez une image" class="	form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		PICTURES			########################	-->

			<!-- 	########################		DEBUT	AUTOR	 			########################	-->
						<div class="form-group">	
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="autor">Auteur de l'article : </label>
									<input type="text" name="autor" id="autor" placeholder="Saisissez un auteur" class="	form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		AUTOR	 			########################	-->

			<!-- 	########################		DEBUT	TEXTE	 			########################	-->
						<div class="form-group">	
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="image">Texte : </label>
									<textarea name="text" id="text" cols="30" rows="10" class="form-control" ></textarea>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		TEXTE	 			########################	-->

			<!-- 	########################		DEBUT	SUBMIT				########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
				    				<button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		SUBMIT	 			########################	-->
					</fieldset>
				</form>
			</div>

		  	<div id="AddEvent" class="tab-pane">

				<h2>Event</h2>
				<form class="form-horizontal" action="#" method="POST">
					<fieldset>
			<!-- 	########################		DEBUT	NOM	 				########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="name">Nom de l'event : </label>
									<input type="text" name="name" id="name" placeholder="Saisissez le nom" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		NOM	 				########################	-->
				
			<!-- 	########################		DEBUT	DATE	 			########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="date">Date de l'event : </label>
									<input type="date" name="date" id="date" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		DATE				########################	-->
				
			<!-- 	########################		DEBUT	LOCATION			########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="location">Location </label>
									<input type="text" name="location" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		LOCATION	 		########################	-->
				
			<!-- 	########################		DEBUT	DESCRIPTION	 		########################	-->
						<div class="form-group">	
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="desc">Description : </label>
									<textarea type="text" name="desc" id="desc" cols="30" rows="10" class="form-control" ></textarea>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		DESCRIPTION	 		########################	-->
				
			<!-- 	########################		DEBUT	CHECKBOX GAMES		########################	-->
						<div class="form-group">
						  	<label class="col-sm-offset-4 col-sm-4" for="checkboxes">jeu(x) : </label>
						  	<div class="col-sm-offset-4 col-sm-4">
						  	  	<label class="checkbox-inline" for="checkboxes-0">
						  	  	  	<input type="checkbox" name="starcraft2" id="checkboxes-0" value="1">
						  	  	 	starcraft2
						  	  	</label>
						  	  	<label class="checkbox-inline" for="checkboxes-1">
						  	  	  	<input type="checkbox" name="dota2" id="checkboxes-1" value="2">
						  	  	  	dota2
						  	  	</label>
						  	  	<label class="checkbox-inline" for="checkboxes-2">
						  	  	  	<input type="checkbox" name="csGo" id="checkboxes-2" value="3">
						  	  	  	csGo
						  	  	</label>
						  	  	<label class="checkbox-inline" for="checkboxes-3">
						  	  	  	<input type="checkbox" name="other" id="checkboxes-3" value="4">
						  	  	  	other
						  	  	</label>
						  	</div>
						</div>
			<!-- 	########################		FIN		CHECKBOX GAMES		########################	-->
				
			<!-- 	########################		DEBUT	SUBMIT				########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
				    				<button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		SUBMIT	 			########################	-->
					</fieldset>
				</form>

			</div>
		</div>

	</div>
<!-- ########## 	FIN CONTAINER 	########## -->
</div>
		
<?php $this->stop('main_content') ?>