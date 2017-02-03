<?php $this->layout('layout', ['title' => 'Liste Articles & Events']) ?>

<?php $this->start('main_content') ?>

	<h2>Vos données saisies</h2>

	<p> title ==> 			<?php if(!empty($_POST['title'])) 		echo $_POST['title']; ?></p>
	<p> picture ==> 		<?php if(!empty($_POST['picture'])) 	echo $_POST['picture']; ?></p>
	<p> location ==> 		<?php if(!empty($_POST['location'])) 	echo $_POST['location']; ?></p>
	<p> texte ==> 			<?php if(!empty($_POST['text'])) 		echo $_POST['text']; ?></p>
	<p> publishdate ==> 	<?php if(!empty($_POST['publishdate'])) echo $_POST['publishdate']; ?></p>
	<p> checkbox ==> 		<?php if(!empty($_POST['dota2'])) 		echo $_POST['dota2']; ?></p>
	<p> checkbox ==> 		<?php if(!empty($_POST['csGo'])) 		echo $_POST['csGo']; ?></p>
	<p> checkbox ==> 		<?php if(!empty($_POST['starcraft2'])) 	echo $_POST['starcraft2']; ?></p>
	<p> checkbox other ==> 	<?php if(!empty($_POST['other'])) 		echo $_POST['other']; ?></p>
	
	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>
