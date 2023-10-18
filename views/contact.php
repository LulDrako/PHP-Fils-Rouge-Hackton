<?php
include 'header.php';
?>

<style>
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

<h1>Formulaire de contact</h1>

<form action="submit_contact.php" method="post">
    Nom: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Message:<br>
    <textarea name="message" rows="5" required></textarea><br>
    <input type="submit" value="Envoyer">
</form>

<?php
include 'footer.php';
?>
