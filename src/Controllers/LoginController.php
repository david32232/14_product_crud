<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;


class LoginController
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public static function login(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['password']) && isset($_POST['username'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $isLoggedIn = $router->db->loginUser($username, $password);
                if ($isLoggedIn) {
                    if ($username !== $isLoggedIn['username']) {
                        throw new Exception('Incorrect Username');
                    }
                    $_SESSION['user'] = $isLoggedIn;
                    $_SESSION['id'] = $isLoggedIn['ID'];
                    header("Location: /index");
                    exit();
                } else {
                    echo 'Unable to login user.';
                }
                return;
            }
        }
        $router->renderView("Users/login");
    }

    public static function logout(Router $router){
        session_start(); // Start session if not already started
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session

        // Redirect to home page or any desired page after logout
        header("Location: /login"); // Redirect to home page
        exit();
        
    }
}
