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

<div class="product-detail">
    <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" style="width: 100%; max-width: 600px; height: auto;">
    <h2><?php echo htmlspecialchars($product['product_name']); ?></h2>
    <p><?php echo htmlspecialchars($product['description']); ?></p>
    <p>Prix: <?php echo htmlspecialchars($product['price']); ?>€</p>
    <p>Stock: <?php echo htmlspecialchars($product['stock']); ?></p>
    <p>Catégorie: <?php echo htmlspecialchars($product['category']); ?></p>
    
    <a href="/index.php?action=editProduct&id=<?php echo $product['id']; ?>"><button>Modifier</button></a>
    <button onclick="deleteProduct(<?php echo $product['id']; ?>)">Supprimer</button>
</div>

<script>
function deleteProduct(productId) {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')) {
        window.location.href = `index.php?action=deleteProduct&id=${productId}`;
    }
}
</script>

<?php include 'footer.php'; ?>
