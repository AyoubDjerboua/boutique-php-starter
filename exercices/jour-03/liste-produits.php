<?php

$products = [
    [
        'name' => 'iPhone 10',
        'price' => 1299.99,
        'stock' => 2,
    ],
    [
        'name' => 'Samsung S22',
        'price' => 999.99,
        'stock' => 5,
    ],
    [
        'name' => 'Nokia',
        'price' => 30.0,
        'stock' => 2000,
    ],
    [
        'name' => 'Caramel',
        'price' => 199.99,
        'stock' => 584,
    ],
    [
        'name' => 'Avion',
        'price' => 19.99,
        'stock' => 10,
    ],
];

foreach ($products as $product) {
    ?>
    <h3><?= $product['name'] ?></h3>
    <p class="prix"><?= $product['price'] ?> €</p>
    <p class="stock">Stock : <?= $product['stock'] ?></p>
<?php
}
