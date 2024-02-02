<?php 
include_once "Controller/UtilisateurController.php" ;
include_once "Controller/ProduitController.php" ;
include_once "Controller/PanierController.php" ;
session_start();
$controller_user = new Controlleruser();
$controller_produit = new ControllerProduit();
$controller_panier = new ControllerPanier();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    switch ($action){
        case 'login':
            $controller_user->login();
            break;
        case 'addtocard':
            $controller_panier->Add_to_Panier();
            break;
        case 'register':
            $controller_user->form_register();
            break;

    }

} else {

    
    // $controller_user->form_register();
    $controller_produit->get_all_products();
}

?>