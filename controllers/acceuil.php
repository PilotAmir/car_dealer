<?php
namespace controllers;
class acceuil
{
    private $acceuil;
    function __construct()
    {
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->home();
        }
    
    }
    public function home()
    {
        $template='views/acceuil.phtml';
    }
}