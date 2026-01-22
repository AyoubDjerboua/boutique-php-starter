<?php
$name = 'Pommes';
$price = 149.99;
$stock = 3000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
</head>
<body>
    <h1>Boutique de <?php echo $name ?><h1>
        <p>Prix à l'unité : <?php echo $price?>€</p>
        <span><?= $stock > 0 ? 'En stock' : 'Rupture' ?></span> 
</body>
</html>