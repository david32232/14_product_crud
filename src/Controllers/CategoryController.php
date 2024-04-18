<?php

namespace App\Controllers;

use App\Router\Router;

class CategoryController{

    public static function category(Router $router){
        $id = $_GET['id'] ?? null;
        if ($id === null) {
            // Redirect to categories page showing all posts
            header('Location: /all-category');
            exit;
        }
        $onetopic = $router->db->limitTopicToOne($id,1);
        $posts = $router->db->fetchSingleTopicById($id);
        $router->renderView("Users/category", [
            'posts'=>$posts, 
            'onetopic'=>$onetopic,
            'topics'=> $router->db->fetchallTopic(),
        ]);
    }

    public static function all_category(Router $router){
        $user = $_SESSION['user'];
        $router->renderView("Users/all-category", [
            'user' => $user, 
            'posts' => $router->db->categoryFetchallPost(4),
            'all_posts' => $router->db->fetchallPost(), 
            'topics'=> $router->db->fetchallTopic(),
        ]);
    }

}