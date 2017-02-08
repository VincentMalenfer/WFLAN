<?php

namespace Model;
// use \W\Model\UsersModel;
use \W\Model\Model as Model;

use Controller\UsersController;

class ArticlesModel extends Model{

	public function ajouterArticle($title, $text, $picture, $publishdate, $autor, $users_idusers){
		$this->setPrimaryKey("idarticles");
		$data = array 	(
							"title" 		=> $title,
							"text" 			=> $text,
							"pictures" 		=> $picture,
							"publishdate"	=> $publishdate,
							"author"		=> $autor,
							"users_idusers" => $users_idusers
						);

		return $this->insert($data);
	}


	public function getArticles(){
		$sql = 'SELECT * FROM ' . $this->table.' WHERE actif = 1 ORDER BY idarticles DESC';
		
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();;
	}

	public function getArticle($id){
		$this->setPrimaryKey("idarticles");
		return $this->find($id);
	}



	// on rentre un article sur le formulaire
	// on verifie en ajax que les champs sont rempli
	// on envoi vers une page qui recapitule les champs
	// on verifie avec la function securityArticle avant l'insertion en php
	// insertion en php avec la function addArticle
	// la function delete article met l'article en actif ou non
	// la slidebar met les 10 derniers articles





			// 'title' 			= $_POST['title'];					//post titre du form admin article
			// 'description' 	= $_POST['description'];			//post description du form de admin article 		
			// 'texte'			= $_POST['texte'];					//post texte du form admin article
			// 'pictures'		= $_POST['pictures'];				//post pictures du form admin article
			// 'picturesDes'	= $_POST['des_pictures'];
			// idSession=$_SESSION['id_token']
			// $idGame			= $_POST['id_game']    			//post de la chekbox
			// $id_article 		= $_POST['id_article']          //id de l'article
	
	public function addArcticle($title,$description,$text,$pictures,$description_pictures)
	{
		$loggedUser = new UsersController;
		$loggedUser = $this->getUser();
		debug($loggedUser);


		
		$data= array(
			'title' 		=> $title,				//post titre du form admin article
			'description' 	=> $description,				//post description du form de admin article 		
			'texte'			=> $text,					//post texte du form admin article
			'pictures'		=> $pictures,				//post pictures du form admin article
			'picturesDes'	=> $description_pictures,			//post des_pictures du form admin article
			'publishdate'	=> date("Y-m-d"),				// = date du serveur
			'author'		=> $loggedUser = $this->getUser('nickname'),
			);
		
		return $this->insert($data);
		// 'INSERT INTO articles (title,description,`text`,pictures,des_pictures,publishdate,author )
		// VALUES (:title,:description;`:text`,:pictures,:picturesDes,:publishdate,:autor)';
	}





	public function articleHaveGame($idGame,$id_article){
		unset($data);
		$data= array(
			'idgames'		=>  $idGame,
			'idarticles'		=>  $id_article 
			);
		return $this->insert($data);
			
			// 'INSERT INTO games_has_articles (id_games,id_articles) VALUES (:idgame,:idarticle)';

	}

	//$_GET['id_article']
	//$_POST['title']					//post titre du form admin article
	//$_POST['description'];			//post description du form de admin article	
	//$_POST['texte']					//post texte du form admin article
	//$_POST['pictures']				//post pictures du form admin article	
	//$_POST['des_pictures']			//post des_pictures du form admin article	
	//date("Y-m-d");					// = date du serveur
	public function modifyArticle($id,$title,$description,$text,$pictures,$des_pictures)
	{

		// id_articles est le champ id de la table articles
		$data=array(
		'id'				=> $id,
		'title'				=> $title,
		'description' 		=> $description,
		'text'				=> $text,
		'pictures'		    => $pictures,
		'description_pictures'		=> $description_pictures,
		'publishdate'		=> date("Y-m-d")
			);
			
		return $this->update($data);
	
		// 'UPDATE article SET title,description,`text`,pictures,picturesDes,publishdate VALUES (:title,:description,`:text`,:pictures,:picturesDes,:publishdate)WHERE  id_articles= :id';
	}



	
	public function deleteArticle($actif)	
	{
		// la function delete article met l'article en actif ou non
		// 
		$data= array(
			'actif'=> 0

			);

		return $this->update($data,$id);
		// 'UPDATE article SET actif = "0" WHERE id_articles =' $delete;
	}


	
	// affiche 10 articles different de celui que l'on a en get de la page
	public function slidebarArticle($orderBy,$orderDir,$limit){

		return $this->findAll($orderBy,$orderDir,$limit);
		
		// 'SELECT * FROM articles ORDER BY ASC `date` LIMIT 10  WHERE `id_article` != $id;'
	}
	// 
	public function getGame(){
		$this->setTable('games');
		$this->setPrimaryKey('idgames');
		return $this->findAll();
		// 'SELECT *  FROM  games';
	}

	// delete de la bdd les articles selectionné par l'admin
	public function deleteArchive($id){
		return $this->delete($id);
	}
	
}

