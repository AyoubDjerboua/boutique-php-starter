<?php

$priceExcludingTax = 100;
$TVA = 0.20;
$priceTTC = $priceExcludingTax * (1 + $TVA);
$quantity = 3;
$total = 0.0;

echo 'Montant TVA : 20%';
echo 'Montant TTC : '.$priceTTC;
echo 'Achat total : '.$total = (($quantity * $priceExcludingTax) * (1 + $TVA));
