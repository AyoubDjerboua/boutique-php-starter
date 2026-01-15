<?php
session_start();

if (isset($_SESSION["user"])) {
    $message = "Bonjour " . $_SESSION["user"];
} else {
    header("Location:login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOAAAARD</title>
</head>

<body>
    <p><?= $message ?></p>
    <a href="logout.php">Destruction de la session</a>
</body>

</html>