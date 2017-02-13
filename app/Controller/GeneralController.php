<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;

class GeneralController extends Controller{

  	/**
  	 * Page d'accueil par défaut
  	 */
  	public function home(){
      $ArticlesModel = new ArticlesModel();
      $articles = $ArticlesModel->carouselArticleModel();

      $this->show('users/home', ['articles'=> $articles]);
  	}

	/**
	 * Page du calendrier
	 */
	public function calendar()
	{
		$this->show('users/calendar');
	}

	/**
	 * Page de reglement
	 */
	public function reglement()
	{
		$this->show('users/reglement');
	}

	/**
	 * Page d'accès aux sites
	 */
	public function access()
	{
		$this->show('users/access');
	}

	/**
	 * Page de live
	 */
	public function live()
	{
		$this->show('users/live');
	}

	/**
	 * Page de contact
	 */
	public function contact()
	{
		$this->show('users/contact');
	}

    /**
     * Page de log_out
     */
    public function log_out()
    {
        session_destroy();
        $this->redirectToRoute('users_home');
    }

    
}
