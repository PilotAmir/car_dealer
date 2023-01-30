<?php
namespace controllers;

class inscription implements base
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
       
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['tel']) && isset($_POST['identifiant']) && isset($_POST['mdp']) && isset($_POST['cmdp']))


            {
                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                {
                    if (stripslashes(trim($_POST["mdp"])) == stripslashes(trim($_POST   ["cmdp"])))
                    {
                        $password = password_hash(stripslashes(trim($_POST["mdp"])), PASSWORD_DEFAULT);

                        $this->model->Insert([stripslashes(trim($_POST['nom'])), stripslashes(trim($_POST['prenom'])), stripslashes(trim($_POST['email'])), stripslashes(trim($_POST['tel'])), stripslashes(trim($_POST['identifiant'])), $password ]);

                        header("location:index.php?goto=connexion");
                        exit();

                    }   else
                        {echo'mot de passe non conforme';}

                }   else
                    {echo'email invalide';
                
                }
                    
               
              
           
            }   
        }
        $template = 'views/page/inscription.phtml';
        include_once 'views/main.phtml';
 
    }



    public function update()
    {
        $this->model->GetById(intval($_GET['client_id']));
    }

    public function destroy()
    {
        if (isset($_GET['id'])) {
            // J'appelle DeleteUser() depuis le model, qui me permet de supprimer un utilisateur en fonction de son client_id 
            $this->model->Delete(intval($_GET['id']));
            echo'supp';
            // header("location: index.php");
            // exit();
        } else {
            // header("location: index.php");
            // exit();
            echo'impossible';
        }
    }

  

    public function index()
    {
            $this->Conect_verif();
            $users = $this->model->GetAll();
            $num = 1;
            // $template='views/page/liste.phtml';
            // include_once 'views/main.phtml';
        
    }


    public function listeClient()
    {
        $liste_client=$this->model->GetAll();
        $num=1;
        $template = 'views/page/liste_client.phtml';
        include_once 'views/mainadmin.phtml';
    }
    
    

}