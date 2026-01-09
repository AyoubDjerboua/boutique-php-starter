<?php

// 1️⃣ Crée un tableau vide
$products = [];

// 2️⃣ Génère 10 produits avec une boucle
for ($i = 1; $i <= 10; $i++) {
    $products[] = [
        "name" => "Produit $i",
        "price" => rand(10, 100),  // prix aléatoire entre 10 et 100
        "stock" => rand(0, 50)     // stock aléatoire entre 0 et 50
    ];
}

// 3️⃣ Affiche le tableau avec var_dump()
echo "<h3>Tableau brut avec var_dump()</h3>";
echo "<pre>";
var_dump($products);
echo "</pre>";

// 4️⃣ Affiche les produits en HTML
echo "<h3>Liste des produits</h3>";

foreach ($products as $product) {
?>
    <article>
        <h3><?= $product["name"] ?></h3>
        <p class="prix"><?= $product["price"] ?> €</p>
        <p class="stock">Stock : <?= $product["stock"] ?></p>
    </article>
<?php
}
