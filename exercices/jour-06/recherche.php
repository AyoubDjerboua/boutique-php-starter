<?php

$products = [
    ['name' => 'T-shirt rouge'],
    ['name' => 'Jean bleu'],
    ['name' => 'Pull noir'],
    ['name' => 'Casquette verte'],
    ['name' => 'Chaussures blanches'],
    ['name' => 'Sac à dos'],
    ['name' => 'Lunettes de soleil'],
    ['name' => 'Montre'],
    ['name' => 'Ceinture en cuir'],
    ['name' => 'Veste en jean'],
];

$search = $_GET['search'] ?? ''; // valeur par défaut null si rien envoyé

$results = []; // tableau vide en attente du stockage des infos

if ($search !== []) {
    foreach ($products as $product) {
        // Recherche insensible à la casse
        if (stripos($product['name'], $search) !== false) {// stripos : cherche une chaîne de caractère dans une autre chaîne de caractère, ici on cherche $search dans le nom du produit. Renvoie la position de la première occurrence trouvée ou false si non trouvé. !== false pour vérifier que ce n'est pas false (position 0 est considérée comme false en php)
            // Le produit correspond
            $results[] = $product;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Recherche de produits</h1>

    <form method="GET" action="">
        <input type="text" name="search" placeholder="Rechercher un produit" value="<?= htmlspecialchars($search) ?>">
        <!--
        type = text : pour avoir un champ texte. 
        name = search : récupère ce que l'utilisateur a tapé
        placeholder = ce qui sera noté en arrière fond du champ de texte
        value = ce que l'utilisateur a déjà saisi, htmlspecialchars pour éviter les pranks
         -->
        <button type="submit">Rechercher</button>

        <h2>Résultats de la recherche</h2>
        <ul>
            <?php
            if ($search === '') {
                echo 'Entrez un terme pour rechercher';
            } elseif (! empty($results)) {
                foreach ($results as $product) {
                    echo '<li>'.htmlspecialchars($product['name']).'</li>';
                }
            } else {
                echo 'Aucun résultat';
            }
?>
        </ul>

</body>

</html>