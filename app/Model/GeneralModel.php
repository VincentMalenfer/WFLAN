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

    public function getGame(){
        $this->setTable('games');
        $this->setPrimaryKey('idgames');
        return $this->findAll();
        // 'SELECT *  FROM  games';
    }

    public function getArticles()
	{
		$sql = 'SELECT * FROM articles ORDER BY idarticles DESC';
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}
}
