<?php $this->layout('layout', ['title' => 'Modifier l\'article']) ?>

<?php $this->start('main_content') ?>

<form class="form-horizontal" action="<?= $this->url('modify_article', ['id' => $article['idarticles']]) ?>" id="modifArticle" method="POST" enctype="multipart/form-data">
					<fieldset>

			<!-- 	########################		DEBUT	TITRE	 			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="title">Titre de l'article : </label>
									<input type="text" name="title" id="title" placeholder="Saisissez le titre" class="form-control" value="<?= $article['title']?>">
								</div>
							</div>
							<p id="msgun">Le titre doit faire au maximum 50 caractères et ne doit pas être vide.</p>
						</div>
			<!-- 	########################		FIN		TITRE	 			########################	-->

			<!-- 	########################		DEBUT	DESCRIPTION IMAGE	########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="description_pictures">Description de l'image (30 caractères maximum) : </label>
									<textarea type="text" name="description_pictures" id="description_pictures" cols="30" rows="10" class="form-control" placeholder="Saisissez la description"><?= $article['description_pictures']?></textarea>
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
									<textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Saisissez la description"><?= $article['description']?></textarea>
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
                                    <select class="form-control select" id="sel1" name="checkbox">

<!-- ici mettre la valeur du game selected -->
                                    
                                <?php 
                                foreach ($games as $game){
                                	if($game['idgames'] == $idchekbox)
                                        echo "<option value='".$game['idgames']."' selected>".$game['name']."</option>";
                                    else
                                        echo "<option value='".$game['idgames']."'>".$game['name']."</option>";
                                } ?>
                                    </select>
                                </div>
                            </div>
                        	<p id="msgtrois">Merci de selectionner au moins un jeu au minimum.</p>
                        </div>
			<!-- 	########################		FIN		CHECKBOX GAMES	 	########################	-->

			<!-- 	########################		DEBUT	PICTURES	 		########################	-->
						<div class="form-group">
							<div id="aper"><img src="<?= $this->assetUrl($article['pictures']) ?>"></div>
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
									<textarea type="text" name="text" id="text" cols="30" rows="10" class="form-control" placeholder="Saisissez le text" ><?= $article['text']?></textarea>
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
				<script type="text/javascript">
					$(function(){
						$( "#picture" ).change(function () {
							if( $("#picture").val()!==0) {
								$("#aper").css("display", 'none');

							}else{
								$("#aper").css("display", 'block');
							}
						});
					});
				</script>

<?php $this->stop('main_content') ?>				