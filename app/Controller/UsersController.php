<?php

namespace Controller;

use \W\Controller\Controller;
use  \Model\userModel;

class UsersController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
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
	 * Page des articles
	 */
	public function list_articles()
	{
		$this->show('users/list_articles');
	}


	/**
	 * Page DE l'article
	 */
	public function article()
	{
		$this->show('users/article');
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
	 * Page de sign_up
	 */
	public function sign_up()
	{
		$this->show('users/sign_up');
	}


	/**
	 * Page de log_out
	 */
	public function log_out()
	{
		$this->show('users/log_out');
	}

	public function sign_up_form(){
		if(!empty($_POST)){
			$sign = new UserModel();
			$sign->ajoutuser(
				$_POST["lastname"],
				$_POST["firstname"],
				$_POST["nickname"],
				$_POST["email"],
				$_POST["birthdate"],
				$_POST["phonenumber"],
				$_POST["password"]
			);
		}
		$this->show('users/sign_up');
	}
	// public function log_in(){
	//
	// }
}
