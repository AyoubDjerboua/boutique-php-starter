<?php

require_once "Product.php"; //lie à product.php, contenant ma fonction/(ma méthode pour les intimes)
require_once "Category.php";
require_once "CartItem.php";
require_once "Cart.php";
require_once "User.php";
require_once "Address.php";

//EXO 1

//CATEGORIES
$clothes = new Category(101, "Vêtements"); //catégorie vêtements, avec son ID de catégorie et le nom de la catégorie
$chaussures = new Category(547, "Chaussures"); //catégorie chaussures, avec son ID de catégorie et le nom de la catégorie
$chapeaux = new Category(12, "Chapeaux"); //catégorie chapeaux, avec son ID de catégorie et le nom de la catégorie

//PRODUITS
$tshirt = new Product("T-shirt Supreme", 29.99, $clothes); //le produit, son nom, son prix et sa catégorie
$bonnet = new Product("Bonnet Lacoste", 39.99, $chapeaux); //pareil
$débardeur = new Product("Débardeur", 9.99, $clothes); //la même
$AirMax = new Product("Nike AirMax", 119.99, $chaussures); //allez
$AirJordan = new Product("Air Jordan 1", 169.99, $chaussures); //bon abuse

//AFFICHAGE
echo "Produit : " . $tshirt->getName() . ". <br> Catégorie : " . $tshirt->getCategory()->getName() . "<br><br>"; //echo le nom de la catégorie du tshirt, donc "Vêtements"
echo "Produit : " . $bonnet->getName() . ". <br> Catégorie : " . $bonnet->getCategory()->getName() . "<br><br>";
echo "Produit : " . $débardeur->getName() . ". <br> Catégorie : " . $débardeur->getCategory()->getName() . "<br><br>";
echo "Produit : " . $AirMax->getName() . ". <br> Catégorie : " . $AirMax->getCategory()->getName() . "<br><br>";
echo "Produit : " . $AirJordan->getName() . ". <br> Catégorie : " . $AirJordan->getCategory()->getName() . "<br><br>";

//-----------------------------------------------------------------------------------------------------------------------------------------------------//

//EXO 2

$item = new CartItem($AirMax);  // quantité par défaut = 1

//AFFICHAGE INITIAL
echo "CART : " . $item->getProduct()->getName() . "<br>"; //chope le nom du produit
echo "Quantité initiale : " . $item->getQuantity() . "<br>"; //chope la quantité initiale
echo "Total : " . $item->getTotal() . "€ <br>";

echo "<br><hr><hr><hr><br>";

//SET QUANTITY
echo "SET QUANTITY <br>";
$item->setQuantity(200); //quantité fixée à 200
echo "Quantité fixée à " . $item->getQuantity() . "<br>"; //affichage du stock
echo "Prix total : " . number_format($item->getTotal(), 2, ',', ' ') . "€ <br>"; //affichage du prix du stock total

echo "<br><hr><br>";

//AFFICHAGE INCREMENTATION (+1 en gros)
echo "INCREMENTATION <br>";
$item->increment(); //+1
echo "Produit incrémenté. Nouveau stock : " . $item->getQuantity() . "<br>"; //affichage du stock
echo "Nouveau prix total : " . number_format($item->getTotal(), 2, ',', ' ') . "€ <br>"; //affichage du prix du stock total

echo "<br><hr><br>";

//AFFICHAGE DECREMENTATION (-1 en gros)
echo "DECREMENTATION <br>";
$item->decrement();
echo "Produit décrémenté. Nouveau stock : " . $item->getQuantity() . "<br>"; //affichage du stock
echo "Nouveau prix total : " . number_format($item->getTotal(), 2, ',', ' ') . "€ <br>"; //affichage du prix du stock total

echo "<br><hr><br>";

//AFFICHAGE TOTAL
echo "AFFICHAGE PRIX TOTAL <br>";
echo "Total : " . number_format($item->getTotal(), 2, ',', ' ') . "€ <br>";

echo "<br><hr><hr><hr><br>";

//-----------------------------------------------------------------------------------------------------------------------------------------------------//

//EXO 3