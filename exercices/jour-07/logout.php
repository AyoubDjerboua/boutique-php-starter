<?php
session_start();

session_destroy();           // Tout détruire

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><strong>SESSION DETRUITE</strong></p>
    <a href="login.php">Retour à la page login</a>
</body>

</html>