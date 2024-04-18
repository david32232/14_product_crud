<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;

class UpdatepostController{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public static function update_post(Router $router){
        $id = $_GET['id'];
        $user_id = $_SESSION['id'];
        if (!$id){
            header('Location: /post');
            exit;
        }
        $fetchonePost = $router->db->fetchonePost($id, $user_id);
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

            $isfetched = $router->db->updatePost(
                $id,
                $title,
                $description,
                $image,
                $topic,
                $user_id
            );
            if($isfetched) {
                echo "Post updated successfully!!!";
                header("Location: /post");
                exit();
            } else {
                echo 'Unable to update post.';
            }
            return;
        }
        if ($fetchonePost){
            $_SESSION['onepost'] = $fetchonePost;
        }
        $user = $_SESSION['user'];
        $onepost = $_SESSION['onepost'];
        $router->renderView("Users/updatepost", ['user' => $user, 'onePost' => $onepost, 'topics' => $router->db->getTopics()]);
    }

}