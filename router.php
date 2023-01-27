<?php

namespace apps\router;

class router
{
    public function route()
    {
        spl_autoload_register(function($class){
            include_once str_replace('\\','/',$class). ".php";
        });
        if(isset($_GET['goto'])){
            switch ($_GET['goto']){
                case 'menu':
                    $user = new \controllers\menu;
                    break;
                case 'catalogue':
                    $user = new \controllers\catalogue;
                    break;
                case 'inscription':
                    $user = new \controllers\inscription;
                        break;
                case 'connexion':
                    $user = new \controllers\authentification;
                    break;
                case 'voiture' :
                    $user = new \controllers\voiture;
                    break;    
                case 'admin' :
                    $user = new \controllers\admin;
                    break;    
                case 'reservation' :
                    $user = new \controllers\reservation;
                    break;
            }

        }else{
            $user = new \controllers\menu;
        }

    }
}