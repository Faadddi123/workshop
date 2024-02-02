<?php 

require_once 'connection\connexion.php';
include 'Model/produit/ProduitDAO.php';
Class ControllerProduit{
    public function get_all_products(){
        $ProduitDAO = new ProduitDAO();
        $products =  $ProduitDAO->getProduits();
        include "View/Produits.php";
    }
}

?>