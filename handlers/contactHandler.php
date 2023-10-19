<?php
function contact() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitizeInput($_POST["name"]);
        $email = sanitizeInput($_POST["email"]);
        $message = sanitizeInput($_POST["message"]);

        $_SESSION["message"] = "Votre message a été envoyé avec succès!";
        header("Location: index.php?action=contact");
        exit();
    } else {
        displayContactForm();
    }
}

function displayContactForm() {
    require './views/contact.php';
}

function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
