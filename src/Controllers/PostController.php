<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;

class PostController{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public static function post(Router $router){
        $user_id = $_SESSION['id'];
        $fetchPost = $router->db->fetchAllPostForEachUser($user_id);
        // var_dump($fetchPost);
        // exit;
        $user = $_SESSION['user'];
        $router->renderView("Users/post", ['user' => $user, 'postResult' => $fetchPost]);
    }

}