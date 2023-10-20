<?php
$userGreeting = "";
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    $userGreeting = "<span>Bonjour, " . $_SESSION['username'] . "</span>" 
    . '<a href="?action=logout">Déconnexion</a>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        span{
            margin-top : 10px;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a, .navbar span {
            float: left;
            color: white;
            text-align: center;
            padding: 5px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .user-greeting {
            float: right;
        }
        .site-title {
            padding: 20px 0;
            text-align: center;
            color: black;
            font-size: 40px;
            margin-bottom: 5px;
        }
        .cart-link {
            background-color: #f39c12;
            border-radius: 4px;
            margin-right: 10px; 
            float: right; 
        }
        
        .cart-link:hover {
            background-color: #e67e22; 
        }
    </style>
</head>

<body>
<div class="site-title">
    CopUrPhone
</div>

<nav class="navbar">
    <a href="/home">Accueil</a>
    <?php
    if (!isset($isAuthPage) || !$isAuthPage) {
        echo '<a href="?action=listProducts">Produits</a>';
    }
    ?>

    <div class="user-greeting">
        <?= $userGreeting ?>
    </div>
</nav>
</body>
</html>
