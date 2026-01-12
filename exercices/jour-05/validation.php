<?php

function isInStock($stock)
{
    return $stock > 0; //return true si stock > 0
}

function isOnSale($discount)
{
    return $discount > 0; //return true si discount > 0
}

function isNew($dateAdded)
{
    $daysSince = (time() - strtotime($dateAdded)) / 86400;
    return $daysSince < 30; //return true si ajout depuis -30 jours
}

function canOrder($stock, $quantity)
{
    return $stock >= $quantity; //return true si stock supérieur ou égal a la quantité disponible
}

echo isInStock(10) ? "In stock" : "Out of stock"; // Affiche "In stock" IF TRUE, et "out of stock" IF FALSE
echo isOnSale(10) ? "On sale" : "Not on sale"; // Affiche "On sale"
echo isNew("2026-01-01") ? "New" : "Not new"; // affiche New si date entrée ne dépasse pas de 30 jours la date actuelle
echo canOrder(5, 3) ? "Article disponible" : "Article indisponible";
