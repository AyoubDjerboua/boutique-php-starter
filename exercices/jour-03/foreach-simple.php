<?php

$firstNames = ["Paul", "Eli", "Miney", "Alonzo", "Amerigo"];

foreach ($firstNames as $index => $names)
{
    $index += 1; //pour avoir le bon numéro du nombre
    echo "Nom $index : $names <br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= ""?>
    </ul>
</body>
</html>