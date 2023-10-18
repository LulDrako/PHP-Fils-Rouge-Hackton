<?php

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
        echo "<span>Bonjour, " . $_SESSION['username'] . "</span>";
        echo '<a href="/logout">Déconnexion</a>';
    } else {
        echo '<a href="/login">Connexion</a>';
    }
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Titre</title>
    <!-- Vous pouvez ajouter d'autres métadonnées, styles, ou scripts ici -->
    <link rel="stylesheet" href="path/to/your/stylesheet.css">
</head>
<body>

<nav class="navbar">
    <a href="/home">Accueil</a>
    <a href="/products">Produits</a>
    <a href="/contact">Contact</a>
    <!-- Ajoutez d'autres liens de navigation ici -->
</nav>
