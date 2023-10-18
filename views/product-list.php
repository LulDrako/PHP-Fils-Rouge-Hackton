<?php
include 'header.php';
include 'db.php';
?>

<div class="product-list">
    <?php 
    // Sélectionner les produits
    $sql = "SELECT id, product_name, description, price, stock, image_url, date_added, category FROM products";
    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll();

    if ($products) {
        // affichage des produits
        foreach($products as $product) {
            echo "<div class='product-item'>";
            echo "<h2>" . htmlspecialchars($product["product_name"]) . "</h2>";
            echo "<p>Description: " . htmlspecialchars($product["description"]) . "</p>";
            echo "<p>Prix: " . htmlspecialchars($product["price"]) . "€</p>";
            echo "<p>Stock: " . htmlspecialchars($product["stock"]) . "</p>";
            echo "<p>Date ajouté: " . htmlspecialchars($product["date_added"]) . "</p>";
            echo "<p>Catégorie: " . htmlspecialchars($product["category"]) . "</p>";
            echo "<img src='" . htmlspecialchars($product["image_url"]) . "' alt='" . htmlspecialchars($product["product_name"]) . "'>";
            echo "</div>";
        }
    } else {
        echo "Aucun produit trouvé.";
    }
    ?>
</div>

<?php
include 'footer.php';
?>
