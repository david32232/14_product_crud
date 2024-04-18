<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;

class DeletetopicController{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public static function delete_topic(Router $router){
        $id = $_POST['id'];
        if (!$id){
            header('Location: /topic');
            exit;
        }else{
            $router->db->deletetopic($id);
            header('Location: /topic');
        }
    }
}