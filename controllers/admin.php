<?php
namespace controllers;

class admin
{
    private $model;
    private $NavModel;
    // use \controllers\utils;
    public function __construct()
   {
    // $_SESSION['links']=$this->GetLinks();
    // $this->Navmodel=New \models\nav_links();
    $this->model= new \models\reservation();
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
            $this->Navmodel->Insert([$_POST['LinksName'],$_POST['navGoto'],$_POST['navTarget'],$_POST['UserRole']]);
            echo "envoyé";
            header("location:index.php?goto=admin");

                 exit();
        }
        else{
            echo 'saisi les liens';
        }
    }

    $template = 'views/page/adddashlink.phtml';
    include_once 'views/mainadmin.phtml';
   }

   public function consulter()
   {
    $liste_reservation=$this->model->GetReservation();
    $template = 'views/page/consulter.phtml';
    include_once 'views/mainadmin.phtml';
   }

   public function inscription()
   {
    $template = 'views/page/inscription.phtml';
    include_once 'views/mainadmin.phtml';
   }

}