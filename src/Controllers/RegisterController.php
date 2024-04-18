<?php

namespace App\Controllers;

use App\Database\Database;
use App\Router\Router;
use Exception;

class RegisterController
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public static function register(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $profile_picture = $_FILES['profile_picture']['name'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];

            if (empty($username) || empty($email) || empty($gender) || empty($password)) {
                throw new Exception('Username, email, gender and password are required');
            }
            // validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email address');
            }

            // validate password
            if (strlen($password) < 6) {
                throw new Exception("Password must be at least 6 characters long");
            }
            if (!preg_match('/[A-Z]/', $password)) {
                throw new Exception("Password must contain at least one uppercase letter");
            }
            if (!preg_match('/\d/', $password)) {
                throw new Exception("Password must contain at least one digit");
            }
            if (!preg_match('/[^A-Za-z0-9]/', $password)) {
                throw new Exception("Password must contain at least one special character");
            }
            $tmp_dir = $_FILES['profile_picture']['tmp_name'];

            $imageDirectory = '/public';
            $upload_dir = $_SERVER['DOCUMENT_ROOT'] . $imageDirectory;
            if (!is_dir($upload_dir)){
                mkdir($upload_dir);
            }
            $imgExt = strtolower(pathinfo($profile_picture, PATHINFO_EXTENSION));
            $picProfile = time() . "." . $imgExt;
            move_uploaded_file($tmp_dir, $upload_dir . $picProfile);
            $image = $imageDirectory . $picProfile;

            $isRegistered = $router->db->registerUser(
                $username,
                $email,
                $image,
                $gender,
                password_hash($password, PASSWORD_DEFAULT),
            );
            if($isRegistered) {
                
                echo "User registered successfully!!!";
                header("Location: /login");
                exit();
            } else {
                echo 'Unable to register user.';
            }
            return;
        }

        $router->renderView("Users/register");
    }
}
