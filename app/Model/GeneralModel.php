<?php

namespace Model;

use \W\Model\Model as Model;

class GeneralModel extends Model
{
    public function getIdFromToken($idToken){
    $azerty = 'SELECT id FROM token WHERE id ='.$idToken;
    $pouet = $this->dbh->prepare($azerty);
    $pouet->execute();
    return $pouet->fetch();
    }
}
