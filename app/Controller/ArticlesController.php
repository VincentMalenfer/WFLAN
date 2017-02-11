<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;

class ArticlesController extends Controller
{
    

    // Affichage d'un article côté utilisateur
    function showArticles($id)
    {
      $articleModel = new ArticlesModel();
      $articles = $articleModel->getArticle($id);
      $this->show('articles/article', ['article'=> $articles]);
    }

  

    // Liste de tout les articles côté utilisateur
    function listArticles()
    {
      $articleModel = new ArticlesModel();
      $articles = $articleModel->getArticles();
      $this->show('articles/list_articles', ['articles'=> $articles]);
    }
      // Affichage de la liste des articles côté administrateur
    public function admin_list_articles()
    {
        $articleModel = new ArticlesModel();
        $articles = $articleModel->getArticles();
        $this->show('admin/admin_list_articles', ['articles'=> $articles]);
    }
    // Supprime un article
    public function suppArticle($id)
    {   $allArticle= getArticle($id);
        $id= $allArticle['idarticles'];
        $picture = $allArticle['pictures'];
        $supp= new ArticlesModel();
        $supp->deleteArticle($id);
        if ($supp)unlink($picture);
        $this->redirectToRoute('admin/admin_list_articles');
    }

    // Modifie un article
    public function modifyArticle($id)
    {
        $modify= new ArticlesModel();
        $articles=$modify->getArticle($id);
        $this->show('admin/admin_article', ['articles'=> $articles]);
    }

    // Permet d'ajouter un article
    public function addArticle(){
        // Liste de games
        $articleModel = new ArticlesModel();
        $games = $articleModel->getGame();

        // $this->allowTo('admin');
        $filepath="";
        if(!empty($_FILES)){
        

        
            if ($_FILES['picture']['size'] > 0) {

                // revoir le chemin de destination des images

                $dir =  'assets/img/articles/';

                // je verifie que le dossier de destination existe   
                if (file_exists($dir)&& is_dir($dir)) {

                    // $filename definit le nom définitif de l'image et on lui colle son extension (pdf...) d'où le "."

                    $filename = time().".".pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);

                    // je deplace le fichier depuis le dossier temporaire vers la destination

                    if (move_uploaded_file($_FILES['picture']['tmp_name'],$dir.$filename)) {
                        $filepath = 'assets/img/articles/'.$filename;
                    }else{
                        die("upload failed");
                    }
                }
            }
        }
        if(!empty($_POST) && htmlentities($_POST['title'])<50 && htmlentities($_POST['description'])<30 && htmlentities($_POST['description_pictures'])){
            $addArticle = new ArticlesModel();
            $last_id = $addArticle->addArcticle(
                                    $_POST['title'],
                                    $_POST['description'],
                                    $_POST['text'],
                                    $filepath,
                                    $_POST['description_pictures']
                                    );
            
        
        };

        if(!empty($_POST['checkbox'])){
            $idGame     = $_POST['checkbox'];
            
            $id_article = $last_id['idarticles'];
            $checkbox   = new ArticlesModel();
            $checkbox->articleHaveGame($idGame,$id_article);   
        }
    }
        ///////////////////////////////////////////////////////////////
        //

        // $this->show('list_articles');
    

    
   
		
}
