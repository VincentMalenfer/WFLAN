<?php

namespace Model;

use W\Security\AuthentificationModel;
use \W\Model\Model as Model;
use Controller\UsersController;

class ArticlesModel extends Model
{

	public function getArticles()
	{
		$sql = 'SELECT * FROM articles ORDER BY idarticles DESC';
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public function getSlideArticles()
	{
		$this->setPrimaryKey("idarticles");
		$this->setTable('articles');

		$sql = 'SELECT * FROM articles LEFT JOIN games_has_articles ON games_has_articles.articles_idarticles = articles.idarticles';
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		$article = $sth->fetchAll();
		shuffle($article);
		$article = array_slice($article, 0, 10);

		return $article;
	}

	public function getArticle($id)
	{
		$this->setPrimaryKey("idarticles");
		return $this->find($id);
	}

	public function addArcticle($title,$description,$text,$pictures,$description_pictures)
	{
		$this->setPrimaryKey("idarticles");
		$iduser= new GeneralModel;
		$idusertoken= $iduser->getIdFromToken($_SESSION["token"]);
		$iduserinsert =implode($idusertoken);
		$data= array(
			'title' 					=> $title,				//post titre du form admin article
			'description' 				=> $description,				//post description du form de admin article
			'text'						=> $text,					//post texte du form admin article
			'pictures'					=> $pictures,				//post pictures du form admin article
			'description_pictures'		=> $description_pictures,			//post des_pictures du form admin article
			'publishdate'				=> date("Y-m-d"),				// = date du serveur
			'author'					=> $_SESSION["nickname"],
			"users_idusers" 			=> 	$iduserinsert


			);

			return $this->insert($data, false);
		// 'INSERT INTO articles (title,description,`text`,pictures,des_pictures,publishdate,author )
		// VALUES (:title,:description;`:text`,:pictures,:picturesDes,:publishdate,:autor)';
	}

	public function articleHaveGame($game,$id_article){

		$this->setPrimaryKey("games_idgames");
		

		$data= array(
			'games_idgames'			=>  $game,
			'articles_idarticles'	=>  $id_article
			);

		$sql = 'INSERT INTO games_has_articles (`articles_idarticles`, `games_idgames`) VALUES (:articles_idarticles,:games_idgames)';
		$pouet = $this->dbh->prepare($sql);
    	$pouet->execute($data);
	}

	public function deleteArticle($id)
	{
		
		// Delete de la BDD l'articles selectionné par l'admin
			 
		$this->setPrimaryKey('idarticles');
		$this->setTable('articles');	 
			 $this->delete($id);
			 return true;
			

	}

	

	public function getGame(){
		$this->setTable('games');
		$this->setPrimaryKey('idgames');
		return $this->findAll();
		// 'SELECT *  FROM  games';
	}

}
