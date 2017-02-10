<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\userModel;
use \W\Security\AuthentificationModel;

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
			$userModel = new UserModel();
			$user = $userModel->emailExists($_POST['email']);
			debug($user);
			if ($user && ($user["password"] === password_hash($_POST['password'],PASSWORD_DEFAULT))) {
					$user["id_token"] = $this->token();
					$instanceModel = new AuthentificationModel();
					debug($user);
		     	// Retire le mot de passe de la session
							// unset($user[$app->getConfig('security_password_property')]);
							// unset($user[$app->getConfig('security_id_property')]);
					// $_SESSION['user'] = $user; =firstname,lastname,nickname,email,birthdate,status,id_token
			}else{

			}
		} else {

		}
		 $this->show('users/sign_in');
	}

	public function token() {
		$token= new StringUtils();
	 $tokens= $toke->randomString(20);
	 // verifier que ce token n'existe pas en base de donnée
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
}
