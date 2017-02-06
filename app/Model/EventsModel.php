<?php

namespace Model;

use \W\Model\Model as Model;

class EventsModel extends Model
{
	public function ajouterEvent($name, $date, $location, $desc, $location_idlocation, $users_idusers)
	{
		$this->setPrimaryKey("idevents");
		$data = array 	(	
							"name" 					=> $name,
							"date" 					=> $date,
							"location"				=> $location,
							"desc"					=> $desc,
							"location_idlocation" 	=> $location_idlocation,
							"users_idusers" 		=> $users_idusers
						);
		$this->insert($data);
	}

	public function event_has_games ()

	
}