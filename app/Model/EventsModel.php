<?php

namespace Model;

use \W\Model\Model as Model;
use \Model\GeneralModel;

class EventsModel extends Model
{
	public function ajouterEvent($title, $location, $desc, $url, $start, $end, $class, $limitevent)
    {

        $this->setPrimaryKey("idevent");

        $data = array(
            "title"                 => $title,
            "location"              => $location,
            "desc"                  => $desc,
            "url"                   => $url,
            "start"                	=> $start,
            "end"                   => $end,
            "class"                 => $class,
            "limitevent"            => $limitevent
        );

        $insert = $this->insert($data);
        $id   	= $insert['idevent'];
        $game 	= $this->getGameFromClass($insert['class']);
        $game 	= $game['idgames'];

        $this->setPrimaryKey("event_idevent");
        $this->setTable("event_has_games");

        $data = array(
            "event_idevent" => $id,
            "games_idgames" => $game
        );
        $this->insert($data);
    }


	public function getEvents($id)
	{
		$this->setPrimaryKey("idevent");

		return $this->find($id);
	}

	public function eventHaveGame($game,$id_event){

		$data= array(
			'games_idgames'	=>  $game,
			'event_idevent'	=>  $id_event
			);

		$sql = 'INSERT INTO games_has_event (`event_idevent`, `games_idgames`) VALUES (:event_idevent,:games_idgames)';
		$pouet = $this->dbh->prepare($sql);
    	$pouet->execute($data);
	}

	public function getGame($id)
	{
		$this->setPrimaryKey("idgames");

		return $this->find($id);
	}

	public function getGameFromClass($class)
	{
		$sql = "SELECT * FROM games WHERE classgames = '" . $class . "'";
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetch();
	}

	public function recEvent()
	{
		$sql = 'SELECT * FROM events ';
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}

	public function deleteEvent($id)
    {

        // Delete de la BDD l'articles selectionné par l'admin

        $this->setPrimaryKey('idevent');
        $this->setTable('events');
             $this->delete($id);
             return true;
    }

	public function updateEvent($id, $title, $location, $desc, $url, $start, $end, $class, $limitevent){
       $this->setPrimaryKey("idevent");

       $data = array(
           "title"    =>$title,
           "location" =>$location,
           "desc"     =>$desc,
           "url"      =>$url,
           "start"    =>$start,
           "end"      =>$end,
           "class"    =>$class,
           "limitevent"    =>$limitevent,
       );

       return $this->update($data, $id);
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
	 * Récupère TOUS les utilisateurs inscrits à un évènement
	 */
	public function getGamesFromEvent()
	{
		$sql = "SELECT * FROM `event_has_games`";

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
