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
	public function admin()	{
		$articleModel = new ArticlesModel();
		$games = $articleModel->getGame();
	
		$this->show('admin/admin', ['games'=> $games]);
	}

	
}
