<?php
namespace controllers;
class about
{
    function __construct()
    {
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->about();
        }
    }

    public function about()
    {
        $template = 'views/page/about.phtml';
        include_once 'views/main.phtml';
    }
}