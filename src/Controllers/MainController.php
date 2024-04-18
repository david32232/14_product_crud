<?php

namespace App\Controllers;

use App\Router\Router;
use App\Database\Database;

class MainController{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public static function index(Router $router){
        $postsByTopic = [];
        $topics = $router->db->getTopics(4);
        foreach($topics as $item) {
            $posts = $router->db->fetchPostsByTopicId($item['ID']);
            $postsByTopic[]= [
                'topic' => $item['topic'],
                'posts' => $posts
            ];
        }

        // var_dump($postsByTopic);
        // exit;
        $router->renderView("Users/index", [
            'posts' => $router->db->fetchallPost(),
            'topics'=> $router->db->fetchallTopic(),
            'postsByTopic' => $postsByTopic,
        ]);
    }

}