<?php

$name = $_GET['name'];       // nom du boug
$age = $_GET['age']; // age du boug

echo 'Bonjour '.htmlspecialchars($name).' !'; // Affiche "Bonjour [nom] !", en échappant les caractères spéciaux pour éviter les failles XSS
echo '<br>Votre age est de '.htmlspecialchars($age).' ans.'; // Affiche "Votre age est de [age] ans.", en échappant les caractères spéciaux pour éviter les failles XSS
