<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\EventsModel;
use \Model\GeneralModel;

class EventsController extends Controller
{
    // Affichage de l'événement côté administrateur
    public function event()
    {

	// {	$this->allowTo('admin');

		$this->show('admin/admin_event');
	}

	public function showEvent($id){
		$EventModel = new EventsModel();

		$event = $EventModel->getEvents($id);
		$users = $EventModel->getUsersFromEvent($id);
        $game  = $EventModel->getGameFromClass($event['class']);

		$isRegistered = $EventModel->getUserFromEvent($id, $_SESSION['token']);

		$this->show('event/event', [
			'event' => $event,
			'users' => $users,
            'game'  => $game,
			'isRegistered' => $isRegistered
		]);
    }

    // Affichage liste des événements côté administrateur
	// public function addEvent()
	// {
	// 	// $this->allowTo('admin');
    //
    //     $errors = array(); // on crée une vérif de champs
	// 	if(!array_key_exists('title', $_POST) || $_POST['title'] == '') {// on verifie l'existence du champ et d'un contenu
	// 	        $errors['title'] = "Vous n'avez pas renseigné le titre !";
	// 	}
    //     if(!array_key_exists('location', $_POST) || $_POST['location'] == '') {// on verifie l'existence du champ et d'un contenu
	// 	        $errors ['location'] = "Vous n'avez pas renseigné le lieu !";
	// 	}
    //     if(!array_key_exists('desc', $_POST) || $_POST['desc'] == '') {// on verifie l'existence du champ et d'un contenu
	// 	        $errors ['desc'] = "Vous n'avez pas ajouté la description de l'événement !";
	// 	}
    //     if(!array_key_exists('start', $_POST) || $_POST['start'] == '') {// on verifie l'existence du champ et d'un contenu
	// 	        $errors ['start'] = "Vous n'avez pas renseigné le début de l'événement !";
	// 	}
    //     if(!array_key_exists('end', $_POST) || $_POST['end'] == '') {// on verifie l'existence du champ et d'un contenu
	// 	        $errors ['end'] = "Vous n'avez pas renseigné la fin de l'événement !";
	// 	}
    //     if(empty($errors)){ // si erreur on renvoie vers la page précédente
	// 	{
    //         $_SESSION['errors'] = $errors;//on stocke les erreurs
    //         $_SESSION['inputs'] = $_POST;
    //         $this->redirectToRoute('admin_admin');
    //     }
    //         $_SESSION['success'] = 1;
	// 		$mike = new EventsModel();
	// 		$last_id = $mike->ajouterEvent(	$_POST['title'],
	// 								$_POST['location'],
	// 								$_POST['desc'],
	// 								$_POST['url'],
	// 								$_POST['start'],
	// 								$_POST['end'],
	// 								$_POST['class']);
    //         $this->addEventHaveGame($last_id);
	// 	}
    //     if(!empty($errors)){ // si erreur on renvoie vers la page précédente
    //         $_SESSION['errors'] = $errors;//on stocke les erreurs
    //         $_SESSION['inputs'] = $_POST;
    //         $this->redirectToRoute('admin_admin');
    //     }
	// }

    public function addEvent()
    {

        // $this->allowTo('admin');

        if(!empty($_POST))
        {
            $mike = new EventsModel();
            $mike->ajouterEvent(    $_POST['title'],
                                    $_POST['location'],
                                    $_POST['desc'],
                                    $_POST['url'],
                                    $_POST['start'],
                                    $_POST['end'],
                                    $_POST['class'],
                                    $_POST['limitevent']);
        }
        $this->redirectToRoute('admin_admin');
    }

    public function addEventHaveGame($last_id)
    {
        $errors = array(); // on crée une vérif de champs
        if(!empty($_POST['class']) || ($_POST['class']) !=0 ){
            // Liste de games
            $generalModel = new GeneralModel();
            $games = $generalModel->getGame();
            $idGame = $_POST['class'];
            $id_event = $last_id['idevent'];
            $class = new EventsModel();
            $class->eventHaveGame($idGame,$id_event);
            // return $idGame;
        }else{
            $errors ['class'] = "Vous n'avez pas renseigné le jeu !";
    	}
        if(!empty($errors)){ // si erreur on renvoie vers la page précédente
            $_SESSION['errors'] = $errors;//on stocke les erreurs
            $_SESSION['inputs'] = $_POST;
        }
		// $this->show('admin/admin_list_events');
	}

	public function suppEvent($id)
   {
       $event= new EventsModel;

       $articleSupp =$event->deleteEvent($id);

       $this->redirectToRoute('admin_admin');

   }

   public function updateEvent($id){
       $event = new EventsModel();
       if(!empty($_POST)){
           $event->updateEvent($id, $_POST["title"], $_POST['location'], $_POST['desc'], $_POST['url'], $_POST['start'], $_POST['end'], $_POST['class'], $_POST['limitevent']);
           $levent = $event->getEvents($id);
       }else{
           $levent = $event->getEvents($id);
       }
       $generalModel = new GeneralModel();
       $games = $generalModel->getGame();
       $this->show('admin/edit_event',[
           "levent" => $levent,
           "games"  => $games,
       ]);
   }
}
