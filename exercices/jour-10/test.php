<?php

require_once 'ProductRepository.php';

// Connexion DB
$pdo = new PDO(
    'mysql:host=localhost;dbname=boutique',
    'dev',
    'dev'
);

$repo = new ProductRepository($pdo);

// FIND ALL
echo '<h2>Tous les produits</h2>';
foreach ($repo->findAll() as $product) {
    echo $product->getId().' - '
        .$product->getName().' - '
        .$product->getPrice().'€<br>';
}

// CREATE
echo '<hr>';
$newProduct = new Product(0, 'Pomme', 251.84, 46);
$repo->save($newProduct);

echo 'Produit créé : '
    .$newProduct->getId()
    .' - '
    .$newProduct->getName();

// UPDATE
$newProduct->setPrice(199.99);
$repo->update($newProduct);

// DELETE
// $repo->delete($newProduct->getId());
