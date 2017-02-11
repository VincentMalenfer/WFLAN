<?php

namespace Controller;

class EventsController extends Controller
{
    // Affichage de l'événement côté administrateur
    public function event(){

	// {	$this->allowTo('admin');

		$this->show('admin/admin_event');
	}

    // Affichage liste des événements côté administrateur
	public function admin_list_events()
	{

		// $this->allowTo('admin');

		if(!empty($_POST))
		{
			$mike = new EventsModel();
			$mike->ajouterEvent(	$_POST['name'],
									$_POST['date'],
									$_POST['location'],
									$_POST['desc'], 1, 1);
		}
		$this->show('admin/admin_list_events');
	}
}
