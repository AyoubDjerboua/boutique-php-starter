<?php

//tableau 5 produits
$products = [
    ["name" => "Paquito Orange", "price" => 4.99, "stock" => 8654],
    ["name" => "Oasis Pomme", "price" => 15.99, "stock" => 24],
    ["name" => "Fuze Tea Citron", "price" => 29.99, "stock" => 45],
    ["name" => "Sans Plomb 95", "price" => 349.99, "stock" => 1],
    ["name" => "Nicolas Maduro", "price" => 3500.0, "stock" => 2]
];

echo "Nom du troisième produit : " . $products[2]["name"] . "<br>";
echo "Prix du premier produit : " . $products[0]["price"] . "<br>";
echo "Stock du dernier produit : " . $products[4]["stock"] . "<br>";

//modif stock produit 2
$products[1]["stock"] +=10;
echo "Nouveau stock du 2ème produit : " . $products[1]["stock"];

//var_dump($products);
