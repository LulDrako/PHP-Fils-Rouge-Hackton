<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction - MyFigurines</title>
    <link rel="icon" href="src/favicon.ico">
    <style>
         html, body {
                margin: 0;
                padding: 0;
                height: 100%;
            }
            main {
                flex: 1 0 auto; 
            }
            main h2 {
                text-align: center;
                margin-bottom: 40px;
            }
            .payment-form {
                max-width: 400px;
                margin: 0 auto;
                margin-top: 5%;
                padding: 50px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            .payment-form input[type="text"], 
            .payment-form input[type="number"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #e0e0e0;
                border-radius: 4px;
            }

            .payment-form input[name="expiry-month"], 
            .payment-form input[name="expiry-year"] {
                width: 15%;
                display: inline-block;
            }

            .payment-form button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: block;
                font-size: 16px;
                margin: 20px 0;
                cursor: pointer;
                border-radius: 8px;
                transition: background-color 0.3s;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            .payment-form button:hover {
                background-color: #45a049;
            }
    </style>
</head>
<body>

<main>
    <div class="payment-form">
        <h2>Informations de Paiement</h2>

        <form action="index.php?action=confirmPayment" method="post">
            <input type="text" name="cardholder" placeholder="Nom du titulaire de la carte" required>
            <input type="number" name="cardnumber" placeholder="Numéro de la carte" required>
            <input type="number" name="expiry-month" placeholder="(MM)" maxlength="2" required style="margin-right: 2%;">
            <input type="number" name="expiry-year" placeholder="(AAAA)" maxlength="4" required>
            <input type="number" name="cvv" placeholder="CVV" maxlength="3" required>
            <button type="submit">Payer</button>
        </form>

    </div>
</main>

</body>
</html>

<?php
include 'footer.php'
?>