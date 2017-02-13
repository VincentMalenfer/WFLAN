<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ArticlesModel;
use Model\EventsModel;
use Model\GeneralModel;

class AdminController extends Controller
{
	/**
	 * Page d'administration
	 */
    // Affichage de la liste des articles côté administrateur
    // Affichage de la liste des selects game dans ajout article
	public function admin()	{
		$generalModel = new GeneralModel();
		$games = $generalModel->getGame();

        $articleModel = new ArticlesModel();
        $articles = $articleModel->getArticles();

        $eventModel = new EventsModel();
        $events = $eventModel->recEvent();
		$gameEvents  = $eventModel->getGamesFromEvent();

		$this->show('admin/admin', [
			'games'    => $games,
			'articles' => $articles,
			'events' => $events,
			'events' => $events,
			'gameEvents'  => $gameEvents,
		]);
	}
	//  affiche modifie un article
    public function showModifyArticle($id)
    {
		$articleModel = new ArticlesModel();
		$article = $articleModel->getArticle($id);
		$generalModel = new GeneralsModel();
		$games = $generalModel->getGame();
		$idchekboxCont= new ArticlesController;
	 	$idchekbox=$idchekboxCont->addArticleHaveGame($id);
		$this->show('admin/admin_edit_article',[
			'article'=> $article,
			'games'    => $games,
			'idchekbox' =>$idchekbox,
		]);

    }

}
