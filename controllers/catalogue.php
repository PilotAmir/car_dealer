<?php
namespace controllers;

class catalogue
{
    private $model;

    function __construct()
    {
        $this->model=new \models\voiture();

        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->index();
        }
    }

    public function index()
    {
        $liste_voiture = $this->model->GetAll();
        if (isset($_POST)) {
            var_dump($_POST);
            
            
        }
        $template = 'views/page/catalogue.phtml';
        include_once 'views/main.phtml';
    }

    public function bmw()
    {
        $liste_voiture = $this->model->GetVoiture("bmw");
        $template = 'views/page/catalogue.phtml';
        include_once 'views/main.phtml';
    }

    public function audi()
    {
        $liste_voiture = $this->model->GetVoiture("audi");
        $template = 'views/page/catalogue.phtml';
        include_once 'views/main.phtml';
    }

    public function mercedes()
    {
        $liste_voiture = $this->model->GetVoiture("mercedes");
        $template = 'views/page/catalogue.phtml';
        include_once 'views/main.phtml';
    }

    public function lamborghini()
    {
        $liste_voiture = $this->model->GetVoiture("lamborghini");
        $template = 'views/page/catalogue.phtml';
        include_once 'views/main.phtml';
    }
}