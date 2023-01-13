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
                // case 'user':
                //     $user = new \controllers\users;
                // case 'reservation':
                //     $user = new \controllers\reservation;
                //     break;
                // case 'auth':
                //     $user = new \controllers\Auth;
                //     break;
                // case 'admin':
                //     $user = new \controllers\admin;
                //     break;
                // case 'plats':
                //     $user = new \controllers\plats;
                //     break;
                // case 'menu' :
                //     $user = new \controllers\menu;
                //     break;    
            }

        }else{
            $user = new \controllers\acceuil;
        }

    }
}