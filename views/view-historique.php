<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/historique.css">
    <link rel="stylesheet" href="../assets/style/historique.css">
    
    <title>Document</title>
</head>
<body>
<header>
    <h1>Home
        
    </h1>
</header>
<div class="historique-container">
<?php


foreach ( $trajets as $trajet){
    echo "<p> Date du trajet : " . $trajet["ride_date"] . "</p>";
    echo "<p> Distance du trajet : " . $trajet["ride_distance"] . "</p>";
    echo "<p> Transport : " . $trajet["transport_type"] . "</p>";
}

?>

 </div>

</body>
</html>