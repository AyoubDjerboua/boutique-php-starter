<?php

// 1️⃣ Tableau de 10 produits avec stocks et prix variés
$products = [
    ['name' => 'Produit 1', 'price' => 25, 'stock' => 5],
    ['name' => 'Produit 2', 'price' => 50, 'stock' => 0],
    ['name' => 'Produit 3', 'price' => 75, 'stock' => 12],
    ['name' => 'Produit 4', 'price' => 110, 'stock' => 7], // > 100€
    ['name' => 'Produit 5', 'price' => 30, 'stock' => 0],
    ['name' => 'Produit 6', 'price' => 60, 'stock' => 8],
    ['name' => 'Produit 7', 'price' => 90, 'stock' => 0],
    ['name' => 'Produit 8', 'price' => 45, 'stock' => 3],
    ['name' => 'Produit 9', 'price' => 20, 'stock' => 10],
    ['name' => 'Produit 10', 'price' => 99, 'stock' => 1],
];

// 2️⃣ Parcours du tableau
echo '<h3>Produits en stock et < 100€</h3>';

foreach ($products as $product) {

    // 🔹 Skip les produits en rupture de stock
    if ($product['stock'] == 0) {
        continue;
    }

    // 🔹 Stop la boucle si prix > 100€
    if ($product['price'] > 100) {
        break;
    }

    // 🔹 Affichage des produits valides
    ?>
    <article>
        <h3><?= $product['name'] ?></h3>
        <p class="prix"><?= $product['price'] ?> €</p>
        <p class="stock">Stock : <?= $product['stock'] ?></p>
    </article>
<?php
}
