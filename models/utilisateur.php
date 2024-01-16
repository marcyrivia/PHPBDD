<?php  

class user {
public function create ( $userValidate, $lastname, $firstname, $pseudo, $password, $email, $dob, $password, $id_enterprise) {
    try {
        $dbName = "geralt";
        $dbUser = "geralt";
        $dbPassword ="am12ine34";
        $db = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser,  $dbPassword);
        var_dump($db);
        //stockage de ma requete toujours avant le catch
        $sql = "INSERT INTO `userprofil`(`user_validate`, `user_name`, `user_firstname`, `user_pseudo`, `user_email`, `user_dateofbirth`, `user_password`, `enterprise_id`) VALUES (:userValidate, :lastname, :firstname, :pseudo, :email, :birthdate, :userPassword, :id_enterprise)";

        $query = $db->prepare($sql);
        
    
        $query->bindValue(':userValidate',1, PDO::PARAM_INT);
        $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':birthdate', $dob, PDO::PARAM_STR);
        $query->bindValue(':userPassword', $password, PDO::PARAM_STR);
        $query->bindValue(':id_enterprise', $id_enterprise, PDO::PARAM_STR);

        $query->execute();
    } catch (PDOException $e){
        echo "Erreur : " . $e->getMessage();
        die();
    }  
}

?>