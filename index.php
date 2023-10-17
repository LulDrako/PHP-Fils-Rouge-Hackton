<?php
session_start();
$conn = new mysqli('localhost', 'username', 'password', 'database');

$query = "SELECT * FROM eproducts WHERE category = 'iPhone' OR category = 'Apple'";
$result = $conn->query($query);
$products = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <?php if(isset($_SESSION['user'])): ?>
            Bienvenue, <?= $_SESSION['user']['name'] ?>
            <a href="logout.php">Déconnexion</a>
        <?php else: ?>
            <a href="login.php">Connexion</a>
            <a href="register.php">Inscription</a>
        <?php endif; ?>
    </div>

    <div class="content">
        <?php foreach($products as $product): ?>
            <div class="product">
                <img src="<?= $product['image_url'] ?>" alt="<?= $product['name'] ?>">
                <h2><?= $product['name'] ?></h2>
                <p><?= $product['description'] ?></p>
                <p>Prix: <?= $product['price'] ?>€</p>
                <a href="add_to_cart.php?id=<?= $product['id'] ?>">Ajouter au panier</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
