<?php

function displayBadge($text, $color)
{
    return '<span class="badge" style="background:'.$color.'; color:white; padding:4px 8px; border-radius:4px;">'
        .$text.
        '</span>';
}

function displayPrice($price, $discount = 0)
{
    if ($discount > 0) {
        $newPrice = $price - ($price * $discount / 100);

        return '<span style="text-decoration: line-through; color:gray;">'
            .number_format($price, 2).' €</span> '
            .'<strong style="color:red;">'
            .number_format($newPrice, 2).' €</strong>';
    }

    return '<strong>'.number_format($price, 2).' €</strong>';
}

function displayStock($quantity)
{
    if ($quantity > 10) {
        return '<span style="color:green;">En stock</span>';
    }

    if ($quantity > 0) {
        return '<span style="color:orange;">Stock limité</span>';
    }

    return '<span style="color:red;">Rupture de stock</span>';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 5 — Affichage</title>
</head>

<body>

    <h1>Produit 1</h1>
    <p><?= displayBadge('Nouveau', 'green') ?></p>
    <p>Prix : <?= displayPrice(59.99, 20) ?></p>
    <p>Stock : <?= displayStock(15) ?></p>

    <hr>

    <h1>Produit 2</h1>
    <p><?= displayBadge('Promo', 'red') ?></p>
    <p>Prix : <?= displayPrice(29.99) ?></p>
    <p>Stock : <?= displayStock(3) ?></p>

    <hr>

    <h1>Produit 3</h1>
    <p>Prix : <?= displayPrice(19.99) ?></p>
    <p>Stock : <?= displayStock(0) ?></p>

</body>

</html>