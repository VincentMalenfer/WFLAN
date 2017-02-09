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
	 * Page de traitement contact
	 */
	public function traitementContact()
	{
		//session_start();//on démarre la session
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
	  //$this->redirectToRoute('users_contact');
		$this->show('users/users_contact', [
		'lastname' => (empty($_POST['lastname'])) ? '' : $_POST['lastname'],
		'firstname' => (empty($_POST['firstname'])) ? '' : $_POST['firstname'],
		'email' => (empty($_POST['email'])) ? '' : $_POST['email'],
		'textarea' => (empty($_POST['textarea'])) ? '' : $_POST['textarea'],
		]);
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
	 * Page de traitement inscription
	 */
	 function age($date)
	 {
	   $d = strtotime($date);
	   return  (int) ((time() - $d) / 3600 / 24 / 365.242);
	 }


	public function traitement_sign_up()
	{
	//session_start();//on démarre la session -> a choqué ashley
	// $errors = [];
	//var_dump($_POST);

	  $errors = array(); // on crée une vérif de champs

	if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == '') {// on verifie l'existence du champ et d'un contenu
	  $errors ['lastname'] = "Vous n'avez pas renseigné votre nom !";
	  }
	if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == '') {// on verifie l'existence du champ et d'un contenu
	  $errors ['firstname'] = "Vous n'avez pas renseigné votre prénom !";
	  }
	if(!array_key_exists('nickname', $_POST) || $_POST['nickname'] == '') {// on verifie l'existence du champ et d'un contenu
		$errors ['nickname'] = "Vous n'avez pas renseigné votre pseudo !";
		}
	if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
	  $errors ['mail'] = "Vous n'avez pas renseigné votre email !";
	  }
	if(!array_key_exists('birthdate', $_POST) || $_POST['birthdate'] == '') {// on verifie l'existence du champ et d'un contenu
		$errors ['birthdate'] = "Vous n'avez pas renseigné votre date de naissance !";
	}else {
			$this->age($_POST['birthdate'])."\n";

	}
	if(!array_key_exists('password', $_POST) || $_POST['password'] == '') {// on verifie l'existence du champ et d'un contenu
		$errors ['password'] = "Vous n'avez pas renseigné votre mot de passe !";
		}
	if(!array_key_exists('passwordConfirm', $_POST) || $_POST['passwordConfirm'] == '') {// on verifie l'existence du champ et d'un contenu
		$errors ['passwordConfirm'] = "Vous n'avez pas confirmé votre mot de passe !";
	} elseif($_POST['password'] != $_POST['passwordConfirm']) {
		$errors ['passwordConfirm'] = "Les mots de passe ne sont pas identiques !";
	}
	if(isset($_POST['envoyer'])) {
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$privatekey = "6LeprRQUAAAAAHKTp8UfMmcjJiaChSr3kByHtiQ8";
		$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip".$_SERVER['REMOTE_ADDR']);
		$data = json_decode($response);
	}

	//var_dump($errors);

	//On check les infos transmises lors de la validation
	  if(!empty($errors)){ // si erreur on renvoie vers la page précédente
			$_SESSION['errors'] = $errors;//on stocke les erreurs
		  $_SESSION['inputs'] = $_POST;
	  // $this->redirectToRoute('users_sign_up');
		$this->show('users/sign_up', [
			// 'lenomduchamp' => ()
			'lastname' => (empty($_POST['lastname'])) ? '' : $_POST['lastname'],
			'firstname' => (empty($_POST['firstname'])) ? '' : $_POST['firstname'],
			'nickname' => (empty($_POST['nickname'])) ? '' : $_POST['nickname'],
			'email' => (empty($_POST['email'])) ? '' : $_POST['email'],
			'birthdate' => (empty($_POST['birthdate'])) ? '' : $_POST['birthdate'],
			'phonenumber' => (empty($_POST['phonenumber'])) ? '' : $_POST['phonenumber'],
		]);
	}else{
	  $_SESSION['success'] = 1;
		//$this->ajoutuser();
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
	  $this->redirectToRoute('users_sign_up');
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

	//	debug($_SESSION['inputs']);
	//	die;
		$this->show('users/sign_up', [
			//'mike' => $_SESSION,
			'lastname' => '',
			'firstname' => '',
			'nickname' => '',
			'email' => '',
			'birthdate' => '',
			'phonenumber' => '',

		]);
	}


	/**
	 * Page de log_out
	 */
	public function log_out()
	{
		session_destroy();
 	 $this->show('users/home');
	}

	/**
	 * Formulaire inscription
	 */
	/*public function sign_up_form(){
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
	}*/
}
