<?php 
require_once 'Model\produit/ModelProduit.php';

class ProduitDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }



    public function getProduits() {
        $query = "SELECT * FROM produit";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $produitData = $stmt->fetchAll();
        $produit = [];
    
        foreach ($produitData as $pr) {
            $produit[] = new produit(
                $pr["id"],
                $pr["name"],
                $pr["Price"],
                $pr["Stock"],
                $pr["Type"]

            );
        }
    
        return $produit;
    }


}

?>