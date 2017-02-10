<?php $this->layout('layout', ['title' => 'Espace Admin']) ?>

<?php $this->start('main_content') ?>

<div class="admin">

	<div class="container"> <!-- ########## 	DEBUT CONTAINER 	########## -->
		<h1>Espace Admin</h1>

		<ul class="nav nav-tabs">

	  		<li><a data-toggle="tab" href="#AddArticle">Ajouter article</a></li>
	  		<li><a data-toggle="tab" href="#AddEvent"> Ajouter événement</a></li>

	  		<li><a data-toggle="tab" href="#ModifDeleteEvent"> Modifier ou supprimer un article</a></li>
				<li><a data-toggle="tab" href="#ModifDeleteArticle"> Modifier ou supprimer un événement</a></li>

		</ul>

		<div class="tab-content">

		  	<div id="AddArticle" class="tab-pane fade">
				<form class="form-horizontal" action="<?= $this->url('admin_add_article') ?>" id="ajoutArticle" method="POST" enctype="multipart/form-data">
					<fieldset class="adminform">
			<!-- 	########################		DEBUT	TITRE	 			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="title">Titre de l'article : </label>
									<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		TITRE	 			########################	-->

			<!-- 	########################		DEBUT	DESCRIPTION IMAGE	########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="description_pictures">Description de l'image (30 caractères maximum) : </label>
									<textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Saisissez la description"></textarea>
								</div>
							</div>
						<p id="msgcinq">Merci de remplir la description de l'image (30 caractères maximum).</p>
						</div>
			<!-- 	########################		FIN		DESCRIPTION IMAGE	########################	-->

			<!-- 	########################		DEBUT	DESCRIPTION		 	########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="description">Description de l'article (30 caractères maximum) : </label>
									<textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Saisissez la description"></textarea>
								</div>
							</div>
						<p id="msgdeux">La description doit faire au maximum 30 caractères et ne doit pas être vide.</p>
						</div>
			<!-- 	########################		FIN		DESCRIPTION	 		########################	-->

			<!-- 	########################		DEBUT	CHECKBOX GAMES		########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="game">Jeux : </label>
								<?php foreach ($games as $game) { ?>
									<input type="checkbox" class="form-control" name="checkbox" id="checkbox" value="<?= $game['idgame'] ?>">
									<label class="input-group-addon span-bold" for="checkbox"><?= $game['name'] ?></label>
								<?php } ?>
								</div>
							</div>
						<p id="msgtrois">Merci de selectionner au moins un jeu au minimum.</p>
						</div>
			<!-- 	########################		FIN		CHECKBOX GAMES	 	########################	-->

			<!-- 	########################		DEBUT	PICTURES	 		########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="image">Image : </label>
									<input type="file" name="picture" id="picture" placeholder="Choisissez une image" class="form-control" >
								</div>
							</div>
						<p id="msgquatre">Merci de renseigner une image.</p>
						</div>
			<!-- 	########################		FIN		PICTURES			########################	-->

			<!-- 	########################		DEBUT	SUBMIT				########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
				    				<button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		SUBMIT	 			########################	-->
					</fieldset>
				</form>
			</div>

		  	<div id="AddEvent" class="tab-pane fade">
				<form class="form-horizontal" action="#" method="POST">
					<fieldset>
			<!-- 	########################		DEBUT	NOM	 				########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="name">Nom de l'événement : </label>
									<input type="text" name="name" id="name" placeholder="Saisissez le nom" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		NOM	 				########################	-->

			<!-- 	########################		DEBUT	DATE	 			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="date">Date de l'événement : </label>
									<input type="date" name="date" id="date" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################				DATE				########################	-->

			<!-- 	########################		DEBUT	LOCATION			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="location">Lieu : </label>
									<input type="text" name="location" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		LOCATION	 		########################	-->

			<!-- 	########################		DEBUT	DESCRIPTION	 		########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="desc">Description : </label>
									<textarea type="text" name="desc" id="desc" cols="30" rows="10" class="form-control" ></textarea>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		DESCRIPTION	 		########################	-->

			<!-- 	########################		DEBUT	CHECKBOX GAMES		########################	-->
						<div class="form-group">
						  	<label class="col-xs-offset-1 col-xs-10" for="checkboxes">Jeu(x) : </label>
						  	<div class="col-xs-offset-1 col-xs-10">
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
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
				    				<button id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		SUBMIT	 			########################	-->
					</fieldset>
				</form>
			</div>

			<div id="ModifDeleteEvent" class="tab-pane fade">

			</div>

	  	<div id="ModifDeleteArticle" class="tab-pane fade">

			</div>

		</div>
	</div> <!-- ########## 	FIN CONTAINER 	########## -->
</div>

<!-- ##### 		DEBUT MESSAGE CACHES EN JS 		##### -->
<script type="text/javascript">
	$(function () {
		$('#ajoutArticle').on('submit', function (e) { // Est appelé lorsque l'utilisateur souhaite soumettre le formulaire
			e.preventDefault(); // On empêche le navigateur de soumettre le formulaire
			var compteur= 1;
			if ($('#title').val().length == 0)  {
			 	$('#msgun').fadeIn();
			 	$('#title').css('border','red 1px solid');
			 	$('#msgun').css('visibility','visible');
			}else if($('#title').val().length > 50){
				$('#msgun').fadeIn();
			 	$('#title').css('border','red 1px solid');
			 	$('#msgun').css('visibility','visible');
			}else{
				$('#msgun').fadeOut();
			 	$('#title').css('border','1px solid rgb(169, 169, 169)');
			 	compteur+=compteur;
			}
			if ($('#description').val().length == 0){
			 	$('#msgdeux').fadeIn();
			 	$('#description').css('border','red 1px solid');
			 	$('#msgdeux').css('visibility','visible');

			}else if ($('#description').val().length > 30)  {
				$('#msgdeux').fadeIn();
			 	$('#description').css('border','red 1px solid');
			 	$('#msgdeux').css('visibility','visible');

			}else{
			 	$('#msgdeux').fadeOut();
			 	$('#description').css('border','1px solid rgb(169, 169, 169)');
			 	compteur+=compteur;
			}
			if( $('#checkbox').is(':checked')){
		     	$('#msgtrois').fadeOut();
		     	$('#picture').css('border','1px solid rgb(169, 169, 169)');
		     	compteur+=compteur;

			}else{
				$('#checkbox').css('border','red 1px solid');
		     	$('msgtrois').fadeIn();
		     	$('#msgtrois').css('visibility','visible');

			}
			if($('#picture').val()==""){
				$('#msgquatre').fadeIn();
				$('#msgquatre').css('visibility','visible');
				$('#picture').css('border','red 1px solid');

			}else{
				$('#msgquatre').fadeOut();
				$('#picture').css('border','1px solid rgb(169, 169, 169)');
				compteur+=compteur;

			}
			if ($('#description_pictures').val() == 0 ) {
		     	$('#description_pictures').css('border','red 1px solid');
		     	$('#msgcinq').fadeIn();
		     	$('#msgcinq').css('visibility','visible');

			}else{
				$('#msgcinq').fadeOut();
				$('#description_pictures').css('border','1px solid rgb(169, 169, 169)');
				compteur+=compteur;
			}
			//
			if ($('#text').val() == 0 ) {
		     	$('#text').css('border','red 1px solid');
		     	$('#msgsix').fadeIn();
		     	$('#msgsix').css('visibility','visible');

			}else{
				$('#msgsix').fadeOut();
				$('#text').css('border','1px solid rgb(169, 169, 169)');
				compteur+=compteur;
			}
			if (compteur===7) {
				(this).submit();
			}
		});
	});
</script>
<!-- ##### 		FIN MESSAGE CACHES EN JS 		##### -->

<style type="text/css">
	#msgun,#msgdeux,#msgtrois,#msgcinq,#msgsix,#msgquatre{
	visibility: hidden;
	}
</style>

<?php $this->stop('main_content') ?>
