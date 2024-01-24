<?php

class enterprise
{


    public static function getAll()
    {

        try {
            // Les informations de connexion à la base de données
            $dbName = "trajet";
            $dbUser = "geralt";
            $dbPassword = "am12ine34";

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser, $dbPassword);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SELECT `enterprise_id`, `enterprise_name` FROM `enterprise`";

            // Préparation de la requête
            $query = $db->prepare($sql);

            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
}

?>