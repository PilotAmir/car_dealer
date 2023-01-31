<?php
namespace controllers;
class menu
{
    private $article;
    function __construct()
    {
        $this->article= new \models\article();
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->accueil();
        }
    
    }

    public function accueil()
    {
        $template = 'views/page/acceuil.phtml';
        include_once 'views/main.phtml';
    }

    public function about()
    {
        $article = $this->article->GetAll();
        $template = 'views/page/about.phtml';
        include_once 'views/main.phtml';
    }

}