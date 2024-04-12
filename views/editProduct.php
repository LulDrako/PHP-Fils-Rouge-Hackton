<?php
include 'header.php';
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
}
?>

<form action="index.php?action=editProduct" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
    
    <label for="productName">Nom du Produit:</label>
    <input type="text" id="productName" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" required><br><br>
    
    <label for="productDescription">Description:</label>
    <textarea id="productDescription" name="description"><?php echo htmlspecialchars($product['description']); ?></textarea><br><br>
    
    <label for="productPrice">Prix:</label>
    <input type="text" id="productPrice" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required><br><br>
    
    <label for="productStock">Stock:</label>
    <input type="text" id="productStock" name="stock" value="<?php echo htmlspecialchars($product['stock']); ?>" required><br><br>
    
    <label for="productCategory">Catégorie:</label>
    <input type="text" id="productCategory" name="category" value="<?php echo htmlspecialchars($product['category']); ?>" required><br><br>
    
    <label for="productImageUrl">URL de l'image:</label>
    <input type="text" id="productImageUrl" name="image_url" value="<?php echo htmlspecialchars($product['image_url']); ?>" required><br><br>
    
    <input type="submit" value="Mettre à jour le produit">
</form>

<?php include 'footer.php'; ?>
