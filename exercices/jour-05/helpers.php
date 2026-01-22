<?php

// helpers.php
function formatPrice($amount, $currency = '€')
{
    return number_format($amount, 2, ',', ' ').' '.$currency;
}

function isInStock($stock)
{
    return $stock > 0; // return true si stock > 0
}

function isOnSale($discount)
{
    return $discount > 0; // return true si discount > 0
}

function isNew($dateAdded)
{
    $daysSince = (time() - strtotime($dateAdded)) / 86400;

    return $daysSince < 30; // return true si ajout depuis -30 jours
}

function canOrder($stock, $quantity)
{
    return $stock >= $quantity; // return true si stock supérieur ou égal a la quantité disponible
}
