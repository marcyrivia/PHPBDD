<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/historique.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
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


<div class="historique-container">
    <h1> Historique des trajets</h1>
    <hr>
    <?php
    foreach ($trajets as $trajet) {
        echo "<p> Date du trajet : " . $trajet["ride_date"] . "</p>";
        echo "<p> Distance du trajet : " . $trajet["ride_distance"] . "</p>";
        echo "<p> Transport : " . $trajet["transport_type"] . "</p>"; 
       echo '<form action="" method="post" onsubmit="return confirm(\'Voulez-vous supprimer le trajet? (La suppression sera effectuée même en cliquant sur Annuler\')">';
        echo '    <input type="hidden" name="ride_id" value="' . $trajet['ride_id'] . '">';
         echo '    <input type="submit" name="delete" value="delete">';
         echo '</form>';?>
        <?php
        echo "<hr>";
    }
    ?>
</div>

<div class="button">
    <a href="../controllers/controller-trajet.php"> <button> Ajouter un trajet </button> </a>
</div>

</body>
</html>
