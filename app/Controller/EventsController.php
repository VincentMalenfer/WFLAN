<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\EventsModel;

class EventsController extends Controller
{
    // Affichage de l'événement côté administrateur
    public function event()
    {

	// {	$this->allowTo('admin');

		$this->show('admin/admin_event');
	}

	public function showEvent($id)
    {

	// {	$this->allowTo('admin');

     	 $EventsModel = new EventsModel();
     	 $event = $EventsModel->getEvents($id);
     	 $this->show('event/event', ['event'=> $event]);
    }

    // Affichage liste des événements côté administrateur
	public function addEvent()
	{
		// $this->allowTo('admin');

		if(!empty($_POST))
		{
			$mike = new EventsModel();
			$mike->ajouterEvent(	$_POST['title'],
									$_POST['location'],
									$_POST['desc'],
									$_POST['url'],
									$_POST['start'],
									$_POST['end'],
									$_POST['class']);


		}
		// $this->show('admin/admin_list_events');
	}
}
