<?php

namespace App\Controllers;

use App\Router\Router;

class BlogController{

    public static function my_blog(Router $router){
        $user = $_SESSION['user'];
        
        // Render profile view and pass user data
        $router->renderView("Users/my_blog", ['user' => $user]);
    }

}