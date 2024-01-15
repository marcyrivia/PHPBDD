<?php
// Vérification des données postées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Vérification du nom
    if (empty($_POST["firstname"])) {
        $errors['firstname'] = "Champs obligatoire.";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["firstname"])) {
        $errors['firstname'] = "Le nom est invalide.";
    }

    // Vérification du prénom
    if (empty($_POST["firstname"])) {
        $errors['firstname'] = "Champs obligatoire.";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["lastname"])) {
        $errors['firstname'] = "Le nom est invalide.";
    }

    // Verification du select
    // Vérifie si la variable POST 'id_entreprise' est définie et n'est pas vide
if (isset($_POST['id_enterprise']) && !empty($_POST['id_enterprise'])) {
    $id_enterprise = $_POST['id_enterprise'];

    // Vérifie si la valeur est l'une des valeurs attendues
    if ($id_enterprise === "$enterpriseA" || $id_enterprise === "$enterpriseB") {
        // La valeur est valide, vous pouvez faire ce que vous avez besoin de faire avec $id_$enterprise
        echo "ID de l'enterprise valide : " . $id_enterprise;
    } else {
        // La valeur n'est pas valide
        echo "Valeur de l'ID de l'enterprise non valide.";
    }
} else {
    // La variable n'a pas été définie ou est vide
    echo "L'ID de l'enterprise n'a pas été fourni ou est vide.";
}

    // Vérification du Pseudo
    $regexPseudo = '/^[a-zA-Z_\-\d]+$/';
    if (empty($_POST["pseudo"])) {
        $errors['pseudo'] = "Champs obligatoire.";
    } 

    // Vérification de l'email
    if (empty($_POST["email"])) {
        $errors['email'] = "Champs obligatoire.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'adresse email est invalide.";
    }

    // Vérification de la date de naissance
    if (empty($_POST["dob"])) {
        $errors['dob'] = "La date de naissance est obligatoire.";
    }

    // Vérification du mot de passe
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if (empty($password) || strlen($password) < 8 || $password !== $confirm_password) {
        $errors['password'] = "Le mot de passe doit comporter au moins 8 caractères et correspondre.";
    }

    if (!isset($_POST["CGU"])) {
        $errors['CGU'] = "Les CGU sont obligatoires";
    }

    // Affichage des erreurs
    // Si aucune erreur détectée
    if (empty($errors)) {
        // Afficher la synthèse des informations et le message de confirmation
        $nom = $_POST['firstname'];
        $prenom = $_POST['lastname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];

        // Cacher le formulaire
        $formHidden = true;

        // Envoyer le mail de confirmation (simulation ici)
        $message = "Bonjour $prenom $nom, votre inscription a bien été enregistrée.";
        // Envoi du mail (à remplacer par votre code d'envoi de mail)
        // mail($email, 'Confirmation d\'inscription', $message);

        // Afficher la synthèse des informations et le message de confirmation
        if(empty($errors)){
            // Instance d'une PDO
            try {
                $dbName = "geralt";
                $dbUser = "geralt";
                $dbPassword ="amine123";
               $db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser,  $dbPassword);
               var_dump($db);
               //stockage de ma requete toujours avant le catch
               $sql = "INSERT INTO `userprofil`(`user_validate`, `user_name`, `user_firstname`, `user_pseudo`, `user_describ`, `user_email`, `user_dateofbirth`, `user_password`, `user_photo`, `enterprise_id`) VALUES (:lastname, : firstname, :pseudo, :birthdate, :email, :password, :id_enterprise, : valide_participant)";
        
               $query = $db->prepare($sql);
        
               $lastname = htmlspecialchars($_POST['lastname']);
               $firstname = htmlspecialchars($_POST['firstname']);
               $pseudo = htmlspecialchars($_POST['pseudo']);
               $dob = $_POST['dob'];
               $email = $_POST['email'];
               $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
               $id_enterprise =$_POST['id_enterprise'];
        
               $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
               $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
               $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
               $query->bindValue(':birthdate', $dob, PDO::PARAM_INT);
               $query->bindValue(':email', $email, PDO::PARAM_STR);
               $query->bindValue(':password', $password, PDO::PARAM_STR);
               $query->bindValue(':id_entreprise', $id_enterprise, PDO::PARAM_STR);
               $query->bindValue(':valide_participant', 1, PDO::PARAM_STR);
               $query->execute();
            } catch (PDOException $e){
                echo "Erreur : " . $e->getMessage();
                die();
            }
        include('../views/view-summary.php');
        exit; // Arrêter l'exécution du script
    }
}
?>
<?php

}
// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-signup.php');
?>