<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer et sécuriser les données
    $name = htmlspecialchars($_POST['name'] ?? "");
    $email = htmlspecialchars($_POST['email'] ?? "");
    $message = htmlspecialchars($_POST['message'] ?? "");

    // Vérifications simples
    if (!$name || !$email || !$message) {
        echo "<p style='color:red'>Tous les champs sont requis.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red'>L'email n'est pas valide.</p>";
    } elseif (strlen($message) < 10) { //vérifie que le message contient minimum 10 caractères
        echo "<p style='color:red'>Le message doit faire au moins 10 caractères.</p>";
    } else {
        // Afficher les données
        echo "<h2>Données reçues :</h2>";
        echo "<p>Nom : $name</p>";
        echo "<p>Email : $email</p>";
        echo "<p>Message : $message</p>";
    }
}
?>

<h1>Contactez-nous</h1>
<form method="post">
    <label>Nom :<br>
        <input type="text" name="name">
    </label><br><br>

    <label>Email :<br>
        <input type="text" name="email">
    </label><br><br>

    <label>Message :<br>
        <textarea name="message"></textarea>
    </label><br><br>

    <button type="submit">Envoyer</button>
</form>