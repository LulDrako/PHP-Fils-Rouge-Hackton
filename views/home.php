<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur la page d'accueil</h1>
    <?php 
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    echo '<a href="?action=listProducts">Liste des produits</a>';
} else {
    echo '<a href="?action=login">Se connecter</a>';
}
?>
</body>
</html>
