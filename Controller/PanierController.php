<?php 

require_once 'connection\connexion.php';
include_once 'Model/panier/PanierDAO.php';
include_once 'Model/user/userDAO.php';
Class ControllerPanier{
    public function Get_all(){

    }

    public function Add_to_Panier(){
        if(isset($_GET['id'])){
            $produit_id = $_GET['id'];
            $username = $_SESSION['user'];
           
            $userDAO = new userDAO();
            $user_id = $userDAO->getUserByName($username);
            $panierDAO = new PanierDAO();
            $panierDAO->add_to_panier($produit_id,$user_id);
        }
    }
}

?>