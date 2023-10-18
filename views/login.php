<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="path/to/your/styles.css"> <!-- Ajoutez cette ligne -->
</head>
<body>
    <h1>Page de connexion</h1>
    <?php 
if (isset($_SESSION['errorMessage'])) {
    echo "<p style='color:red;'>".$_SESSION['errorMessage']."</p>";
    unset($_SESSION['errorMessage']);
}
    if (isset($successMessage)) echo "<p style='color:green;'>$successMessage</p>";
    ?>
    
    <form action="index.php?action=loginAttempt" method="post">
    Nom d'utilisateur: <input type="text" name="username"><br>
    Mot de passe: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Se connecter">
</form>

<form action="index.php?action=login" method="post">
</form>
<a href="index.php?action=register">Pas de compte ? S'inscrire</a>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>