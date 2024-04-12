<?php

function getProducts() {
    require './config/db.php';

    $search = isset($_GET['search']) ? trim($_GET['search']) : '';

    $sql = "SELECT id, product_name, description, price, stock, image_url, category 
            FROM products 
            WHERE LOWER(product_name) LIKE LOWER(:searchTerm)";
            
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':searchTerm', "%" . strtolower($search) . "%");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function listProducts() {
    $products = getProducts();
    require './views/product-list.php';
}

?>
