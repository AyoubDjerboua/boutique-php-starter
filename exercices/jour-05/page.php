<?php
// page.php
require_once "helpers.php"; //permet d'inclure le fichier helpers.php et d'utiliser ses fonctions une seule fois, s'il est déjà inclus, il ne l'inclut pas à nouveau.

$price = formatPrice(1234.5); // "1 234,50 €"

echo isInStock(10) ? "In stock" : "Out of stock"; // Affiche "In stock" IF TRUE, et "out of stock" IF FALSE
echo "<br>";
echo isOnSale(10) ? "On sale" : "Not on sale"; // Affiche "On sale"
echo "<br>";
echo isNew("2026-01-01") ? "New" : "Not new"; // affiche New si date entrée ne dépasse pas de 30 jours la date actuelle
echo "<br>";
echo canOrder(5, 3) ? "Article disponible" : "Article indisponible"; // affiche Article disponible si stock >= quantité demandée
echo "<br>";
