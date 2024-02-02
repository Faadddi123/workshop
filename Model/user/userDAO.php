<?php
require_once 'Model\user\modeluser.php';

class userDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function register_user($name,$email){
        $query = "INSERT INTO Utilisateur (username, email) VALUES (:username , :email)";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);    
        $stmt->execute();
        $_SESSION['user'] = $name;
    }
    public function getUserByName($username){
        $query = "SELECT id FROM Utilisateur WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute(); 
        $userid = $stmt->fetchColumn(); 
    
        return $userid;
    }
    
}
?>