<?php

namespace App\Controllers;

use App\Router\Router;

class ContactController{

    public static function contact(Router $router){
        
        // Render profile view and pass user data
        $router->renderView("Users/contact");
    }

}