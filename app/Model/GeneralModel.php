<?php

namespace Model;

use \W\Model\Model as Model;

class GeneralModel extends Model
{
    public function getIdFromToken($idToken){
    $azerty = 'SELECT users_idusers FROM token WHERE id_token = "'.$idToken.'"';
    $pouet = $this->dbh->prepare($azerty);
    $pouet->execute();
    return $pouet->fetch();
    }

     
}
