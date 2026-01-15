<?php

session_start();

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}


$search = $_GET["name"] ?? null;

if ($search === null) {
    echo "Rentrez le produit à rechercher";
} else {
    // SELECT avec paramètre
    $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ?"); //je crois que le ? veut dire (euh, ouais le résultat du get/ ou de la variable jsp mon frérot)
    $stmt->execute(['%' . $search . '%']);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        echo "<pre>"; //aligne tout proprement le tableau grace à la magie noire du Bénin
        print_r($product);
        echo "</pre>"; //fin de la magie noire du Bénin
    } else {
        echo "<br>";
        echo "Aucun produit trouvé";
    }
}
