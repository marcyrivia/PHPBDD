<?php

require_once "../config/config.php";
require_once "../models/utilisateur.php";

session_start();

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
    $id_enterprise = $_SESSION['user']['enterprise_id'];
    $pseudo = $_SESSION['user']['user_pseudo'];
    $lastname = $_SESSION['user']['user_name'];
    $firstname = $_SESSION['user']['user_firstname'];
    $email = $_SESSION['user']['user_email'];
    $dob = $_SESSION['user']['user_dateofbirth'];


}
?>

<?php
include_once '../views/view-profil.php';
?>