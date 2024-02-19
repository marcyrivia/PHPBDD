<?php
require_once '../config/config.php';
require_once "../models/trajet.php";

session_start();

// $trajetdistance = "";
// $trajetdate ="";
// $transportid = 0;
// $userid = 0;

// if (isset($_SESSION['user'])) {
//     $userjson =  json_decode(trajet::getAllTrajetsJson(), true);
// }




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trajet_distance = $_POST["distanceParcourue"];
    $trajet_date = $_POST["dateTrajet"];
    $transport_id = $_POST["TypeDeTransport"];

    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['user_id'];
        $userjson =  json_decode(trajet::getAllTrajetsJson(), true);
    } if (empty($_POST["distanceParcourue"])) {
        $errors['distanceParcourue'] = "Champs obligatoire.";

    }
    trajet::create($trajet_distance, $trajet_date, $user_id, $transport_id);

    // Ajoutez une redirection après la création du trajet
    header('Location: ../controllers/controller-historique.php');


    
    exit; // Assurez-vous d'utiliser exit() après la redirection pour éviter l'exécution continue du script
}

include_once("../views/views-trajet.php");
?>
