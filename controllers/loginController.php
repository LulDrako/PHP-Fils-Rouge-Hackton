<?php
require_once './config/db.php'; // Assurez-vous que le chemin est correct.

function loginView() {
    include './views/login.php';
}

function authenticate($username, $password) {
    global $pdo;

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];
        return true;
    }
    return false;
}

function loginAttempt() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (authenticate($username, $password)) {
            header('Location: index.php?action=home'); // ou 'index.php?action=home' en fonction de votre configuration
            exit;
        } else {
            $errorMessage = "Identifiants invalides";
            include './views/login.php';
        }
    }
}

?>


