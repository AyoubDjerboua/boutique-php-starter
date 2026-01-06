<?php

$name = "Carton";
$description = "Carton de haute qualité";
$priceHT = 246.5654865;
$TVA = 20;
$priceTTC = $priceHT * (1 + $TVA/100);
$stock = 12;


echo "Prix TTC : " . number_format($priceTTC, 2, ', ');//en gros, formatte $price à 2 chiffres après la virgule, séparés par ',' une virgule