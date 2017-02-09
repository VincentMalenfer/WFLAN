<?php
namespace Controller;
use \W\Controller\Controller;
use Model\ArticlesModel;
use Model\EventsModel;
class AdminController extends Controller
{
	/**
	 * Page d'administration
	 */
	public function admin()
	{
		// $this->allowTo('admin');

		$this->show('admin/admin');
	}
	public function article()
	{
		// $this->allowTo('admin');

		$articleModel = new ArticlesModel();
		$games = $articleModel->getGame();
		$this->show('admin/admin_article', ['games'=> $games]);
	}
	public function event(){

	// {	$this->allowTo('admin');

		$this->show('admin/admin_event');
	}
	public function admin_list_articles()
	{
		if(!empty($_POST))
		{
			$mike = new ArticlesModel();
			$mike->ajouterArticle(	$_POST['title'],
									$_POST['text'],
									$_POST['picture'],
									$_POST['publishdate'],
									$_POST['autor'], 1);
		}
		$this->show('admin/admin_list_articles');
	}
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
	// rajouter le 07/02

	public function addArticle(){

		// $this->allowTo('admin');
		$filepath="";
		if(empty($_FILES))
			$this->redirectToRoute('admin_article');
		if ($_FILES['picture']['size'] > 0) {

			// revoir le chemin de destination des images

			$dir = $this->AssetUrl('img');
			// je verifie que le dossier de destination existe

			if (file_exists($dir)&& is_dir($dir)) {

				// $filename definit le nom définitif de l'image et on lui colle son extension (pdf...) d'où le "."

				$filename = time().".".pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);

				// je deplace le fichier depuis le dossier temporaire vers la destination

				if (move_uploaded_file($_FILES['picture']['tmp_name'],$dir.$filename)) {
					$filepath =	$this->AssetUrl('img').$filename;
				}else{
					die("upload failed");
				}
			}
		}
		if(!empty($_POST) && $this->security()==true){
			$addArticle = new ArticlesModel();
			$addArticle->addArcticle($_POST['title'],
									 $_POST['description'],
									 $_POST['text'],
									 $filepath,
									 $_POST['description_pictures']
									);
		};
		$this->redirectToRoute('admin_article');
	}

	public function security(){
		if (htmlentities($_POST['title'])<50 && htmlentities($_POST['description'])<30 && htmlentities($_POST['description_pictures']) ){
			return true;
		}else{
			return false;
		}
	}



	public function suppArticle($id){

		$supp= new ArticlesModel();
		$supp->deleteArticle($id);
		$this->redirectToRoute('list_articles');
	}
	public function modifyArticle($id){

		$modify= new ArticlesModel();
		$articles=$modify->getArticle($id);
		$this->show('admin/admin_article', ['articles'=> $articles]);
	}
}
