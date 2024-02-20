<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synthèse d'inscription</title>
    <link rel="stylesheet" href="../assets/style/summary.css">
</head>

<body>
    <h2>Synthèse d'inscription</h2>

    <p>Merci pour votre inscription !</p>

    <?php
    echo "<p>Nom : $firstname</p>";
    echo "<p>Prénom : $lastname </p>";
    echo "<p>Pseudo : $pseudo</p>";
    echo "<p>Email : $email</p>";
    echo "<p>Entreprise : $id_enterprise</p>";
    echo "<p>Date de naissance : $dob</p>";
    ?>

    <p>Un email de confirmation a été envoyé à
        <?php echo $email; ?>.
    </p>
    <div class="connexion">
    <a href="../controllers/controller-signin.php"><button> Se connecter </button></a>
</div>

</body>

</html>