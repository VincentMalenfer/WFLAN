<?php

namespace Model;

use W\Security\AuthentificationModel;
use \W\Model\Model as Model;
use Controller\UsersController;

class ArticlesModel extends Model
{

	public function getArticles()
	{
		$sql = 'SELECT * FROM ' . $this->table.' WHERE actif = 1 ORDER BY idarticles DESC';
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public function getArticle($id)
	{
		$this->setPrimaryKey("idarticles");
		return $this->find($id);
	}

	public function addArcticle($title,$description,$text,$pictures,$description_pictures)
	{
		$this->setPrimaryKey("idarticles");
		$data= array(
			'title' 					=> $title,				//post titre du form admin article
			'description' 				=> $description,				//post description du form de admin article
			'text'						=> $text,					//post texte du form admin article
			'pictures'					=> $pictures,				//post pictures du form admin article
			'description_pictures'		=> $description_pictures,			//post des_pictures du form admin article
			'publishdate'				=> date("Y-m-d"),				// = date du serveur
			'author'					=> $_SESSION["nickname"],
			"users_idusers" => getIdFromToken($_SESSION["token"])

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
	}

	public function deleteArticle($actif)
	{
		// Delete de la BDD les articles selectionné par l'admin
			return $this->delete($id);
	}

	// affiche 10 articles different de celui que l'on a en get de la page
	public function slidebarArticle($orderBy,$orderDir,$limit){
		return $this->findAll($orderBy,$orderDir,$limit);
		// 'SELECT * FROM articles ORDER BY ASC `date` LIMIT 10  WHERE `id_article` != $id;'

	}

	public function getGame(){
		$this->setTable('games');
		$this->setPrimaryKey('idgames');
		return $this->findAll();
		// 'SELECT *  FROM  games';
	}

	// Delete de la BDD les articles selectionné par l'admin
	public function deleteArchive($id){
		return $this->delete($id);
	}
}
