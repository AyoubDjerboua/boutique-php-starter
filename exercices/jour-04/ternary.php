<?php
// 1️⃣ Tableau produit
$products = [
    [
        "name" => "T-shirt",
        "price" => 30,
        "stock" => 10,
        "onSale" => false
    ],
    [
        "name" => "Jean",
        "price" => 60,
        "stock" => 0,
        "onSale" => true
    ],
    [
        "name" => "Pull",
        "price" => 50,
        "stock" => 5,
        "onSale" => true
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Produits</title>
    <style>
        .rupture {
            color: red;
        }

        .disponible {
            color: green;
        }

        .price-old {
            text-decoration: line-through;
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <?php foreach ($products as $product): ?>
        <div class="product <?= $product['stock'] > 0 ? 'disponible' : 'rupture' ?>">
            <h3>
                <?= $product["name"] ?>
                <?= $product["onSale"] ? "🔥 PROMO" : "" ?>
            </h3>
            <p>
                <?php if ($product["onSale"]): ?>
                    <span class="price-old"><?= number_format($product["price"], 2) ?> €</span>
                    <span class="price-new"><?= number_format($product["price"] * 0.8, 2) ?> €</span>
                <?php else: ?>
                    <?= number_format($product["price"], 2) ?> €
                <?php endif; ?>
            </p>
        </div>
    <?php endforeach; ?>

</body>

</html>