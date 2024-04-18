<?php

namespace App\Database;

use PDO;
use PDOException;


class Database
{
    public $host = 'localhost';
    public $port = 3306;
    public $user = 'root';
    public $password = '';
    public $dbname = 'User';

    public PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;port=$this->port;", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS $this->dbname";
            $this->pdo->exec($sql);
            $sql = "use $this->dbname";
            $this->pdo->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS User_profile(
            `ID` int(11) AUTO_INCREMENT PRIMARY KEY,
            `username` varchar(200),
            `email` varchar(200),
            `profile_picture` varchar(200), 
            `gender` varchar(200), 
            `password` varchar(200)
        )";
        try {
            if($this->pdo->exec($sql)) {
                echo "Table created";
            }
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }

    public function registerUser(
        string $username,
        string $email,
        string $profile_picture,
        string $gender,
        string $password
    ) {
        $this->createTable();
        $sql = $this->pdo->prepare(
            "INSERT INTO User_profile (`username`, `email`, `profile_picture`, `gender`, `password`) 
            VALUES(:username, :email, :profile_picture, :gender, :password)"
        );
        $sql->bindValue(":username", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":profile_picture", $profile_picture);
        $sql->bindValue(":gender", $gender);
        $sql->bindValue(':password', $password);
        if($sql->execute()) {
            return true;
        }
        return false;
    }

    public function loginUser(string $username, string $password){
        $sql = $this->pdo->prepare ("SELECT * FROM User_profile WHERE `username` = :username");
        $sql->bindValue(":username", $username);
        if ($sql->execute()){
            $user = $sql->fetch(PDO::FETCH_ASSOC);

            //verify the password
            if($user && password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }

    public function createpostTable(){
        $sql = "CREATE TABLE IF NOT EXISTS blog_post(
            `ID` int(11) AUTO_INCREMENT PRIMARY KEY,
            `title` varchar(200),
            `description` text,
            `image` varchar(200), 
            `topic` varchar(200), 
            `created-at` date DEFAULT NULL
        )";
        try {
            if($this->pdo->exec($sql)) {
                echo "Table created";
            }
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }

    public function addPost(
        string $title,
        string $description,
        string $image,
        string $topic,
        int $user_id
    ){
        $this->createpostTable();
        $sql = $this->pdo->prepare(
            "INSERT INTO blog_post (`title`, `description`, `image`, `topic`, `created-at`, `user_id`) 
            VALUES(:title, :description, :image, :topic, now(), :user_id)"
        );
        $sql->bindValue(":title", $title);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":image", $image);
        $sql->bindValue(":topic", $topic);
        $sql->bindValue(":user_id", $user_id);
        if($sql->execute()) {
            return true;
        }
        return false;
    }

    
    public function fetchonePost($id, $user_id){
        $sql  = $this->pdo->prepare("SELECT * FROM blog_post WHERE `ID` = :id AND `user_id` = :user_id ");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':user_id', $user_id);
        $sql->execute();
        if($sql->execute()) {
            $getonePost = $sql->fetch(PDO::FETCH_ASSOC);
            return $getonePost;
        }
    }

    public function updatePost(
        int $id,
        string $title,
        string $description,
        string $image,
        string $topic,
        int $user_id
    ){
        $sql = $this->pdo->prepare(
            "UPDATE blog_post SET `title` = :title, `description` = :description, `image` = :image,
            `topic` = :topic, `created-at` = now() WHERE `id` = :id AND `user_id` = :user_id ");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":title", $title);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":image", $image);
        $sql->bindValue(':user_id', $user_id);
        $sql->bindValue(":topic", $topic);
        if($sql->execute()) {
            return true;
        }
        return false;
    }

    public function fetchAllPostForEachUser($user_id){
        $sql  = $this->pdo->prepare("SELECT * FROM blog_post WHERE `user_id` = :user_id ");
        $sql->bindValue(":user_id", $user_id);
        $sql->execute();
        if($sql->execute()) {
            $post = $sql->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode($post);
            // exit;
            return $post;
        }
    }

    public function deletepost($id){
        $sql  = $this->pdo->prepare("DELETE FROM blog_post WHERE `ID` = :id");
        $sql->bindValue(':id', $id);
        if($sql->execute()) {
            return $sql;
        }
    }

    public function createtopicTable(){
        $sql = "CREATE TABLE IF NOT EXISTS blog_topics(
            `ID` int(11) AUTO_INCREMENT PRIMARY KEY,
            `topic` varchar(200),
            `description` text,
            `created-at` date DEFAULT NULL
        )";
        try {
            if($this->pdo->exec($sql)) {
                echo "Table created";
            }
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }

    public function addTopic(
        string $topic,
        string $description,
        int $user_id
    ){
        $this->createtopicTable();
        $sql = $this->pdo->prepare(
            "INSERT INTO blog_topics (`topic`, `description`, `created-at`, `User`) 
            VALUES(:topic, :description, now(), :user_id)"
        );
        $sql->bindValue(":topic", $topic);
        $sql->bindValue(":description", $description);
        $sql->bindValue(':user_id', $user_id);
        if($sql->execute()) {
            return true;
        }
        return false;
    }

    public function fetchallTopic(){
        $sql  = $this->pdo->prepare("SELECT * FROM blog_topics");
        $sql->execute();
        if($sql->execute()) {
            $postTopic = $sql->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode($postResult);
            // exit;
            return $postTopic;
        }
    }

    public function fetchallTopicByUserId($user_id){
        $sql  = $this->pdo->prepare("SELECT * FROM blog_topics WHERE `User` = :user_id ");
        $sql->bindValue(':user_id', $user_id);
        $sql->execute();
        if($sql->execute()) {
            $postTopic = $sql->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode($postResult);
            // exit;
            return $postTopic;
        }
    }

    public function fetchoneTopic($id, $user_id){
        $sql  = $this->pdo->prepare("SELECT * FROM blog_topics WHERE `ID` = :id AND `User` = :user_id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':user_id', $user_id);
        $sql->execute();
        if($sql->execute()) {
            $getoneTopic = $sql->fetch(PDO::FETCH_ASSOC);
            return $getoneTopic;
        }
    }

    public function updateTopic(
        int $id,
        string $topic,
        string $description,
    ){
        $sql = $this->pdo->prepare(
            "UPDATE blog_topics SET `topic` = :topic, `description` = :description,
            `created-at` = now() WHERE `id` = :id ");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":topic", $topic);
        $sql->bindValue(":description", $description);
        if($sql->execute()) {
            return true;
        }
        return false;
    }

    public function deletetopic($id){
        $sql  = $this->pdo->prepare("DELETE FROM blog_topics WHERE `ID` = :id");
        $sql->bindValue(':id', $id);
        if($sql->execute()) {
            return $sql;
        }
    }

    public function getTopics(?int $limit = null){
        $query = "SELECT * FROM blog_topics ";
        if($limit) {
            $query .= "LIMIT $limit";
        }
        $sql = $this->pdo->prepare($query);
        if($sql->execute()) {
            $getTopics = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $getTopics;
        }
        return [];
    }

    public function fetchallPost(){
        $sql  = $this->pdo->prepare("SELECT `bp`.*, `bt`.`topic` as `blog_topic` FROM blog_post `bp` JOIN `blog_topics` `bt` on `bt`.`id` = `bp`.`topic`");
        $sql->execute();
        if($sql->execute()) {
            $postResult = $sql->fetchAll(PDO::FETCH_ASSOC);
            // echo json_encode($postResult);
            // exit;
            return $postResult;
        }
    }


    public function fetchPostsByTopicId($id){
        $sql = $this->pdo->prepare("SELECT * FROM blog_post  WHERE topic = :id");
        $sql->bindValue(':id', $id);
        if($sql->execute()) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function fetchSingleTopicById($id){
        $sql = $this->pdo->prepare("SELECT p.*, c.topic as topic FROM blog_post p join blog_topics c on c.ID = p.topic WHERE c.ID = :id");
        $sql->bindValue(':id', $id);
        if($sql->execute()) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function limitTopicToOne($id, ?int $limit = null){
        $query = "SELECT p.*, c.topic as topic FROM blog_post p join blog_topics c on c.ID = p.topic WHERE c.ID = :id";
        if($limit !== null) {
            $query .= " LIMIT $limit";
        }
        $sql = $this->pdo->prepare($query);
        $sql->bindValue(':id', $id);
        if($sql->execute()) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function categoryFetchallPost(?int $limit = null){
        $query = "SELECT `bp`.*, `bt`.`topic` as `blog_topic` FROM blog_post `bp` JOIN `blog_topics` `bt` on `bt`.`id` = `bp`.`topic`";
        if($limit !== null) {
            $query .= " LIMIT $limit";
        }
        $sql  = $this->pdo->prepare($query);
        $sql->execute();
        if($sql->execute()) {
            $postResult = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $postResult;
        }
    }

    public function fetchSinglePost($id){
        $sql  = $this->pdo->prepare("SELECT `bp`.*,`bt`.`topic` as `blog_topic` FROM blog_post `bp` JOIN `blog_topics` `bt` on `bt`.`id` = `bp`.`topic` WHERE `bp`.`ID` = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        if($sql->execute()) {
            $getoneTopic = $sql->fetch(PDO::FETCH_ASSOC);
            return $getoneTopic;
        }
    }

    public function fetchSingleTopicByTopicId($topicId, $postId){
        $sql = $this->pdo->prepare("SELECT p.*, c.topic as topic FROM blog_post p join blog_topics c on c.ID = p.topic WHERE p.topic = :id AND p.ID != :postId" );
        $sql->bindValue(':id', $topicId);
        $sql->bindValue(':postId', $postId);
        if($sql->execute()) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }



}