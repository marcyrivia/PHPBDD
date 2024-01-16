<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dbName = "geralt";
    $dbUser = "geralt";
    $dbPassword ="am12ine34";
    $db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser,  $dbPassword);

    $user_pseudo = $_POST["pseudo"];
    $password = $_POST["password"];


    $sql = "SELECT user_pseudo , user_password
     FROM userprofil
     where user_pseudo = $user_pseudo";
    var_dump($sql);

}


?>



<?php

// Inclusion de la vue
include_once('../views/view-signin.php');
?>