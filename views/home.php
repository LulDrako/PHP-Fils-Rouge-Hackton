<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - CopUrIPhone</title>
        <style>
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
            }
            main {
                flex: 1 0 auto; 
            }
            h1 {
                text-align: center;
                margin-top: 50px;
            }
            .center-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 500px;
                gap: 100px;
            }
            a {
                display: inline-block;
                text-align: center;
                margin: 10px;
                padding: 10px 20px;
                border: 1px solid #333;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <main>
            <h1>Bienvenue</h1>
            <div class="center-container">
                <?php 
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    echo '<a href="?action=listProducts">Liste des produits</a>';
                } else {
                    echo '<a href="?action=login">Se connecter</a>';
                    echo '<a href="?action=listProducts">Liste des produits</a>';
                    
                }
                ?>
            </div>
        </main>
    </body>
</html>


<?php
include 'footer.php';
?>