<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact - CopUrPhone</title>
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
                    form {
                        max-width: 500px;
                        margin: 50px auto;
                    }
                    form input[type="text"], form input[type="email"], form textarea {
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
        </style>

<body>
<main>
<h1>Formulaire de contact</h1>

<?php
if (isset($_SESSION["message"])) {
    echo "<p>" . $_SESSION["message"] . "</p>";
    unset($_SESSION["message"]);
}
?>

<form action="index.php?action=contact" method="post">
    Nom: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Message:<br>
    <textarea name="message" rows="5" required></textarea><br>
    <input type="submit" value="Envoyer">
</form>
</main>
</body>
</html>

<?php
include 'footer.php';
?>
