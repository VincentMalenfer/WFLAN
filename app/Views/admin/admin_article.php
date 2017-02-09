<?php $this->layout('layout', ['title' => 'Ajout Article']) ?>

<?php $this->start('main_content') ?>

	<h2>Ajout Article</h2>

	<form  id="ajoutArticle" action="<?= $this->url("admin_article")?>" method="POST"  enctype="multipart/form-data">
		<div class="form-group">

<!-- 	########################		DEBUT	TITRE	 			########################	-->
			<label for="title">Titre de l'article : </label>
			<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" value="<?= $articles['title']?>" >
			<p id="msgun">le titre doit faire au maximum 50 caractère et ne doit pas étre vide.</p>
		</div>
<!-- 	########################		FIN		TITRE	 			########################	-->

<!-- 	########################		DEBUT	description 		########################	-->
		<div class="form-group">
			<label for="description">Déscription de l'article (30 caractère maximum) : </label>
			<input type="text" name="description" id="description" placeholder="Saisissez la déscription" class="form-control" >
			<p id="msgdeux">la déscription doit faire au maximum 30 caractère et ne doit pas étre vide.</p>
		</div>
<!-- 	########################		FIN		description	 		########################	-->

<!-- 	########################		DEBUT	CHECKBOX GAMES		########################	-->
		<label for="game">game(s) : </label>

		<p id="msgtrois">merci de séléctionner un jeu au minimum</p>
		<?php foreach ($games as $game) { ?>
		<div class="form-group">
			<input type="checkbox" name="checkbox" id="checkbox" value="<?= $game['idgame'] ?>" class="form-control" >
			<label for="checkbox"><?= $game['name'] ?></label>
		</div>
		<?php } ?>


<!-- 	########################		FIN		CHECKBOX GAMES	 	########################	-->

<!-- 	########################		DEBUT	PICTURES	 		########################	-->
		<div class="form-group">
			<label for="image">Image : </label>
			<input type="file" name="picture" id="picture" placeholder="Choisissez une image" class="form-control" enctype="multipart/form-data" >
			<p id="msgquatre">merci de renseigner une image</p>
			<div class="form-group" style="margin-bottom: 0;">
				<div id="image_preview" class="col-lg-10 col-lg-offset-2">
					<div class="thumbnail hidden">
						<img src="http://placehold.it/5" alt="">
						<div class="caption">
							<h4></h4>
							<p></p>
							<p><button type="button" class="btn btn-default btn-danger">Annuler</button></p>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- 	########################		FIN		PICTURES			########################	-->

<!-- 	########################		DEBUT	description img 		########################	-->
		<div class="form-group">
			<label for="description_pictures">Déscription de l'image (30 caractère maximum) : </label>
			<input type="text" name="description_pictures" id="description_pictures" placeholder="Saisissez la déscription de l'image" class="form-control" >
			<p id="msgcinq">merci de remplire la déscription de l'image (30 caractère maximum)</p>
		</div>
<!-- 	########################		FIN		description	 		########################	-->



<!-- 	########################		DEBUT	TEXTE	 			########################	-->
		<div class="form-group">
			<label for="image">Texte : </label>
		</div>
			<textarea name="text" id="text" cols="30" rows="10" class="form-control" ></textarea>
			<p id="msgsix">veuillez mettre du text a votre article</p>
<!-- 	########################		FIN		TEXTE	 			########################	-->

<!-- 	########################		DEBUT	SUBMIT				########################	-->
		<div class="form-group">
			<input type="submit" value="valid" class="form-control" >
		</div>
<!-- 	########################		FIN		SUBMIT	 			########################	-->
	</form>


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
<style type="text/css">
	#msgun,#msgdeux,#msgtrois,#msgcinq,#msgsix,#msgquatre{
	visibility: hidden;
	}
</style>
	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>
