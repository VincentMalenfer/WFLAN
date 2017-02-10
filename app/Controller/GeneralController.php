<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;


class GeneralController extends Controller{


  	/**
  	 * Page d'accueil par défaut
  	 */
  	public function home(){
  		$this->show('users/home');
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
        * Page de sign_in
         */
        public function sign_in()
        {
            $this->show('users/sign_in');
        }
      
        /**
         * Page de log_out
         */
        public function log_out()
        {
            session_destroy();
         $this->show('users/home');
        }


      // Liste de tout les articles
    	function listArticles(){
    		$articleModel = new ArticlesModel();
    		$articles = $articleModel->getArticles();
    		$this->show('articles/list_articles', ['articles'=> $articles]);
    	}

    	// Selection d'un article
    	function showArticles($id){
    		$articleModel = new ArticlesModel();
    		$articles = $articleModel->getArticle($id);
    		$this->show('articles/article', ['article'=> $articles]);
    	}

}
