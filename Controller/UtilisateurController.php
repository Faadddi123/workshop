<?php 
require_once 'connection\connexion.php';
include 'Model/user/userDAO.php';
Class Controlleruser{



    public function form_register(){
        include 'View/register.php';
    }

    public function login(){
        if(isset($_POST["name"]) && isset($_POST["email"])){
            $userDAO = new userDAO();
            $name = $_POST["name"];
            $email = $_POST["email"];
            $userDAO->register_user($name , $email);
            header('Location: index.php');
        }

    }
}

?>