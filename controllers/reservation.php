<?php
namespace controllers;
class reservation
{
    private $reserve;
    private $model;
    function __construct()
    {
        $this->reserve=new \models\reservation();
        $this->model=new \models\voiture();
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->reserver();
        }
    
    }

    public function reserver()
    {

        $liste_voiture = $this->model->GetAll();

        if (isset($_POST["ss"])){
            var_dump($_POST);
            echo"voila la session";
            var_dump($_SESSION['user_id']);
            $this->reserve->Insert([$_SESSION['user_id'], $_POST['id_de_voiture'], $_POST['pack_reserver']]);
            header("location: index.php?goto=reservation");
            exit(); 
        }


        $template = 'views/page/espaceclient.phtml';
        include_once 'views/main.phtml';
    }

    public function liste_reservation()
    {
        $liste_reservation=$this->reserve->GetReservation();
        $num=1;
        $template = 'views/page/liste_reservation.phtml';
        include_once 'views/mainadmin.phtml';
    }

}