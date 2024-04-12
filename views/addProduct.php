<?php include 'header.php'; ?>

<h2>Ajouter un Produit</h2>
<form action="index.php?action=addProduct" method="post" enctype="multipart/form-data">
    <label for="productName">Nom du Produit:</label>
    <input type="text" id="productName" name="product_name" required><br><br>

    <label for="productDescription">Description:</label>
    <textarea id="productDescription" name="description" required></textarea><br><br>

    <label for="productPrice">Prix:</label>
    <input type="number" id="productPrice" name="price" step="0.01" required><br><br>

    <label for="productStock">Stock:</label>
    <input type="number" id="productStock" name="stock" required><br><br>

    <label for="productImage">Image URL:</label>
    <input type="text" id="productImage" name="image_url"><br><br>
    
    <label for="productCategory">Catégorie:</label>
    <select id="productCategory" name="category" required>
        <option value="figurine">Anime</option>
        <option value="collectible">Autre</option>
    </select><br><br>

    <input type="submit" value="Ajouter Produit">
</form>

<?php include 'footer.php'; ?>
