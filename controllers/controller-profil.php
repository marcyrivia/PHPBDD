<?php

require_once "../config/config.php";
require_once "../models/utilisateur.php";
require_once "../models/trajet.php";

session_start();

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
    $id_enterprise = $_SESSION['user']['enterprise_id'];
    $profil_picture = $_SESSION['user']['user_photo'];
    $pseudo = $_SESSION['user']['user_pseudo'];
    $lastname = $_SESSION['user']['user_name'];
    $firstname = $_SESSION['user']['user_firstname'];
    $email = $_SESSION['user']['user_email'];
    $dob = $_SESSION['user']['user_dateofbirth'];

}
    //modifer le profil
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $user_id = $_SESSION['user']['user_id'];
    //     $pseudo = $_SESSION['user']['user_pseudo'];
    //     $lastname = $_SESSION['user']['user_name'];
    //     $firstname = $_SESSION['user']['user_firstname'];
    //     $email = $_SESSION['user']['user_email'];
    //     $password = $_SESSION['user']['user_password'];
        
    //     Utilisateur::modifier($user_id, $pseudo, $lastname,  $firstname, $email, $password);

    //     $_SESSION['user']['user_id'];
    //     $_SESSION['user']['user_pseudo'];
    //     $_SESSION['user']['user_name'];
    //     $_SESSION['user']['user_firstname'];
    //     $_SESSION['user']['user_email'];
    //     $_SESSION['user']['user_password'];

    //     header("location: controller-profil.php");
    //     exit();
    // }


?>

<?php
include_once '../views/view-profil.php';
?>