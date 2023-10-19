<?php
$isAuthPage = true;
include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register - CopUrIPhone</title>
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
            margin-top: 150px;
        }
        form {
            width: 300px;
            margin: 50px auto;
        }
        form input[type="text"], form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }

        a {
            display: block;
            text-align: center;
            margin: 10px 0;
        }
    </style>
    </head>
    
    <body>
    <main>
    <h1>Inscription</h1>

    <form action="index.php?action=registerAttempt" method="post">
        Nom d'utilisateur: <input type="text" name="username"><br>
        Mot de passe: <input type="password" name="password"><br>
        <input type="submit" value="S'inscrire">
    </form>

    <a href="index.php?action=login">Déjà inscrit ? Se connecter</a>
    </main>
    </body>
    </html>

<?php
include 'footer.php';
?>