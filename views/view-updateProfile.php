

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/updateprofil.css">
    <title>Document</title>
</head>

<body>

    <h2>Modifier le Profil</h2>
    <form action="" method="post" enctype="multipart/form-data">
    Choisir une nouvelle photo <input type="file" name="User_Photo" accept="image/*"><br>
       <!-- Champ de saisie du pseudo -->
Pseudo <input name="pseudo" type="text" value="<?= $_SESSION['user']['user_pseudo']  ?>">
<!-- Message d'erreur pour le pseudo -->
<span class="error"><?php if (isset($errors['pseudo'])) { echo $errors['pseudo']; } ?></span><br>

<!-- Champ de saisie du nom -->
Nom <input name="firstname" type="text" value="<?= $_SESSION['user']['user_name'] ?>"><br>
<!-- Champ de saisie du prénom -->
Prénom <input name="lastname" type="text" value="<?= $_SESSION['user']['user_firstname'] ?>"><br>

<!-- Champ de saisie de l'email -->
Email <input name="email" type="text" value="<?= $_SESSION['user']['user_email'] ?>">
<!-- Message d'erreur pour l'email -->
<span class="error"><?php if (isset($errors['email'])) { echo $errors['email']; } ?></span><br>

       <!-- Mot de passe <input name="password" type="password" value="<?= $_SESSION['password']['user_password'] ?>"><br>  -->
        <input type="submit" value="Enregistrer"> <br>
        <!-- <input type="submit" value= "Retour"> -->
    </form>
    <div class="back">
        <a href="../controllers/controller-profil.php"><input class="retour" type="submit" value="Retour"></a>
    </div>

</body>

</html>