<?php

$priceHT = 250; // prix de base pré-taxe
$vatRate = 25; // taxe valeur
$discountRate = 25; // valeur discount

function calculateVAT($priceExcludingTax, $rate)
{
    return $priceExcludingTax * ($rate / 100); // on stocke la valeur du VAT du prix (le résultat)
}

function calculateIncludingTax($priceExcludingTax, $rate)
{
    return $priceExcludingTax + calculateVAT($priceExcludingTax, $rate); // prixDeBase + Fonction calcule taxe du PrixDeBase inséré en paramètre de fonction
}

function calculateDiscount($price, $percentage)
{
    return $price - ($price * ($percentage / 100)); // 250 - (250 * (25 / 100)) = 250 - (250 * 0.25) = 250 - 62.5 = 187.5
}

echo "Prix de base : $priceHT <br>";

$VAT = calculateVAT($priceHT, $vatRate);
echo 'Fonction 1 : Valeur TVA = '.$VAT.'<br>';

$priceTTC = calculateIncludingTax($priceHT, $vatRate);
echo 'Fonction 2 : Prix TTC = '.$priceTTC.'<br>';

echo "Valeur de la remise : $discountRate <br>";

$priceDiscount = calculateDiscount($priceTTC, $discountRate);
echo 'Fonction 3 : Discount = '.$priceDiscount.'<br>';
