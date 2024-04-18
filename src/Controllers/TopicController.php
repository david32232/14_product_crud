<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;

class TopicController{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public static function topic(Router $router){
        $user_id = $_SESSION['id'];
        $fetchTopic = $router->db->fetchallTopicByUserId($user_id);
        $user = $_SESSION['user'];
        $router->renderView("Users/topic", ['user' => $user, 'postTopic' => $fetchTopic]);
    }

}