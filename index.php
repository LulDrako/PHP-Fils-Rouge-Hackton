<?php
session_start();

require './controllers/homeController.php';
require './controllers/loginController.php';
require './controllers/registerController.php';
require './controllers/productController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'home':
        home();
        break;
    case 'login':
        loginView();
        break;
    case 'register':
        registerView();
        break;
    case 'registerAttempt':
        registerAttempt();
        break;
    case 'loginAttempt':
        loginAttempt();
        break;
    case 'listProducts':
        listProducts();
        break;
    default:
        home();
}

?>


