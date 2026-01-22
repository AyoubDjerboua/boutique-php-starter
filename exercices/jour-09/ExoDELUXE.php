<?php

require_once 'Product.php'; // lie à product.php, contenant ma fonction/(ma méthode pour les intimes)
require_once 'Category.php';
require_once 'CartItem.php';
require_once 'Cart.php';
require_once 'User.php';
require_once 'Address.php';

// EXO 1

// CATEGORIES
$clothes = new Category(101, 'Vêtements'); // catégorie vêtements, avec son ID de catégorie et le nom de la catégorie
$chaussures = new Category(547, 'Chaussures'); // catégorie chaussures, avec son ID de catégorie et le nom de la catégorie
$chapeaux = new Category(12, 'Chapeaux'); // catégorie chapeaux, avec son ID de catégorie et le nom de la catégorie

// PRODUITS
$tshirt = new Product(1, 'T-shirt Supreme', 29.99, $clothes); // le new produit de class Product, son nom, son prix et sa catégorie
$bonnet = new Product(2, 'Bonnet Lacoste', 39.99, $chapeaux); // pareil
$débardeur = new Product(3, 'Débardeur', 9.99, $clothes); // la même
$airMax = new Product(4, 'Nike airMax', 119.99, $chaussures); // allez
$airJordan = new Product(5, 'Air Jordan 1', 169.99, $chaussures); // bon abuse

// AFFICHAGE
echo 'Produit : '.$tshirt->getName().'<br> Catégorie : '.$tshirt->getCategory()->getName().'<br><br>'; // echo le nom de la catégorie du tshirt, donc "Vêtements"
echo 'Produit : '.$bonnet->getName().'<br> Catégorie : '.$bonnet->getCategory()->getName().'<br><br>';
echo 'Produit : '.$débardeur->getName().'<br> Catégorie : '.$débardeur->getCategory()->getName().'<br><br>';
echo 'Produit : '.$airMax->getName().'<br> Catégorie : '.$airMax->getCategory()->getName().'<br><br>';
echo 'Produit : '.$airJordan->getName().'<br> Catégorie : '.$airJordan->getCategory()->getName().'<br><br>';

// -----------------------------------------------------------------------------------------------------------------------------------------------------//

// EXO 2

$objet = new CartItem($airMax);  // quantité par défaut = 1

// AFFICHAGE INITIAL
echo 'CART : '.$objet->getProduct()->getName().'<br>'; // chope le nom du produit
echo 'Quantité initiale : '.$objet->getQuantity().'<br>'; // chope la quantité initiale
echo 'Total : '.$objet->getTotal().'€ <br>';

echo '<br><hr><hr><hr><br>';

// SET QUANTITY
echo 'SET QUANTITY <br>';
$objet->setQuantity(200); // quantité fixée à 200
echo 'Quantité fixée à '.$objet->getQuantity().'<br>'; // affichage du stock
echo 'Prix total : '.number_format($objet->getTotal(), 2, ',', ' ').'€ <br>'; // affichage du prix du stock total

echo '<br><hr><br>';

// AFFICHAGE INCREMENTATION (+1 en gros)
echo 'INCREMENTATION <br>';
$objet->increment(); // +1
echo 'Produit incrémenté. Nouveau stock : '.$objet->getQuantity().'<br>'; // affichage du stock
echo 'Nouveau prix total : '.number_format($objet->getTotal(), 2, ',', ' ').'€ <br>'; // affichage du prix du stock total

echo '<br><hr><br>';

// AFFICHAGE DECREMENTATION (-1 en gros)
echo 'DECREMENTATION <br>';
$objet->decrement();
echo 'Produit décrémenté. Nouveau stock : '.$objet->getQuantity().'<br>'; // affichage du stock
echo 'Nouveau prix total : '.number_format($objet->getTotal(), 2, ',', ' ').'€ <br>'; // affichage du prix du stock total

echo '<br><hr><br>';

// AFFICHAGE TOTAL
echo 'AFFICHAGE PRIX TOTAL <br>';
echo 'Total : '.number_format($objet->getTotal(), 2, ',', ' ').'€ <br>';

echo '<br><hr><hr><hr><br>';

// -----------------------------------------------------------------------------------------------------------------------------------------------------//

// EXO 3

$cart = new Cart;

// AJOUT DANS LE PANIER
$cart->addProduct($tshirt, 652);
$cart->addProduct($bonnet, 4);
$cart->addProduct($airJordan, 165);

// AFFICHAGE DU PANIER
echo '<h2>Contenu du panier</h2>';

foreach ($cart->getItems() as $item) {
    echo 'Produit : '.$item->getProduct()->getName().'<br>';
    echo 'Catégorie : '.$item->getProduct()->getCategory()->getName().'<br>';
    echo 'Quantité : '.$item->getQuantity().'<br>';
    echo 'Total : '.number_format($item->getTotal(), 2, ',', ' ').'€ <br><br>';
}
echo 'Total général du panier : '.number_format($cart->getTotal(), 2, ',', ' ').' €<br>';
echo 'Nombre de produits : '.$cart->count();

echo '<br><hr><br>';

// UPDATE DU PANIER
echo '<h2>UPDATE</H2>';

$cart->update($tshirt->getId(), 5); // passe le T-shirt à 5 exemplaires

foreach ($cart->getItems() as $item) {
    echo $item->getProduct()->getName().' → '.$item->getQuantity().' pcs<br>';
}

echo 'Nouveau total : '.number_format($cart->getTotal(), 2, ',', ' ').' €<br>';
echo '<hr>';
