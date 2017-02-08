<?php

namespace Controller;

use \W\Controller\Controller;

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
	 * Page de traitement contact
	 */
	public function traitementContact()
	{
		session_start();//on démarre la session
	// $errors = [];
	  $errors = array(); // on crée une vérif de champs
	if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == '') {// on verifie l'existence du champ et d'un contenu
	  $errors ['lastname'] = "Vous n'avez pas renseigné votre nom !";
	  }
	if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == '') {// on verifie l'existence du champ et d'un contenu
	  $errors ['firstname'] = "Vous n'avez pas renseigné votre prénom !";
	  }
	if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
	  $errors ['mail'] = "Vous n'avez pas renseigné votre email !";
	  }
	if(!array_key_exists('textarea', $_POST) || $_POST['textarea'] == '') {
	  $errors ['textarea'] = "Vous n'avez pas renseigné votre message !";
	  }
	if(isset($_POST['envoyer'])) {
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$privatekey = "6LeprRQUAAAAAHKTp8UfMmcjJiaChSr3kByHtiQ8";
		$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip".$_SERVER['REMOTE_ADDR']);
		$data = json_decode($response);
	}

	//On check les infos transmises lors de la validation
	  if(!empty($errors)){ // si erreur on renvoie vers la page précédente
	  $_SESSION['errors'] = $errors;//on stocke les erreurs
	  $_SESSION['inputs'] = $_POST;
	  $this->redirectToRoute('users_contact');
	  }else{
	  $_SESSION['success'] = 1;
	  $headers  = 'MIME-Version: 1.0' . "\r\n";
	  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	  $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
	  $to = 'webforce.lan@gmail.com'; // Insérer votre adresse email ICI
	  $subject = 'Message envoyé par ' . htmlspecialchars($_POST['firstname']) .' - <i>' . htmlspecialchars($_POST['email']) .'</i>';
	  $message_content = '
	  <table>
	  <tr>
	  <td><b>Emetteur du message:</b></td>
	  </tr>
	  <tr>
	  <td>'. $subject . '</td>
	  </tr>
	  <tr>
	  <td><b>Contenu du message:</b></td>
	  </tr>
	  <tr>
	  <td>'. htmlspecialchars($_POST['textarea']) .'</td>
	  </tr>
	  </table>';
		mail($to, $subject, $message_content, $headers);
	  $this->redirectToRoute('users_contact');
	  }

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




}