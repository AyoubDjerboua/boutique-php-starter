<?php

$products = [
    ['name' => 'Produit 1', 'price' => 25, 'stock' => 5, 'image' => 'urldefou'],
    ['name' => 'Produit 2', 'price' => 50, 'stock' => 0, 'image' => 'urldefou'],
    ['name' => 'Produit 3', 'price' => 75, 'stock' => 12, 'image' => 'urldefou'],
    ['name' => 'Produit 4', 'price' => 110, 'stock' => 7, 'image' => 'urldefou'], // > 100€
    ['name' => 'Produit 5', 'price' => 30, 'stock' => 0, 'image' => 'urldefou'],
    ['name' => 'Produit 6', 'price' => 60, 'stock' => 8, 'image' => 'urldefou'],
    ['name' => 'Produit 7', 'price' => 90, 'stock' => 0, 'image' => 'urldefou'],
    ['name' => 'Produit 8', 'price' => 45, 'stock' => 3, 'image' => 'urldefou'],
];

?>

<!DOCTYPE html>
<html>

<head>
    <style>
        .grille {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .produit {
            border: 1px solid #ddd;
            padding: 15px;
        }

        .rupture {
            color: red;
        }

        .en-stock {
            color: green;
        }
    </style>
</head>

<body>
    <div class="grille">
        <?php foreach ($products as $product) { ?>
            <div class="produit">
                <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                <h3><?= $product['name'] ?></h3>
                <p class="en-stock">En stock (<?= $product['stock'] ?>)</p>
                <?php if ($product['stock'] > 0) { ?>
                    <p class="en-stock">En stock (<?= $product['stock'] ?>)</p>
                <?php } else { ?>
                    <p class="rupture">Rupture</p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>