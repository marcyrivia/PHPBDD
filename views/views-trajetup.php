<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<div>
<label for="dob">Date de trajet:</label><br>
<input type="date" id="dot" name="dot"
value="<?= isset($_POST['dot']) ? htmlspecialchars($_POST['dot']) : '' ?>">
<span class="error">
<?php if (isset($errors['dot'])) {
echo $errors['dot'];
} ?>
</span><br>
</div>

<div>
<label for="enterprise">Entreprise:</label><br>
<select type="text" id="enterprise" name="id_enterprise"
value="<?= isset($_POST['id_enterprise']) ? htmlspecialchars($_POST['id_enterprise']) : '' ?>">
<option value="">--please choose an option---</option>
<option value= "1"> transport A </option>
<option value= "2">transport B</option>
<option value= "3">transport C</option>
<option value= "4">transport D</option>
<option value= "5">transport E</option>
<span class="error"> 
<?php if (isset($errors['transport_id'])) {
echo $errors['transport_id'];
} ?> 
</span>
</select>
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

</body>
</html>