<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;

use \Model\UserModel;
use \Model\EventsModel;
use \Model\GeneralModel;
use \Model\ConnexionModel;

class UsersController extends Controller
{

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
		$this->show('users/contact', [
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
	 * Page de sign_in
	 */
	public function sign_in()
	{
		if (!empty($_POST)) {
			$mail = $_POST['email'];
			$password = $_POST['password'];
			$passwordHash = password_hash($password,CRYPT_BLOWFISH);
			$pouet = new AuthentificationModel();
			$user = $pouet->isValidLoginInfo($mail,$password);
				if ($user){
					// lance la function createTokenPlusConnexion avec nos 2 info post(email et password qui est hash)
					$tokens = new ConnexionModel();
					$token = $tokens->createTokenPlusConnexion($user["idusers"]);
					// met en session les info retourner par createTokenPlusConnexion qui elle retourne dans $token
					// $_SESSION["token"] = $token;
					// $_SESSION["nickname"] = $user["nickname"];
					// $_SESSION["status"] = $user["status"];
					$_SESSION["token"] = $token;
				  $_SESSION["nickname"] = $user["nickname"];
					$_SESSION["status"] = $user["status"];



					if ($_SESSION["status"] == 'admin') {
						$this->redirectToRoute('admin_admin');
					}
					$this->redirectToRoute('users_home');
				}
			}

		// mauvais identifiants
		$this->show('users/sign_in');
	}

	/**
	 * Page de sign_up
	 */
	public function sign_up()
	{

		if(empty($_POST))
			$this->show('users/sign_up', [
				//'mike' => $_SESSION,
				'lastname' => '',
				'firstname' => '',
				'nickname' => '',
				'email' => '',
				'birthdate' => '',
				'phonenumber' => '',

			]);

		$errors = array(); // on crée une vérif de champs

		if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == '')// on verifie l'existence du champ et d'un contenu
			$errors ['lastname'] = "Vous n'avez pas renseigné votre nom !";

		if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == '') // on verifie l'existence du champ et d'un contenu
			$errors ['firstname'] = "Vous n'avez pas renseigné votre prénom !";

		if(!array_key_exists('nickname', $_POST) || $_POST['nickname'] == '')// on verifie l'existence du champ et d'un contenu
			$errors ['nickname'] = "Vous n'avez pas renseigné votre pseudo !";

		if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))// on verifie existence de la clé
			$errors ['mail'] = "Vous n'avez pas renseigné votre email !";

		if(!array_key_exists('birthdate', $_POST) || $_POST['birthdate'] == '')// on verifie l'existence du champ et d'un contenu
			$errors ['birthdate'] = "Vous n'avez pas renseigné votre date de naissance !";

		if(!array_key_exists('password', $_POST) || $_POST['password'] == '')// on verifie l'existence du champ et d'un contenu
			$errors ['password'] = "Vous n'avez pas renseigné votre mot de passe !";

		if(!array_key_exists('passwordConfirm', $_POST) || $_POST['passwordConfirm'] == '')// on verifie l'existence du champ et d'un contenu
			$errors ['passwordConfirm'] = "Vous n'avez pas confirmé votre mot de passe !";
		elseif($_POST['password'] != $_POST['passwordConfirm'])
			$errors ['passwordConfirm'] = "Les mots de passe ne sont pas identiques !";

		if(isset($_POST['envoyer']))
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$privatekey = "6LeprRQUAAAAAHKTp8UfMmcjJiaChSr3kByHtiQ8";
			$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip".$_SERVER['REMOTE_ADDR']);
			$data = json_decode($response);


		//On check les infos transmises lors de la validation
		if(!empty($errors)){ // si erreur on renvoie vers la page précédente
			$_SESSION['errors'] = $errors;//on stocke les erreurs
			$_SESSION['inputs'] = $_POST;
			// $this->redirectToRoute('users_sign_up');
			$this->show('users/sign_up', [
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
		}
		$this->redirectToRoute('users_sign_up');
	}

	/**
	 * Page de log_out
	 */
	public function log_out()
	{
		session_destroy();
 	 $this->show('users/home');
	}


	public function inscription_event($idEvent)
	{
		allowTo('admin','user');
		if (empty($_SESSION['token'])) {
			$this->redirectToRoute('users_sign_in');
		}

		$generalModel = new GeneralModel();
		$idUser       = $generalModel->getIdFromToken($_SESSION['token']);
		$eventModel = new EventsModel();
		$eventModel->inscriptionEvents($idUser['users_idusers'], $idEvent);

		$msg = 'Votre inscription a bien été prise en compte.';
		setcookie('successMsg', $msg, time() + 1, '/');

		$this->redirectToRoute('users_calendar');
	}





}

// 			$_SESSION['success'] = 1;
// $errors = array(); // on crée une vérif de champs
//
// if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))// on verifie existence de la clé
// 	$errors ['mail'] = "Vous n'avez pas renseigné votre email !";
//
// if(!array_key_exists('password', $_POST) || $_POST['password'] == '')// on verifie l'existence du champ et d'un contenu
// 	$errors ['password'] = "Vous n'avez pas renseigné votre mot de passe !";
//
// //On check les infos transmises lors de la validation
// if(!empty($errors)){ // si erreur on renvoie vers la page précédente
// 	$_SESSION['errors'] = $errors;//on stocke les erreurs
// 	$_SESSION['inputs'] = $_POST;
//
// 	// $this->show('users/sign_in', [
// 	// 	'email' => (empty($_POST['email'])) ? '' : $_POST['email'],
// 	// ]);
// }else{
