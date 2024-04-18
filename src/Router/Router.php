<?php

namespace App\Router;

use App\Database\Database;

class Router{

    public array $getRoutes = [];
    public array $postRoutes = []; 
    public Database $db;

    public function __construct(){
        $this->db = new Database();
    }
    public function get($url, $fn){
        $this->getRoutes[$url] = $fn;
    }
    public function post($url, $fn){
        $this->postRoutes[$url] = $fn;
    }

    public function resolve(){

        // echo '<pre>';
        // var_dump($_SERVER);
        // echo '</pre>';
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET'){
            $fn = $this->getRoutes[$currentUrl] ?? null;
        }else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }

        if ($fn){
            $response = call_user_func($fn, $this);
            echo $response;
        }else {
            echo "page not found";
        }
    }

    public function renderView($view, $params=[]){

        foreach ($params as $key=> $value){
            $$key = $value;
        }
        ob_start();
        include_once __DIR__. "/../Views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__. "/../Views/_layout.php";
    }
}