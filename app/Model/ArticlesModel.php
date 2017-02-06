<?php

namespace Model;

use \W\Model\Model as Model;

class ArticlesModel extends Model
{
<<<<<<< HEAD
	function getArticles(){
 		return $this->findAll();
 	}

=======
	public function ajouterArticle($title, $text, $picture, $publishdate, $autor, $users_idusers)
	{
		$this->setPrimaryKey("idarticles");
		$data = array 	(	
							"title" 		=> $title,
							"text" 			=> $text,
							"pictures" 		=> $picture,
							"publishdate"	=> $publishdate,
							"autor"			=> $autor,
							"users_idusers" => $users_idusers
						);
		return $this->insert($data);
	}
>>>>>>> refs/remotes/origin/Pierre
}