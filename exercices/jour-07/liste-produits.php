<?php

session_start();

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=boutique;charset=utf8mb4',
        'dev',
        'dev',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo '✅ Connexion réussie !';
} catch (PDOException $e) {
    echo '❌ Erreur : '.$e->getMessage();
}

// SELECT avec paramètre
$stmt = $pdo->prepare('SELECT * FROM products'); // prépare
$stmt->execute(); // execute
$products = $stmt->fetchAll(PDO::FETCH_ASSOC); // chope tout

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span>
        <?php foreach ($products as $product) { ?>
            <?php foreach ($product as $cle => $valeur) { ?>
                <p><strong><?= $cle ?> : </strong><?= $valeur ?></p>
            <?php } ?>
            <hr>
        <?php } ?>
    </span>

</body>

</html>