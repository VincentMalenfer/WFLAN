<?php

namespace Model;

use \W\Model\Model as Model;

use \Model\GeneralModel;

class EventsModel extends Model
{
	public function ajouterEvent($title, $location, $desc, $url, $start, $end, $class)
	{
		

		$this->setPrimaryKey("idevent");
		

		$data = array 	(
							"title" 				=> $title,
							"location"				=> $location,
							"desc"					=> $desc,
							"url" 					=> $url,
							"start" 				=> $start,
							"end" 					=> $end,
							"class" 				=>$class
						);
		


		$this->insert($data);


	}

	public function getEvents($id)
	{
		$this->setPrimaryKey("idevent");

		return $this->find($id);


	}

	public function inscriptionEvents($idUser, $idEvent)
	{
		$this->setTable('event_has_users');

		$data = [
			'event_idevent' =>  $idEvent,
			'users_idusers' =>  $idUser
		];

		$this->insert($data);


	}

	/**
	 * Récupère TOUS les utilisateurs inscrits à un évènement
	 */
	public function getUsersFromEvent($idEvent)
	{
		$sql = "SELECT * 
			FROM event_has_users
			LEFT JOIN users ON users_idusers = idusers 
			WHERE event_idevent = " . $idEvent;

		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}

	/**
	 * Récupère un utilisateur inscrit à un évènement
	 */
	public function getUserFromEvent($idEvent, $tokenUser) 
	{
		$GeneralModel = new GeneralModel();

		$idUser = $GeneralModel->getIdFromToken($tokenUser);
		$idUser = $idUser['users_idusers'];
		
		$sql = "SELECT * 
			FROM event_has_users
			LEFT JOIN users ON users_idusers = idusers 
			WHERE event_idevent = " . $idEvent . "
				AND idusers = " . $idUser;

		$sth = $this->dbh->prepare($sql);

		if($sth->execute()){
			$foundUser = $sth->fetch();
			if($foundUser){
				return true;
			}
		}
		return false;
	}

	
}

