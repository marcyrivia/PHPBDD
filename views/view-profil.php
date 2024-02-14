<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/profil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Profil</title>
</head>

<body>
<header>
        <div class="left">
        <a href="../controllers/controller-home.php"> <h2 class="home" > HOME </h2></a>
        </div>
        <nav class="menu open">
            <div class="close" onclick="closeMenuMobile()">
                <i class="bi bi-x closeI"></i>
            </div>
             <ul class="menu-list">
                <li class="li"><a href="../controllers/controller-profil.php">Profil</a></li>
                <li class="onglet-li li"><a href="../controllers/controller-trajet.php">Créer un trajet</a></li>
                <li class="onglet-li li"><a href="../controllers/controller-historique.php">Historique</a></li>
                <li class="li"><a href="../controllers/controller-deconnect.php"> Deconnexion </a></li>
            </ul>
        </nav> 
        
            <div class="menu-icon" onclick="openMenuMobile()"> 
                <i class="bi bi-list burger"></i> 
            </div>
    
    </header>

<div class="container">
    <div class="picture-container">
        <h1><?= $pseudo ?></h1>
        <li><img src="../assets/img/<?= $profilepicture ?>" alt=""></li>
        <li><?= $firstname ?></li>
        <li><?= $lastname ?></li>
        <li><?= $id_enterprise ?></li>
        <li><?= $email ?></li>
        <li><?= $dob ?></li>
        <a href="../controllers/controller-updateProfile.php"><button id="editButton">Modifier le profil</button></a>
        <form method="post" action="../controllers/controller-profil.php">
            <button type="submit" name="delete" value="delete">Supprimer le profil</button>
        </form>
        </div>
</div>

<script>
        function openMenuMobile() {
            document.querySelector(".menu").classList.add("open")
            
        }
        function closeMenuMobile() {
    document.querySelector(".menu").classList.remove("open");
}
    </script>


</body>

</html>