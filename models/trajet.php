<?php

class trajet {

public static function create( string $trajetdistance, string $trajetdate,  int $userid, int $transportid) {

try {
// Les informations de connexion à la base de données
$dbName = "trajet";
$dbUser = "geralt";
$dbPassword = "am12ine34";

// Création de l'objet PDO pour la connexion à la base de données
$db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser, $dbPassword);
// Paramétrage des erreurs PDO pour les afficher en cas de problème
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Requête SQL d'insertion des données dans la table userprofil
$sql = "INSERT INTO `trajet`(`ride_distance`, `ride_date` `user_id`, `transport_id`) VALUES ( :ridedistance, :ridedate, :userid, :transportid)";

// Préparation de la requête
$query = $db->prepare($sql);

// Liaison des valeurs avec les paramètres de la requête
$query->bindValue(':ridedistance', htmlspecialchars($trajetdistance), PDO::PARAM_STR);
$query->bindValue(':ridedate', htmlspecialchars($trajetdate), PDO::PARAM_STR);
$query->bindValue(':userid', $userid, PDO::PARAM_INT);
$query->bindValue(':transportid', $transportid, PDO::PARAM_INT);

// Exécution de la requête
$query->execute();
} catch (PDOException $e) {
// En cas d'erreur, affichage du message d'erreur et arrêt du script
echo "Erreur : " . $e->getMessage();
die();
}
}
}

?>