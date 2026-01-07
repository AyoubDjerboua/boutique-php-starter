<?php

$products = [
    "name" => "iPhone 10",
    "description" => "Téléphone avec les bords bien arrondis on rebondit dessus",
    "price" => 1299.99,
    "stock" => 2,
    "category" => "Luxe",
    "brand" => "Apple"
];

$numero = 1;

foreach ($products as $index => $product) {
    echo "Produit numero $numero : $index = $product <br>";
    $numero++;
}
