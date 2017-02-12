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
		


		$this->insert($data);


	}

	public function getEvents($id)
	{
		$this->setPrimaryKey("idevent");

		return $this->find($id);


	}

	
}

