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

        /**
     * Méthode permettant de recupèrer toutes les entreprises
     * 
     * @return string tableau contenant les données des entreprises
     */
    // public static function getAllEnterprises(): string
    // {

    //     try {
    //         // Création d'un objet $db selon la classe PDO
    //         $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

    //         // stockage de ma requete dans une variable
    //         $sql = "SELECT * FROM enterprise";

    //         // je prepare ma requête pour éviter les injections SQL
    //         $query = $db->prepare($sql);

    //         // on execute la requête
    //         $query->execute();

    //         // on récupère le résultat de la requête dans une variable $result
    //         $result = $query->fetchAll(PDO::FETCH_ASSOC);

            
    //         // on ferme la connexion à la base de données
    //         $db = null;
    //         $json_result = json_encode($result);
    //         // on retourne le résultat
    //         return $json_result;
    //     } catch (PDOException $e) {
    //         // permet de récupérer le message d'erreur pour un debuggage plus facile
    //         echo 'Erreur : ' . $e->getMessage();
    //         die();
    //     }
    // }
}

?>