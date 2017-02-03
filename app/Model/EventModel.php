<?php

namespace Model;

use \W\Model\UsersModel as usr;

class EventModel extends usr
{
	public function ajouterEvent($name, $date, $location, $desc, $location_idlocation, $users_idusers)
	{
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
}