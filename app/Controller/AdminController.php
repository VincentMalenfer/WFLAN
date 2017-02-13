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
	//  affiche modifie un article
    public function showModifyArticle($id)
    {
       
		$articleModel = new ArticlesModel();
		$article = $articleModel->getArticle($id);
		 $games = $articleModel->getGame();
		 $idchekboxCont= new ArticlesController;
		 $idchekbox=$idchekboxCont->addArticleHaveGame($id);
		$this->show('admin/admin_edit_article',[
			'article'=> $article,
			'games'    => $games,
			'idchekbox' =>$idchekbox,
		]);   
       
    }

}
