<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    echo "<span>Bonjour, " . $_SESSION['username'] . "</span>";
    echo '<a href="?action=logout">Déconnexion</a>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CopUrIPhone</title> <!-- Mettez à jour le titre ici -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        span {
            margin-right: 10px;
            text-align: center;
            display: block;
        }
        .site-title {
            padding: 15px 0;
            text-align: center;
            color: black;
            font-size: 24px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="site-title">
    CopUrIPhone
</div>

<nav class="navbar">
    <a href="/home">Accueil</a>
    <?php
    if (!isset($isAuthPage) || !$isAuthPage) {
        echo '<a href="?action=listProducts">Produits</a>';
    }
    ?>
    <a href="/contact">Contact</a>
</nav>
