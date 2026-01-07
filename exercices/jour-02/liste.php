<?php
//tableau groceries 5 articles
$groceries = ["Pomme", "Banane", "Orange", "Kiwi", "AK-47"];

//affichage premier article
echo "Premier article : " . $groceries[0] . "<br>"; // Pomme

//affichage dernier article
$lastIndex = count($groceries)-1;
echo "Dernier article : " . $groceries[$lastIndex] . "<br>";

//affichage nbr total articles
echo "Nombre total d'articles : " . count($groceries);

//4. Ajouter 2 articles à la fin
$groceries[] = "Fromage";
$groceries[] = "Pantalon";
//OU
//array_push($groceries, "Fromage", "Pantalon");

//5. Supp 3ème article
unset ($groceries[2]); //oui c'est le troisième

//6
echo "<br>";
var_dump ($groceries);