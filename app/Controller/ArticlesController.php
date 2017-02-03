<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;


class ArticlesController extends Controller
{
	function listArticles(){
		$articleModel = new ArticlesModel();
		$articles = $articleModel->getArticles();
		$this->show('users/list_articles', ['articles'=> $articles]);
	}
	

}