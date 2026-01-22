<?php
$products = [
    [
        'name' => 'Ferrari',
        'price' => 200000.0,
        'stock' => 15,
    ],
    [
        'name' => 'Lamborghini',
        'price' => 500000.0,
        'stock' => 9,
    ],
    [
        'name' => 'McLaren',
        'price' => 700000.0,
        'stock' => 15,
    ],
    [
        'name' => 'Clio 3',
        'price' => 1500.0,
        'stock' => 300,
    ],
    [
        'name' => 'TGV',
        'price' => 30000000.0,
        'stock' => 15,
    ],
    [
        'name' => 'Hélicoptère',
        'price' => 4.99,
        'stock' => 1,
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="produit">
        <h2><?= $products[0]['name'] ?></h2>
        <p class="prix"><?= $products[0]['price']?>€</p>
        <p class="stock"><?= $products[0]['stock'] ?></p>
</div>
    <div class="produit">
        <h2><?= $products[1]['name'] ?></h2>
        <p class="prix"><?= $products[1]['price']?>€</p>
        <p class="stock"><?= $products[1]['stock'] ?></p>
</div>
    <div class="produit">
        <h2><?= $products[2]['name'] ?></h2>
        <p class="prix"><?= $products[2]['price']?>€</p>
        <p class="stock"><?= $products[2]['stock'] ?></p>
</div>
    <div class="produit">
        <h2><?= $products[3]['name'] ?></h2>
        <p class="prix"><?= $products[3]['price']?>€</p>
        <p class="stock"><?= $products[3]['stock'] ?></p>
</div>
    <div class="produit">
        <h2><?= $products[4]['name'] ?></h2>
        <p class="prix"><?= $products[4]['price']?>€</p>
        <p class="stock"><?= $products[4]['stock'] ?></p>
</div>
    <div class="produit">
        <h2><?= $products[5]['name'] ?></h2>
        <p class="prix"><?= $products[5]['price']?>€</p>
        <p class="stock"><?= $products[5]['stock'] ?></p>
</div>
</body>
</html>