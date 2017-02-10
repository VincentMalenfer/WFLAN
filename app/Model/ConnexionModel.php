<?php

namespace Model;

use \W\Model\Model as Model;

class ConnexionModel extends Model
{
  public function createTokenPlusConnexion($user)
  {

    // lance le la création du  token avec la function randomString
    $token = $this->randomString(20);
    // si le token existe déja en bdd
    if(tokenExists($token))
      // si l'id de l'utilisateur est deja present dans la table token mettre a jour le token
      $aFaire='UPDATE token (id_token) VALUE (:idtoken) WHERE users_idusers = :iduser';
    else
      $aFaire='INSERT INTO token(id_token, users_idusers) VALUE(:idtoken,:iduser)';

      $foundInfo = $this->dbh->prepare($aFaire);
      $foundInfo->bindValue(':iduser', $user["idusers"]);
      $foundInfo->bindValue(':idtoken', $token);
      $foundInfo->execute($info);
    return $token;
  }

  public function tokenExists($idusers)
  {
    $app = getApp();

    $sql = 'SELECT id_Token FROM token WHERE users_idusers = :idusers LIMIT 1';

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':idusers', $idusers);
    if($sth->execute()){
       $foundToken = $sth->fetch();
      if($foundToken){
         return true;
      }
    }
     return false;
  }

  public function passwordEmailExists($password, $email)
  {
    $app = getApp();

    $sql = 'SELECT * FROM users WHERE password = :password AND email = :email LIMIT 1 ';

    $data = $this->dbh->prepare($sql);
    $data->bindValue('password', $password);
    $data->bindValue('email', $email);

      if($data->execute()){
         $found = $data->fetch();
          if($found){
             return $found;
          }
      }else{
        return false;
    }
  }

  public static function randomString($length = 80)
  {
    $possibleChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-';
    $factory = new \RandomLib\Factory;
    $generator = $factory->getGenerator(new \SecurityLib\Strength(\SecurityLib\Strength::MEDIUM));
    $string = $generator->generateString($length, $possibleChars);

    return $string;
  }
}
