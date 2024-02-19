<?php

require_once "../config/config.php";
require_once "../models/utilisateur.php";


session_start();


if (!isset($_SESSION["user"])) {
  // Si l'utilisateur n'est pas connecté, on le renvoie vers la page de connexion 
  header("Location: ../controller-signin.php");
    exit();
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification du fichier uploadé et autres traitements...

    // Récupération des données du formulaire
    $user_id = $_SESSION["user"]["user_id"];
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];

     // Tableau pour stocker les erreurs
     $errors = [];

     
     
     
     
     if (empty($_POST["pseudo"])){ 
      $errors["pseudo"] = "Champ obligatoire"; 
     } else if (!preg_match("/^[a-zA-ZA-y\d]+$/", $_POST["pseudo"])){
         $errors ["pseudo"] = "Seules les lettres et les chiffres sont autorisés dans le champ Pseudo"; 
         } else if (Utilisateur::checkPseudo($_POST["pseudo"]) && $_POST["pseudo"]!= $_SESSION["user"]["user_pseudo"]){
          $errors["pseudo"] = "Pseudo déjà utilisé"; 
         }
     
     // Contrôle de l'email 
     
     $Serrors["email"] = "Champ obligatoire";
     if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $Serrors["email"] = "Le format de l'adresse email n'est pas valide";
    } else if (Utilisateur::checkEmail($_POST["email"]) && $_POST["email"] != $_SESSION["user"]["user_email"]) {
        $Serrors["email"] = "Adresse mail déjà utilisée";
        var_dump("ok");
    }


      
    if ($_FILES["User_Photo"]['error'] == 0) {

      ///ici


        $target_dir = "../assets/img/";
        $target_file = $target_dir . basename($_FILES["User_Photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
          $check = getimagesize($_FILES["User_Photo"]["tmp_name"]);
          if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }
    
        // // Check if file already exists
        // if (file_exists($target_file)) {
        //   echo "Sorry, file already exists.";
        //   $uploadOk = 0;
        // }
    
        // Check file size
        if ($_FILES["User_Photo"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }
    
        // Allow certain file formats
        $allowedExtensions = array("jpg", "jpeg", "png", "gif", "webp");
        if (!in_array($imageFileType, $allowedExtensions)) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["User_Photo"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["User_Photo"]["name"])) . " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
    
        $profilepicture = $_FILES["User_Photo"]["name"];
      } else {
        $profilepicture =  $_SESSION["user"]["user_photo"];
      }
    
      $user_id = $_SESSION["user"]["user_id"];
      $lastname = $_POST["lastname"];
      $firstname = $_POST["firstname"];
      $pseudo = $_POST["pseudo"];
      $email = $_POST["email"];
    
    
      // Mettez à jour le profil
    
      Utilisateur::modifier($user_id, $lastname, $firstname, $pseudo, $email, $profilepicture);

      $_SESSION["user"] = Utilisateur::getInfos($pseudo);
    







    header ("Location: controller-profil.php");
    exit();
}


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $user_id = $_SESSION["user"]["user_id"];  
//     $profilepicture = $_FILES["profilepicture"]["name"];
//     // $password = $_POST["password"];

//     // Mettez à jour le profil
    
//     Utilisateur::addPhoto($user_id, $profilepicture);


//     // $_FILES['user']['User_Photo'] = $profilepicture;
    






//     header ("Location: controller-profil.php");
//     exit();
// }



include_once "../views/view-updateProfile.php";
?>