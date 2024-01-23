<?php
require_once '../config/config.php';
require_once "../models/trajet.php";

session_start();

// $trajetdistance = "";
// $trajetdate ="";
// $transportid = 0;
// $userid =0;




var_dump($_SESSION);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trajet_distance= $_POST["distanceParcourue"];
    $trajet_date = $_POST["dateTrajet"];
    $transport_id = $_POST["TypeDeTransport"];



    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['user_id'];
    }

    trajet::create( $trajet_distance, $trajet_date, $user_id, $transport_id);
}







include_once("../views/views-trajet.php");
?>