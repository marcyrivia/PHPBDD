<?php  

class user {

    /**
     *  Méthode permettant de créer un 
     * @param string $lastname Nom de l'utilisateur
     * @param string $firstname Prénom de l'utilisateur
     * @param string $pseudo Pseudo de l'utilisateur
     * @param string $birthdate Date de naissance de l'utilisateur
     * @param string $email Adresse mail de l'utlisateur
     * @param string $password Mot de passe de l'utilisateur
     * @param string $id_enterprise Id de l'entreprise de l'utilisateur
     * @param int @userValidate Validation de l'utilisateursateur

     */

public function create ( int $userValidate, string $lastname, string $firstname, string $pseudo, string $email, string $dob, string $password, int $id_enterprise) {
    try {
        $dbName = "geralt";
        $dbUser = "geralt";
        $dbPassword ="am12ine34";
        $db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser,  $dbPassword);
        var_dump($db);
        //stockage de ma requete toujours avant le catch
        $sql = "INSERT INTO `userprofil`(`user_validate`, `user_name`, `user_firstname`, `user_pseudo`, `user_email`, `user_dateofbirth`, `user_password`, `enterprise_id`) VALUES (:userValidate, :lastname, :firstname, :pseudo, :email, :birthdate, :userPassword, :id_enterprise)";

        $query = $db->prepare($sql);

    
        $query->bindValue(':userValidate', $userValidate, PDO::PARAM_INT);
        $query->bindValue(':lastname', htmlspecialchars($lastname), PDO::PARAM_STR);
        $query->bindValue(':firstname', htmlspecialchars($firstname), PDO::PARAM_STR);
        $query->bindValue(':pseudo', htmlspecialchars($pseudo), PDO::PARAM_STR);
        $query->bindValue(':email', htmlspecialchars($email), PDO::PARAM_STR);
        $query->bindValue(':birthdate', $dob, PDO::PARAM_STR);
        $query->bindValue(':userPassword', password_hash($password), PDO::PARAM_STR);
        $query->bindValue(':id_enterprise', $id_enterprise, PDO::PARAM_STR);

        $query->execute();
    } catch (PDOException $e){
        echo "Erreur : " . $e->getMessage();
        die();
    }  
}

?>