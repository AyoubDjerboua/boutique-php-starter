<?php

$products = [
    ["name" => "Produit 1", "price" => 25, "stock" => 5, "image" => "urldefou", "new" => true, "discount" => 0],
    ["name" => "Produit 2", "price" => 50, "stock" => 0, "image" => "urldefou", "new" => true, "discount" => 10],
    ["name" => "Produit 3", "price" => 75, "stock" => 12, "image" => "urldefou", "new" => false, "discount" => 15],
    ["name" => "Produit 4", "price" => 110, "stock" => 7, "image" => "urldefou", "new" => true, "discount" => 50],
    ["name" => "Produit 5", "price" => 30, "stock" => 0, "image" => "urldefou", "new" => false, "discount" => 50],
    ["name" => "Produit 6", "price" => 60, "stock" => 8, "image" => "urldefou", "new" => true, "discount" => 30],
    ["name" => "Produit 7", "price" => 90, "stock" => 0, "image" => "urldefou", "new" => false, "discount" => 80],
    ["name" => "Produit 8", "price" => 45, "stock" => 3, "image" => "urldefou", "new" => false, "discount" => 75],
];

//Compteurs pour les stats
$inStock = 0;
$onSale = 0;
$outOfStock = 0;


foreach ($products as $product) {
    echo $product["name"] . "<br>";
    if ($product["stock"] > 0) $inStock++;
    if ($product["discount"] > 0) $onSale++;
    if ($product["stock"] == 0) $outOfStock++;
}

echo "Nombre de produits en stock : " . $inStock . "<br>";
echo "Nombre de produits en promo : " . $onSale . "<br>";
echo "Nombre de produits hors-stock : " . $outOfStock . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PRODUITS</h1>
    <div class="test">
        <?php foreach ($products as $product) ?>
        <p><?= $product['name'] ?></p>
    </div>
</body>

</html>