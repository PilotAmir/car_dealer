<?php
namespace controllers;

class users implements base
{
    private $model;
    function __construct()
    {
        $this->model=new \models\users();
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->store();
        }
    }

    public function store()
    {   
       
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['identifiant']) && isset($_POST['mdp']) && isset($_POST['cmdp']) ) {
                $this->model->Insert([$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel']], $_POST['identifiant'],);
                // echo $_POST['nom'];
                // echo $_POST['prenom'];
                // echo $_POST['email'];
                // echo $_POST['tel'];
                // echo $_POST['login'];
                // echo $_POST['mdp'];
                // echo $_POST['cmdp'];
                header("location:index.php");
                exit();
            }else{
                echo'mot de passe non conforme';
            }
        }   

        $template = 'views/page/inscription.phtml';
        include_once 'views/main.phtml';
    }

    public function update()
    {
        $this->model->GetById(intval($_GET['id']));
    }

    public function destroy()
    {
        if (isset($_GET['id'])) {
            // J'appelle DeleteUser() depuis le model, qui me permet de supprimer un utilisateur en fonction de son id 
            $this->model->Delete(intval($_GET['id']));
            header("location: index.php");
            exit();
        } else {
            header("location: index.php");
            exit();
        }
    }

    public function index()
    {
        
    }

    
}