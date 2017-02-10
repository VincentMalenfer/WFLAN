<?php

namespace Model;

use \W\Model\UsersModel as usr;
use  \W\Security\AuthentificationModel;

class UserModel extends usr
{
	public function ajoutuser($lastname, $firstname, $nickname, $email, $birthdate, $phonenumber, $password){
	 	$password = password_hash($password, CRYPT_BLOWFISH);
		$this->setPrimaryKey("idusers");
		$data = array(
			"lastname"    	=>		$lastname,
			"firstname"    	=>		$firstname,
			"nickname"    	=>		$nickname,
			"email"    			=>		$email,
			"birthdate"    	=>		$birthdate,
			"phonenumber"   =>		$phonenumber,
      "password"   	 	=> 		$password
		);
	return $this->insert($data);
	}
}
