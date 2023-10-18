<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Page d'inscription</h1>
    <form action="index.php?action=registerAttempt" method="post">
        Nom d'utilisateur: <input type="text" name="username"><br>
        Mot de passe: <input type="password" name="password"><br>
        <input type="submit" value="S'inscrire">
    </form>
    <a href="index.php?action=login">Déjà inscrit ? Se connecter</a>
</body>
</html>