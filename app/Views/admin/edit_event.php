<?php $this->layout('layout', ['title' => 'Modif event']) ?>
<?php $this->start('main_content') ?>
<div class="container">
	<h1>Modifier l'événement</h1>
<form class="form-horizontal" action="<?= $this->url('event_update_event', ['id' => $levent['idevent']]) ?>" method="POST">
					<fieldset>
			<!-- 	########################		DEBUT	TITLE	 			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="title">Nom de l'évênement : </label>
									<input type="text" name="title" id="title" value="<?= $levent['title'] ?>"placeholder="Saisissez le titre" class="form-control" >
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		TITLE	 			########################	-->

			<!-- 	########################		DEBUT	LOCATION			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="location">Lieu : </label>
									<input type="text" name="location" id="location" class="form-control"  value="<?= $levent['location'] ?>" placeholder="Saisissez la location" class="form-control">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		LOCATION	 		########################	-->

			<!-- 	########################		DEBUT CHECKBOX EVENTS-GAMES	########################	-->
						<div class="form-group">
                            <div class="col-xs-offset-1 col-xs-10">
                                <div class="input-group">
                                    <label class="input-group-addon span-bold" for="sel1">Jeu :</label>
                                    <select class="form-control select" id="sel1" name="class">
                                    <?php  ?>

                                <?php foreach ($games as $game) { ?>
                                         <option value="<?= $game['classgames'] ?>" <?php if($game['classgames'] == $levent['class']) { echo 'selected="selected"'; } ?>><?= $game['name'] ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
			<!-- 	########################		FIN	CHECKBOX EVENTS-GAMES	########################	-->

			<!-- 	########################		DEBUT	DESCRIPTION			########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="desc">Description : </label>
									<textarea type="text" cols="30" rows="10" name="desc" id="desc" class="form-control" value="<?= $levent['desc'] ?>" placeholder="Saisissez la description" class="form-control"></textarea>
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		DESCRIPTION	 		########################	-->

			<!-- 	########################		DEBUT	URL					########################	-->
						<div class="form-group">
							<div class="col-xs-offset-1 col-xs-10">
							    <div class="input-group">
									<input type="hidden" name="url" id="url" class="form-control" value="<?= $levent['class'] ?>" placeholder="Saisissez l'url" class="form-control">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		URL	 				########################	-->



			<!-- 	########################		DEBUT	START	 			########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="start">Date de début : </label>
									<input type="datetime" name="start" id="start" class="form-control"  value="<?= $levent['start'] ?>" placeholder="jj/mm/aaaa 00:00:00">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		START				########################	-->

			<!-- 	########################		DEBUT	END	 				########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
							    <div class="input-group">
									<label class="input-group-addon span-bold" for="end">Date de fin : </label>
									<input type="datetime" name="end" id="end" class="form-control"  value="<?= $levent['end'] ?>" placeholder="jj/mm/aaaa 00:00:00">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		END					########################	-->

			<!-- 	########################		DEBUT	LIMIT	 				########################	-->
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-4">
								<div class="input-group">
									<label class="input-group-addon span-bold" for="end">Limite de participants : </label>
									<input type="text" name="limitevent" id="limtevent" class="form-control" placeholder="Limite de participants">
								</div>
							</div>
						</div>
			<!-- 	########################		FIN		LIMIT					########################	-->

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
<?php $this->stop('main_content') ?>
