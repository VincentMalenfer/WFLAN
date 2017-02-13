<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;
use \Model\GeneralModel;

class ArticlesController extends Controller
{
    // Affichage d'un article côté utilisateur
    function showArticles($id)
    {
        $articleModel = new ArticlesModel();
        $articles = $articleModel->getArticle($id);
        $slidListArticles = $articleModel->getSlideArticles();
        foreach ($slidListArticles as $slidListArticle) {
        	$slidListArticle = $articleModel->getArticle($id);
        }
        $this->show('articles/article', [
            'article'=> $articles,
            'slidListArticles'=>$slidListArticles,
            'slidListArticle'=>$slidListArticle,

        ]);
    }


    // Liste de tout les articles côté utilisateur
    public function listArticles()
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
    {   
        $article= new ArticlesModel();

        $allArticle= $article->getArticle($id);
        
        $id= $allArticle['idarticles'];
        $picture = $allArticle['pictures'];
        unlink($picture);
        $supp= new ArticlesModel();
        $articleSupp =$supp->deleteArticle($id);
        
        $this->redirectToRoute('admin_admin');

    }
    public function modifyArticle($id){
        $article= new ArticlesModel();
        $allArticle= $article->getArticle($id);

        if (!empty($_FILES) || !empty($allArticle['pictures'])){
            
            $picture = $allArticle['pictures'];
             
            $trump='assets/'.$picture;
            
            unlink($trump);

        }

        if (empty($_POST['title'])) {
        	
        }else{
        	//erreur
        }           
            
        
        if(!empty($_POST['title'])){
            $title=$_POST['title'];
        } else{
        	// erreur
        }
        if(!empty($_POST['description'])){
            $description=$_POST['description'];
        }else{
        	// erreur
        }
        if(!empty($_POST['description_pictures'])){
            $descriptionPictures=$_POST['description_pictures'];
        }else{
        	// erreur
        }
        if(!empty($_POST['text'])){
            $text=$_POST['text'];
        }else{
        	// erreur
        }


        $filepath = $this->registerImg();
        $articlesModel = new ArticlesModel();
        $articleEdit   = $articlesModel->editArticle($title, $description, $text, $filepath, $descriptionPictures, $id); 
       
        $idGame     = $_POST['checkbox'];
        $id_article = $id;
        $checkbox   = new ArticlesModel();
        $checkbox ->editAddArticleHaveGame($idGame,$id_article);     

        

    }

   

    // Permet d'ajouter un article
    public function registerImg(){
       

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
                        return $filepath = 'img/articles/'.$filename;
                    }else{
                        die("upload failed");
                    }
                }
            }
        }
    }
    public function addArticle(){
       
        if(($_POST['title'])<50 && ($_POST['description'])<50 && ($_POST['description_pictures'])<30){
            $filepath = $this->registerImg();
            $addArticle = new ArticlesModel();
            $last_id = $addArticle->addArcticle(
                                    $_POST['title'],
                                    $_POST['description'],
                                    $_POST['text'],
                                    $filepath,
                                    $_POST['description_pictures']
                                    );
            
            $id=$last_id['idarticles'];
            $this->addArticleHaveGame($last_id);
            $this->showArticles($last_id);
            
        };
    }
    public function addArticleHaveGame($id){
        if(!empty($_POST['checkbox']) || $_POST['checkbox'] != 0){
             // Liste de games
            $articleModel = new ArticlesModel();
            $games = $articleModel->getGame();

            // besoin de les 2 ligne du dessus????
            $idGame     = $_POST['checkbox'];

            $id_article = $id;
            $checkbox   = new ArticlesModel();
            $checkbox->articleHaveGame($idGame,$id);
            return $idGame;
        }
        
    }
       


}
