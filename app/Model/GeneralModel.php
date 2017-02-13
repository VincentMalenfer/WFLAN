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
    public function compteur(){
    	$sql='SELECT * FROM events WHERE start > NOW() ORDER BY start LIMIT 1';
    	$pouet = $this->dbh->prepare($sql);
    	$pouet->execute();
    	return $pouet->fetch();
    }

     
}
