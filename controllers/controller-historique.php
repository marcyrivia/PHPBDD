
<?php
require_once "../config/config.php";
require_once "../models/utilisateur.php";
require_once "../models/trajet.php";


session_start();

if(!isset($_SESSION["user"])){
    // si il n'estpas conneté le renvoyer dans la page de connexion
    header("location: ../controller/singin.php");
    exit();
} else if (isset($_SESSION["user"])){
    $user_id = $_SESSION["user"]["user_id"];
    $trajets =  trajet::historique($user_id);
    // supprimer un trajet
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        if(isset($_POST["delete"])){
            if($_POST["delete"]=== "delete"){
                trajet::delete($_POST["ride_id"]);
                header("Location: controller-historique.php");
        } else {
            header("Location: controller-historique.php");
        }
    }
    }
}




?>

<?php


// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-historique.php');
?>