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
    if($this->tokenExists($user)) {
      // si l'id de l'utilisateur est deja present dans la table token mettre a jour le token
        $this->setTable("token");
          $this->setPrimaryKey("users_idusers");
          $this->delete($user);
    }
      $aFaire='INSERT INTO token(id_token, users_idusers) VALUE(:idtoken,:iduser)';

      $foundInfo = $this->dbh->prepare($aFaire);
      $foundInfo->bindValue(':iduser', $user);
      $foundInfo->bindValue(':idtoken', $token);
      $foundInfo->execute();
    return $token;
  }
  
  // 1 Vérifier si le token existe déjà : FAIT
    // 1.a S'il existe, on en génère un nouveau
  // 2 vérifier si l'utilisateur a déjà un token
      // 2.a Si l'utilisateur a déjà un token, on update
      // 2.b Si l'utilisateur n'a pas encore de token, on insert

  public function tokenExists($id)
  {
    $sql = 'SELECT * FROM token WHERE users_idusers =:idusers LIMIT 1';

    $sth = $this->dbh->prepare($sql);
    $sth->bindValue('idusers', $id);
    if($sth->execute()){
       $foundToken = $sth->fetch();
      if($foundToken){
         return true;
      }
    }
     return false;
  }


  public static function randomString($length = 80)
  {
    $possibleChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-'.uniqid();
    $factory = new \RandomLib\Factory;
    $generator = $factory->getGenerator(new \SecurityLib\Strength(\SecurityLib\Strength::MEDIUM));
    $string = $generator->generateString($length, $possibleChars);

    return $string;
  }
}
