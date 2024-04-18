<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;

class AddtopicController{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public static function add_topic(Router $router){
        $user_id = $_SESSION['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $topic = $_POST['topic'];
            $description = $_POST['description'];

            if (empty($topic) || empty($description)) {
                throw new Exception('Topic and Description are required');
            }
            $isPosted = $router->db->addTopic(
                $topic,
                $description,
                $user_id
            );
            if($isPosted) {
                echo "Topic inserted successfully!!!";
                header("Location: /topic");
                exit();
            } else {
                echo 'Unable to insert topic.';
            }
            return;
        }
        $user = $_SESSION['user'];
        $router->renderView("Users/addtopic", ['user' => $user]);
    }

}