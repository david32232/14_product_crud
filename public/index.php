<?php
session_start();
require_once __DIR__.'/../vendor/autoload.php';

use App\Controllers\AddpostController;
use App\Controllers\AddtopicController;
use App\Router\Router;
use App\Controllers\BlogController;
use App\Controllers\RegisterController; 
use App\Controllers\LoginController;
use App\Controllers\CategoryController;
use App\Controllers\SingleController;
use App\Controllers\ContactController;
use App\Controllers\DeletetopicController;
use App\Controllers\DeletepostController;
use App\Controllers\MainController;
use App\Controllers\UpdatepostController;
use App\Controllers\UpdatetopicController;
use App\Controllers\PostController;
use App\Controllers\TopicController;

$router = new Router();

$router->get('/index', [MainController::class, 'index']);
$router->post('/index', [MainController::class, 'index']);
$router->get('/register', [RegisterController::class, 'register']);
$router->post('/register', [RegisterController::class, 'register']);
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/my_blog', [BlogController::class, 'my_blog']);
$router->post('/my_blog', [BlogController::class, 'my_blog']);
$router->get('/contact', [ContactController::class, 'contact']);
$router->post('/contact', [ContactController::class, 'contact']);
$router->get('/category', [CategoryController::class, 'category']);
$router->post('/category', [CategoryController::class, 'category']);
$router->get('/all-category', [CategoryController::class, 'all_category']);
$router->post('/all-category', [CategoryController::class, 'all_category']);
$router->get('/single', [SingleController::class, 'single_blog']);
$router->post('/single', [SingleController::class, 'single_blog']);
$router->get('/updatepost', [UpdatepostController::class, 'update_post']);
$router->post('/updatepost', [UpdatepostController::class, 'update_post']);
$router->get('/deletepost', [DeletepostController::class, 'delete_post']);
$router->post('/deletepost', [DeletepostController::class, 'delete_post']);
$router->get('/addpost', [AddpostController::class, 'add_post']);
$router->post('/addpost', [AddpostController::class, 'add_post']);
$router->get('/post', [PostController::class, 'post']);
$router->get('/updatetopic', [UpdatetopicController::class, 'update_topic']);
$router->post('/updatetopic', [UpdatetopicController::class, 'update_topic']);
$router->get('/deletetopic', [DeletetopicController::class, 'delete_topic']);
$router->post('/deletetopic', [DeletetopicController::class, 'delete_topic']);
$router->get('/addtopic', [AddtopicController::class, 'add_topic']);
$router->post('/addtopic', [AddtopicController::class, 'add_topic']);
$router->get('/topic', [TopicController::class, 'topic']);

$router->resolve();