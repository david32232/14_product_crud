<?php

namespace App\Controllers;

use App\Router\Router;

class SingleController{

    public static function single_blog(Router $router){
        $id = $_GET['id'] ;
        // fecthing single post 
        $onetopic = $router->db->fetchSinglePost($id);

        // fetching related post by topic id 
        $topicId = $onetopic['topic'] ; // fetching the field topic from the table blog_post
        $topicById = $router->db->fetchSingleTopicByTopicId($topicId, $id);  // Pass $id to exclude the current post
        // var_dump($topicById);
        // exit;
        // Render profile view and pass user data
        $router->renderView("Users/single", [
            'onetopic'=>$onetopic,
            'posts'=>$topicById,
            'topics'=> $router->db->fetchallTopic(),
        ]);
    }

}