<?php $this->layout('layout', ['title' => 'Espace Admin']) ?>

<?php $this->start('main_content') ?>

<div class="admin">
	<div class="container"> <!-- ########## 	DEBUT CONTAINER 	########## -->
		<h1>Espace Admin</h1>
		<ul class="nav nav-tabs">
	  		<li class="active"><a data-toggle="tab" href="#AddArticle">Ajouter article</a></li>
	  		<li><a data-toggle="tab" href="#AddEvent"> Ajouter événement</a></li>
	  		<li><a data-toggle="tab" href="#ModifDeleteArticle"> Modifier ou supprimer un article</a></li>
			<li><a data-toggle="tab" href="#ModifDeleteEvent"> Modifier ou supprimer un événement</a></li>
		</ul>

		<div class="tab-content">
		<!-- AJOUT DARTICLE -->
		  	<div id="AddArticle" class="tab-pane fade in active">
				<form class="form-horizontal" action="<?= $this->url('admin_add') ?>" id="ajoutArticle" method="POST" enctype="multipart/form-data">
					<fieldset>

			<!-- 	########################		DEBUT	TITRE	 			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="title">Titre de l'article : </label>
									<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" >
								</div>
							</div>fgv
							<p id="msgun">Le titre doit faire au maximum 50 caractères et ne doit pas être vide.</p>
						</div>
			<!-- 	########################		FIN		TITRE	 			########################	-->

			<!-- 	########################		DEBUT	DESCRIPTION IMAGE	########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="description_pictures">Description de l'image (30 caractères maximum) : </label>
									<textarea type="text" name="description_pictures" id="description_pictures" cols="30" rows="10" class="form-control" placeholder="Saisissez la description"></textarea>
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
                                    <label class="input-group-addon span-bold" for="sel1">Select list:</label>
                                    <select class="form-control select" id="sel1">
                                <?php foreach ($games as $game) { ?>
                                         <option value="<?= $game['idgames'] ?>"><?= $game['name'] ?></option>
                                <?php } ?>
                                    </select>
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

			<!-- 	########################		DEBUT	TEXT		 		########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
									<div class="input-group">
									<label class="input-group-addon span-bold" for="text">Texte de l'article  : </label>
									<textarea type="text" name="text" id="text" cols="30" rows="10" class="form-control" placeholder="Saisissez le text" ></textarea>
								</div>
							</div>
							<p id="msgsix">Merci de mettre du contenu a votre article.</p>
						</div>
			<!-- 	########################		FIN		TEXT	 		########################	-->

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




<!-- AJOUT EVENT -->

		  	<div id="AddEvent" class="tab-pane fade">
				<form class="form-horizontal" action="<?= $this->url('admin_add_event') ?>" method="POST">
					<fieldset>
			<!-- 	########################		DEBUT	TITLE	 			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="title">Nom de l'évênement : </label>
									<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		TITLE	 			########################	-->

			<!-- 	########################		DEBUT	LOCATION			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="location">Lieu : </label>
									<input type="text" name="location" id="location" class="form-control" placeholder="Saisissez la location" class="form-control">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		LOCATION	 		########################	-->

			<!-- 	########################		DEBUT	DESCRIPTION			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="desc">Description : </label>
									<input type="text" name="desc" id="desc" class="form-control" placeholder="Saisissez la description" class="form-control">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		DESCRIPTION	 		########################	-->

			<!-- 	########################		DEBUT	URL					########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<input type="hidden" name="url" id="url" class="form-control" placeholder="Saisissez l'url" class="form-control">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		URL	 				########################	-->



			<!-- 	########################		DEBUT	START	 			########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="start">Date de début : </label>
									<input type="datetime" name="start" id="start" class="form-control" placeholder="jj/mm/aaaa 00:00:00">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		START				########################	-->

			<!-- 	########################		DEBUT	END	 				########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="end">Date de fin : </label>
									<input type="datetime" name="end" id="end" class="form-control" placeholder="jj/mm/aaaa 00:00:00">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		END					########################	-->

			<!-- 	########################		DEBUT CHECKBOX EVENTS-GAMES	########################	-->
						<div class="form-group">
                            <div class="col-xs-offset-1 col-xs-10">
                                <div class="input-group">
                                    <label class="input-group-addon span-bold" for="sel1">Select list:</label>
                                    <select class="form-control select" id="sel1" name="class">
                                <?php foreach ($games as $game) { ?>
                                         <option value="<?= $game['classgames'] ?>"><?= $game['name'] ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
			<!-- 	########################		FIN	CHECKBOX EVENTS-GAMES	########################	-->

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

		  	<div id="ModifDeleteArticle" class="tab-pane fade">
				<?php # if (isset($articles)){ ?>

			        <!-- liste articles-->
			        <?php foreach ($articles as $article): ?>
			        <div class="row">
			            <div class="col-md-7">
			                <a href="<?=$this->url('article_article',['id' => $article['idarticles']])?>">
			                    <img class="img-responsive" src="<?= $article['pictures'] ?>" alt="$article['decriptionPictures'] ">
			                </a>
			            </div>

			            <div class="col-md-5">
			                <h3> <?= $article['title'] ?> </h3>

			                <p> <?= $article['description'] ?> </p>
			                <a class="btn btn-primary" href="<?=$this->url('article_article', ['id' => $article['idarticles']])?>">aller sur l article <span class="glyphicon glyphicon-chevron-right"></span></a>
			                <!-- si le role de l'utilistateur est admin -->
			                <a class="btn btn-primary" href="">Modifier</a>
			                <a class="btn btn-primary" href="">Supprimer</a>

			            </div>
			        </div> <!-- /.row -->
			        <hr>
			        <?php
			           endforeach;
			       # };
			        ?>
			</div>
			<!-- SUPPRIME LEVENT -->

<div id="ModifDeleteEvent" class="tab-pane fade">
	<?php if(isset($events))  : ?>
		<!-- liste events -->
		<?php foreach ($events as $event): ?>
			<div class="row">
				<div class="col-md-5">
				    <h3> <?= $event['title'] ?> </h3>
				    <p>Jeu : <?= $event['class'] ?> </p>
				    <p>Début : <?= $event['start'] ?> </p>
				    <p>Fin : <?= $event['end'] ?> </p>
				        <!-- si le role de l'utilistateur est admin -->
			            <a class="btn btn-primary" href="<?=$this->url('event_update_event',['id' => $event['idevent']])?>">Modifier</a>
			            <a class="btn btn-primary" href="<?=$this->url('event_supp_event',['id' => $event['idevent']])?>">Supprimer</a>
				</div>
			</div> <!-- /.row -->
			     
		<?php endforeach;
			      
    endif;?>
			        





		</div>
	</div> 
</div><!-- ########## 	FIN CONTAINER 	########## -->

<!-- ##### 		DEBUT MESSAGE CACHES EN JS 		##### -->
<script type="text/javascript">
	$(function () {
		$('#ajoutArticle').on('submit', function (e) { // Est appelé lorsque l'utilisateur souhaite soumettre le formulaire
			e.preventDefault(); // On empêche le navigateur de soumettre le formulaire
			var compteur = 1;

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
			 	compteur++;

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
			 	compteur++;
			}
			var mike = false;
			$.each( $('.checkbox'), function( key, value ) {
				if($(this).is(':checked')){
		     		compteur++;
					mike = true;
			     	$('#msgtrois').fadeOut();
				}
			});
			if(!mike){
			     	$('#msgtrois').fadeIn();
					$('.checkbox').css('border','red 1px solid');
			     	$('#msgtrois').css('visibility','visible');
			}
			if($('#picture').val()==""){
				$('#msgquatre').fadeIn();
				$('#msgquatre').css('visibility','visible');
				$('#picture').css('border','red 1px solid');

			}else{
				$('#msgquatre').fadeOut();
				$('#picture').css('border','1px solid rgb(169, 169, 169)');
				compteur++;

			}
			if ($('#description_pictures').val() == 0 ) {
		     	$('#description_pictures').css('border','red 1px solid');
		     	$('#msgcinq').fadeIn();
		     	$('#msgcinq').css('visibility','visible');

			}else{
				$('#msgcinq').fadeOut();
				$('#description_pictures').css('border','1px solid rgb(169, 169, 169)');
				compteur++;
			}
			//
			if ($('#text').val() == 0 ) {
		     	$('#text').css('border','red 1px solid');
		     	$('#msgsix').fadeIn();
		     	$('#msgsix').css('visibility','visible');

			}else{
				$('#msgsix').fadeOut();
				$('#text').css('border','1px solid rgb(169, 169, 169)');
				compteur++;

			}
			if (compteur===7) {

				$('form').unbind('submit').submit();
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
