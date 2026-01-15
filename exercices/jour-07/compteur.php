<?php
session_start(); // TOUJOURS en première ligne

//$_SESSION["user"] = "Marie"; // Écrire
//echo $_SESSION["user"];      // Lire
//unset($_SESSION["user"]);    // Supprimer une clé
//session_destroy();           // Tout détruire

if (!isset($_SESSION["visits"])) //si la variable de session n'est pas définie OU si le GET reset retourne true
{
    $_SESSION["visits"] = 0;
}

if (isset($_GET["reset"])) {
    $_SESSION["visits"] = 0;
    header("Location: compteur.php"); //change l'URL, dit au navigateur, Go sur cette page (et retire le reset du coup)
    exit; //dit au PHP "STOP, n'execute plus rien après cette ligne
}

//sinon bah
$_SESSION["visits"]++;

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Compteur</title>
</head>

<body>
    <h1>Compteur de vitsitesiteiste</h1>

    <p>Vous avez visité cette page <?= $_SESSION["visits"] ?> fois</p>
    <a href="?reset=1">Réinitialiser le compteur</a>
</body>

</html>