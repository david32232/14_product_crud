<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;

class AddpostController{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public static function add_post(Router $router){
        $user_id = $_SESSION['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image = $_FILES['profile_picture']['name'];
            $topic = $_POST['topic'];

            if (empty($title) || empty($description) || empty($topic)) {
                throw new Exception('Username, email, gender and password are required');
            }
            $tmp_dir = $_FILES['profile_picture']['tmp_name'];

            $imageDirectory = '/public/post';
            $upload_dir = $_SERVER['DOCUMENT_ROOT'] . $imageDirectory;
            if (!is_dir($upload_dir)){
                mkdir($upload_dir);
            }
            $imgExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            $picProfile = time() . "." . $imgExt;
            move_uploaded_file($tmp_dir, $upload_dir . $picProfile);
            $image = $imageDirectory . $picProfile;

            $isPosted = $router->db->addPost(
                $title,
                $description,
                $image,
                $topic,
                $user_id,
            );
            if($isPosted) {
                echo "Post inserted successfully!!!";
                header("Location: /post");
                exit();
            } else {
                echo 'Unable to insert post.';
            }
            return;
        }
        $user = $_SESSION['user'];
        // var_dump($user);
        // exit;
        $router->renderView("Users/addpost", [
            'user' => $user, 
            'topics' => $router->db->getTopics()
        ]);
    }

}