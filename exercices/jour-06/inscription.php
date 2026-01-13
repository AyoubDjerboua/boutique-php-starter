<?php
// Valeurs par défaut
$username = $email = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Récupération
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmation = $_POST["confirmation"] ?? "";

    // Username : 3-20 caractères, alphanumérique
    if (!$username) {
        $errors["username"] = "Username requis";
    } elseif (!preg_match("/^[a-zA-Z0-9]{3,20}$/", $username)) {
        $errors["username"] = "3 à 20 caractères, lettres et chiffres uniquement";
    }

    // Email valide
    if (!$email) {
        $errors["email"] = "Email requis";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email invalide";
    }

    // Mot de passe
    if (strlen($password) < 8) {
        $errors["password"] = "Mot de passe minimum 8 caractères";
    }

    // Confirmation
    if ($password !== $confirmation) {
        $errors["confirmation"] = "Les mots de passe ne correspondent pas";
    }

    // Si aucune erreur
    if (empty($errors)) {
        echo "<h2>Inscription réussie ✅</h2>";
    }
}
?>

<h1>Inscription</h1>

<form method="post">

    <!-- USERNAME -->
    <label>Username</label><br>
    <input type="text" name="username" value="<?= htmlspecialchars($username) ?>"><br>
    <small style="color:red"><?= $errors["username"] ?? "" ?></small><br><br>

    <!-- EMAIL -->
    <label>Email</label><br>
    <input type="text" name="email" value="<?= htmlspecialchars($email) ?>"><br>
    <small style="color:red"><?= $errors["email"] ?? "" ?></small><br><br>

    <!-- PASSWORD -->
    <label>Mot de passe</label><br>
    <input type="password" name="password"><br>
    <small style="color:red"><?= $errors["password"] ?? "" ?></small><br><br>

    <!-- CONFIRMATION -->
    <label>Confirmation</label><br>
    <input type="password" name="confirmation"><br>
    <small style="color:red"><?= $errors["confirmation"] ?? "" ?></small><br><br>

    <button type="submit">S'inscrire</button>

</form>