<?php
namespace controllers;
class acceuil
{
    
    function __construct()
    {
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->acceuil();
        }
    
    }

    public function acceuil()
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