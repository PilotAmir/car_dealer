<?php
namespace controllers;

class reservation
{
    function __construct()
    {
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->reservation();
        }
    }

    public function reservation()
    {
        $template = 'views/page/reservation.phtml';
        include_once 'views/main.phtml';
    }
}