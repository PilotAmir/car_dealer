<?php
namespace controllers;
trait utils
{
    public function Conect_verif()
    {
        if(!isset($_SESSION['auth'])){
            header("location: index.php");
            exit();
        } 
    }
    
    
}