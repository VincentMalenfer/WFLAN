<?php

namespace Controller;

use \W\Controller\Controller;

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

	public function result()
	{
		$this->show('admin/admin_result');
	}
	
}