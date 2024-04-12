<?php
$host = 'localhost';
$db   = 'figurine';
$username = 'postgres';
$password = '141221';

$dsn = "pgsql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    /*echo 'Connexion reussie';*/
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}