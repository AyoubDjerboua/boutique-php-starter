<?php

// tableau 3 pokemons avec leurs types, images et attaques, récupère les images sur github (https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png pour pikachu, 4 pour charmander, etc)
// pikachu
$pokemons = [
    [
        'name' => 'Pikachu',
        'type' => 'Electric',
        'image' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png',
        'attacks' => ['Thunder Shock', 'Quick Attack', 'Electro Ball'],
    ],
    [
        'name' => 'Charmander',
        'type' => 'Fire',
        'image' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/4.png',
        'attacks' => ['Ember', 'Scratch', 'Flamethrower'],
    ],
    [
        'name' => 'Squirtle',
        'type' => 'Water',
        'image' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/7.png',
        'attacks' => ['Water Gun', 'Tackle', 'Bubble'],
    ],
];
// affiche les pokemons dans des cards html avec bootstrap
foreach ($pokemons as $pokemon) {
    echo '<div class="card" style="width: 18rem; margin: 10px;">';
    echo '<img src="'.$pokemon['image'].'" class="card-img-top" alt="'.$pokemon['name'].'">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$pokemon['name'].'</h5>';
    echo '<p class="card-text">Type: '.$pokemon['type'].'</p>';
    echo '<p class="card-text">Attacks: '.implode(', ', $pokemon['attacks']).'</p>';
    echo '</div>';
    echo '</div>';
}
// fais moi un fond avec dégradé de bleu clair en haut vers blanc en bas
echo '<style>body { background: linear-gradient(to bottom, #add8e6, #ffffff); }</style>';

// ajoute un titre pokedex centré en haut de la page
echo '<h1 style="text-align: center; margin-top: 20px;">Pokedex</h1>';
// ajoute un conteneur bootstrap pour centrer les cards
echo '<div class="container" style="display: flex; justify-content: center; flex-wrap: wrap;">';
// ferme le conteneur bootstrap
echo '</div>';

// mets les attaques dans des cases comme dans les jeux pokemon
foreach ($pokemons as $pokemon) {
    echo '<div class="card" style="width: 18rem; margin: 10px;">';
    echo '<img src="'.$pokemon['image'].'" class="card-img-top" alt="'.$pokemon['name'].'">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$pokemon['name'].'</h5>';
    echo '<p class="card-text">Type: '.$pokemon['type'].'</p>';
    echo '<p class="card-text">Attacks:</p>';
    foreach ($pokemon['attacks'] as $attack) {
        echo '<span style="display: inline-block; border: 1px solid #000; padding: 5px; margin: 2px;">'.$attack.'</span>';
    }
    echo '</div>';
    echo '</div>';
}
// mets les cards dans une grille bootstrap
echo '<div class="container">';
echo '<div class="row">';
foreach ($pokemons as $pokemon) {
    echo '<div class="col-md-4">';
    echo '<div class="card" style="margin: 10px;">';
    echo '<img src="'.$pokemon['image'].'" class="card-img-top" alt="'.$pokemon['name'].'">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$pokemon['name'].'</h5>';
    echo '<p class="card-text">Type: '.$pokemon['type'].'</p>';
    echo '<p class="card-text">Attacks:</p>';
    foreach ($pokemon['attacks'] as $attack) {
        echo '<span style="display: inline-block; border: 1px solid #000; padding: 5px; margin: 2px;">'.$attack.'</span>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</div>';
echo '</div>';
