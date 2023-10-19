<?php
include 'header.php';
include './config/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products - CopUrIPhone</title>
    <style>
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: center;
        }

        .product-item {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 16px;
            border-radius: 8px;
            max-width: 300px;
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .search-bar {
            margin-bottom: 20px;
            text-align: center;
        }
        #cart {
            margin-top: 20px;
            border-top: 1px solid #e0e0e0;
            padding-top: 20px;
            text-align: center;
        }
        #cart button {
            background-color: #4CAF50; /* couleur de fond verte */
            border: none;
            color: white; /* couleur de texte blanche */
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px; /* coins arrondis */
            transition: background-color 0.3s; /* effet de transition lors du survol */
        }

        #cart button:hover {
            background-color: #45a049; /* couleur de fond un peu plus foncée lors du survol */
        }

        #cart h2 {
            margin-top: 20px;
        }

    </style>
</head>


<body>
    
    <main>
<div class="search-bar">
        <form action="index.php?action=getProducts" method="get">
        <input type="text" name="search" placeholder="Recherchez un produit...">
        <button type="submit">Chercher</button>
    </form>
</div>

<div class="product-list">
    <?php 
    if ($products) {
        foreach($products as $product) {
            echo "<div class='product-item'>";
            echo "<img src='" . htmlspecialchars($product["image_url"]) . "' alt='" . htmlspecialchars($product["product_name"]) . "'>";
            echo "<h2>" . htmlspecialchars($product["product_name"]) . "</h2>";
            echo "<p>" . htmlspecialchars($product["description"]) . "</p>";
            echo "<p>Prix: " . htmlspecialchars($product["price"]) . "€</p>";
            echo "<p>Stock: " . htmlspecialchars($product["stock"]) . "</p>";
            echo "<p>Catégorie: " . htmlspecialchars($product["category"]) . "</p>";
            echo "<button onclick='addToCart(\"" . addslashes($product["product_name"]) . "\", " . $product["price"] . ")'>Ajouter au panier</button>";
            echo "</div>";
        }
    } else {
        echo "Aucun produit trouvé.";
    }
    ?>
</div>
<div id="cart">
    
</div>

<script>
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(productName, productPrice) {
    let productInCart = cart.find(p => p.name === productName);
    if (productInCart) {
        productInCart.quantity++;
    } else {
        const product = {
            name: productName,
            price: productPrice,
            quantity: 1
        };
        cart.push(product);
    }
    saveCart();
    displayCart();
}

function removeFromCart(index) {
    if (cart[index].quantity > 1) {
        cart[index].quantity--;
    } else {
        cart.splice(index, 1);
    }
    saveCart();
    displayCart();
}

function displayCart() {
    const cartDiv = document.getElementById("cart");
    let cartHTML = "";

    if(cart.length > 0) {
        cartHTML += "<h2>PANIER</h2>";
        cart.forEach((product, index) => {
            cartHTML += `<p>${product.name} x ${product.quantity} - ${product.price * product.quantity}€ <button onclick="removeFromCart(${index})">Retirer</button></p>`;
        });
        let total = calculateTotal();
        cartHTML += `<h2>Total : ${total}€</h2>`;
        cartHTML += `<button onclick="checkout()">Valider le panier</button>`;
    }
    cartDiv.innerHTML = cartHTML;
}

function calculateTotal() {
    let total = 0;
    for(let product of cart) {
        total += product.price * product.quantity;
    }
    return total;
}

function checkout() {
    // Ici, vous pouvez ajouter la logique pour traiter la validation du panier.
    // Par exemple, envoyer les données du panier à un serveur pour traitement, ou rediriger vers une page de paiement.

    alert("Merci pour votre achat!");

    // Vider le panier
    cart = [];
    saveCart();
    displayCart();
}

function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
}

function loadCart() {
    cart = JSON.parse(localStorage.getItem("cart")) || [];
    displayCart();
}

window.onload = loadCart;
</script>

</main>


</body>
</html>

<?php
include 'footer.php';
?>
