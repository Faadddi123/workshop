<?php 
require_once 'Model\produit/ModelProduit.php';

class PanierDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }


    public function add_to_panier($produit_id,$user_id){
        $query = "INSERT INTO PanierAchat (user_id, Produit_id) VALUES (:user_id , :produit_id)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':produit_id', $produit_id, PDO::PARAM_INT);  
        $stmt->execute();

    }
}
?>