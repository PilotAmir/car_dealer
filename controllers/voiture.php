<?php
namespace controllers;

class voiture implements base
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
        if($_SERVER['REQUEST_METHOD']=='POST'){
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
                          echo "ok";
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
            // echo "<pre>";
            // var_dump($liste_voiture); 
        $template ='views/page/voiture.phtml';
        include_once 'views/mainadmin.phtml';
    }

    public function update()
    {

    }
    public function destroy ()
    {

    }
}