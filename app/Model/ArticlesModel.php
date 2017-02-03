<?php

namespace Model;

use \W\Model\Model as Model;

class ArticlesModel extends Model
{
	function getArticles(){
 		return $this->findAll();
 	}

}