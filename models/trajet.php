<?php

class trajet
{

    public static function create(string $trajet_distance, string $trajet_date,  int $user_id, int $transport_id)
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

            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "INSERT INTO `ride`(`ride_distance`, `ride_date`, `user_id`, `transport_id`) VALUES ( :ridedistance, :ridedate, :userid, :transportid)";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête
            $query->bindValue(':ridedistance', htmlspecialchars($trajet_distance), PDO::PARAM_STR);
            $query->bindValue(':ridedate', htmlspecialchars($trajet_date), PDO::PARAM_STR);
            $query->bindValue(':userid', $user_id, PDO::PARAM_INT);
            $query->bindValue(':transportid', $transport_id, PDO::PARAM_INT);
           

            // Exécution de la requête
            $query->execute();
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }

    public static function historique(int $user_id)
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
            $sql = "SELECT * FROM `ride` NATURAL JOIN `transport` WHERE `user_id` = :user_id";
            // Préparation de la requête
            $query = $db->prepare($sql);
            $query->bindValue(":user_id", $user_id, PDO::PARAM_INT) .
                $query->execute();

                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return $result;
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    } public static function delete($ride_id){
        try {
            // Les informations de connexion à la base de données
            $dbName = "trajet";
            $dbUser = "geralt";
            $dbPassword = "am12ine34";
    
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser, $dbPassword);
    
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Utilisez des guillemets simples autour des noms de colonnes dans la requête DELETE
            $sql = "DELETE FROM `ride` WHERE `ride_id` = :ride_id";
    
            // Préparez la requête
            $query = $db->prepare($sql);
    
            // Liez la valeur du paramètre
            $query->bindValue(":ride_id", $ride_id, PDO::PARAM_INT);
    
            // Exécutez la requête
            $query->execute();
    
            
    
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    }