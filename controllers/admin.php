<?php
namespace controllers;

class admin
{
    private $model;
    private $navmodel;
    private $article;
    private $user;
    // use \controllers\utils;
    public function __construct()
   {
    // $_SESSION['links']=$this->GetLinks();
    $this->navmodel=New \models\nav_links();
    $this->model= new \models\reservation();
    $this->article= new \models\article();
    $this->user= new \models\users();
    if(isset($_GET['target'])){
        $target=$_GET['target'];
        $this->$target();
    }else{
        $this->dash();
    }

   } 

   public function dash()
   {
    $template ='views/page/dashboard.phtml';
    include_once 'views/mainadmin.phtml';
   }

   public function store() 
   {
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['links_name']) && isset($_POST['nav_goto']) && isset($_POST['nav_target']))
        {
            //j'appelle la fonction Insert() depuis le model afin d'ajouter les liens en base
            $this->navmodel->Insert([$_POST['links_name'],$_POST['nav_goto'],$_POST['nav_target']]);
            echo "envoyé";
            header("location:index.php?goto=admin");

                 exit();
        }
        else{
            echo 'saisi les liens';
        }
    }
    $links = $this->navmodel->GetAll();
    $template = 'views/page/adddashlink.phtml';
    include_once 'views/mainadmin.phtml';
   }

   public function consulter()
   {
    $liste_client=$this->user->GetAll();
    $num = 1;
    $template = 'views/page/inscription_admin.phtml';
    include_once 'views/mainadmin.phtml';
   }

   public function inscription()
   {
    $template = 'views/page/inscription.phtml';
    include_once 'views/mainadmin.phtml';
   }

   public function article()
   {
      $article = $this->article->GetAll();
      $num=1;
     if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!empty($_POST['titre']) && !empty($_POST['commentaire'])){
              define("MAX_SIZE", 3000000);
              
              if ( isset($_FILES["img"])) {
                $fileName = $_FILES["img"]["name"];
                    $fileTmp = $_FILES["img"]["tmp_name"];
                    printf("tmp folder %s<br>", $fileTmp);
                    $fileSize = $_FILES["img"]["size"];
                    $fileError = $_FILES["img"]["error"];
                  
                    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                    if (in_array($fileExt, ["png", "jpg", "jpeg"])) {
                      if ($fileError === 0) {
                        if ($fileSize < MAX_SIZE) {
                          $newName = uniqid("IMG-", true) . "." . $fileExt;
                          $uploadDir =  "./assets/img";
                          move_uploaded_file($fileTmp, "$uploadDir/$newName");
                          $dir = "$uploadDir/$newName";
                          $this->article->Insert([$_POST['titre'],$_POST['commentaire'], $dir]);
                          echo "ok";
                          header("location: index.php?goto=admin&target=article");
                        exit();
                        } else {
                          echo "Fichier trop volumineux";
                        }
                      } else {
                        echo "Une erreur est survenue lors du chargement du fichier.";
                      }
                    } else {
                      echo "Vous n'êtes pas autorisé à uploader ce type de fichier";
                    }
                    
                  } 

                }
            }
            
            
        $template ='views/page/article.phtml';
        include_once 'views/mainadmin.phtml';
   }

   public function destroy()
   {
    if (isset($_GET['id'])) {
      $this->article->Delete(intval($_GET['id']));
      header("location: index.php?goto=admin&target=article");
      echo'supprimé avec succès';
      exit();
  } else {
    echo'impossible';
      header("location: index.php?goto=voiture");
      exit();
  }
   }

   public function updateArt()
   {
    $a=$this->article->GetById(intval($_GET['id']));

    if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!empty($_POST['titre']) && !empty($_POST['commentaire'])){
              define("MAX_SIZE", 3000000);
              
              if ( isset($_FILES["img"])) {
                $fileName = $_FILES["img"]["name"];
                    $fileTmp = $_FILES["img"]["tmp_name"];
                    printf("tmp folder %s<br>", $fileTmp);
                    $fileSize = $_FILES["img"]["size"];
                    $fileError = $_FILES["img"]["error"];
                  
                    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                    if (in_array($fileExt, ["png", "jpg", "jpeg"])) {
                      if ($fileError === 0) {
                        if ($fileSize < MAX_SIZE) {
                          $newName = uniqid("IMG-", true) . "." . $fileExt;
                          $uploadDir =  "./assets/img";
                          move_uploaded_file($fileTmp, "$uploadDir/$newName");
                          $dir = "$uploadDir/$newName";
                          $this->article->Update([$_POST['titre'],$_POST['commentaire'], $dir, $_GET['id']]);
                          echo "ok";
                          header("location: index.php?goto=admin&target=article");
                        exit();                      } else {
                          echo "Fichier trop volumineux";
                        }
                      } else {
                        echo "Une erreur est survenue lors du chargement du fichier.";
                      }
                    } else {
                      echo "Vous n'êtes pas autorisé à uploader ce type de fichier";
                    }
                    
                  } 

                }
            }
            $article = $this->article->GetAll();
            $num=1;
            // var_dump($image_article); 
            
        $template ='views/page/article.phtml';
        include_once 'views/mainadmin.phtml';
   }

   public function listeClient()
    {
        $liste_client=$this->model->GetAll();
        $num=1;
        $template = 'views/page/liste_client.phtml';
        include_once 'views/mainadmin.phtml';
    }

   
    

}