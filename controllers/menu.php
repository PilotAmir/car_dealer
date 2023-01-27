<?php
namespace controllers;
class menu
{
    
    function __construct()
    {
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
        $template = 'views/page/about.phtml';
        include_once 'views/main.phtml';
    }

}