<?php
require_once './config/db.php'; // Assurez-vous que le chemin est correct.

function registerView() {
    include './views/register.php';
}

function register($username, $password) {
    global $pdo;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->execute([$username, $hashedPassword]);
}

function registerAttempt() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        register($username, $password);

        header('Location: index.php?action=home');
        exit;
    } else {
        header('Location: index.php?action=register');
        exit;
    }
}
?>
