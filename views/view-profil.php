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
        <a href="../controllers/controller-home.php"> <h2 class="home" > HOME </h2></a>
        </div>
            <div class="menu-icon"> 
                <i class="bi bi-list"></i> 
            </div>
            <div class="overlay"></div>
        <nav class="menu">
            <ul class="menu-list">
                <li><a href="../controllers/controller-profil.php">Profil</a></li>
                <li><a href="../controllers/controller-deconnect.php"> Deconnexion </a></li>
            </ul>
        </nav>
    
    </header>

<div class="container">
    <div class="picture-container">
        <h1><?= $pseudo ?></h1>
        <li><img src="../assets/img/<?= $profilepicture ?>" alt=""></li>
        <a href="../controllers/controller-updateProfile.php"><button id="editButton">Modifier le profil</button></a>
        </div>
        <div class="infos-container">
        <li><?= $firstname ?></li>
        <li><?= $lastname ?></li>
        <li><?= $id_enterprise ?></li>
        <li><?= $email ?></li>
        <li><?= $dob ?></li>
    </div>
</div>


</body>

</html>