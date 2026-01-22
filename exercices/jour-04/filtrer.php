<?php

$products = [
    [
        'name' => 'Produit1',
        'price' => 10.0,
        'stock' => 1,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit2',
        'price' => 20.0,
        'stock' => 2,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit3',
        'price' => 30.0,
        'stock' => 3,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit4',
        'price' => 40.0,
        'stock' => 0,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit5',
        'price' => 50.0,
        'stock' => 5,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit6',
        'price' => 60.0,
        'stock' => 6,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit7',
        'price' => 70.0,
        'stock' => 7,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit8',
        'price' => 80.0,
        'stock' => 0,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit9',
        'price' => 90.0,
        'stock' => 9,
        'category' => 'ProduitDeFou',
    ],
    [
        'name' => 'Produit10',
        'price' => 100.0,
        'stock' => 10,
        'category' => 'ProduitDeFou',
    ],
];
$counter = 0;
foreach ($products as $product) {
    if ($product['stock'] > 0 && $product['price'] < 50) {
        $counter++;
        echo 'Le produit '.$product['name'].' est disponible et coûte moins de 50€ <br>';
    }
    // else if ($product['stock'] <= 0) {
    //    echo "Le produit " . $product['name'] . " n'est PAS disponible <br>";
    // }

}
echo "Produits trouvés : $counter";
