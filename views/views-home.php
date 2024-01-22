<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/home.css">
    <title>Home</title>
</head>
<body>

<header>
    <h2> HOME </h2>
    <button class="deconnect" > Deconnexion </button>
</header>
 <div class="bienvenue-container">   
<h1>
    Bienvenue, <?php echo $pseudo ?></h1>
   <span> <?php echo $date ?></span>
</div>     

<div class="button">
    <button>Créer un trajet</button>
    <button>Modifier un trajet</button>
</div>



</body>
</html>