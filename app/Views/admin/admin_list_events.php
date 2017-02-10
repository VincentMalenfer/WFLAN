
<?php $this->layout('layout', ['title' => 'Vos Events']) ?>

<?php $this->start('main_content') ?>

	<h2>Vos données saisies pour l'event</h2>

	<p> -----  name 	 ==> <?php if(!empty($_POST['name'])) 		echo $_POST['name']; ?> 		----- </p>

	<p> -----  date 	 ==> <?php if(!empty($_POST['date'])) 		echo $_POST['date']; ?> 		----- </p>

	<p> -----  location  ==> <?php if(!empty($_POST['location'])) 	echo $_POST['location']; ?> 	----- </p>

	<p> -----  desc 	 ==> <?php if(!empty($_POST['desc'])) 		echo $_POST['desc']; ?> 		----- </p>


	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['starcraft2'])) 	echo $_POST['starcraft2']; ?> 	----- </p>
	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['dota2'])) 		echo $_POST['dota2']; ?> 		----- </p>
	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['csGo'])) 		echo $_POST['csGo']; ?> 		----- </p>
	<p> -----  CHEKBOX ==> <?php if(!empty($_POST['other'])) 		echo $_POST['other']; ?> 		----- </p>

	





>>>>>>> refs/remotes/origin/master

	<p>
		<a class="lien" href="<?= $this->url('admin_admin') ?>">Accueil</a>
	</p>

<?php $this->stop('main_content') ?>


	<!-- ############# ADAPTER EN EVENT ################################################ 	###################################################################-->

