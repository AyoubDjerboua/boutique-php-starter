<?php

$products = [
    1 => ["name" => "Laptop", "price" => 1000.00], // id 1 => Laptop 1000 euros
    2 => ["name" => "Kérosène", "price" => 99.99], // id 2 => Kérosène 99.99 euros
    3 => ["name" => "Oeuf", "price" => 2.99], // id 3 => Oeuf 2.99 euros
    4 => ["name" => "Chenille", "price" => 0.99], // id 4 => Chenille 0.99 euros
    5 => ["name" => "Groenland", "price" => 2000000000.01], // id 5 => Groenland 2000000000.01 euros
    //fonctionne de la manière suivante : products[3]["name"] = Oeuf
];

$id = $_GET["id"] ?? null; // Récupère l'id du produit depuis les paramètres GET (dans l'URL), ou null si non fourni

if ($id === null) { // Vérifie si l'id est null
    echo "Aucun id fourni";
} elseif (!isset($products[$id])) { // Vérifie si l'id n'existe pas dans le tableau des produits
    echo "Produit introuvable";
} else {    // Si l'id est valide, affiche le nom et le prix du produit correspondant
    echo "Produit : " . ($products[$id]["name"]) . "<br> Prix : " . ($products[$id]["price"]) . " €";
}
