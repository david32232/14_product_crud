<?php

namespace App\Controllers;

use App\Router\Router;
use App\Database\Database;

class DeletepostController{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public static function delete_post(Router $router){
        $id = $_POST['id'];
        if (!$id){
            header('Location: /post');
            exit;
        }else{
            $router->db->deletepost($id);
            header('Location: /post');
        }
    }

}