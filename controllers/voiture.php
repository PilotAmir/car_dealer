<?php
namespace controllers;

class voiture 
{
    private $model;
    function __construct()
    {
        $this->model=new \models\voiture();
        
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target();
        }else{
            $this->store();
        }
    }

    public function index()
    {
      // $template = "views/page/voiture.phtml";
      // include_once 'views/mainadmin.phtml';
    }

      public function store()
      {
          if(isset($_POST["send"])){
              if(!empty($_POST['voiture_brand']) && !empty($_POST['voiture_model']) && !empty($_POST['voiture_color']) && !empty($_POST['voiture_price'])){
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
                            printf("newname = %s\n", $newName);
                            $uploadDir =  "./assets/img";
                            move_uploaded_file($fileTmp, "$uploadDir/$newName");
                            $dir = "$uploadDir/$newName";
                            $this->model->Insert([$_POST['voiture_brand'],$_POST['voiture_model'], $_POST['voiture_color'] , $_POST['voiture_price'], $dir]);
                            header("location: index.php?goto=voiture");
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
              $liste_voiture = $this->model->GetAll();
              $num=1;
              // echo "<pre>";
              // var_dump($liste_voiture); 
          $template ='views/page/voiture.phtml';
          include_once 'views/mainadmin.phtml';
      }

    public function updateVoit()
    {
      $b=$this->model->GetById(intval($_GET['id']));

    if($_SERVER['REQUEST_METHOD']=='POST'){
      if(!empty($_POST['voiture_brand']) && !empty($_POST['voiture_model']) && !empty($_POST['voiture_color']) && !empty($_POST['voiture_price'])){
              define("MAX_SIZE", 3000000);
              
              if (isset($_FILES["img"])) {
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
                          $this->model->Update([$_POST['voiture_brand'],$_POST['voiture_model'], $_POST['voiture_color'],$_POST['voiture_price'], $dir, $_GET['id']]);
                          echo "ok";
                          header("location: index.php?goto=voiture");
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
            $liste_voiture = $this->model->GetAll();
            $num=1;
            // var_dump($image_article); 
            
        $template ='views/page/voiture.phtml';
        include_once 'views/mainadmin.phtml';
     

    }

    
      public function destroy ()
      {
        if (isset($_GET['id'])) {
          // J'appelle DeleteUser() depuis le model, qui me permet de supprimer un utilisateur en fonction de son client_id 
          $this->model->Delete(intval($_GET['id']));
          header("location: index.php?goto=voiture");
          echo'supprimé avec succès';
          exit();
      } else {
        echo'impossible';
          header("location: index.php?goto=voiture");
          exit();
      }
      }
}