<?php

$clothes = ['T-shirt', 'Jean', 'Pull'];
$accessories = ['Ceinture', 'Montre', 'Lunettes'];

// fusion tablo
$catalog = array_merge($clothes, $accessories);

// afffichaientqz=jhdqznh total produits
echo 'Nbr de produits : '.count($catalog);

// ajouter produit début tableau
array_unshift($catalog, 'Cartouche');

echo '<br>';
var_dump($catalog);
