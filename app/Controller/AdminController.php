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
	public function admin()
	{
		$this->show('admin/admin');
	}

	public function article()
	{
		$this->show('admin/admin_article');
	}

	public function event()
	{
		$this->show('admin/admin_event');
	}

	public function admin_list_articles()
	{
		if(!empty($_POST))
		{
			$mike = new ArticlesModel();
			$mike->ajouterArticle(	$_POST['title'],
									$_POST['text'],
									$_POST['picture'],
									$_POST['publishdate'],
									$_POST['autor'], 1);
		}
		$this->show('admin/admin_list_articles');
	}

	public function admin_list_events()
	{
		if(!empty($_POST))
		{
			$mike = new EventsModel();
			$mike->ajouterEvent(	$_POST['name'],
									$_POST['date'],
									$_POST['location'],
									$_POST['desc'], 1, 1);
		}
		$this->show('admin/admin_list_events');
	}
}
