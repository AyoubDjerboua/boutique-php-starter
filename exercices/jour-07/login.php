<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $message = '';

    if ($username === 'admin' && $password === '1234') { // si id sess = admin et mdp sess = 1234
        $_SESSION['user'] = $username; // id sess devient admin
        header('Location: dashboard.php');
        exit;
    } elseif ($username === '' || $password === '') {
        $message = 'Merci de remplir tous les champs';
    } else {
        $message = 'Identifiants incorrects';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulaire</h1>
    <form method="post">
        <label>Nom d'utilisateur :</label><br>
        <input type="text" name="username" placeholder="admin"><br><br>
        <label>Mot de passe :</label><br>
        <input type="password" name="password" placeholder="1234"><br><br>

        <button type="submit">Se connecter</button>
    </form>
    <p><?= $message ?></p>
</body>

</html>