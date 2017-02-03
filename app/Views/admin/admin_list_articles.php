<?php $this->layout('layout', ['title' => 'Vos Articles']) ?>

<?php $this->start('main_content') ?>

	<h2>Vos données saisies pour l'article</h2>

	<p> -----  title 	   ==> 	<?php if(!empty($_POST['title'])) 		echo $_POST['title']; ?> 	----- </p>

	<p> -----  text 	   ==> 	<?php if(!empty($_POST['text'])) 		echo $_POST['text']; ?> 	----- </p>

	<p> -----  pictures    ==> 	<?php if(!empty($_POST['pictures'])) 	echo $_POST['pictures']; ?> ----- </p>

	<p> -----  publishdate ==> 	<?php if(!empty($_POST['publishdate'])) echo $_POST['publishdate']; ?> ----- </p>

	<p> -----  autor 	   ==> 	<?php if(!empty($_POST['autor'])) 		echo $_POST['autor']; ?> 	----- </p>




	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['starcraft2'])) 	echo $_POST['starcraft2']; ?> 		----- </p>
	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['dota2'])) 		echo $_POST['dota2']; ?> 			----- </p>
	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['csGo'])) 		echo $_POST['csGo']; ?> 			----- </p>
	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['other'])) 		echo $_POST['other']; ?> 			----- </p>



	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>
	
<?php $this->stop('main_content') ?>

	<!-- ############# ADAPTER EN ARTICLE ################################################ 	###################################################################-->