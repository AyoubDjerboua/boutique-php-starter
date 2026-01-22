<?php

$firstNames = ['Paul', 'Eli', 'Miney', 'Alonzo', 'Amerigo'];

foreach ($firstNames as $index => $names) {
    $index += 1; // pour avoir le bon numéro du nombre
    echo "Nom $index : $names <br>";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($firstNames as $index => $names) { ?>
            <li>
                Nom <?= $index + 1 ?> : <?= $names ?>
            </li>
        <?php } ?>
    </ul>

</body>

</html>