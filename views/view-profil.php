<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/profil.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="left">
            <a class="profil" href="../controllers/controller-home.php">
                <h2> HOME </h2>
            </a>
            <a class="profil" href="../controllers/controller-profil.php">Profil</a>
        </div>
        <a href="../controllers/controller-deconnect.php"><button class="deconnect"> Deconnexion </button></a>
    </header>

    <a href="../controllers/controller-updateProfile.php"><button id="editButton">Modifier le profil</button></a>

    <div class="profil-container">
        <h1><?= $pseudo ?></h1>
        <li><?= $firstname ?></li>
        <li><?= $lastname ?></li>
        <li><?= $id_enterprise ?></li>
        <li><?= $email ?></li>
        <li><?= $dob ?></li>
    </div>


</body>

</html>