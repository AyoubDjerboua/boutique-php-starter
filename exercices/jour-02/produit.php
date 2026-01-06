<?php

$product = [
    "name" => "iPhone 10", 
    "description" => "Téléphone avec les bords bien arrondis on rebondit dessus", 
    "price" => 1299.99, 
    "stock" => 2, 
    "category" => "Luxe", 
    "brand" => "Apple"
    ];
    $product['dateAdded'] = date('d/m/Y'); // format jour/mois/année//MERCI CHATGPT exo 2 part 4
    //$product['promo'] = 10;  ouais bon flemme
    $pricePromo = $product['price'] * 0.9;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUIT</title>
</head>
<body>
    <h1>Fiche produit</h1>
    <p>Nom du produit : <?= $product['name']?></p>
    <p>Description : <?= $product['description']?></p>
    <p>Prix : <?= number_format($product['price'], 2, ', ') ?></p>
    <p>Stock : <?= $product['stock']?></p>
    <p>Catégorie : <?= $product['category']?></p>
    <p>Marque : <?= $product['brand']?></p>
    <p>Date d'ajout du produit : <?= $product['dateAdded']?></p>
    <p>Promo de 10% : <?= number_format($pricePromo, 2, ',')?></p>
</body>
</html>