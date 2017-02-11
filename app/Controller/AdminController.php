<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ArticlesModel;
use Model\EventsModel;

class AdminController extends Controller
{
	/**
	 * Page d'administration
	 */
<<<<<<< HEAD
	public function admin()	{
		$articleModel = new ArticlesModel();
		$games = $articleModel->getGame();
	
		$this->show('admin/admin', ['games'=> $games]);
	}
	
=======
    // Affichage de la liste des articles côté administrateur
    // Affichage de la liste des selects game dans ajout article
	public function admin()	{
		$articleModel = new ArticlesModel();
		$games = $articleModel->getGame();

        $articleModel = new ArticlesModel();
        $articles = $articleModel->getArticles();

         

		$this->show('admin/admin', [
			'games'    => $games,
			'articles' => $articles,

		]);
	}
>>>>>>> Pierre
}
