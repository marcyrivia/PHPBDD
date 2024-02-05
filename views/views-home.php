<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Home</title>
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
    <div class="bienvenue-container">
        <h1 class="welcome"> Bienvenue, </h1>
          <h1 class="pseudo"> <?php echo $pseudo ?></h1> 
        <span> <?php echo $date ?></span>
    </div>

    <div class="container">
    <a href="../controllers/controller-trajet.php"> <div class="onglets-container">
        <h2 class="onglet-name">Créer un trajet</h2> 
        <i class="bi bi-node-plus-fill onglet-i"></i>
        </div> </a>
    <div class="container">
    <a href="../controllers/controller-historique.php"> <div class="onglets-container">
        <h2 class="onglet-name">Historique</h2> 
        <i class="bi bi-stopwatch onglet-i "></i>
        </div> </a>
    </div>



</body>

</html>