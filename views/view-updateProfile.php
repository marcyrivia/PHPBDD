vue : 

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Modifier le Profil</h2>
    <form action="" method="post" enctype="multipart/form-data">
    Choisir une nouvelle photo <input type="file" name="User_Photo" accept="image/*"><br>
        Pseudo <input name="pseudo" type="text" value="<?= $_SESSION['user']['user_pseudo'] ?>"></input><br>
        Nom <input name="firstname" type="text" value="<?= $_SESSION['user']['user_name'] ?>"><br>
        Prénom <input name="lastname" type="text" value="<?= $_SESSION['user']['user_firstname'] ?>"><br>
        Email <input name="email" type="text" value="<?= $_SESSION['user']['user_email'] ?>"><br>
       <!-- Mot de passe <input name="password" type="password" value="<?= $_SESSION['password']['user_password'] ?>"><br>  -->
        <input type="submit" value="Enregistrer">
        <!-- <input type="submit" value= "Retour"> -->
    </form>

</body>

</html>