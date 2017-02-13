<?php

namespace Model;

use \W\Model\Model as Model;

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



		return $this->insert($data, false);
	}

	public function getEvents($id)
	{
		$this->setPrimaryKey("idevent");

		return $this->find($id);
	}

	public function eventHaveGame($game,$id_event){

		$data= array(
			'games_idgames'			=>  $game,
			'event_idevent'	=>  $id_event
			);

		$sql = 'INSERT INTO games_has_event (`event_idevent`, `games_idgames`) VALUES (:event_idevent,:games_idgames)';
		$pouet = $this->dbh->prepare($sql);
    	$pouet->execute($data);
	}
}
