<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;

class UpdatetopicController{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public static function update_topic(Router $router){
        $id = $_GET['id'];
        $user_id = $_SESSION['id'];
        if (!$id){
            header('Location: /topic');
            exit;
        }
        $fetchoneTopic = $router->db->fetchoneTopic($id, $user_id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $topic = $_POST['topic'];
            $description = $_POST['description'];

            if (empty($topic) || empty($description)) {
                throw new Exception('Topic and Description are required');
            }
            $isfetched = $router->db->updateTopic(
                $id,
                $topic,
                $description,
            );
            if($isfetched) {
                echo "Topic updated successfully!!!";
                header("Location: /topic");
                exit();
            } else {
                echo 'Unable to update topic.';
            }
            return;
        }
        if ($fetchoneTopic){
            $_SESSION['onetopic'] = $fetchoneTopic;
        }
        $user = $_SESSION['user'];
        $onetopic = $_SESSION['onetopic'];
        $router->renderView("Users/updatetopic", ['user' => $user, 'oneTopic' => $onetopic]);
    }

}