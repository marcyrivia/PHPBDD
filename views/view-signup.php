<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../assets/style/style.css">
</head>

<body>

<!-- Header -->
<header>
<!-- Votre code pour l'en-tête -->
</header>

<h2>Inscription</h2>

<form action="controller-signup.php" method="POST" novalidate>
<label for="firstname">Nom:</label><br>
<input type="text" id="firstname" name="firstname"
value="<?= isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '' ?>">
<span class="error">
<?php if (isset($errors['firstname'])) {
echo $errors['firstname'];
} ?>
</span><br><br>

<label for="lastname">Prénom:</label><br>
<input type="text" id="lastname" name="lastname"
value="<?= isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '' ?>">
<span class="error">
<?php if (isset($errors['lastname'])) {
echo $errors['lastname'];
} ?>
</span><br><br>

<label for="pseudo">Pseudo:</label><br>
<input type="text" id="pseudo" name="pseudo" 
value="<?= isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : '' ?>">
<span class="error">
<?php if (isset($errors['pseudo'])) {
echo $errors['pseudo'];
} ?>
</span><br><br>

<label for="email">E-mail:</label><br>
<input type="email" id="email" name="email"
value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
<span class="error">
<?php if (isset($errors['email'])) {
echo $errors['email'];
} ?>
</span><br><br>

<div>
<label for="enterprise">Entreprise:</label><br>
<select type="text" id="enterprise" name="id_enterprise"
value="<?= isset($_POST['id_enterprise']) ? htmlspecialchars($_POST['id_enterprise']) : '' ?>">

<option value="">--please choose an option---</option>

<?php
var_dump($entreprises);
?>
<?php foreach (enterprise::getAll() as $entreprises) { ?>
    <option value="<?= $entreprises["enterprise_id"] ?>">
     <?= $entreprises["enterprise_name"] ?>
    </option>
<?php } ?>


<span class="error"> 
<?php if (isset($errors['id_enterprise'])) {
echo $errors['id_enterprise'];
} ?> 
</span>
</select>
</div>

<div>
<label for="dob">Date de naissance:</label><br>
<input type="date" id="dob" name="dob"
value="<?= isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : '' ?>">
<span class="error">
<?php if (isset($errors['dob'])) {
echo $errors['dob'];
} ?>
</span><br>
</div>

<label for="password">Mot de passe:</label><br>
<input type="password" id="password" name="password"
value="<?= isset($_POST['passsword']) ? htmlspecialchars($_POST['password']) : '' ?>">
<span class="error">
<?php if (isset($errors['password'])) {
echo $errors['password'];
} ?>
</span><br><br>

<label for="confirm_password">Confirmer le mot de passe:</label><br>
<input type="password" id="confirm_password" name="confirm_password"
value="<?= isset($_POST['confirm_password']) ? htmlspecialchars($_POST['confirm_password']) : '' ?>">
<span class="error">
<?php if (isset($errors['confirm_password'])) {
echo $errors['confirm_password'];
} ?>
</span><br><br>

<p class="cguP">Veuillez accepter les CGU</p>
<label for="CGU"></label><br>
<input  type="checkbox" id="CGU" name="CGU"
<?= isset($_POST['CGU']) ? "checked"  : '' ?>> 
<span class="error">
<?php if (isset($errors['CGU'])) {
echo $errors['CGU'];
} ?>
</span><br><br>

<input type="submit" value="S'enregistrer">

</form>
<div class="popo">
    <p class="signp">Vous avez déjà un compte ? </p>
<a href="../controllers/controller-signin.php"><input class="signin" type="submit" value="Se connecter"> </input></a>
</div>
<!-- Footer -->
<footer>
<!-- Votre code pour le pied de page -->
</footer>



</body>

</html>