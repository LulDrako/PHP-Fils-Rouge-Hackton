<!DOCTYPE html>
<html>
<head>
    <title>Confirmation - CopUrPhone</title>
    <style>
         html, body {
            margin: 0;
            padding: 0;
        }
        main {
            flex: 1 0 auto;
            margin-top : 15%;
        }
        .confirmation {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>


<body>
<main>
<div class="confirmation">
        <h2>Merci pour votre achat!</h2>
        <p>Votre paiement a été traité avec succès. Voici un récapitulatif de vos achats:</p>
        
        <ul id="productList">
        </ul>

        <p>Nous vous enverrons un e-mail de confirmation sous peu. Si vous avez des questions, n'hésitez pas à contacter notre service client.</p>
        <a href="index.php" id="backToHome">Retour à la l'accueil</a>
    </div>
</main>

<script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const productList = document.getElementById('productList');

    if (cart.length > 0) {
        cart.forEach(product => {
            const li = document.createElement('li');
            li.textContent = `${product.name} x ${product.quantity}`;
            productList.appendChild(li);
        });
    } else {
        const li = document.createElement('li');
        li.textContent = 'Pas de produits dans le panier';
        productList.appendChild(li);
    }
    
    document.getElementById('backToHome').addEventListener('click', function(event) {
    
    // Empêche le lien de fonctionner immédiatement
    event.preventDefault();

    // Vide le panier du localStorage
    localStorage.removeItem('cart');

    // Redirige l'utilisateur vers la boutique
    window.location.href = 'index.php';
});

</script>

</body>
</html>