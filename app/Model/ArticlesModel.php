<?php

namespace Model;

use \W\Model\Model as Model;

class ArticlesModel extends Model
{
	public function getArticles(){
 		return $this->findAll();
 	}

	public function getArticle($id){
			$this->setPrimaryKey("idarticles");
	 		return $this->find($id);
	}

}
