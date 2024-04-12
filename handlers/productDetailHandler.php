<?php
function productDetail() {
    include 'config/db.php';

    $productId = $_GET['id'] ?? null;

    if (!$productId) {
        echo "Aucun ID de produit fourni.";
        exit;
    }

    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$productId]);
    $product = $stmt->fetch();

    if (!$product) {
        echo "Produit non trouvé.";
        exit;
    } else {
        include './views/productDetail.php';
    }
}

function deleteProduct() {
    include 'config/db.php';
    $productId = $_GET['id'] ?? null;

    if (!$productId) {
        echo "Aucun ID de produit fourni.";
        exit;
    }

    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$productId]);

    header("Location: index.php?action=listProducts");
    exit;
}

function editProductForm($productId) {
    include 'config/db.php';  // Assurez-vous que ce fichier contient la configuration de votre base de données

    if (!$productId) {
        echo "Aucun ID de produit fourni.";
        exit;
    }

    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$productId]);
    $product = $stmt->fetch();

    if (!$product) {
        echo "Produit non trouvé.";
        exit;
    } else {
        include './views/editProduct.php';  // Assurez-vous que ce fichier existe et contient le formulaire de modification
    }
}

function editProduct($productId, $productData) {
    global $pdo;
        $sql = "UPDATE products SET product_name = ?, description = ?, price = ?, stock = ?, category = ?, image_url = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $productData['product_name'],
        $productData['description'],
        $productData['price'],
        $productData['stock'],
        $productData['category'],
        $productData['image_url'],
        $productId
    ]);
    
}

?>
